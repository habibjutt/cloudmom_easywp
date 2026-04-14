<?php

namespace WPNCEasyWP\Providers;

use WPNCEasyWP\Support\AdminMenu;
use WPNCEasyWP\WPBones\Support\ServiceProvider;
use WPNCEasyWP\Providers\AutomaticUpdates\SequoiaIntegrationCache;

class EasyWPServiceProvider extends ServiceProvider
{
    private $marketingNoticeId = 'easywp_end_of_year_2025_video';

    public function register()
    {
        $user_id = get_current_user_id();

        // easywp admin menu bar
        add_action("admin_bar_menu", [$this, "adminBarMenu"], 100);

        // check if we have to do some action
        add_action("admin_init", [$this, "processBarActions"]);
        add_action("wp_loaded", [$this, "processBarActions"]);

        // Marketing integrations
        if (get_user_meta($user_id, $this->marketingNoticeId, true) !== 'off') {
            add_action('admin_notices', [$this, 'admin_notices_marketing']);
            add_action('wp_ajax_close_marketing_admin_notice', [$this, 'close_marketing_admin_notice']);
        }
    }

    public function close_marketing_admin_notice()
    {
        $user_id = get_current_user_id();
        update_user_meta($user_id, $this->marketingNoticeId, 'off');
        wp_die();
    }

    public function admin_notices_marketing()
    {
        ?>
    <div class="notice notice-success is-dismissible easywp-marketing-notices">
      <div class="easywp-alert-content">
        A special end-of-year video message from the EasyWP team is waiting.
<a href="https://bit.ly/4jbXSTf">Reveal now.</a>
      </div>
    </div>
        <script type="text/javascript">
        jQuery(document).on('click', '.notice.is-dismissible.easywp-marketing-notices .notice-dismiss', function() {
          jQuery.post(
            ajaxurl,
            {
              action: "close_marketing_admin_notice",
              nonce: easyWP.nonce,

            },
            function (data) {
              //alert(data.test);
            },
          );
        });
    </script>
<?php
    }

    public function processBarActions()
    {
        if (isset($_GET[AdminMenu::ACTION_KEY]) && check_admin_referer(AdminMenu::NONCE)) {
            $action = $_GET[AdminMenu::ACTION_KEY] ?: false;

            if ($action) {
                /**
                 * Fires the request action.
                 *
                 * The dynamic portion of the hook name, $action, refers to the action will be execute.
                 */
                do_action(AdminMenu::ACTION_KEY . "_{$action}");
                SequoiaIntegrationCache::init()->flush();
            }
        }
    }

    /**
     * Add the EasyWP Menu in the admin admin bar for administrator user.
     *
     * @param $adminBar
     */
    public function adminBarMenu($adminBar)
    {
        // administrator only
        if (current_user_can("activate_plugins")) {
            $adminMenu = [
              [
                "id" => AdminMenu::PARENT_MENU_ID,
                "title" =>
                '<span class="desktop-clearcache">' .
                  __("Clear Cache", "wp-nc-easywp") .
                  '</span> <span class="mobile-clearcache">🧽</span>',
                "href" => wp_nonce_url(add_query_arg(AdminMenu::ACTION_KEY, AdminMenu::ACTION_CLEAR_ALL), AdminMenu::NONCE),
                "meta" => [
                  "title" => __("Clear Cache", "wp-nc-easywp"),
                ],
              ],
            ];

            //            $adminMenu[] = [
            //                'parent' => AdminMenu::PARENT_MENU_ID,
            //                'id'     => 'wpnceasywp-clear-all-cache',
            //                'title'  => __('Clear Cache', 'wp-nc-easywp'),
            //                'href'   => wp_nonce_url(add_query_arg(AdminMenu::ACTION_KEY, AdminMenu::ACTION_CLEAR_ALL), AdminMenu::NONCE),
            //                'meta'   => [
            //                    'title' => __('Clear Cache', 'wp-nc-easywp'),
            //                ],
            //            ];

            /**
             * Filter the additional admin menu item.
             *
             * The dynamic portion of the hook name, $adminMenu, refers to the list of menu item.
             *
             * @param array $adminMenu
             */
            $adminMenu = apply_filters("wpnceasywp_admin_menu", $adminMenu);

            foreach ($adminMenu as $menu) {
                $adminBar->add_node($menu);
            }
        }
    }
}
