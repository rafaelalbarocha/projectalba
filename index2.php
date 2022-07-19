<?php
$conn = mysqli_connect('localhost', 'root', '', 'soccer');
if(!$conn){
	echo 'Connection error: ' . mysqli_connect_error();
}
$sql = 'SELECT title, note FROM soccernews';
$result = mysqli_query($conn, $sql);
$soccer = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>
<?php
$conn1 = mysqli_connect('localhost', 'root', '', 'soccer');
if(!$conn1){
	echo 'Connection error: ' . mysqli_connect_error();
}
$sql1 = 'SELECT equipo1, equipo2, hora FROM juegs';
$result1 = mysqli_query($conn1, $sql1);
$soccer1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
mysqli_free_result($result1);
mysqli_close($conn1);
?>
<?php
$conn3 = mysqli_connect('localhost', 'root', '', 'soccer');
if(!$conn3){
	echo 'Connection error: ' . mysqli_connect_error();
}
$sql3 = 'SELECT nombre FROM usuarios';
$result3 = mysqli_query($conn3, $sql3);
$soccer3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
mysqli_free_result($result3);
mysqli_close($conn3);
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
		<title>Sports</title>
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
		<div id="free-flash-header" style="width:820px;margin:0 auto;text-align:right;position:relative;bottom:0px;margin-top:63px;color:#363636;font-size:10px;font-family:Verdana"><strong>musica de fondo</strong> : <a href="https://lamusicagratis.com">musica de fondo para video</a></div>																			 
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
							<li class="active">		
								<a href="index.htm">
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
							
							<li>	
								<a href="news.php">
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
						</ul>

						<audio id="nav-sound" preload="auto">
							<source src="audio/bouton.mp3">
						</audio>

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
					
					<div class="col-md-12 col-xs-12 no_right slider">
						<div id="wowslider-container1">
							<div class="ws_images"><ul>
									<li><img src="images/slider/descarga.jpg" alt="flower" title="" id="wows1_0"/></li>
									<li><img src="images/slider/descarga2.jpg" alt="My best photos" title="My best photos" id="wows1_1"/></li>
									<li><img src="images/slider/descarga3.jpg" alt="MY  VOYAGE" title="MY VOYAGE" id="wows1_2"/></li>
								</ul></div>

							<div class="ws_shadow"></div>
						</div>
					</div>

<br>
<br>
					<div class="row">

						
									<h4 class="green">Users from Database</h4><br>																													
<table border="1" style="margin: 0 auto;">
  <tr>
    <td bgcolor="grey"><font size ="3", color ="black">Title</td>
	<td bgcolor="grey"><font size ="3", color ="black">Note</td>
  </tr>
  <tr>
  <td bgcolor="white"><font size ="3", color ="black">
   <?php foreach($soccer as $soccers){?>
 	<p><?php echo htmlspecialchars($soccers['title']); ?></td>
 <?php }?>
 <td bgcolor="white"><font size ="3", color ="black">
 <?php foreach($soccer as $soccers){?>
 	<p><?php echo htmlspecialchars($soccers['note']); ?></td>
 <?php }?>
  </tr>
</table>
<br>
<h4 class="green">Today's matches</h4><br>
<table border="1" style="margin: 0 auto;">
  <tr>
    <td bgcolor="grey"><font size ="3", color ="black">Team</td>
	<td bgcolor="grey"><font size ="3", color ="black">Team</td>
    <td bgcolor="grey"><font size ="3", color ="black">Time</td>
  </tr>
  <tr>
  <td bgcolor="white"><font size ="3", color ="black">
   <?php foreach($soccer1 as $soccers){?>
 	<p><?php echo htmlspecialchars($soccers['equipo1']); ?></td>
 <?php }?>
 <td bgcolor="white"><font size ="3", color ="black">
 <?php foreach($soccer1 as $soccers){?>
 	<p><?php echo htmlspecialchars($soccers['equipo2']); ?></td>
 <?php }?>
 <td bgcolor="white"><font size ="3", color ="black">
 <?php foreach($soccer1 as $soccers){?>
 	<p><?php echo htmlspecialchars($soccers['hora']); ?></td>
 <?php }?>
  </tr>
</table>
								</div>						
							</article>
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
				</div>
			</div>
		</footer>
		<!-- end footer -->
    </div>

		<audio id="audio-bg">
		    <source src="audio/music.mp3">
		</audio>
		<?php
		$to = "camacamafg@gmail.com, destinatario2@email.com, destinatario3@email.com";
$subject = "Asunto del email";
$message = "Este es mi primer envío de email con PHP";
$headers = "From: mi@cuentadeemail.com" . "\r\n" . "CC: destinatarioencopia@email.com";
 
mail($to, $subject, $message, $headers);
?>
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