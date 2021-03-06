<?php
if (isset($_POST['email'])) {
	//echo print_r($_POST);
	require '../PHPMailer/sendto.php';
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
	<link rel="Shortcut Icon" type="image/x-icon" href="../images/boar.ico" />
	<link rel="canonical" href="/en/">
	<link rel="alternate" href="/en/" hreflang="en">
	<link rel="alternate" href="/tw/" hreflang="zh-tw">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" href="../css/swiper.min.css">
	<link rel="stylesheet" href="../css/lightslider.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300|Marvel|Nunito+Sans:200,300|Open+Sans:300|Scheherazade&display=swap" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery.1.12.4.js"></script>
	<script src="../js/swiper4.0.2.min.js"></script>
	<script type="text/javascript" src="../js/lightslider.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>

</head>

<body class="cn">
	<div id="divFly">
		<img src="../images/boar.svg" /><br />
	</div>
	<header>
		<div class="header cn">
			<div class="wrap">
				<div class="logo abreast-b"></div>
				<ul class="nav-list abreast-b">
					<li class="list-item btn" onclick="goBlock(1,false)"><span class="top-cn">山豬科技</span></li>
					<li class="list-item btn" onclick="goBlock(2,false)"><span class="top-cn">服務項目</span></li>
					<li class="list-item btn" onclick="goBlock(3,false)"><span class="top-cn">產品介紹</span></li>
					<li class="list-item btn" onclick="goBlock(4,false)"><span class="top-cn">工作環境</span></li>
					<li class="list-item btn" onclick="goBlock(5,false)"><span class="top-cn">加入我們</span></li>
					<li class="list-item lang-box l-em1">
						<div class="btn-lang lang-TC abreast-m"><a href="/en/">EN</a></div>
						<div class="btn-lang lang-EN abreast-m"><a href="#">中文</a></div>
					</li>
				</ul>
			</div>
		</div>
		<div class="header-bg"></div>
	</header>
	<div id="loading" class="loading-page">
		<div class="load-box color-bg">
			<div class="boar">
				<img src="../images/boar-blue.svg">
			</div>
		</div>
	</div>
	<div id="body-content" class="body-content cn">
		<section class="main-vision section swiper-container page01 page-on">
			<ul class="vision-list swiper-wrapper">
				<li class="swiper-slide show" style="opacity: 1;">
					<div class="vision-box">
						<div class="banner-bg" style="background-image: url(../images/banner01.jpg);"></div>
						<div class="vision">
							<img class="large-screem" src="../images/banner01.jpg">
							<img class="mobile-screem" src="../images/m-banner01.jpg">
						</div>
					</div>
				</li>
				<li class="swiper-slide" style="opacity: 1;">
					<div class="vision-box">
						<div class="banner-bg" style="background-image: url(../images/banner02.jpg);"></div>
						<div class="vision">
							<img class="large-screem" src="../images/banner02.jpg">
							<img class="mobile-screem" src="../images/m-banner02.jpg">
						</div>
					</div>
				</li>
				<li class="swiper-slide" style="opacity: 1;">
					<div class="vision-box">
						<div class="banner-bg" style="background-image: url(../images/banner03.jpg);"></div>
						<div class="vision">
							<img class="large-screem" src="../images/banner03.jpg">
							<img class="mobile-screem" src="../images/m-banner03.jpg">
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
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>

		</section>
		<section class="about section">
			<div class="about-bg">
				<img class="about-bg-img" src="../images/about-bg.jpg">
				<div class="about-content">
					<div class="section-title about-section-title an-fade-in">
						<p class="boar">A<span class="fn-narrow">B</span><span class="fn-o">O</span>U<span class="fn-narrow" style="transform: scaleX(.75);">T</span> U<span class="fn-narrow" style="transform: scaleX(.75); text-indent: -.1em;">S</span></p>
					</div>
					<article class="content text-darkl-em25 an-fade-in">
						<p class="text-justify color-bg an-fade-in "><span class="part">由一群深具野心與創意的年輕團隊所組成的軟體開發公司，憑藉者我們對新事物的熱情與專業能力，在數據分析服務與手遊產品開發兩項領域中屢創佳績。</span>山豬本著提供良好的品質及專業的態度，給予客戶最好的產品，秉持著穩健發展、追求企業永續</p>
						<p class="text-justify color-bg an-fade-in ">經營及成長為理念。我們重視每一位員工，除了有良好工作環境、也提供學習及成長的空間，敏捷式開發，扁平化管理，年輕活潑的向上動力，歡迎每位喜愛挑戰與熱情的人一同加入我們的團隊。</p>
					</article>
				</div>
			</div>
		</section>
		<section class="service section page03">
			<h3 class="section-title color-bg"><span class="fn-o" style="position: relative; left: .5%">O</span>U<span class="fn-narrow" style="position: relative; left: -.5%">R</span><span class="fn-narrow">SERVICE</span></h3>
			<ul class="list-box wrap">
				<li class="list-item">
					<div class="vision">
						<img src="../images/service01.png">
					</div>
					<article class="content color-bg">
						<p class="list-title focus l-em1">大數據分析</p>
						<p class="list-title fn-Open">Data Analysis</p>
						<p class="text l-em15">多年的營運經驗，提供最精準<br>的數據庫建置服務外，亦提供<br>資料分析系統建置服務。</p>
					</article>
				</li>
				<li class="list-item">
					<div class="vision">
						<img src="../images/service02.png">
					</div>
					<article class="content color-bg">
						<p class="list-title focus l-em1">手遊開發</p>
						<p class="list-title fn-Open">App Development</p>
						<p class="text l-em15">協助企業建置最具專業性與人<br>性化的行動平台，並根據每位<br>客戶的特性打造出專屬的獨特<br>服務項目。</p>
					</article>
				</li>
				<li class="list-item">
					<div class="vision">
						<img src="../images/service03.png">
					</div>
					<article class="content color-bg">
						<p class="list-title focus l-em1">行動平台建置</p>
						<p class="list-title fn-Open">Platform Construction</p>
						<p class="text l-em15">對數據與資料分析的專業性，亦同時<br>可根據客戶的需求與特色打造出符合<br>期待的手遊服務，滿足客戶<br>的每項專業需求。</p>
					</article>
				</li>
			</ul>
		</section>
		<section class="product section page04">
			<div class="wrap">
				<h3 class="section-title color-bg"><span class="fn-narrow">PR</span><span class="fn-o">O</span><span class="l-em-05">D</span><span class="l-em-05">U</span>CT</h3>

				<div class="product-list swiper-container color-bg">
					<ul class="list-box vision-box color-bg">
						<li class="list-item is-show">
							<div class="vision" style="background-image: url(../images/product01.jpg);">
							</div>
						</li>
						<li class="list-item">
							<div class="vision" style="background-image: url(../images/product02.jpg);">
							</div>
						</li>
						<li class="list-item">
							<div class="vision" style="background-image: url(../images/product03.jpg);">
							</div>
						</li>
					</ul>
					<ul class="list-box list-content-box">
						<li class="list-content list-item is-open" data-title="product1">
							<p class="list-title">遊戲產品開發</p>
							<p class="en-title fn-nunito">Game product development</p>
							<article class="text-justify l-em15">
								<p class="main-content">山豬科技的每位夥伴都是遊戲愛好者，憑藉著我們豐富且多樣的遊戲經驗以及無既定的製作傳統框架，滿足不同客戶對遊戲的需求與期望。</p>
								<p>我們明白每個客戶對遊戲的期望是不同的，也因此在每次的開發專案中將仔細了解客戶所認為與期待的遊戲產品模樣，並將我們的遊戲專業性與市場上消費者對遊戲的期望融入，讓每次的遊戲產品在市場上都是驚嘆號的代表作。</p>
							</article>
						</li>
						<li class="list-item list-content" data-title="product2">

							<p class="list-title">數據分析服務</p>
							<p class="en-title fn-nunito">Data analysis service</p>
							<article class="text-justify l-em15">
								<p class="main-content">根據的客戶需求，我們提共從模組建立、規劃參考數據項目、資料整合分析、行為回歸驗證完整服務內容，提供您精準的分析服務。</p>
								<p>迎接大數據時代的來臨，除了數據收集外更需要專業性的分析，山豬科技團隊憑藉者多年來豐富的分析資歷與與專業能力，協助每一位客戶在大數據時代中正確取得有助於本業發展的分析報告，更加了解業界、市場與未來的發展方向與可能性。</p>
							</article>

						</li>
						<li class="list-item list-content" data-title="product3">
							<p class="list-title">手遊產品</p>
							<p class="en-title fn-nunito">Mobile game products</p>
							<article class="text-justify l-em15">
								<p class="main-content">不只遊戲內容豐富與娛樂性重要，更強調手機遊戲必須輕巧！山豬科技回歸手機原始初衷，致力打造小巧精緻的手機遊戲。</p>
								<p>有多久沒玩到小品的手機遊戲？市場的手機遊戲僅追求更強大的視覺與特效，導致容量龐大且遊戲性較不注重，山豬科技跳脫此思維，減少過多的特效與過於精緻的視覺，並著重於遊戲性的設計，期望讓消費者不用需要依靠強大的手機硬體也能輕鬆享受遊戲樂趣。</p>
							</article>

						</li>
						<li class="swiper-button-box">
							<div class="swiper-button-prev triangle" onclick="productChange(-1)"></div>
							<div class="swiper-button-next triangle" onclick="productChange(1)"></div>
						</li>
					</ul>
					<ul class="swiper-pagination title-box">
						<li class="list-item" data-num="1" id="pro-btn1">
							<p class="list-item-title"><span>遊戲</span><span>產品開發</span></p>
						</li>
						<li class="list-item" data-num="2" id="pro-btn2">
							<p class="list-item-title"><span>數據</span><span>分析服務</span></p>
						</li>
						<li class="list-item" data-num="3" id="pro-btn3">
							<p class="list-item-title">手遊產品</p>
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
		<section class="environment section page05">
			<h3 class="section-title color-bg"><span class="fn-narrow">E</span>NVI<span class="fn-narrow">R</span><span class="fn-o">O</span>NM<span class="fn-narrow">E</span>NT</h3>
			<div class="environment-bg">
				<div class="enviroment-box">
					<ul class="list-box">
						<li class="list-item">
							<div class="vision color-bg"><img src="../images/env01.jpg"></div>
							<p>盡情揮灑 成就自我</p>
						</li>
						<li class="list-item">
							<div class="vision color-bg"><img src="../images/env02.jpg"></div>
							<p>舒適的工作環境</p>
						</li>
						<li class="list-item">
							<div class="vision color-bg"><img src="../images/env03.jpg"></div>
							<p>輕鬆自在的討論氛圍</p>
						</li>
					</ul>
				</div>
				<div class="enviroment-swiper-box">
	                <ul id="env-box" class="list-box gallery list-unstyled">
	                    <li class="list-item first"> 
	                        <div class="vision color-bg"><img src="../images/env01.jpg"></div>
							<p>盡情揮灑  成就自我</p>
	                    </li>
	                    <li class="list-item"> 
		                	<div class="vision color-bg"><img src="../images/env02.jpg"></div>
							<p>舒適的工作環境</p>
		                </li>
	                    <li class="list-item">
							<div class="vision color-bg"><img src="../images/env03.jpg"></div>
							<p>輕鬆自在的討論氛圍</p>
	                    </li>
	                </ul>
	            </div>
			</div>
		</section>
		<section class="join-us section page06">
			<div class="wrap">
				<h3 class="section-title color-bg"><span class="fn-j">J</span><span class="fn-o">O</span>IN U<span class="fn-narrow">S</span></h3>

				<div class="summary">
					<div class="vision vision-m"></div>
					<article>
						<p>山豬科技事業群不斷的發展成長，我們擁有優秀的頂尖團隊，有你的加入山豬陣容將更加茁壯，歡迎對軟體科技業充滿熱情且對工作能力充滿自信的你！</p>
						<p>把握實現的機會，立即傳遞你的訊息，一同揮灑，創造更美好的數位火花！</p>
					</article>
				</div>
				<div class="main-content">
					<div class="info vision">
						<img src="../images/join-us.jpg">
					</div>
					<div class="info message-box">
						<p class="title fn-Josefin color-bg">SEND ME A MESSAGE</p>
						<div class="form" id="mail-box">
							<form method="post" id="contactform" name="contact_form" action="/index.php" enctype="multipart/form-data">
								<div class="form-box">
									<div class="form-item">
										<input id="messageName" type="text" name="name" placeholder="姓名" autocomplete="off" required>
										<p class="error-text"></p>
									</div>
									<div class="form-item">
										<input id="messageEmail" type="email" name="email" placeholder="Email" autocomplete="off" required>
										<p class="error-text"></p>
									</div>
									<div class="form-item">
										<input id="messageTel" type="text" name="messageTel" placeholder="聯絡電話 (非必填)" autocomplete="off" required>
									</div>
									<div class="form-item">
										<input id="messageTitle" type="text" name="messageTitle" placeholder="主旨" autocomplete="off" required>
										<p class="error-text"></p>
									</div>
									<div class="form-item text-area">
										<textarea id="messageText" type="text" name="messageText" placeholder="訊息" autocomplete="off" required></textarea>
										<p class="error-text"></p>
									</div>
								</div>
							</form>
							<article class="form-text">
								<p>感謝您的來信</p>
								<p>山豬科技已收到您的信件</p>
								<p><span class="abreast-m">我們將盡快與您聯繫，感謝您的</span><span class="abreast-m">耐心等候</span></p>
								<p class="focus">若您想了解更多關於山豬的職缺，歡迎透過下面的連結前往查看</p>
							</article>

						</div>
						<ul class="btn-box">
							<li class="box-item">
								<a class="abreast-t btn btn-focus is-hover" href="https://www.104.com.tw/company/1a2x6bk7u1?jobsource=pda_b" target="_blank"><span>查看104工作職缺</span></a>
							</li>
							<li class="box-item btn_send">
								<button class="abreast-t btn btn-send is-hover" onclick="checkform('cn');">
									<span class="icon"><svg class="icon-airplane" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400">
											<defs>
												<style>
													.fill {
														fill: #818181;
													}
												</style>
											</defs>
											<title>airplane</title>
											<path class="fill" d="M16.12,156.38A25.43,25.43,0,0,0,.28,176.55c-1.44,9.12,2.87,18.25,10.07,23.52L92,259.62,382,31.53,125.6,284.11,237,365.25a28.62,28.62,0,0,0,25,4.32c8.18-2.36,14.89-9.09,18.25-17.29L399.32,25.75a8.83,8.83,0,0,0-11.53-11.52ZM72.78,279.31l.48,3.86,15.85,86.88a21.74,21.74,0,0,0,11.52,14.41A20.29,20.29,0,0,0,118.88,383c22.1-14.41,50.89-33.12,50.42-34.56Z" />
										</svg></span>
									<span class="send-text">送出</span></a>
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
				<div class="logo is-hover"><a href="#"> <img src="../images/boar_logo.svg"> </a></div>
				<p>© 2019 The Boar Tech co.,ltd.</p>
			</div>
			<ul class="nav-list abreast-t">
				<li class="list-item btn" onclick="goBlock(1,false)"><span class="top-cn">山豬科技</span></li>
				<li class="list-item btn" onclick="goBlock(2,false)"><span class="top-cn">服務項目</span></li>
				<li class="list-item btn" onclick="goBlock(3,false)"><span class="top-cn">產品介紹</span></li>
				<li class="list-item btn" onclick="goBlock(4,false)"><span class="top-cn">工作環境</span></li>
				<li class="list-item btn" onclick="goBlock(5,false)"><span class="top-cn">加入我們</span></li>
				<li class="list-item lang-box">
					<div class="btn-lang lang-TC abreast-m"><a href="/en/">EN</a></div>
					<div class="btn-lang lang-EN abreast-m"><a href="/t#">中文</a></div>
				</li>
			</ul>
		</div>
	</footer>
	<div class="cs-item hide cs-item-cn">
		<div class="mask btn-cs"></div>
		<div class="abreast-t btn-cs icon-box is-hover">
			<div class="cs-icon"></div>
		</div>
		<div class="abreast-t cs-box">
			<div class="cs-box-info">
				<ul class="nav-list cs-top">
					<li class="list-item btn" onclick="goBlock(1,false)"><span class="top-cn">山豬科技</span></li>
					<li class="list-item btn" onclick="goBlock(2,false)"><span class="top-cn">服務項目</span></li>
					<li class="list-item btn" onclick="goBlock(3,false)"><span class="top-cn">產品介紹</span></li>
					<li class="list-item btn" onclick="goBlock(4,false)"><span class="top-cn">工作環境</span></li>
					<li class="list-item btn" onclick="goBlock(5,false)"><span class="top-cn">加入我們</span></li>
				</ul>
				<ul class="nav-list cs-bottom">
					<li class="list-item boar" onclick="goBlock(0,false)">
						<div class="go-top triangle"></div>
					</li>
					<li class="list-item lang-box">
						<div class="btn-lang lang-TC abreast-m"><a href="/en/">EN</a></div>
						<div class="btn-lang lang-EN abreast-m"><a href="/tw">中文</a></div>
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
			disableOnInteraction: false
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