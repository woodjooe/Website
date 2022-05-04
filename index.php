<?php
require_once "dbconnect.php";
require_once 'model/GET.php';
//require_once 'model/date.php';


//$Tod=getDateDiff("2023","04","27");
$categories=getCategories($pdo);

/*$Team=getAppMo($pdo);
$News=getAppWeb($pdo);
$productsEagles=getEag($pdo);
$productsSchrimps=getSch($pdo);
*/

/*
print($categories[2][0]);
foreach($categories as $category){
    echo "<p>\n</p>";
    print_r($category[0]);
}
*/


?>

<!DOCTYPE html>


<html lang="en-US">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tech Club </title>
	
	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/cssTech/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/css/cssTech/normalize.css" />
	<link rel="stylesheet" href="assets/css/cssTech/style.css" />
	<link rel="stylesheet" href="assets/css/cssTech/demo.css" />

	
	<!-- COLORS -->
	<link rel="stylesheet" href="assets/css/cssTech/green.css" title="green"> <!-- DEFAULT COLOR/ CURRENTLY USING -->
    <!-- 

	<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
 	-->

	
</head>


<body>
<!-- preloader -->
<div id="st-preloader">
		<div id="pre-status">
			<div class="preload-placeholder"></div>
		</div>
</div>
	
<!-- HEADER -->
<header class="nav" id="nav">
        <div>
            <a href="#" class="nav__logo"></a>
        </div>

        <div class="nav__menu" id="nav-menu">

				<div class="nav__item"><a href="#<?= $categories[0][0] ?>" class="nav__link"><?= $categories[0][0] ?></a></div>
                <div class="nav__item"><a href="#<?= $categories[1][0] ?>" class="nav__link"><?=$categories[1][0] ?></a></div>
                <div class="nav__item"><a href="#<?= $categories[2][0] ?>" class="nav__link"><?= $categories[2][0] ?></a></div>


                <div class="nav__item nav__item_S"><a href="#<?= $categories[2][0] ?>" class="nav__link"> contact</a></div>


        		<div class="nav__toggle" id="nav-toggle">
            		<i class='bx bx-menu'></i>
        		</div>
		</div>
</header>
<!--main-->


	<section id="home-page" >
		<div class="container-fluid home-bg" id="<?= $categories[0][0] ?>" alt="<?= $categories[0][0] ?>">
			<div class="row">
				<!-- COUNTDOWN -->      
				<div class="row">
					<div class="col-sm-12 tk-countdown">
						<div class="row">
							<div class="days"> 
								<!--
								<div>// $Tod[0] </div>
								<div>Days</div>
							</div>
							<div class="hours">
								<div>//$Tod[1] </div>
								<div>Hours</div>
							</div>
							<div class="minutes">
								<div>// $Tod[2] </div>
								<div>Minutes</div>
							</div>
							<div class="seconds">
								<div>//$Tod[3] </div>
								<div>Seconds</div> -->
							</div>
						</div>
					</div>
				</div>
				<!-- /COUNTDOWN -->
				<div class="col-md-12 text-center home-page">

					<h1 class="home__title" >Welcome to </br></br></br>
					<!--<span> &nbsp&nbsp&nbsp</span> -->

					<span class="typed-text"></span>

              		<span class="cursor">|</span>
					</h1>


        <div class="home__img" id="home__img">
            <img src="assets/images/imagesY/bgLogin.png" alt="">
        </div>
		<!-- CASE OF AN IMPORTANT EVENT
					<h2>Stay tuned</h2>
					<div class="container">
						<!- - COUNTDOWN - ->      
						<div class="row">
							<div class="col-sm-12 tk-countdown">
								<div class="row">

								</div>
							</div>
						</div>
						<!- - /COUNTDOWN - ->
					</div>
