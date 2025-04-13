<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Client Dashboard</title>
</head>
<body>
<h1>Customer Dashboard</h1>
<p>Welcome to your home page!</p>
<p>Check your commission status and other details below:</p>
    <h1>Commissions</h1>
    <div>
        <h2>Status of Commissions</h2>
        <!-- <ul>
            <?php foreach ($commissionStatus as $commission): ?>
                <li><?php echo $commission['description']; ?> - <?php echo $commission['status']; ?></li>
            <?php endforeach; ?>
        </ul> -->
        <button>Request New Commission</button>
    </div>
</body>
</html>
