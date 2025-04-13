<?php
// Base path relative to the project root directory
$basePath = dirname($_SERVER['SCRIPT_NAME']);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $basePath; ?>/CSS/nav.css" />
</head>

<body>
    <div class="navbar">
        <div class="navbar-title">
            <a href="<?php echo $basePath; ?>/index.php" class="logo-link">Ayndre ILLUSTRATOR</a>
        </div>

        <div class="navbar-links">
            <a href="<?php echo $basePath; ?>/?controller=about" class="nav-link">About</a>
            <a href="<?php echo $basePath; ?>/?controller=portfolio" class="nav-link">Portfolio</a>
            <a href="<?php echo $basePath; ?>/?controller=store" class="nav-link">Store</a>
            <a href="<?php echo $basePath; ?>/?controller=blog" class="nav-link">Blog</a>
            <a href="<?php echo $basePath; ?>/?controller=faq" class="nav-link">FAQ</a>
        </div>

        <div class="navbar-actions">
            <div class="navbar-button">
                <a href="<?php echo $basePath; ?>/?controller=login" class="button-link">Log in</a>
            </div>
            <div class="navbar-button">
                <a href="<?php echo $basePath; ?>/?controller=signup" class="button-link">Sign up</a>
            </div>
        </div>

        <a href="<?php echo $basePath; ?>/?controller=cart" class="cart-icon">
            <img src="<?php echo $basePath; ?>/images/v250_1363.png" alt="Cart Icon" />
        </a>
    </div>
</body>
</html>