-->
					<h3>Subscribe on newsletter</h3>
					<form id="subscribe" class="form-group subscribe-area">
						<input type="email" name="subscribe-email" id="st-email" class="form-control subscribe-box" text-align="center" placeholder="Enter your email...">
						<button type="submit" name="subscribe-submit" class="btn btn-primary btn-lg submit-bt" >Subscribe</button>
						<br>
						<label for="st-email" class="st-subscribe-message"></label>
					</form>
                    <div class="row">
					<div class="col-sm-12 social-shear text-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</div><!-- /.social-shear -->
                    </div>    
				</div>
			</div>
		</div>
	</section><!-- /#home-page -->
	
	<section >
		<div class="container" id="<?= $categories[1][0] ?>" alt="<?= $categories[1][0] ?>">
			<div class="sectionF">
				<div class="white text-center">
					<h1>Feature</h1>
					<div class="service-aro-icon">
						<div class="service-aro-left"></div>
							<i class="fa fa-gift"></i>
						<div class="service-aro-right"></div>
					</div>
					<h2>Welcome</h2>
					<p >Feel free to click on the boxes below</p>
				</div>
				<div class="sectionF1">
				<span class="service">
					<i class="fa fa-laptop "></i>
					<h3 class="white">OOOO</h3>
					<p class="white">some stuff</p>
				</span>
				<span class="service">
					<i class="fa fa-picture-o"></i>
					<h3 class="white">News</h3>
					<p class="white">Find out lastest news</p>
				</span>
				</div>

				<div class="sectionF2">
				<div class="service">
					<i class="fa fa-rocket" type=button onclick=window.location.href='gameFile.php'></i>
					<h3 class="white">Game</h3>
					<p class="white">Try out our Game</p>
				</div>
				<div class="service">
					<i class="fa fa-shopping-cart"></i>
					<h3 class="white">EEEE</h3>
					<p class="white">more stuff</p>
				</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /#service-page -->

	<section id="about-page1" >
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="about-title" id="<?= $categories[2][0] ?>" alt="<?= $categories[2][0] ?>">About Us</h1>
					<div class="service-aro-icon">
						<div class="service-aro-left"></div>
							<i class="fa fa-group"></i>
						<div class="service-aro-right"></div>
					</div>
					<h2>Meet the team</h2>
				</div>
	
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /#about-page -->
	<section id="about-page">
		<div class="container">
			<div class="section">
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/SC.jpg" alt="" class="member-img im"/>
						<div class="member-social im">
							<a class="facebook-icon im" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>1st</h3>
					<span>President</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/SS.jpg" alt="" class="member-img im"/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">		
					<h3>2nd</h3>
                    <span>Vice-President</span>
					</span>
				</div>
				
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/MB.jpg" alt="" class="BureauPic"/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>3rd</h3>
                    <span>Vice-President</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/KY.jpg" alt="" class="BureauPic"/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>4th</h3>
                    <span>Treasurer</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/EAM.jpg" alt="" class="BureauPic"/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>5th</h3>
                    <span>Logistics Manager</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/AA.jpg" alt="" class="BureauPic"/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>6th</h3>
                    <span>Logistics Manager</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/WM.jpg" alt="" class="BureauPic"/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>7th</h3>
                    <span>Event Manager</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/HL.jpg" alt="" class="BureauPic"/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>8th</h3>
                    <span>Event Manager</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/HBR.jpg" alt="" class="BureauPic"/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>9th</h3>
                    <span>HR Manager</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/MBR.jpg" alt="" class="BureauPic"/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>10th</h3>
                    <span>HR Manager</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/IBL.jpg" alt="" class="BureauPic"/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>11th</h3>
                    <span>Community Manager</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/AG.jpg" alt="" class="BureauPic"/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>12th</h3>
                    <span>Community Manager</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/MYG.jpg" alt="" class="BureauPic"/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>13th</h3>
                    <span>Project Manager</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/TJ.jpg" alt=""/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>14th</h3>
                    <span>Project Manager</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/AB.jpg" alt=""/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>15th</h3>
                    <span>Designer</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/RM.jpg" alt=""/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>16th</h3>
                    <span>Designer</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im">
						<img src="assets/images/BureauMTC/DM.jpg" alt=""/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>17th</h3>
                    <span>Designer</span>
					</span>
				</div>
				<div class="col-md-4 text-center member img">
					<div class="member-img im " >
						<img src="assets/images/BureauMTC/MBS.jpg" alt=""/>
						<div class="member-social im">
							<a class="facebook-icon" href=""><i class="fa fa-facebook"></i></a>
							<a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a>
							<a class="linkedin-icon" href=""><i class="fa fa-linkedin"></i></a>
							<a class="google-plus-icon" href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<span class="wid">
					<h3>18th</h3>
					<span>Designer</span>
					</span>
</div>

		<div class="scrollbar" id="style-1">
			<div class="force-overflow"></div>
		</div>

""			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /#about-page -->
	
	

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
				</div>
			</div>
		</div>
	</footer><!-- /.footer -->
	
	<!-- JS -->

	<script type="text/javascript" src="assets/js/jsTech/jquery.min.js"></script><!-- jQuery -->
	<script type="text/javascript" src="assets/js/jsTech/countdown.js"></script><!-- Countdown -->
	<script type="text/javascript" src="assets/js/jsTech/scripts.js"></script><!-- Scripts -->

	<!-- =========================================================
	     STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
	============================================================== -->
	<script type="text/javascript" src="assets/js/jsTech/styleswitcher.js"></script>
	<script type="text/javascript" src="assets/js/jsTech/demo.js"></script>
	<div class="demo-style-switch" id="switch-style">
		<a id="toggle-switcher" class="switch-button"><i class="fa fa-cog fa-spin fa-fw"></i></a>
		<div class="switched-options">				
			<div class="config-title">
			</div>
			<ul class="styles">
				<li><a href="#" onclick="window.location.href='loginPage.php'" title="Blue">
				<div class="BG">
					<h2>Sign Up</h2>
				</div>
				</a></li>
				
				<li><a href="#" onclick="window.location.href='loginPage.php'" title="Purple">
				<div class="GB">
					<h2>Sign In</h2>
				</div>
				</a></li>
				
			</ul>
		</div>
	</div>

</body>
<script src="assets/js/jsY/main.js"></script>

</html>
