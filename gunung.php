  <?php

    include 'koneksi2.php';
?>

<!DOCTYPE html>
<html>
<head>

	<title>E-Holiday Kediri City</title>
	<link rel="stylesheet" type="text/css" href="airterjun.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
	<header style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('gunung10.jpg'); margin-bottom: 650px;">
		<div class="nav">
			<h2 class="logo"><span>E-</span>Holiday</h2>
			<ul>
				<li><a href="index.html">Beranda</a></li>
				<li class="sub-nav">
					<a href="#">Destinasi Wisata</a>
					<div class="sub-nav-konten">
						<a href="airterjun.php">Air Terjun</a>
						<a href="#">Gunung</a>
						<a href="taman.php">Taman</a>
						<a href="candi.php">Candi</a>
					</div>
				</li>
				<li><a href="vt2.php">Virtual Tour</a></li>
				<li><a href="event.php">Event</a></li>
				<li><a href="galeri.php">Galeri</a></li>
				<li><a href="tentang.html">Tentang</a></li>
				</div>
			</ul>
		</div>	
		</div>
	
	<div class="main">
		<div class="text">
			<h1>Destinasi Wisata</h1>
			<h1>Gunung</h1><br>
				<div class="active">
					<a href="#home" class="btnone">Lihat Selengkapnya</a>
				</div>
			</div>
		</div>
		
	
	</div>
	</header>
      <?php
            $no=0;
            $result = mysqLi_query($koneksi2,"SELECT * FROM tbdetailwisata WHERE kategori = 'Gunung' ORDER BY nm_wisata ASC");
            while($row = mysqli_fetch_array($result)){
                $no++
            ?>
	
	<div class="wrapper">
		<section id="home">
			<div class="kolom">
				<h1><?php echo $row['nm_wisata'];?></h1><br>
				<center><img src="image/<?php echo $row['foto'];?>"></center>
				<td><?php echo $row['deskripsi'];?></td><br>
				<td>Lokasi : <?php echo $row['lokasi'];?></td><br>
				<center><?php echo $row['map'];?></center>
			</div>
		</section>
	</div>
	
   
    <?php } ?> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
<footer class="bg-light text-center text-lg-start">
	<div class="text-center p-3" style="background-color: #fabd02; font-weight: bold;">
    	© 2021 Copyright: PAGE
	</div>
</footer>
</html>