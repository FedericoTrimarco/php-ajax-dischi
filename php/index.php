<?php
    require_once __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISCHI-PHP</title>
    <link rel="stylesheet" href="../stylez.css">
</head>
<body>
    <header>
        <img src="../img/logo.png" alt="spotify-logo">
    </header>
    <main>
        <ul>
            <?php
                foreach($database as $data): 
            ?>
                <li>
                    <div class="card">
                        <div class="img-album">
                            <img src="<?php echo $data['poster']?>" alt="<?php echo $data['title']?>-Poster">
                        </div>
                        <div class="album-info">
                            <h2><?php echo $data['title']?></h2>
                            <span><?php echo $data['author']?></span>
                            <h3><?php echo $data['year']?></h3>
                            <span><?php echo $data['genre']?></span>
                        </div>
                    </div>
                </li>
            <?php
                endforeach;
            ?>
        </ul>
    </main>
</body>
</html>