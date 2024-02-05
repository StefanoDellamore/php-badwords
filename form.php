<?php

    $userText = $_GET["textUser"];
    $censorWord = $_GET["wordCensored"];

    $censoredUserText = str_ireplace($censorWord, '***', $userText);

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
        <h2>Stampa originale:</h2>
        <p>Text User: <?php echo $userText ?></p>
        <p>lunghezza paragrafo: <?php echo strlen($userText) . 'caratteri'?> </p>
    </div>

    <div>
        <h2>Stampa censurata:</h2>
        <p>Text User: <?php echo $censoredUserText ?></p>
        <p>lunghezza paragrafo: <?php echo strlen($censoredUserText) . 'caratteri'?> </p>
    </div>
</body>
</html>