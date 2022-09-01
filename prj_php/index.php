<?php
include 'data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" /> 
    <title>Dischi PHP</title>
</head>
<body>
    <header>
        <img id="header-logo" src="img/logo.svg" alt="Spotify Logo">
    </header>

    <main>
        <div class="container">
            <div class="box">

                <?php foreach($discs as $disc) : ?>
            
                    <div class="card">
                        <img src="<?=$disc['poster']?>" alt="<?=$disc['title']?>">
                        <h4><?=$disc['title']?></h4>
                        <div class="author"><?=$disc['author']?></div>
                        <div class="release"><?=$disc['year']?></div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </main>


</body>
</html>
