<?php 

    include_once __DIR__ . "/classes/Product.php";


    $ciao = new Product("ciao", 20, 10);
    $cane = new Product("cane", 20, 10);

    var_dump($ciao);
    var_dump($cane);

?>