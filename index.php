<?php 

    include_once __DIR__ . "/classes/Product.php";
    include_once __DIR__ . "/classes/Food.php";
    include_once __DIR__ . "/classes/Toy.php";
    include_once __DIR__ . "/classes/Miscellaneous.php";
    include_once __DIR__ . "/classes/Customer.php";


    $test = new Product("test1", 20, 10);
    $treats = new Food("treats", 50.233, 10, "cat", "20-05-2030", 500, "salmon", "chocolate");
    $snack = new Food("snack", 10.2, 10, "dog", "6-6-2026", 100, "salmon");
    $ball = new Toy("ball", 15, 20, "rubber", "m", true);
    $bed = new Miscellaneous("bed", 100, 10, "dog", false, "wool", "xxl", 8, 4);
    $customer1 = new Customer("customer1", "surname1", 2020202021, "20-12-2024", "cat", "mouse", "dog");
    $customer1->setUserDatas("custmoer1@gmail.com", "1234567890", "address 123");
    $customer1->isRegistered();


    var_dump($test);
    var_dump($treats);
    var_dump($snack);
    var_dump($ball);
    var_dump($bed);
    var_dump($customer1);

?>