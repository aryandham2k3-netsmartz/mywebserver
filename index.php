<?php
// 1. CI/CD BANNER
echo "<div style='background: #0073aa; color: white; padding: 20px; text-align: center; font-family: sans-serif; font-weight: bold; position: relative; z-index: 9999;'>";
echo "🚀 CI/CD Pipeline is LIVE! Build Verified.";
echo "</div>";

// 2. wordpress
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
