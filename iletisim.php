<?php
        $isim = $_POST['isim'];
        $soyisim = $_POST['soyisim'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $düzey = $_POST['düzey'];
        $mesaj = $_POST['mesaj'];
        $dosya = $_POST['dosya'];

        if(empty($_POST['email']) || empty($_POST['isim']) || empty($_POST['soyisim']) || empty($_POST['password']) || empty($_POST['date']) ||                    empty($_POST['düzey']) || empty($_POST['mesaj']) || empty($_POST['dosya']))
        {
            
            echo "Lütfen tüm boşlukları doldurun";
        }

        else{

            echo "İsim : ".$isim;
            echo "\n";
            echo "Soyisim : ".$soyisim;
            echo "\n";
            echo "Mail : ".$email;
            echo "\n";
            echo "Tarih : ".$date;
            echo "\n";
            echo "Mesaj : ".$mesaj;
        }

?>