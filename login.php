<?php

if ($_POST['email'] == "b201210021@sakarya.edu.tr" && $_POST['password'] =="b201210021" ){
    echo "Hoşgeldin B201210021 <br>";
    header ("Refresh: 1; URL=anasayfa.html");

}

else if(empty($_POST['email']) || empty($_POST['password'])){
    echo "Lütfen tüm boşlukları doldurunuz <br>";
    header ("Refresh: 2; URL=login.html");
}

else{
    echo "Giris Basarisiz";
    header ("Refresh: 1; URL=login.html");
exit();
}

?>