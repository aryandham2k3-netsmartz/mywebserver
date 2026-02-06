<?php
// 1.  BANNER
echo "<div style='background: #0073aa; color: white; padding: 20px; text-align: center; font-family: sans-serif; font-weight: bold;'>";
echo "🚀 CI/CD Pipeline is LIVE! Build Verified.";
echo "</div>";

// 2. ERROR REPORTING (To see why WordPress is hidden)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 3. THE WORDPRESS LOAD LOGIC
if (file_exists(__DIR__ . '/wp-blog-header.php')) {
    define( 'WP_USE_THEMES', true );
    require __DIR__ . '/wp-blog-header.php';
} else {
    echo "<p style='color:red; text-align:center;'>Critical Error: wp-blog-header.php not found in the container!</p>";
}
