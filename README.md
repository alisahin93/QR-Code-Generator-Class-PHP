QR-Code-Generator-Class-PHP
===========================

PHP QR Code Generator Class 

Class ADD 
===========================
<pre>
require_once("qrClass.php");
$qr = new qRClas();
</pre>
New QR Create 
===========================
1 ) Text 
2 ) Size ( 500x500 ) 
3 ) Charset ( Default UTF-8 ) 
<pre>
$qr->qRCreate("TEXT", "SİZExSİZE","Charset");
</pre>

SMS QR Code Create 
===========================
1 ) COUNTRY CODE
2 ) area code
3 ) Phone
4 ) size x size ( 500x500 )  
5 ) Text 
<pre>
$qr->smsQr("COUNTRY CODE","area code","Phone","SizeXSize","TEXT");
</pre>

Mobile QR Code Create 
===========================
1 ) COUNTRY CODE
2 ) area code
3 ) Phone
4 ) size x size ( 500x500 ) 
<pre>
$qr->telQr("COUNTRY CODE","area code","Phone","SizeXSize");
</pre>
Get the address of the generated Image
===========================
<pre>
$qr->url;
</pre>
variable
<pre>
$url=$qr->url;
</pre>
Testing

<pre>
$url=$qr->url;
echo "<img src='$url'/>";
</pre>

Contact
===========================
http://fb.com/savascan.altun
http://savascanaltun.com
