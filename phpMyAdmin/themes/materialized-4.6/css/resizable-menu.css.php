<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Styles for the resizable menus
 *
 * used by js/jquery/jquery.menuResizer-1.0.js
 *
 * @package    PhpMyAdmin-theme
 * @subpackage materialized-4.6
 */

// unplanned execution path
if (! defined('PMA_MINIMUM_COMMON') && ! defined('TESTSUITE')) {
    exit();
}
?>
ul.resizable-menu a,
ul.resizable-menu span {
    display: block;
    margin: 0;
    padding: 0;
    white-space: nowrap;
}

ul.resizable-menu .submenu {
    display: none;
    position: relative;
}

ul.resizable-menu .shown {
    display: inline-block;
}

ul.resizable-menu ul {
    margin: 0;
    padding: 0;
    position: absolute;
    list-style-type: none;
    display: none;
    border: 1px #ddd solid;
    z-index: 2;
    <?php echo $right; ?>: 0;
}

ul.resizable-menu li:hover a {
    border-bottom: 4px solid #ff6d00;
}

ul.resizable-menu li:hover ul,
ul.resizable-menu .submenuhover ul {
    display: block;
    background: #673ab7;
}

ul.resizable-menu ul li {
    width: 100%;
}
