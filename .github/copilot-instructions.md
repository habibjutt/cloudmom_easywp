# CloudMom WordPress Theme – Copilot Instructions

## Repository Structure

This repo contains two WordPress installations:

- **Root** (`/`) — Production WordPress core files with a partial theme override in `wp-content/themes/cloudmom/` (only `category.php`, `footer.php`, `parts/`).
- **`intrepid/`** — The full development WordPress installation. The complete **CloudMom custom theme** lives at `intrepid/wp-content/themes/cloudmom/`. **All theme development happens here.**

The `intrepid/` directory is the source of truth for the custom theme.

## Build Commands

All commands run from `intrepid/wp-content/themes/cloudmom/assets/`:

```bash
# Install dependencies (first time)
npm install

# Compile a single CSS file (fast, recommended)
npx sass css/source/global.scss css/build/global.css --no-source-map --quiet

# Compile all CSS at once
npx sass css/source/global.scss css/build/global.css --no-source-map --quiet && \
npx sass css/source/admin.scss css/build/admin.css --no-source-map --quiet && \
npx sass css/source/editor.scss css/build/editor.css --no-source-map --quiet

# Watch mode (development)
npx sass css/source/global.scss css/build/global.css --no-source-map --quiet --watch

# Production build (compressed)
npx sass css/source/global.scss css/build/global.css --style=compressed --no-source-map --quiet

# JS build (concat + uglify via Grunt)
npx grunt concat uglify

# Full Grunt build (legacy, CSS + JS)
npx grunt
```

**Never edit files in `css/build/` or `js/build/` directly** — they are regenerated on compile. Always edit SCSS in `css/source/` and JS in `js/source/`.

Cache busting is automatic via `filemtime()` in `inc/enqueue.php` — no manual version bumps needed.

## Architecture

### Theme Function Prefix
All custom PHP functions and classes use the `cs__` prefix (e.g., `cs__the_pagination()`, `cs__Walker_Nav_Menu`). The text domain constant is `CSWP` (defined as `'cswp'`).

### PHP File Organization
`functions.php` bootstraps the theme and delegates to:
- `inc/enqueue.php` — script/style registration (uses `filemtime()` for versioning)
- `inc/post-types.php` — custom post type and taxonomy registration
- `inc/acf-config.php` — ACF options page and settings
- `inc/gutenberg-blocks.php` — ACF-powered custom Gutenberg blocks
- `inc/admin.php` — admin customizations
- `inc/breadcrumbs.php` — breadcrumb logic

### Template Parts
Reusable template parts live in `parts/`:
- `parts/block/` — ACF Gutenberg block templates (`highlighted-content.php`, `product.php`)
- `parts/section/` — page section partials (intro, slider, categories overview, related posts, etc.)
- `parts/content/` — post content partials
- `parts/sidebar-baby.php`, `parts/sidebar-pregnancy.php`, `parts/sidebar-shop.php` — context-specific sidebars
- `parts/navigation-baby.php`, `parts/navigation-pregnancy.php` — content-specific nav

Full-page templates are in `templates/` (prefixed `tmpl-`, e.g., `tmpl-about.php`).

### SCSS Structure
```
css/source/
├── abstracts/        # _variables.scss, _mixins.scss, _functions.scss
├── base/             # reset, grid, typography
├── components/       # reusable component styles
├── layout/           # page-level layouts (_header.scss, _footer.scss, block/, content/, section/, templates/)
│   └── _woocommerce.scss / _shop.scss
├── global.scss       # entry point (imports everything)
├── admin.scss        # WP admin panel styles
└── editor.scss       # Gutenberg block editor styles
```

### JS Structure
`js/source/` files are concatenated in filename order:
- `00-global.js` — core site JS
- `01-form.js` — form interactions
- `02-sidebar.js` — sidebar behavior
- `03-shop.js` — WooCommerce shop category tree

Vendor scripts from `js/vendor/` are prepended before source files.

### ACF (Advanced Custom Fields)
Field group definitions are stored as JSON in `acf-json/` for version control. When ACF field groups are edited in the WP admin, they sync back to this directory automatically. Custom Gutenberg blocks (`block-highlighted-content`, `block-product`) are registered via `acf_register_block_type()` in `inc/gutenberg-blocks.php`.

### WooCommerce Integration
- Default WooCommerce wrappers are removed; custom ones wrap content in `.container > .woocommerce-content`
- Default sidebar is disabled; `parts/sidebar-shop.php` provides a custom hierarchical category tree
- WooCommerce pages (shop, cart, checkout, account) **skip** the script-deferring and footer-moving filters to avoid JS conflicts
- Products per page: 12 (filter `loop_shop_per_page`)
- Custom templates in `woocommerce/` directory override WooCommerce defaults

## Key Conventions

### Content Category Ordering
Posts in `baby-month-by-month`, `baby-months-0-4`, `baby-months-5-8`, `baby-months-9-12`, `pregnancy-week-by-week`, and the three trimester categories are ordered **ASC** (oldest first) via a `pre_get_posts` hook — this is intentional for sequential reading.

### Post Title Trimming
`cs__get_trimmed_post_title()` strips redundant text from week/month titles in pregnancy and baby content categories. Use this function when displaying post titles in navigation or archive contexts.

### Shortcodes
- `[bq]Your question[/bq]` — renders a bold link to the `#comments` anchor ("burning question" pattern).

### Script Loading Strategy
- Scripts are moved from `<head>` to footer on non-WooCommerce pages via `move_scripts_to_footer()`
- Non-critical scripts get `defer` attribute via `add_defer_async_attribute()` (skipped for `jquery`, `jquery-core`, `jquery-migrate`, `wp-polyfill`, and other WP core deps)
- jQuery 3.7.1 is registered without deferring

### Image Handling
- All `<img>`, `<iframe>`, and `<video>` tags in post content get `loading="lazy"` injected automatically
- If a `.webp` counterpart exists alongside an image, it is served instead (via `serve_webp_images` filter)
- `srcset` generation is disabled (`wp_calculate_image_srcset` returns false)
- SVG uploads are allowed

### Live Reload
`livereload.js` is only loaded when `REMOTE_ADDR` is `127.0.0.1` or `::1`, so it never runs in production.

### Database
- Table prefix: `muz_`
- Hosted on EasyWP (Namecheap managed WordPress on Kubernetes)
