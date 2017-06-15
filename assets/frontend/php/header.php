<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"><!--Mobil için yeniden boyutlandırma-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>Blog | Ender İMEN</title><!--Başlık-->
	
	<link rel="shortcut icon" href="..\img\.ico" type="image/x-icon" />

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.css">
	<link rel="stylesheet" href="../css/my-style.css">
	<script src="../js/jquery-3.2.0.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!--Menü-->
	<div class="navbar navbar-inverse navbar-static-top myMenu"> <!--Menü barımız. NOT:Burada inverse yerine default da kulanabilirdik sadece fark inverse de border-radius var ve arkaplan siyah-->
		<!--Menü sekmeleri-->
		<div class="container"><!--Menü yü ve içerisinde bulunan elementleri ortalamaya yarıyor.-->
			<a href="index.php" class="navbar-brand" style="color: white">Anasayfa</a><!--Anasayfa Yönlendirme-->
			
			<div class="navbar-header"><!--Kutucuğa tıklandığı zaman menü sekmeleri navbarda kalıyordu biz de navbar-header i kullanarak ikisini birbirinden ayırdık-->
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbarSec"><!--Sayfa sıkıştırıldığında çıkan menü aç kutucuğunu oluşturduk-->
							<span class="sr-only">Menü</span>
							<span class="icon-bar"></span><!--Sayfa küçültüğünde navbarın sağ tarafında çıkan menü açma kutucuğunun içerisindeki yatay çizgileri oluşturuyoruz-->
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
				</button>
			</div>

			<!--Arama Kutusu-->
			<form class="navbar-form navbar-right" role="search">
				
					<div class="form-group"> 
				    	<input type="text" class="form-control" placeholder="Sitede Ara">
                            <span class="input-group-btn">
                        	</span>
				  	</div>
			</form>
			<!--Arama Kutusu END-->
			

			<div class="collapse navbar-collapse navbarSec">	<!--Sayfa küçültüldüğünde menü yü grup haline getiriyoruz-->
				<ul class="nav navbar-nav navbar-right">		<!--Menü başlıklarını oluşturduk-->
					<li><a href="hakkimda.php" title="">Ben Kimim ?</a></li>
					<li><a href="iletisim.php" title="">İletişim</a></li>
				</ul>
			</div>
		</div>
		<!--Menü sekmeleri END-->
	</div>