function validateForm(){
    var x1=document.forms["iletisim"]["isim"].value;
    var x2=document.forms["iletisim"]["soyisim"].value;
    var x3=document.forms["iletisim"]["email"].value
    var x4=document.forms["iletisim"]["password"].value
    var x5=document.forms["iletisim"]["date"].value
    var x6=document.forms["iletisim"]["cinsiyet"].value
    var x7=document.forms["iletisim"]["futbol"].value
    var x8=document.forms["iletisim"]["müzik"].value
    var x9=document.forms["iletisim"]["satranç"].value
    var x10=document.forms["iletisim"]["düzey"].value
    var x11=document.forms["iletisim"]["mesaj"].value
    var x12=document.forms["iletisim"]["dosya"].value


    var mail = document.getElementById("email").value;
    var regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;

    if(x1=="" ||x2=="" ||x3=="" ||x4=="" ||x5=="" ||x6=="" ||x7=="" ||x8=="" ||x9=="" ||x10=="" ||x11=="" ||x12=="" ||regex.test(mail)==false)  {
        alert("Bu Alanlar Bos birakilamamaz boş bırakmayiniz!")
        return true;
    }
    else{
        return false;
    }
}
