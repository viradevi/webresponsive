<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		* {
			box-sizing: border-box;
		}

		.row::after {
			content: "";
			clear: both;
			display: table;
		}

		[class*="col-"] {
			float: left;
			padding: 15px;
		}

		html {
			font-family: "Times New Roman", sans-serif;
		}

		.header {
			background-color: #9933cc;
			color: #ffffff;
			padding: 15px;
		}

		body{
			background-image:url(p.jpg);
			background-size:cover;
			background-attachment: fixed;
		}

		.menu ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}

		.menu li {
			padding: 8px;
			margin-bottom: 7px;
			background-color: #33b5e5;
			color: #ffffff;
			box-shadow: 0 1px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		}

		.menu li:hover {
			background-color: #0099cc;
		}

		.aside {
			background-color: #33b5e5;
			padding: 15px;
			color: #ffffff;
			text-align: center;
			font-size: 14px;
			box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		}

		.footer {
			background-color: #0099cc;
			color: #ffffff;
			text-align: center;
			font-size: 12px;
			padding: 15px;
		}

		[class*="col-"] {
			width: 100%
		}

		@media only screen and (min-width: 600px) {
			.col-s-1 {width: 8.33%;}
			.col-s-2 {width: 16.66%;}
			.col-s-3 {width: 25%;}
			.col-s-4 {width: 33.33%;}
			.col-s-5 {width: 41.66%;}
			.col-s-6 {width: 50%;}
			.col-s-7 {width: 58.33%;}
			.col-s-8 {width: 66.66%;}
			.col-s-9 {width: 75%;}
			.col-s-10 {width: 83.33%;}
			.col-s-11 {width: 91.66%;}
			.col-s-12 {width: 100%;}
		}

		@media only screen and (min-width: 768px) {
			.col-1 {width: 8.33%;}
			.col-2 {width: 16.66%;}
			.col-3 {width: 25%;}
			.col-4 {width: 33.33%;}
			.col-5 {width: 41.66%;}
			.col-6 {width: 50%;}
			.col-7 {width: 58.33%;}
			.col-8 {width: 66.66%;}
			.col-9 {width: 75%;}
			.col-10 {width: 83.33%;}
			.col-11 {width: 91.66%;}
			.col-12 {width: 100%;}
		}
	</style>
</head>
<body>
	<div class="header">
	<h1>Chania</h1>
</div>
<div class="row">
	<div class="col-3 col-s-3 menu">
		<ul>
			<li><a href="penerbangan.php">Penerbangan</a></li>
			<li><a href="kota.php">Kota</a></li>
			<li><a href="pulau.php">Pulau</a></li>
			<li><a href="kuliner.php">Kuliner</a></li>
		</ul>
	</div>

	<div class="col-6 col-s-9">
		<?php
			echo "Selain otak-otak, kamu juga bisa mencicipi masakan ikan asam pedas khas Tanjung Pinang. Masakan ikan asam pedas disini di olah khusus menggunakan bumbu-bumbu rempah pilihan sehingga bisa memberikan aroma yang sedap. Kuahnya yang kental dan berwarna merah membuat siapapun yang melihatnya ingin segera mencicipi.";
		?>
	</div>

	<div class="col-3 col-s-12">
		<div class="aside">
			<h2>Tentang</h2>
			<p>Tanjung Pinang adalah ibukota dari Kepulauan Riau.</p>
			<h2>Posisi</h2>
			<p>Provinsi Kepulauan Riau termasuk provinsi kepulauan di Indonesia.</p>
			<h2>Transportasi</h2>
			<p>Anda dapat berkunjung ke Kepulauan Riau melalui berbagai jenis transportasi, baik darat, laut, maupun udara</p>
		</div>
	</div>
</div>

<div class="footer">
	<p>Smk</p>
</div>
</body>
</html>