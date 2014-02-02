<?php
/*
 * Savaş Can Altun - 30.01.2014
 * QR İmage Creator 
 * http://savascanaltun.com - http://saltun.net
 */
require_once("qrClass.php");
$qr = new qRClas();

if (isset($_POST['submit'])) {
$qr->qRCreate($_POST['text'], $_POST['size'],$_POST['charset']);
$url=$qr->url;;

/*
 * QR URL Paste İMG ( Oluşturulan QR'i ekrana bastır )
 */
echo "<img src='$url'/>";


}




?>
<form action="" method="post">
    <h1>Create QR Code </h1>
    <h5>www.savascanaltun.com</h5>
    <label>Text </label>
     <br/>
     <textarea name="text" cols="25" rows="5"></textarea>
    <br/>
    <label>Size ( 500x500 ) </label>
     <br/>
    <input type="text" name="size" />
     <br/>
      <label>Charset ( UTF-8 ) </label>
     <br/>
    <input type="text" name="charset" />
     <br/>
     <input type="submit" name="submit" value="Create"/>
</form>
