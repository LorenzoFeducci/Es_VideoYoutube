<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function inserisciVideoYoutube($video, $larghezzaPercentuale, $altezzaPixel){
            echo "<h2>";
            echo $video["Titolo"];
            echo "</h2>"; 

            echo "<iframe src='https://www.youtube.com/embed/{$video["idVideo"]}' width='$larghezzaPercentuale' height='$altezzaPixel' ></iframe>";
        }

        $video1 = array("Titolo" => "Koalas 101 | Nat Geo Wild", "idVideo" => "oI3ADcDH0Uc");
        $video2 = array("Titolo" => "Le stelle", "idVideo" => "b-zRbVTKGLM");
        $video3 = array("Titolo" => "Roma explicada", "idVideo" => "OsjSRr8cpgk");
        $listaVideo = array($video1, $video2, $video3);

        inserisciVideoYoutube($listaVideo[0], 75, 400);
    ?>
</body>
</html>