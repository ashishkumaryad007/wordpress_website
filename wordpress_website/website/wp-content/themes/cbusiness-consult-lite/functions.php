<?php

/**
 * @package CBusiness Consult Lite
 */
require_once get_template_directory() . "/app/cbusiness-consult-lite-customization.php";
require_once get_template_directory() . "/lib/cbusiness-consult-lite-style-functions.php";
require_once get_template_directory() . "/lib/cbusiness-consult-lite-setup-functions.php";
require_once get_template_directory() . "/lib/cbusiness-consult-lite-widget-functions.php";
require_once get_template_directory() . "/lib/cbusiness-consult-lite-page-functions.php";

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function cbusiness_consult_lite_skip_link_focus_fix() {
    // The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
    ?>
    <script>
        /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function () {
            var t, e = location.hash.substring(1);
            /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
        }, !1);
    </script>
    <?php

}

add_action('wp_print_footer_scripts', 'cbusiness_consult_lite_skip_link_focus_fix');
?>