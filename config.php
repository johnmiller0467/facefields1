<?php
/**
 * FacadeFields — site configuration
 * Central place for site-wide constants, navigation, and contact details.
 * Edit the values below to update them everywhere on the site.
 */

define('SITE_NAME', 'FacadeFields');
define('SITE_TAGLINE', 'Working the land since 2010');
define('SITE_EMAIL', 'hello@facadefields.test');
define('SITE_PHONE', '+1 (555) 019-2274');
define('SITE_ADDRESS', '4820 Hollow Creek Road, Millbrook County');
define('SITE_HOURS', 'Mon–Sat, 7:00am – 5:00pm');
define('CURRENT_YEAR', date('Y'));

// Main navigation — shared by header.php and footer.php
$GLOBALS['nav_links'] = [
    'index.php'    => 'Home',
    'about.php'    => 'About Us',
    'services.php' => 'Services',
    'products.php' => 'Produce',
    'gallery.php'  => 'Gallery',
    'blog.php'     => 'Field Notes',
    'faq.php'      => 'FAQs',
    'contact.php'  => 'Contact',
];

/**
 * Returns "active" if $page matches the current file, for nav styling.
 */
function nav_active($page) {
    return basename($_SERVER['PHP_SELF']) === $page ? ' active' : '';
}

/**
 * Escapes a string for safe HTML output.
 */
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
