<?php 

    include_once __DIR__ . "/classes/Product.php";
    include_once __DIR__ . "/classes/Food.php";
    include_once __DIR__ . "/classes/Toy.php";
    include_once __DIR__ . "/classes/Miscellaneous.php";


    $ciao = new Product("ciao", 20, 10);
    $cane = new Product("cane", 20, 10);
    $crocchette = new Food("crocchette", 50.233, 10, "gatto", "20-12_2034", 500, "salmone", "cozze", "vongole", "cioccolato");
    $snack = new Food("snack", 10.2, 10, "cane", "6_6-2026", 100, "salmone", "pane", "motosega", "cioccolato");
    $palla = new Toy("palla", 15, 20, "gomma", "m", true);
    $cuccia = new Miscellaneous("cuccia", 100, 10, "cane", false, "plastica", "xxl");


    var_dump($ciao);
    var_dump($cane);
    var_dump($crocchette);
    var_dump($snack);
    var_dump($palla);
    var_dump($cuccia);

?>