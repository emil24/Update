<?php include 'admin/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://localhost/code/emil/assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/code/emil/assets/css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<section id="main">
	<section id="home">
		<section id="header">
			<nav class="navbar navbar-inverse">
			  	<div class="container-fluid">
				  	<div class="container">
					    <div class="navbar-header">
					      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span> 
					      	</button>
					      <a class="navbar-brand" href="#"><img src="img/3.png"></a>
					    </div>
					    <div class="collapse navbar-collapse" id="myNavbar">
					      <ul class="nav navbar-nav">
					        <li id="homeLink" class="active" onclick="return false"><a href="#">HOME</a></li>
					        <li id="aboutLink"><a href="#" onclick="return false">ABOUT</a></li>
					        <li id="featuresLink"><a href="#" onclick="return false">FEATURES</a></li> 
					        <li id="pricesLink"><a href="#" onclick="return false">PRICES</a></li>
					        <li id="feedbackLink"><a href="#" onclick="return false">FEEDBACK</a></li>
					        <li id="teamLink"><a href="#">TEAM</a></li>
					        <li id="contactsLink"><a href="#" onclick="return false">CONTACTS</a></li>
					        <li class="dropdown">
					          	<a class="dropdown-toggle" data-toggle="dropdown" href="#">EXTRA <span class="caret"></span></a>
					          	<ul class="dropdown-menu">
						            <li id="homepages"><a href="#">HOMEPAGES <span class="rightCaret"><i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
						            </li>
						            <li id="blog"><a href="#">BLOG <span class="rightCaret"><i class="fa fa-caret-right" aria-hidden="true"></i></span></a></li>
						            <li id="ecommerce"><a href="#">ECOMMERCE <span class="rightCaret"><i class="fa fa-caret-right" aria-hidden="true"></i></span></a></li>
						            <li><a href="#">REGISTRATION</a></li>
						            <li><a href="#">FORMS</a></li>
						            <li><a href="#">SHORTCODES</a></li>
					          </ul>
					        </li><!-- end .dropdown -->
					      </ul><!-- end .nav .navbar-nav -->
					      <ul class="nav navbar-nav navbar-right">
					        <li><a href="#">LOGIN</a></li>
					        <li><button>SIGN UP</button></li>
					      </ul>
					    </div><!-- end .navbar-collapse -->
					</div><!-- end .container -->
			  	</div>
			  	<ul id="homepagesMenu">
					<li><a href="#">DEFAULT</a></li>
					<li><a href="#">CLICKTHROUGH</a></li>
					<li><a href="#">COLORED</a></li>
					<li><a href="#">FAST REGISTRATION</a></li>
					<li><a href="#">PROMO</a></li>
					<li><a href="#">WAITING</a> LIST</li>
					<li><a href="#">VIDEO BACKGROUND</a> </li>
					<li><a href="#">YOUTUBE  EMBED</a></li>
					<li><a href="#">VIDEO EMBED</a></li>
				</ul><!-- end #homagesMenu -->
				<ul id="blogMenu">
					<li><a href="#">LIST</a></li>
					<li><a href="#">POST</a></li>
				</ul>
				<ul id="ecommerceMenu">
					<li><a href="#">PRODUCT GRID</a></li>
					<li><a href="#">PRODUCT LIST</a></li>
					<li><a href="#">PRODUCT PAGE</a></li>
					<li><a href="#">CART CHECKOUT</a></li>
					<li><a href="#">PAYMENT CONFIRMATION</a></li>
				</ul>
			</nav>

		</section><!-- end #header -->
		<section id="homeContainer" class="text-center">
			<div class="inner text-center">
				<h1 class="h1Tags">
					<?php
						$homeQuery = mysql_query("SELECT * FROM home");
						$homeArray = mysql_fetch_array($homeQuery);
						echo $homeArray['title'];
					?>
				</h1>
				<p>
					<?=$homeArray['des'];?>
				</p>
				<button>
					<i class="fa fa-shopping-cart" aria-hidden="true"></i> GET STARTED
				</button>
				<button>TAKE TOUR</button>
			</div>
		</section><!-- end #homeContainer -->
	</section><!-- end #home -->
		
	<section id="logo" class="container-fluid text-center">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-2 col-xs-12">
					<img src="img/logos/2.png" id="logo1">
				</div>
				<div class="col-md-3 col-xs-12">
					<img src="img/logos/2.png" id="logo2">
				</div>
				<div class="col-md-2 col-xs-12">
					<img src="img/logos/2.png" id="logo3">
				</div>
				<div class="col-md-3 col-xs-12">
					<img src="img/logos/2.png" id="logo4">
				</div>
				<div class="col-md-2 col-xs-12">
					<img src="img/logos/2.png" id="logo5">
				</div>
			</div>
		</div>
	</section>
	
	<section id="startup">
		<div class="container">
			<div class="row row1 text-center">
					<button id="firstTabBtn" class="activeBtn">FIRST TAB</button>
					<button id="secondTabBtn" >SECOND TAB</button>
					<button id="thirdTabBtn" >THIRD TAB</button>
			</div>
			<div class="row row2">
				<div class="firstTab">
					<?php
						$firstQuery = mysql_query("SELECT * FROM firsttab");
						$firstArray = mysql_fetch_array($firstQuery);
					?>
					<div class="col-md-6 col-xs-12" id="firstTabLeft">
						<img src="<?=$firstArray['img']?>">
					</div>
					<div class="col-md-6 col-xs-12" id="firstTabRight">
						<div class="firstTabText text-center">
							<h2 class="h2Tags"><?=$firstArray['title']?></h2>
							<h5 class="h5Tags"><?=$firstArray['des']?></h5>
							<p><?=$firstArray['text']?></p>
						</div>
						<div class="btnGroup text-center">
							<button>GET TEMPLATE</button>
							<button>SEE ELEMENTS</button>
						</div>
					</div>

				</div><!-- end .firstTab -->
				<div class="secondTab hide">
					<?php
						$secondQuery = mysql_query("SELECT * FROM secondtab");
						$secondArray = mysql_fetch_array($secondQuery);
					?>
					<div class="row">
						<div class="col-md-6 col-md-push-6 col-xs-12" id="secondTabRight">
							<img src="<?=$secondArray['img']?>">
						</div>
						<div class="col-md-6 col-md-pull-6 col-xs-12 text-center secondTabText" id="secondTabLeft">
							<h2><?=$secondArray['title']?></h2>
							<h5><?=$secondArray['des']?></h5>
							<p><?=$secondArray['text']?></p>
						</div>
					</div>
				</div><!-- end secondTab -->
				
				<div class=" container thirdTab hide">
					<div class="row text-center row1">
					<?php
						$thirdQuery = mysql_query("SELECT * FROM thirdtab");
						$thirdArray = mysql_fetch_array($thirdQuery);
					?>
						<h1><?=$thirdArray['title']?></h1>
						<p><?=$thirdArray['des']?></p>
					</div>
					<div class="row row2 text-center" id="thirdTabFooter">
						<div class="col-md-4 col-xs-12 panelTab">
							<i class="<?=$thirdArray['icon1']?>" aria-hidden="true"></i>
							<h4><?=$thirdArray['head1']?></h4>
							<p><?=$thirdArray['des1']?></p>
						</div>
						<div class="col-md-4 col-xs-12 panelTab">
							<i class="<?=$thirdArray['icon2']?>" aria-hidden="true"></i>
							<h4><?=$thirdArray['head2']?></h4>
							<p><?=$thirdArray['des2']?></p>
						</div>
						<div class="col-md-4 col-xs-12 panelTab">
							<i class="<?=$thirdArray['icon3']?>" aria-hidden="true"></i>
							<h4><?=$thirdArray['head3']?></h4>
							<p><?=$thirdArray['des3']?></p>
						</div>
					</div>
				</div><!-- end thirdTab -->

			</div><!-- end .row2 -->
		</div><!-- end .container -->
	</section><!-- end #startup -->
	
	<section id="technology">
		<div class="container">
			<div class="row techPanel">
				<div class="col-md-6 col-xs-12 techText" id="firstTechLeft">
					<h2 class="col-md-12">NEW AGE <span>TECHNOLOGY</span></h2>
					<p class="col-md-9">Lorem ipsum dolor sit atmet sit dolor greand fdanrh
					sdfs sit atmet sit dolor greand fdanrh sdfs</p>
					<p class="col-md-12">In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
				</div>
				<div class="col-md-6 col-xs-12 techImg" id="firstTechRight">
					<img src="img/features/1.png">
				</div>
			</div><!-- end .row1 -->
			<div class="row techPanel">
				<div class="col-md-6 col-xs-12 techImg" id="secondTechLeft">
					<img src="img/features/2.jpg">
				</div>
				<div class="col-md-6 col-xs-12 techText text-right" id="secondTechRight">
					<h2 class="col-md-12">HANG <span>ON TO</span> YER HELMET</h2>
					<p class="col-md-9 col-md-offset-3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh
					sdfs sit atmet sit dolor greand fdanrh sdfs</p>
					<p class="col-md-12">In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
				</div>
			</div>
		</div><!-- end .container -->
	</section><!-- end #technology -->

	<section id="statistics">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-xs-12 statOpt">
					<a href="#statistics" id="opt1" class="activeOpt clicked" onclick="return false">
						<div class="opt1">
							<h3>LOREM DOLOR</h3>
							<p>Sit amet, consectetur adipisicing elit. Fuga esse mollitia</p>
						</div>
					</a>
					<a href="#statistics" id="opt2" onclick="return false">
						<div class="opt1">
							<h3>LOREM DOLOR</h3>
							<p>Sit amet, consectetur adipisicing elit. Fuga esse mollitia</p>
						</div>
					</a>
					<a href="#statistics" id="opt3" onclick="return false">
						<div class="opt1">
							<h3>LOREM DOLOR</h3>
							<p>Sit amet, consectetur adipisicing elit. Fuga esse mollitia</p>
						</div>
					</a>
				</div><!-- end .statOpt -->

				<div class="col-md-8 col-md-pull-1 col-xs-12 statImg">
					<div class="img1">
						<img id="stasImg1" src="img/features/2.png">
					</div>
					<div class="img2 hide">
						<img id="stasImg2" src="img/features/3.png">
					</div>
					<div class="img3 hide">
						<img id="stasImg3" src="img/features/4.png">
					</div>
				</div>
			</div><!-- end .row -->
		</div><!-- end .container -->
	</section><!--end #statistics -->

	<section id="features">
		<div class="container text-center">
			<div class="row" id="featuresRow1">
				<div class="col-md-3 col-xs-12">
					<i class="fa fa-cloud-download" aria-hidden="true"></i>
					<h4>FEATURE 1</h4>
					<p>
						Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
					</p>
				</div>
				<div class="col-md-3 col-xs-12">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					<h4>FEATURE 2</h4>
					<p>
						Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
					</p>
				</div>
				<div class="col-md-3 col-xs-12">
					<i class="fa fa-desktop" aria-hidden="true"></i>
					<h4>FEATURE 3</h4>
					<p>
						Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
					</p>
				</div>
				<div class="col-md-3 col-xs-12">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
					<h4>FEATURE 4</h4>
					<p>
						Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
					</p>
				</div>
			</div>
			<div class="row" id="featuresRow2">
				<div class="col-md-3 col-xs-12">
					<i class="fa fa-magic" aria-hidden="true"></i>
					<h4>FEATURE 5</h4>
					<p>
						Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
					</p>
				</div>
				<div class="col-md-3 col-xs-12">
					<i class="fa fa-line-chart" aria-hidden="true"></i>
					<h4>FEATURE 6</h4>
					<p>
						Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
					</p>
				</div>
				<div class="col-md-3 col-xs-12">
					<i class="fa fa-shield" aria-hidden="true"></i>
					<h4>FEATURE 7</h4>
					<p>
						Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
					</p>
				</div>
				<div class="col-md-3 col-xs-12">
					<i class="fa fa-star" aria-hidden="true"></i>
					<h4>FEATURE 8</h4>
					<p>
						Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
					</p>
				</div>
			</div>
		</div><!-- end .container -->
	</section><!-- end #features -->

	<section id="updates">
		<div class="container">
			<div class="row">
				<div id="updatesLeft">
					<div class="col-md-5 col-xs-12 text-center">
						<h1>GET LIVE UPDATES</h1>
						<p>No spam promise - only latest news and prices!</p>
					</div>
				</div>
				<div id="updatesRight">
					<div class="col-md-2 col-xs-12">
						<input  type="text" placeholder="Your name" id="name">
					</div>
					<div class="col-md-3 col-xs-12">
						<input  type="text" placeholder="your@email.com" id="email">
					</div>
					<div class="col-md-2 col-xs-12">
						<button>SUBSCRIBE</button>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end #updates -->

	<section id="prices">
		<div class="container text-center">
			<div id="packages">
				<div class="row row1">
					<h1>PRODUCT <span>PACKAGES</span></h1>
					<p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh s 
					dfs sit atmet sit dolor greand fdanrh sdfs</p>
				</div><!-- end .row1 -->

				<div class="row row2">
					<div class="col-md-4 col-xs-12">
						<div class="col-md-12 pricesPanel disabled">
							<h2>INDIVIDUAL</h2>
							<div class="row price">
								<p><span>$</span>19</p>
								<p class="period">PER MONTH</p>
							</div>
							<div class="package">
								<ul>
									<li><span>Free</span> Domain</li>
									<li><span>Unlimited</span> Websites</li>
									<li><span>Unlimited</span> Bandwidth</li>
									<li><span>Unlimited</span> Disk Space</li>
								</ul>
								<button>GET STARTED</button>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="col-md-12 pricesPanel panelHover">
							<h2>STUDIO</h2>
							<div class="row price">
								<p><span>$</span>29</p>
								<p class="period">SUBSCTIPTION</p>
							</div>
							<div class="package">
								<ul>
									<li><span>Free</span> Domain</li>
									<li><span>Unlimited</span> Websites</li>
									<li><span>Unlimited</span> Bandwidth</li>
									<li><span>Unlimited</span> Disk Space</li>
								</ul>
								<button>GET STARTED</button>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="col-md-12 pricesPanel panelHover">
							<h2>ENTERPRISE</h2>
							<div class="row price">
								<p><span>$</span>49</p>
								<p class="period">PER MONTH</p>
							</div>
							<div class="package">
								<ul>
									<li><span>Free</span> Domain</li>
									<li><span>Unlimited</span> Websites</li>
									<li><span>Unlimited</span> Bandwidth</li>
									<li><span>Unlimited</span> Disk Space</li>
								</ul>
								<button>GET STARTED</button>
							</div>
						</div>
					</div>
				</div><!-- end .row2 -->
			</div><!-- end #packages -->
			
			<div id="awards">
				<div class="row row3">
					<h1><span>OUR</span> AWARDS</h1>
					<p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh s 
					dfs sit atmet sit dolor greand fdanrh sdfs</p>
				</div><!-- end .row3 -->

				<div class="row row4">
					<div class="col-md-10 col-md-offset-1 col-xs-12">
						<div class="col-md-3 col-xs-12">
							<img src="img/logos/2.png">
						</div>
						<div class="col-md-3 col-xs-12">
							<img src="img/logos/2.png">
						</div>
						<div class="col-md-3 col-xs-12">
							<img src="img/logos/2.png">
						</div>
						<div class="col-md-3 col-xs-12">
							<img src="img/logos/2.png">
						</div>
					</div>
				</div><!-- end .row4 -->
			</div><!-- end #awards -->
		</div><!-- end .container -->
	</section><!-- end #prices -->

	<section id="feedback">
		<div class="container-fluid">
			<div class="container" id="clientsSay">
				<div class="row row1">
					<div class="col-md-1 col-md-offset-1">
						<img src="img/icon/quotes-a.png" class="quotes">
					</div>
					<div class="col-md-8 text-center">
						<h1>WHAT <span>CLIENTS</span> SAY</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.
						</p>
					</div>
					<div class="col-md-1">
						<div class="col-md-12">
							<img src="img/icon/quotes-b.png" class="quotes" id="secondQuote">
						</div>
					</div>
				</div><!-- end .row1 -->
			</div><!-- end .container -->
		</div><!-- end .container-fluid -->
		<div class="container" id="clients">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-xs-12 row2">
					<div class="col-md-4 client">
					<a href="#" onclick="return false">
						<img src="img/people/1.jpg" width="69px">
						<p>AMY WARNER<br>
						<span>Investor at</span>Pear Inc.</p>
					</a>
					</div>
					<div class="col-md-4 col-xs-12 client clientActive">
					<a href="#" onclick="return false">
						<img src="img/people/2.jpg" width="69px">
						<p>JOHN DOESOME<br>
						<span>Accountant at</span>Pear Inc.</p>
					</a>
					</div>
					<div class="col-md-4 col-xs-12 client">
					<a href="#" onclick="return false">
						<img src="img/people/1.jpg" width="69px">
						<p>PETER MOOSOME<br>
						<span>Investor at</span>Pear Inc.</p>
					</a>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end #feedback -->

	<section id="team">
		<div class="container text-center">
			<div class="row row1">
				<div class="col-md-10 col-md-offset-1 col-xs-12">
					<h1>BEHIND <span>THE</span> SCENES</h1>
					<p class="col-md-6 col-md-offset-3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh s 
					dfs sit atmet sit dolor greand fdanrh sdfs</p>
					<p class="col-md-10 col-md-offset-1">In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil
					ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae
					qui non vident, nihilamane umquam magnum ac cognitione. In his rest gestiret. Sed ipsam inchoavit, nihil ampliusuma.
					Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident,
					nihilamane umquam magnum ac cognitione.</p>
				</div>
			</div><!-- end .row1 -->
			<div class="row row2">
				<div class="col-md-3 col-xs-6">
					<div class="col-md-12" id="member1">
						<img src="img/people/3.jpg">
						<p>MIKE BOLDER</p>
						<p>Developer</p>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="col-md-12"  id="member2">
						<img src="img/people/4.jpg">
						<p>MIKE BOLDER</p>
						<p>Developer</p>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="col-md-12"  id="member3">
						<img src="img/people/5.jpg">
						<p>MIKE BOLDER</p>
						<p>Developer</p>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="col-md-12"  id="member4">
						<img src="img/people/6.jpg">
						<p>MIKE BOLDER</p>
						<p>Developer</p>
					</div>
				</div>
			</div><!-- end .row2 -->
		</div><!-- end .container -->
	</section><!-- end #team -->

	<section id="launch">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-xs-12 text-center">
					<i class="fa fa-bullhorn" aria-hidden="true"></i>
					<div class="launchText">
						<h1>LAUNCH YOUR STARTUP NOW!</h1>
						<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 text-center">
					<div class="col-md-10 col-xs-12">
						<button>GET THIS TEMPLATE</button>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end #launch -->

	<section id="contacts">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-xs-12 col1">
					<img src="img/2.png" width="130px">
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco. Qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Nisi ut aliquid ex ea commodi consequatur?</p>
					<p>John Doeson, Founder.</p>
				</div>
				<div class="col-md-4 col-xs-12 col2">
					<div class="col-md-12 text-center">
						<h4>SOCIAL NETWORKS</h4>
					</div>
					<div class="row">
						<div class="col-md-3 col-xs-3">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</div>
						<div class="col-md-3 col-xs-3">
							<i class="fa fa-skype" aria-hidden="true"></i>
						</div>
						<div class="col-md-3 col-xs-3">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</div>
						<div class="col-md-3 col-xs-3">
							<i class="fa fa-pinterest-p" aria-hidden="true"></i>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-xs-3">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</div>
						<div class="col-md-3 col-xs-3">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</div>
						<div class="col-md-3 col-xs-3">
							<i class="fa fa-skype" aria-hidden="true"></i>
						</div>
						<div class="col-md-3 col-xs-3">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 col3">
					<h4 class="text-center">OUR CONTACTS</h4>
					<a href="#">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<div class="contactText">info@startup.ly</div>
					</a>
					
						<i class="fa fa-map-marker" aria-hidden="true"></i> 
						 <div class="contactText">2901 Marmora road, Glassgow, Seattle, WA 98122-1090</div>
				
					
						<i class="fa fa-phone" aria-hidden="true"></i> 
						 <div class="contactText">1 - 234-456-7980</div>
				
				</div>
			</div><!-- end .row -->
			<div class="row text-center  copyright col-xs-12">
				<p>startup.ly 2014. All rights reserved.</p>
			</div>
		</div>
	</section><!-- #contancts -->
</section>
<!-- <section id="smallScreenMenu">
	<ul>
		<li>HOME</li>
		<li>ABOUT</li>
		<li>FEATURES</li>
	</ul>
</section> -->

	
	<script type="text/javascript" src="vendors/jquery/jquery.min.js"></script>
	<script src="vendors/bootstrap/assets/javascripts/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/CommonEffects.js"></script>
	<script type="text/javascript" src="assets/js/fontSize.js"></script>
	<script type="text/javascript" src="assets/js/home.js"></script>
	<script type="text/javascript" src="assets/js/startup.js"></script>
	<script type="text/javascript" src="assets/js/statistics.js"></script>
	<script type="text/javascript" src="assets/js/updates.js"></script>
	<script type="text/javascript" src="assets/js/prices.js"></script>
	<script type="text/javascript" src="assets/js/feedback.js"></script>
	<script type="text/javascript" src="assets/js/scrollEffects.js"></script>
</body>
</html>