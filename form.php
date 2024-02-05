<?php 
$textUser = $_GET['textUser'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="./index.php">
            Back Home
        </a>
    </div>
    <div>
        textUser: <?php echo $textUser; ?>
    </div>
</body>
</html>