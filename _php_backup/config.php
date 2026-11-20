<?php
/**
 * MBR Flexibles Ltd - Configuration & Helper Functions
 */

if (!isset($root_prefix)) {
    $root_prefix = '';
}

// Internal clean URL helper
function url($path = '') {
    global $root_prefix;
    $trimmed = ltrim($path, '/');
    if ($trimmed === '' || $trimmed === './') {
        return ($root_prefix !== '') ? $root_prefix : './';
    }
    return $root_prefix . $trimmed;
}

// Static asset helper
function asset($path) {
    global $root_prefix;
    $trimmed = ltrim($path, '/');
    if (strpos($trimmed, 'assets/') === 0) {
        return $root_prefix . $trimmed;
    }
    return $root_prefix . 'assets/' . $trimmed;
}

// Site Details
$site_name = "MBR Flexibles Ltd";
$site_domain = "https://mbrflexibles.com";
$site_email = "info@mbrflexibles.com";
$site_address = "79/80, Nr. Chacharwadi Temple, B/h Pradeep Overseas, Sarkhej - Bavla Highway, Sanand, Ahmedabad 382213";
$site_facebook = "https://www.facebook.com/";
