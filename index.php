<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badword</title>
</head>
<body>

    <?php
        //php
        $paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet saepe quam, consequuntur explicabo fuga delectus officiis facere, quos suscipit maxime porro iusto dicta, vero perferendis excepturi voluptatem laborum veniam ipsum.';
        $lunghezza_paragrafo = strlen($paragrafo);
        $badword = $_GET["badword"];

    ?>
    
    <h2>Paragrafo</h2>
    <p> <?php echo $paragrafo; ?> </p>

    <h2>Lunghezza parafrafo</h2>
    <div> <?php echo $lunghezza_paragrafo; ?> </div>

    <h3> <?php echo $badword; ?> </h3>

    
    
</body>
</html>