<?php
$conn2 = mysqli_connect('localhost', 'root', '', 'soccer');
if(!$conn2){
	echo 'Connection error: ' . mysqli_connect_error();
}
$sql = 'SELECT title, note FROM soccernews';
$result2 = mysqli_query($conn2, $sql);
$soccer2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
mysqli_free_result($result2);
mysqli_close($conn2);
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="fr"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="fr"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="fr"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js" lang="fr"> <![endif]-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>musica de fondo para video</title>
		<!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->
<style>#free-flash-header a,#free-flash-header a:hover {color:#363636;}#free-flash-header a:hover {text-decoration:none}</style>
<!--END OF TERMS OF USE-->

		<!-- Bootstrap -->
		<link href="css/reset.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/font.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/mobile.css" rel="stylesheet" type="text/css" media="all">
		<!-- end Bootstrap -->

		<link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,900italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>

		<!-- LightBox -->
		<link href="css/lightbox/vlightbox.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/lightbox/style-gallery.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/lightbox/visuallightbox.css" rel="stylesheet" type="text/css" media="all">
		<link rel="stylesheet" type="text/css" href="css/lightbox/style.css" />
		<!-- end LightBox -->


		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

			

	</head>
	
	<body>
  <div class="page-container">		
		<!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->
	<div id="copy" style="height: 75px; position: absolute; bottom: 0px; left:0px; border: none; width: 100%;">
		<div id="free-flash-header" style="width:820px;margin:0 auto;text-align:right;position:relative;bottom:0px;margin-top:63px;color:#363636;font-size:10px;font-family:Verdana"><strong>musica relajante</strong> : <a href="https://lamusicagratis.com/musica-relajante">lamusicagratis.com</a></div>																			 
	</div>	
	<!--END OF TERMS OF USE-->	


		<header>
			<div class="container">

				<!-- logo -->
				<div class="logo">
					<a href="">
						<div class="name_logo">
							<p> <span class="orange">S</span>OCCER</p>
							<p><span class="green">F</span>AN</p>
						</div>
						<div class="picture_logo">
							<div class="orange_square"></div>
							<div class="green_square"></div>
						</div>
					</a>
				</div>
				<!-- logo -->

			</div>
		</header>


		<div id="content">
			<div class="container container-content">

				<!-- sidebar -->
				<aside class="col-md-3 col-xs-12 no_left">
					<!-- naviguation -->
					<nav id="nav">
						<ul>
							<li>	
								<a href="index.php">
									<i class="icon-arrow"></i>
									<span>HOME</span>
									<div class="bg-nav"></div>
								</a>
							</li>
							<li>	
								<a href="about.htm">
									<i class="icon-arrow"></i>
									<span>ABOUT</span>
									<div class="bg-nav"></div>
								</a>
							</li>
							
							<li class="active">	
								<a href="news.htm">
									<i class="icon-arrow"></i>
									<span>NEWS</span>
									<div class="bg-nav"></div>
								</a>
							</li>
							<li>	
								<a href="contact.htm">
									<i class="icon-arrow"></i>
									<span>CONTACT US</span>
									<div class="bg-nav"></div>
								</a>
							</li>

							<audio id="nav-sound" preload="auto">
								<source src="audio/bouton.mp3"></source>
							</audio>

						</ul>
					</nav>
					<!-- end naviguation -->

					<div class="bloc ">
						<h3 class="grey">News & Events</h3>
						<span class="date green">01.02.2009</span>
						<p class="grey">Lorem ipsum dolor sit amet igitur lex in amicitia. Praesent dignissim, lectus pharetra blandit cursus, urna nibh sagittis nulla, et pellentesque.Lorem sapien vel neque. Maecenas auctor. </p>
						<a class="orange underline" href="">learn more...</a>
					</div>

				</aside>
				<!-- end sidebar -->

				<!-- end content -->
				<div class="col-md-9 col-xs-12 no_right">
					<div class="row">
					<font color='green'>
						<h2>Now Soccer News</h2>
					</font>
						<div class="col-md-4 col-xs-12">
							<article>

								<div class="vlightbox-cont bloc-img full_width">
									<a class="vlightbox1" href="images/news1.png" title="news1">
										<img src="images/thumbs/news1.png" alt="news1.png"/>
									</a>
									<span class="vlb">
										Caption here
									</span>
								</div>
								
							</article>
						</div>

						<div class="col-md-4 col-xs-12">
							<article>

								<div class="vlightbox-cont bloc-img full_width">
									<a class="vlightbox1" href="images/news2.png" title="news2">
										<img src="images/thumbs/news2.png" alt="news2.png"/>
									</a>
									<span class="vlb">
										Caption here
									</span>
								</div>

							</article>
						</div>

						<div class="col-md-4 col-xs-12">
							<article>

								<div class="vlightbox-cont bloc-img full_width">
									<a class="vlightbox1" href="images/news3.png" title="news3">
										<img src="images/thumbs/news3.png" alt="news3.png"/>
									</a>
									<span class="vlb">
										Caption here
									</span>
								</div>

							</article>
						</div>
						<br>
						<div class="col-md-12">
							<article>
							<center>
							<font color='grey'>
								<h1><?php foreach($soccer2 as $soccers2){?>
								<?php echo htmlspecialchars($soccers2['title']); ?>
								<?php }?></h1>
								</font>
							</center>
								<br>
								<center>
								<font color='white'>
								<?php foreach($soccer2 as $soccers2){?>
								<?php echo htmlspecialchars($soccers2['note']); ?>
								<?php }?>	
								</font>
								</center>	
						</article>
						</div>

					</div>

				</div>
				<!-- end content -->

			</div>			
		</div>


		<!-- footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">

					<div class="col-md-8 col-xs-12 align_right">
						<p class="copyright">Copyright &#169; 2021 YOUR NAME</p>
					</div>

					<div class="col-md-4 col-xs-12 align_right">
						<p class="dark_grey small_text"></p>
					</div>

				</div>
			</div>
		</footer>
		<!-- end footer -->
		</div>		
		
    <script type='text/javascript' src="js/jquery-2.1.3.js"></script>
    <script type='text/javascript' src="assets/js/visuallightbox.js"></script>
    <script type='text/javascript' src="assets/js/vlbdata.js"></script>
    <script type="text/javascript" src="assets/js/wowslider.js"></script>
    <script type="text/javascript" src="assets/js/wowslider-gallery.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<script type="text/javascript" src="assets/js/script-gallery.js"></script>
    <script type='text/javascript' src="js/app.js"></script>


  </body>
</html>


