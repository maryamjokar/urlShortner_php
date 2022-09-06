<?php
include 'db.php';

$stmt = $conn->query("SELECT * FROM urls");

$urls = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($urls);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Php Url Shortner</title>
</head>
<body>
    <header>
        <h1>Typer's URL Shortner</h1>
    </header>

    <main>
        <section class="form" >
            <form action="posturl.php" method="POST">
                <input type="text" name="long_url" id="long_url" placeholder="e.g. https://example.com" />
                <input type="submit" value="Shorten" />
            </form>
        </section>

        
        <section class="urls">
            <?php  foreach ($urls as $url) : ?>
            <div class="url">
                <div class="id">
                    <? echo $url['ID']; ?>
                </div>
                <div class="short_url">
                    <a href="http://localhost/r?c=<?= $url['ID']; ?>"  target="_blank" >
                                http://localhost/r?c<?= $url['ID']; ?></a>
                </div>
                <div class="long_url">
                    <a href="<?= $url['long_url']; ?>" target="_blank"> <?= $url['long_url']; ?> </a>
                </div>
            </div>
            <?php endforeach; ?>
        </section>
    </main>
    
</body>
</html>