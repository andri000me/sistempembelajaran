<!DOCTYPE html>
<html lang="id">
<head>
	<title>Modul Interaktif</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compitable" content="ie=edge">
	<link rel="stylesheet" href="login1.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body bgcolor="grey">
	<div id="wrapper">
		<div id="header">
			<div id="logo-left"><img src="foto/logo.PNG" width="135" height="135"></div>
			<div id="logo"><img src="foto/um.PNG" width="125" height="125"></div>
			<div id="logoname1" style="-webkit-text-stroke: 2px black"><font color="white" size="7">MODUL</font></div><br />
			<div id="logoname2" style="-webkit-text-stroke: 2px black"><font color="white" size="7.5">INTERAKTIF</font></div><br />
		</div>
		<div id="header-menu">
			<div id="menu" align="left">
				<ul>
					<li><a href="#"><i class="fa fa-home" class="icon" style="color: orange; width: 64px;"><font face="arial" size="3"><b> Home</b></font></i></a></li>
					<li><a href="#"><i class="fa fa-book" style="color: orange; width: 77px;"><font face="arial"size="3"><b> Tutorial</b></font></i></a></li>
					<li><a href="#"><i class="fa fa-folder" style="color: orange;width: 137px;"><font face="arial"size="3"><b> Soal Evaluasi </b></font><i class="fa fa-caret-down" style="color: black" ;"></i></i></a>
						<ul>
							<div class="txt1">
							<li><a href="#"><font color="black">Pilihan Ganda</font></a></li></div>
							<div class="txt1">
							<li><a href="#"><font color="black">Studi Kasus</font></a></li>
							</div>
						</ul>
					</li>
					<li><a href="#"><i class="fa fa-file" style="color: orange;width: 154px;"><font face="arial"size="3"><b> Laporan Kegiatan</b></font></i></a></li>
					<li><a href="#"><i class="fa fa-exclamation-circle" style="color: orange;width: 91px;"><font face="ebrima"size="3"><b> I</b><font face="arial" size="3"><b>nformasi </b></font></i></a></li>
					<li><a href="#"><i class="fa fa-asterisk" style="color: orange;width: 88px;"><font face="arial"size="3"><b> Panduan</b></font></i></a></li>
				</ul>
			</div>
		</div>

		<div id="inner">
			<div class="txt">
				<i class="fa fa-home" style="color: silver; width: 60px;"><b> Home</b></i>
				<div class="txt1"></div>
			</div>
		</div>
		<div id="contentbox">
			<div id="content">
				<div id="morelinks">
				<?php
					session_start();
					if(isset($_SESSION['user'])){
					header("location: index.html");}
					require_once('koneksi.php');
				?>

				<form action="proseslogin.php" method="post">
					<div><h3><font color="orange">Anda harus login!</h3></div>
					<div><input type="text" name="user" id="user" autofocus placeholder="Username" />
					</div><br />
					<div><input type="password" name="pass" id="pass" placeholder="Password" /> 
					</div><br />
					<form action="<?php $_SERVER['PHP_SELF']; ?>" method = "post">
					<div><input type="checkbox" name="remember" value="Remember me"
						<?php 
							if (isset($_POST['remember'])){
								foreach ($_POST['remember'] as $key => $val) {
								if ($val == 'Remember me') {
								echo 'checked="checked"';
								}
							}
						}
						?>
						/><font color="orange" face="arial"> Remember me</font>
					</div>
					</form>
					<div><input type="submit" size="35" name="login" value="Login" class="tombol"> 
					</div>
				</form>
				</div>
			</div>
		</div>

		<div id="footer">
			<div id="credits">
			<div class="isi1">
			<div align="center">
				<font color="#E0FFFF" size="4">
				&copy; 2018. Design by Tiga Dara. Teknik Informatika UM 
				</font>
			</div>
		</div>
	</div>
</div>

</body>
</html>


