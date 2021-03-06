<?php
if (isset($_POST['email'])) {
	//echo print_r($_POST);
	require 'PHPMailer/sendto.php';
	exit;
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>The Boar Tech Inc.</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:description" content="The Boar Tech Inc. 是由一群深具野心與創意的年輕團隊所組成的軟體開發公司，憑藉者我們對新事物的熱情與專業能力，在數據分析服務與手遊產品開發兩項領域中屢創佳績。">
	<link rel="Shortcut Icon" type="image/x-icon" href="images/boar.ico" />
	<link rel="canonical" href="/">
	<link rel="alternate" href="/en/" hreflang="EN">
	<link rel="alternate" href="/tw/" hreflang="zh-tw">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightslider.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300|Marvel|Nunito+Sans:200,300|Open+Sans:300|Scheherazade&display=swap" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.1.12.4.js"></script>
	<script src="js/swiper4.0.2.min.js"></script>

	<script type="text/javascript" src="js/lightslider.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>

<body class="en">
	<div id="divFly">
		<img src="images/boar.svg" /><br />
	</div>
	<header>
		<div class="header en">
			<div class="wrap">
				<div class="logo abreast-b"></div>
				<ul class="nav-list abreast-b">
					<li class="list-item btn" onclick="goBlock(1,false)"><span class="top-en">About us</span></li>
					<li class="list-item btn" onclick="goBlock(2,false)"><span class="top-en">Our service</span></li>
					<li class="list-item btn" onclick="goBlock(3,false)"><span class="top-en">Product</span></li>
					<li class="list-item btn" onclick="goBlock(4,false)"><span class="top-en">Environment</span></li>
					<li class="list-item btn" onclick="goBlock(5,false)"><span class="top-en">Join us</span></li>
					<li class="list-item lang-box l-em1">
						<div class="btn-lang lang-TC abreast-m"><a href="/en/">EN</a></div>
						<div class="btn-lang lang-EN abreast-m"><a href="/tw/">中文</a></div>
					</li>
				</ul>
			</div>
		</div>
		<div class="header-bg"></div>
	</header>
	<div id="loading" class="loading-page">
		<div class="load-box color-bg">
			<div class="boar">
				<img src="images/boar-blue.svg">
			</div>
		</div>
	</div>
	<div id="body-content" class="body-content en">
		<section class="main-vision swiper-container">
			<ul class="vision-list swiper-wrapper">
				<li class="swiper-slide show" style="opacity: 1;">
					<div class="vision-box">
						<div class="banner-bg" style="background-image: url(images/banner01.jpg);"></div>
						<div class="vision">
							<img class="large-screem" src="images/banner01.jpg">
							<img class="mobile-screem" src="images/m-banner01.jpg">
						</div>
					</div>
				</li>
				<li class="swiper-slide" style="opacity: 1;">
					<div class="vision-box">
						<div class="banner-bg" style="background-image: url(images/banner02.jpg);"></div>
						<div class="vision">
							<img class="large-screem" src="images/banner02.jpg">
							<img class="mobile-screem" src="images/m-banner02.jpg">
						</div>
					</div>
				</li>
				<li class="swiper-slide" style="opacity: 1;">
					<div class="vision-box">
						<div class="banner-bg" style="background-image: url(images/banner03.jpg);"></div>
						<div class="vision">
							<img class="large-screem" src="images/banner03.jpg">
							<img class="mobile-screem" src="images/m-banner03.jpg">
						</div>
					</div>
				</li>
			</ul>
			<div class="vision-title" style="z-index: 9;">
				<p class="title sub-title fn-nunito"><span>SPECIALIZED</span></p>
				<h2 class="title main-title l-em1 fn-Scheherazade">
					<span class="focus word-item">I</span>
					<span class="word-item">MAGINE</span>
					<span class="word-item margin">THE</span></span>
					<span class="focus word-item">P</span>
					<span class="word-item">OSSIBILITIES</span>
					</h3>
			</div>
			<div class="btn-bg btn-more"></div>
			<button class="btn btn-more" onclick="goBlock(1,true)">
				<span class="btn-content l-em1">READ MORE</span>
			</button>
			<div class="swiper-pagination"></div>

		</section>
		<section class="about">
			<div class="about-bg about-bg-en">
				<img class="about-bg-img" src="images/about-bg.jpg">
				<div class="about-content about-content-en ">
					<div class="section-title about-section-title an-fade-in">
						<p class="boar">A<span class="fn-narrow">B</span><span class="fn-o">O</span>U<span class="fn-narrow" style="transform: scaleX(.75);">T</span> U<span class="fn-narrow" style="transform: scaleX(.75); text-indent: -.1em;">S</span></p>
					</div>
					<article class="content text-dark an-fade-in">
						<p class="color-bg an-fade-in">Boar Tech is a software development company made up of young people full of ambition and creation. With the passion to produce new things and professional competence, we achieve various successes in fields such as data analysis service and mobile game development. <br>Through excellent quality and a professional attitude, Boar Tech provides the best products to its customers. Steady development and sustainable operation and</p>
						<p class="color-bg an-fade-in"> growth are our foundational concepts.<span class="part">Boar Tech values all team members; in addition to a comfortable working environment, we use agile development and flat management and also offer the access to learning and personal development. Boar Tech is full of young and active people with a drive for growth and we welcome those who love challenges and are full of passion to join us.</span></p>
					</article>
				</div>
			</div>
		</section>
		<section class="service">
			<h3 class="section-title color-bg"><span class="fn-o" style="position: relative; left: .5%">O</span>U<span class="fn-narrow" style="position: relative; left: -.5%">R</span><span class="fn-narrow">SERVICE</span></h3>
			<ul class="list-box wrap">
				<li class="list-item">
					<div class="vision">
						<img src="images/service01.png">
					</div>
					<article class="content color-bg">
						<p class="list-title focus">Data Analysis</p>
						<p class="text w-90">Based on our operational experience through the years, we provide the most precise database service as well as data analysis system.</p>
					</article>
				</li>
				<li class="list-item">
					<div class="vision">
						<img src="images/service02.png">
					</div>
					<article class="content color-bg">
						<p class="list-title focus">App Development</p>
						<p class="text w-90">Assist companies in establishing the most professional and user-friendly mobile platform. Create exclusive services based on each customer’s traits.</p>
					</article>
				</li>
				<li class="list-item">
					<div class="vision">
						<img src="images/service03.png">
					</div>
					<article class="content color-bg">
						<p class="list-title focus">Platform Construction</p>
						<p class="text w-90">Through our expertise in data and data analysis, Boar Tech is capable of creating mobile games addressing customer demands and traits to meet customer’s expectations from entertainment.</p>
					</article>
				</li>
			</ul>
		</section>
		<section class="product">
			<div class="wrap">
				<h3 class="section-title color-bg"><span class="fn-narrow">PR</span><span class="fn-o">O</span><span class="l-em-05">D</span><span class="l-em-05">U</span>CT</h3>

				<div class="product-list swiper-container color-bg">
					<ul class="list-box vision-box color-bg">
						<li class="list-item is-show">
							<div class="vision" style="background-image: url(images/product01.jpg);">
							</div>
						</li>
						<li class="list-item">
							<div class="vision" style="background-image: url(images/product02.jpg);">
							</div>
						</li>
						<li class="list-item">
							<div class="vision" style="background-image: url(images/product03.jpg);">
							</div>
						</li>
					</ul>
					<ul class="list-box list-content-box">
						<li class="list-content list-item is-open less-text" data-title="product1">
							<p class="list-title fn-nunito">Game development</p>
							<article>
								<p class="main-content">All Boar Tech members are game lovers. Through our rich and various gaming experience and out-of-the-box design inspirations, we can address different customer demands and expectations.</p>
								<p>We understand different customers have different expectations from games; therefore, in every project, we carefully find the idea matching the customer’s thoughts and expectations of games. We also integrate our expertise into consumer expectations of games to make every game a masterpiece in the market.</p>
							</article>
						</li>
						<li class="list-item list-content" data-title="product2">
							<p class="list-title fn-nunito">Data analysis</p>
							<article>
								<p class="main-content">Based on customer demands, we provide a comprehensive service including module establishment, plan reference data, data integration and analysis and homing behavior verification for precise analytics services.</p>
								<p>With the coming of big data era, not only data collection but also professional analysis is necessary. Through rich analysis experience throughout the years and also professional competence, Boar Tech enables all customers to accurately acquire analysis reports beneficial to business development in the big data era and better understand the trends and possibilities of industry, market, and future.</p>
							</article>

						</li>
						<li class="list-item list-content" data-title="product3">
							<p class="list-title fn-nunito">Mobile games</p>
							<article>
								<p class="main-content">Besides their rich and entertaining content, mobile games must be lightweight as well! By returning to the original spirit of mobile games, Boar Tech is committed to creating lightweight and exquisite mobile games.</p>
								<p>What’s your last time playing a mini mobile game? Most mobile games in the market now focus on higher visual performance and special effects and this leads to large games with less gameplay. Through thinking outside the box, Boar Tech reduces excess special effects and ultra-sophisticated visual performance and puts more emphasis on gameplay design. We aim to bring consumers enjoyable games even when they don’t have a high-end mobile phone.</p>
							</article>

						</li>
						<li class="swiper-button-box">
							<div class="swiper-button-prev triangle" onclick="productChange(-1)"></div>
							<div class="swiper-button-next triangle" onclick="productChange(1)"></div>
						</li>
					</ul>
					<ul class="swiper-pagination title-box">
						<li class="list-item" data-num="1" id="pro-btn1">
							<p class="list-item-title"><span>Game </span><span>development</span></p>
						</li>
						<li class="list-item" data-num="2" id="pro-btn2">
							<p class="list-item-title"><span>Data </span><span>analysis</span></p>
						</li>
						<li class="list-item" data-num="3" id="pro-btn3">
							<p class="list-item-title"><span>Mobile </span><span>games</span></p>
						</li>
					</ul>
					<ul class="list-num">
						<li class="num fn-nunito is-open"><span>0 l</span></li>
						<li class="num fn-nunito"><span>02</span></li>
						<li class="num fn-nunito"><span>03</span></li>
					</ul>
				</div>
			</div>
		</section>
		<section class="environment">
			<h3 class="section-title color-bg"><span class="fn-narrow">E</span>NVI<span class="fn-narrow">R</span><span class="fn-o">O</span>NM<span class="fn-narrow">E</span>NT</h3>
			<div class="environment-bg">
				<div class="enviroment-box">
					<ul class="list-box">
						<li class="list-item">
							<div class="vision color-bg"><img src="images/env01.jpg"></div>
							<p>Enjoy yourself and achieve</p>
						</li>
						<li class="list-item">
							<div class="vision color-bg"><img src="images/env02.jpg"></div>
							<p>Comfortable working environment</p>
						</li>
						<li class="list-item">
							<div class="vision color-bg"><img src="images/env03.jpg"></div>
							<p>Relaxing and carefree discussion atmosphere</p>
						</li>
					</ul>
				</div>
				<div class="enviroment-swiper-box">
	                <ul id="env-box" class="list-box gallery list-unstyled">
	                    <li class="list-item first"> 
	                        <div class="vision color-bg"><img src="images/env01.jpg"></div>
							<p>Enjoy yourself and achieve</p>
	                    </li>
	                    <li class="list-item"> 
		                	<div class="vision color-bg"><img src="images/env02.jpg"></div>
							<p>Comfortable working environment</p>
		                </li>
	                    <li class="list-item">
							<div class="vision color-bg"><img src="images/env03.jpg"></div>
							<p>Relaxing and carefree discussion atmosphere</p>
	                    </li>
	                </ul>
	            </div>
			</div>
		</section>
		<section class="join-us">
			<div class="wrap">
				<h3 class="section-title color-bg"><span class="fn-j">J</span><span class="fn-o">O</span>IN U<span class="fn-narrow">S</span></h3>

				<div class="summary">
					<div class="vision vision-m"></div>
					<article>
						<p>As a continuously growing group, Boar Tech has the best team members and your contribution can make us even stronger.<br>We welcome those who have passions for the software technology industry and work with confidence to join us !</p>
						<p>Seize this opportunity for self-fulfillment.  Submit the following information now and join us to create more dazzling digital sparkles !</p>
					</article>
				</div>
				<div class="main-content">
					<div class="info vision">
						<img src="images/join-us.jpg">
					</div>
					<div class="info message-box">
						<p class="title fn-Josefin color-bg">SEND ME A MESSAGE</p>
						<!-- <p class="remind">表單輸入不完全</p> -->
						<div class="form" id="mail-box">
							<div class="form-box">
								<form method="post" id="contactform" name="contact_form" action="/index.php" enctype="multipart/form-data">
									<div class="form-item">
										<input id="messageName" type="text" name="name" placeholder="Name" autocomplete="off" required>
										<p class="error-text"></p>
									</div>
									<div class="form-item">
										<input id="messageEmail" type="email" name="email" placeholder="Email" autocomplete="off" required>
										<p class="error-text"></p>
									</div>
									<div class="form-item">
										<input id="messageTel" type="text" name="messageTel" placeholder="Telephone (non-mandatory)" autocomplete="off" required>
									</div>
									<div class="form-item">
										<input id="messageTitle" type="text" name="messageTitle" placeholder="Subject" autocomplete="off" required>
										<p class="error-text"></p>
									</div>
									<div class="form-item text-area">
										<textarea id="messageText" type="text" name="messageText" placeholder="Message" autocomplete="off" required></textarea>
										<p class="error-text"></p>
									</div>
								</form>
							</div>
							<article class="form-text">
								<p>We has received your message.</p>
								<span class="abreast-m">We will contact you as soon</span><span class="abreast-m">as possible,</span>
								<span class="abreast-m">thank you</span><span class="abreast-m">for your patience.</span>
								<p class="focus">If you want to know more about the job of the boar tech,<br>please visit the link below to view.</p>
							</article>
						</div>
						<ul class="btn-box">
							<li class="box-item">
								<a class="abreast-t btn btn-focus is-hover" href="https://www.104.com.tw/company/1a2x6bk7u1?jobsource=pda_b" target="_blank">
									<span>Check 104 Job Vacancies</span>
								</a>
							</li>
							<li class="box-item btn_send">
								<button class="abreast-t btn btn-send is-hover" onclick="checkform('en');">
									<span class="icon">
										<svg class="icon-airplane" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400">
											<defs>
												<style>
													.fill {
														fill: #818181;
													}
												</style>
											</defs>
											<title>airplane</title>
											<path class="fill" d="M16.12,156.38A25.43,25.43,0,0,0,.28,176.55c-1.44,9.12,2.87,18.25,10.07,23.52L92,259.62,382,31.53,125.6,284.11,237,365.25a28.62,28.62,0,0,0,25,4.32c8.18-2.36,14.89-9.09,18.25-17.29L399.32,25.75a8.83,8.83,0,0,0-11.53-11.52ZM72.78,279.31l.48,3.86,15.85,86.88a21.74,21.74,0,0,0,11.52,14.41A20.29,20.29,0,0,0,118.88,383c22.1-14.41,50.89-33.12,50.42-34.56Z" />
										</svg>
									</span>
									<span class="send-text">Submit</span>
								</button>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>
	<footer>
		<div class="wrap">
			<div class="logo-box abreast-t">
				<div class="logo is-hover"><a href="#"> <img src="images/boar_logo.svg"> </a></div>
				<p>© 2019 The Boar Tech co.,ltd.</p>
			</div>
			<ul class="nav-list abreast-t">
				<li class="list-item btn" onclick="goBlock(1,false)"><span class="top-en">About us</span></li>
				<li class="list-item btn" onclick="goBlock(2,false)"><span class="top-en">Our service</span></li>
				<li class="list-item btn" onclick="goBlock(3,false)"><span class="top-en">Product</span></li>
				<li class="list-item btn" onclick="goBlock(4,false)"><span class="top-en">Environment</span></li>
				<li class="list-item btn" onclick="goBlock(5,false)"><span class="top-en">Join us</span></li>
				<li class="list-item lang-box">
					<div class="btn-lang lang-TC abreast-m"><a href="/en/">EN</a></div>
					<div class="btn-lang lang-EN abreast-m"><a href="/tw/">中文</a></div>
				</li>
			</ul>
		</div>
	</footer>
	<div class="cs-item hide cs-item-en">
		<div class="mask btn-cs"></div>
		<div class="abreast-t btn-cs icon-box is-hover">
			<div class="cs-icon"></div>
		</div>
		<div class="abreast-t cs-box">
			<div class="cs-box-info">
				<ul class="nav-list cs-top">
					<li class="list-item btn" onclick="goBlock(1,false)"><span class="top-en">About us</span></li>
					<li class="list-item btn" onclick="goBlock(2,false)"><span class="top-en">Our service</span></li>
					<li class="list-item btn" onclick="goBlock(3,false)"><span class="top-en">Product</span></li>
					<li class="list-item btn" onclick="goBlock(4,false)"><span class="top-en">Environment</span></li>
					<li class="list-item btn" onclick="goBlock(5,false)"><span class="top-en">Join us</span></li>
				</ul>
				<ul class="nav-list cs-bottom">
					<li class="list-item boar" onclick="goBlock(0,false)">
						<div class="go-top triangle"></div>
					</li>
					<li class="list-item lang-box">
						<div class="btn-lang lang-TC abreast-m"><a href="/en/">EN</a></div>
						<div class="btn-lang lang-EN abreast-m"><a href="/tw/">中文</a></div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	</div>
</body>
<script type="text/javascript">
	var VisionSwiper = new Swiper(".main-vision", {
		init: false,
		followFinger: false,
		effect: 'fade',
		fade: {
			crossFade: false
		},
		spaceBetween: 30,
		centeredSlides: true,
		loop: false,
		speed: 0,
		autoplay: {
			delay: 5500,
			disableOnInteraction: false,
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			disableOnInteraction: false,
		}
	})

	$('#env-box').lightSlider({
        gallery:true,
        item:1,
        slideMargin: 0,
        speed:1500,
        auto:true,
        loop:true, 
        pauseOnHover: false,
        onBeforeSlide: function (el) {
        	if($('.lSSlideWrapper').hasClass('is-show')) {
            	$('.lSSlideWrapper').removeClass('is-show');
            }
            
        },
        onAfterSlide: function(el) {
            if(el.children('.first').hasClass('active')) {
            	$('.lSSlideWrapper').addClass('is-show');
            } 
        }
	});
</script>

<script type="text/javascript">
	function DivFlying() {
		var div = document.getElementById("divFly");
		if (!div) {
			return;
		}
		var intX = window.event.clientX;
		var intY = window.event.clientY;
		div.style.left = intX + "px";
		div.style.top = intY + "px";
	}
	document.onmousemove = DivFlying;
</script>

</html>