<!DOCTYPE html>
<html>
<head>
	<title>Guest Books</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<script language="javascript" src="js/java.js"></script>
	<style>
		body{
			background-image: url(img/568216.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment:fixed;
		}
	</style>
</head>
<body>


	<div class="menubar" align="right"><ul>
			<li><a href="home.html"><b>Home</b></a></li>
			<li><a href="biodata.html"><b>Biodata</b></a></li>
			<li><a href="materi.html"><b>Materi</a></b></li>
			<li><a href="guestbooks.php"><b>Pengunjung</a></b></li>
		</ul>
	<form name="formcari" onSubmit="search()"><pre>													<input class="search" name="keyword" type="text" placeholder="Cari..." required><input class="button" type="submit" value="Cari"></form></pre>

	<font color="white" size="4"><script type="text/javascript">
	var months =['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
	var myDays = ['Minggu','Senin','Selasa','Rabu','Kamis','Jum&#39;at','Sabtu'];
	var date = new Date();
	var day = date.getDate();
	var month = date.getMonth();
	var thisDay = date.getDay(),

    thisDay = myDays[thisDay];
	var yy = date.getYear();
	var year = (yy < 1000) ? yy + 1900 : yy;
	document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
	</script></font>

	</div>
	<br><br><br>;
	<div class="menu" style="background-color: #0006; border: 1px solid #17202A; height: auto; margin: 10px 0px; padding: 5px; text-align: left; width: auto; ">
		<center>
		<h2>GUEST BOOKS WEBSITE BUKAN MANUSIA</h2>
		<hr width="88%">
	</center>
	<br><br>
	<center><form>
	<?php
	error_reporting(0);	//error_reporting = fungsi yang digunakan untuk menangani error yang terjadi
	$bil = 1;
	echo "<head><title>GUEST BOOK</title></head>";	//echo = mencetak karakter
	$fp = fopen("guest.txt", "r");	
	echo "<table border=1 width=95% align=center>";
	echo "<th><center>No.</center></th>";
	echo "<th><center>Nama</center></th>";
	echo "<th><center>NIM</center></th>";
	while($isi = fgets($fp,80))		//mengembalikan fungsi garis dari file terbuka
	{
		$pisah = explode("|",$isi);	//memisahkan sebuah string menjadi element-element array
		echo "<tr><td><center>$bil.</center></td>";
		echo "<td><center>$pisah[0]</center></td>";
		echo "<td><center>$pisah[1]</center></td>";
	$bil++;
	}

	?>
</form></center>
	</div>
		
	

</body>
</html>