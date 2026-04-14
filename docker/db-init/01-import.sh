#!/bin/bash
# Imports wp_dump.sql into the WordPress database.
# The dump was originally created against a different database name, so we
# rewrite the old name to the current $MYSQL_DATABASE value before importing.

set -e

DUMP_FILE="/tmp/wp_dump.sql"
OLD_DB_NAME="1225175_ffa14a1e761e74b03390846cddf80be3"

if [ ! -f "$DUMP_FILE" ]; then
    echo "[db-init] wp_dump.sql not found at $DUMP_FILE – skipping import."
    exit 0
fi

echo "[db-init] Importing WordPress database dump into '${MYSQL_DATABASE}'..."

# Replace the old database name in the dump, then pipe directly into mysql
sed "s/\`${OLD_DB_NAME}\`/\`${MYSQL_DATABASE}\`/g" "$DUMP_FILE" | \
    mysql \
        --user="${MYSQL_USER}" \
        --password="${MYSQL_PASSWORD}" \
        "${MYSQL_DATABASE}"

echo "[db-init] Import complete."
