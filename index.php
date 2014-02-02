<?php
/*
 * Savaş Can Altun - 30.01.2014
 * QR İmage Creator 
 * http://savascanaltun.com - http://saltun.net
 */
require_once("qrClass.php");
$qr = new qRClas();

//$qr->qRCreate("Savaş Can Altun", "500x500","UTF-8");

/*
 * Mobile QR Code 
 * 
 */
//$qr->telQr("+90","212","6855525","125x125");


/*
 * SMS QR
 * 
 */
$qr->smsQr("90","212","555 55 55","125x125","SMS Test");

$url=$qr->url;

/*
 * QR URL Paste İMG ( Oluşturulan QR'i ekrana bastır )
 */
echo "<img src='$url'/>";



?>
