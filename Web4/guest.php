<?php
echo "<head><title>GUEST BOOK</title></head>"; //echo = mencetak karakter

$fp = fopen("guest.txt", "a+");		//fopen = membuka suatu file
$Nama		= $_POST['Nama'];	//$_Post = mengumpulkan nilai 
$NIM		= $_POST['NIM'];

fputs($fp, "$Nama|$NIM\n");	//fputs = menulis pada file yang terbuka
fclose($fp);	//fclose = menutup suatu file
if($fp!=0){
	header("location: home.html");	//header =  meminta halaman web dibawa kembali ke browser
}
else{
	echo "File Not Found";		//echo = mencetak karakter
}

?>