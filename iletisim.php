<?php

if(isset($_POST['fg-gonder'])){
    $kime = "alicansecil@outlook.com"; // hedef email
    $adisoyadi = $_POST['adisoyadi'];
     $eposta = $_POST['eposta'];
    $mesaj = $_POST['mesaj'];
    $konu = "İletişim Formu";
    $mesaj = '
    <html>
        <head>
            <title>İletişim Formu</title>
        </head>
        <body>
            <p>'.$adisoyadi.' aşağıdaki bilgiler ile size form gönderdi</p>
            <p><b>İsim:</b> '.$adisoyadi.'</p>
           
            <p><b>E-posta:</b> '.$eposta.'</p>
         
            <p><b>Mesaj:</b> '.$mesaj.'</p>
        </body>
    </html>'; 
    $header  = "Content-type: text/html; charset=utf-8 \r\n"; 
    mail($kime,$konu,$mesaj,$header);
    echo "<p class='alert alert-success'>Başarıyla Gönderildi. Teşekkür ederiz "    . $adisoyadi . ", sizinle iletişime geçeceğiz .</p>";
}
$baglanti = new mysqli("localhost", "root", "", "test");

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

echo "MySQL bağlantısı başarıyla gerçekleştirildi.";


?>