<?php
echo "<div style='background: #0073aa; color: white; padding: 20px; text-align: center; font-family: sans-serif;'>";
echo "<h1> CI/CD Pipeline is LIVE! Build Verified.</h1>";
echo "</div>";

// DEBUGGING BLOCK
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "";

if (!file_exists('wp-config.php')) {
    echo "<p style='color:red; text-align:center;'>ERROR: wp-config.php is MISSING from the container!</p>";
}

if (file_exists('wp-blog-header.php')) {
    define( 'WP_USE_THEMES', true );
    require( dirname( __FILE__ ) . '/wp-blog-header.php' );
} else {
    echo "<p style='color:red; text-align:center;'>ERROR: wp-blog-header.php is MISSING. Your Docker image is empty!</p>";
}
