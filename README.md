PHP QR Code Generator 
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
1 ) Text <br/>
2 ) Size ( 500x500 ) <br/>
3 ) Charset ( Default UTF-8 ) <br/>
<pre>
$qr->qRCreate("TEXT", "SİZExSİZE","Charset");
</pre>

SMS QR Code Create 
===========================
1 ) COUNTRY CODE<br/>
2 ) area code
3 ) Phone <br/>
4 ) size x size ( 500x500 )  <br/>
5 ) Text <br/>
<pre>
$qr->smsQr("COUNTRY CODE","area code","Phone","SizeXSize","TEXT");
</pre>

Mobile QR Code Create 
===========================
1 ) COUNTRY CODE<br/>
2 ) area code<br/>
3 ) Phone <br/>
4 ) size x size ( 500x500 )  <br/>
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

Demo
===========================
http://www.savascanaltun.com/ornekler/php/qrcreator/demo.php

Contact
===========================
http://fb.com/savascan.altun
<br/>
http://savascanaltun.com
