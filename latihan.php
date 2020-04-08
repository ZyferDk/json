<?php
    // $santri = [
    //     [
    //         "nama" => "ajidk",
    //         "nrp" => "16421354218162",
    //         "age" => "21",
    //         "jurusan" => "Backend Developer",
    //         "lulus" => true,
    //     ]
    // ];

    $dbh = new PDO('mysql:host=localhost; dbname=php_santri', 'root', 'bismillah');
    $db = $dbh->prepare('SELECT * FROM santri');
    $db->execute();
    $santri = $db->fetchAll(PDO::FETCH_ASSOC);


    $show = json_encode($santri);

    echo $show;