<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <?php
        $paragrafoTesto = "Lorem ipsum dolor sit amet, consectetur adipisci elit, 
        sed eiusmod tempor incidunt ut labore et dolor magna aliqua. 
        Ut enim ad minim veniam, quis nostrum exercitationem ullamco laboriosam, 
        nisi ut aliquid ex ea commodi consequatur. Duis aute irure reprehenderit in voluptate 
        velit esse cillum dolor eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, 
        sunt in culpa qui officia deserunt mollit anim id est laborum.";
        
        echo $paragrafoTesto;

        $lunghezzaParagrafo = strlen ($paragrafoTesto);

        # stampo a schermo prima versione:

        echo "<br> Lunghezza Paragrafo: {$lunghezzaParagrafo} caratteri.";
        
        $parolaDaCensurare = $_GET ["parola"];

        $paragrafoTesto = str_ireplace ("dolor", "***", $paragrafoTesto);

        echo "<br>" . $paragrafoTesto;

        $lunghezzaParagrafo = strlen ($paragrafoTesto);

        // stampo a schermo versione concatenazione stringhe con punto:

        echo "<br>" . "Nuova Lunghezza Paragrafo: " . $lunghezzaParagrafo . " caratteri.";
    ?>

</body>
</html>