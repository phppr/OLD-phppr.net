<?php
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */


/**
 * Odin Classes.
 */
require_once ODIN_PATH . '/core/classes/class-bootstrap-nav.php';
// require_once ODIN_PATH . '/core/classes/class-shortcodes.php';
// require_once ODIN_PATH . '/core/classes/class-thumbnail-resizer.php';
// require_once ODIN_PATH . '/core/classes/class-theme-options.php';
// require_once ODIN_PATH . '/core/classes/class-options-helper.php';
// require_once ODIN_PATH . '/core/classes/class-post-type.php';
// require_once ODIN_PATH . '/core/classes/class-taxonomy.php';
// require_once ODIN_PATH . '/core/classes/class-metabox.php';
// require_once ODIN_PATH . '/core/classes/abstracts/abstract-front-end-form.php';
// require_once ODIN_PATH . '/core/classes/class-contact-form.php';
// require_once ODIN_PATH . '/core/classes/class-post-form.php';

/**
 * Odin Widgets.
 */
// require_once ODIN_PATH . '/core/classes/widgets/class-widget-like-box.php';

/**
 * Core Helpers.
 */
require_once ODIN_PATH . '/core/helpers.php';

/**
 * WP Custom Admin.
 */
require_once ODIN_PATH . '/inc/admin.php';

/**
 * Comments loop.
 */
require_once ODIN_PATH . '/inc/comments-loop.php';

/**
 * WP optimize functions.
 */
require_once ODIN_PATH . '/inc/optimize.php';

/**
 * WP Custom Admin.
 */
// require_once ODIN_PATH . '/inc/plugins-support.php';

/**
 * Custom template tags.
 */
require_once ODIN_PATH . '/inc/template-tags.php';
