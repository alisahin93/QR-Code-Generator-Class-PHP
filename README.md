QR-Code-Generator-Class-PHP
===========================

PHP QR Code Generator Class 

Class ADD 
===========================
require_once("qrClass.php");
$qr = new qRClas();

New QR Create 
===========================
1 ) Text 
2 ) Size ( 500x500 ) 
3 ) Charset ( Default UTF-8 ) 

$qr->qRCreate("TEXT", "SİZExSİZE","Charset");


SMS QR Code Create 
===========================
1 ) COUNTRY CODE
2 ) area code
3 ) Phone
4 ) size x size ( 500x500 )  
5 ) Text 

$qr->smsQr("COUNTRY CODE","area code","Phone","SizeXSize","TEXT");


Mobile QR Code Create 
===========================
1 ) COUNTRY CODE
2 ) area code
3 ) Phone
4 ) size x size ( 500x500 ) 

$qr->telQr("COUNTRY CODE","area code","Phone","SizeXSize");

Get the address of the generated Image
===========================

$qr->url;

variable

$url=$qr->url;

<img> Testing

$url=$qr->url;
echo "<img src='$url'/>";



