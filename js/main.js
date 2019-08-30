

var page = 
	[	{name:'.main-vision',animation:false},	{name:'.about',animation:false},
		{name:'.service',animation:false},		{name:'.product',animation:false},
		{name:'.environment',animation:false},	{name:'.join-us',animation:false}
	];
var onScroll=false;
var loading = false;
var evnSwiperShow = false;


function isMobile() {

  try{ document.createEvent("TouchEvent"); return true; }

  catch(e){ return false;}

}
//cookie設定

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
} 

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
         }
         if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
         }
     }
    return "";
} 
function getCookieValueByIndex(startIndex) {
  var endIndex = document.cookie.indexOf(";", startIndex);
  if (endIndex == -1) endIndex = document.cookie.length;
  return unescape(document.cookie.substring(startIndex, endIndex));
}


function cookie(name) {  
    //================  
    var s = getCookie(name); 
    console.log(s); 
    if (s.indexOf('visited')  == -1) {
    	console.log('33');
    	$('#loading').remove();
		$("html, body").css('overflow','unset');
		if(!$('.main-vision .vision-title').hasClass('animated')) {
			$('.main-vision .vision-title').addClass('animated');
			$('.main-vision').addClass('animated');
			setTimeout(function(){
				VisionSwiper.init(true);
				setTimeout(function(){
					$('.main-vision .vision-list .swiper-slide').removeClass('show');
				},100) 
			},2750)
		}
		getSectionTop();
    	return; //存在cookie退出下面代码的执行  
    }
    setTimeout(function(){
		$('#loading').remove();
			$("html, body").css('overflow','unset');
			if(!$('.main-vision .vision-title').hasClass('animated')) {
				$('.main-vision .vision-title').addClass('animated');
				$('.main-vision').addClass('animated');
				setTimeout(function(){
					VisionSwiper.init(true);
					setTimeout(function(){
						$('.main-vision .vision-list .swiper-slide').removeClass('show');
					},100) 
				},2750)
			}
			getSectionTop();
			addAnimate(window.pageYOffset);
	},6500);
}  

// 滑動設定

function goBlock(blockNum,needWait) {
	onScroll = true;
	let scrollTop = window.pageYOffset;
	let distance = parseInt(scrollTop - page[blockNum].top);
	if(distance < 0) {distance = distance*-1}
	let time = distance/$(window).innerHeight()*300;
	if($(window).innerWidth()<=768) {  time = distance/$(window).innerHeight()*500;}
	if(needWait) {
		setTimeout(function(){
			$("html, body").stop().animate({ 
				scrollTop:page[blockNum].top
			}, 800);
			onScroll = false;
		},500);
	} else {
		if(blockNum == 0) {
			$('.swiper-pagination .swiper-pagination-bullet').eq(0).click();
			$("html, body").stop().animate({ scrollTop:page[blockNum].top }, time);
			return;
		}
		if($(window).innerWidth() < 900) {
			let titHeight = $('.join-us .section-title').innerHeight()/2;
			let top = parseInt(page[blockNum].top - titHeight);
			if(blockNum == 5) {
				top = parseInt($('.join-us .section-title').offset().top  - titHeight);

			} 
			$("html, body").stop().animate({ scrollTop:top }, time);
		}
		else {
			$("html, body").stop().animate({ scrollTop:page[blockNum].top }, time);
		}
		if(!page[blockNum].animation) {
			page[blockNum].animation = true;
			setTimeout(function(){
				$(page[blockNum].name).addClass('animated');
				onScroll = false;
			},800);
		}
	}
}
// 設定Product區塊高度
function getProductHeight() {
	let productList = $('.product-list .list-content-box .list-content');
	let maxheight = 0;
	productList.each(function(){
		if($(this).innerHeight() > maxheight) {
			maxheight = $(this).innerHeight();
		}
	})
	return maxheight;
}
// 取得區塊頭部位置
function getSectionTop(section) {
	for( let i = 0; i < page.length ; i++) {
		let pageBlock = $(page[i].name);
		page[i].top = pageBlock.offset().top;
	}
}
// 加上動畫


function addAnimate(scrollTop) {
	// console.log(scrollTop)
	for( let i = 1; i < page.length ; i++) {
		let pageBlock = $(page[i].name);
		let pageBlockTop = page[i].top;
		let triggerTime = $(window).innerHeight()*.7;
		if(i == 1 ) {triggerTime = 100}
		if (!page[i].animation && scrollTop > pageBlockTop - triggerTime && scrollTop < pageBlockTop + pageBlock.innerHeight()) {
			pageBlock.addClass('animated');
			page[i].animation = true;
			if(i==3) {
				setTimeout(function(){
					$('.product-list .vision-box .list-item:first-child').removeClass('is-show');
					$(".product-list .title-box .list-item").eq(0).click();
				},3000);
			}
			if(i==4) {
				envSwiper.autoplay.stop();
				setTimeout(function(){
					if($(window).innerWidth()<=768) {
						envSwiper.autoplay.start(true);
						evnSwiperShow = true;
					}
				},2500);
			}
		}
	}
	if(page[2].animation) {
		$('.service .list-item').each(function(){
			if($(this).hasClass('animated')) {
				return
			} else {
				if( scrollTop > $(this).offset().top - $(window).innerHeight()/1.35) {
					$(this).addClass('animated');
				}
			}
		})
	}
}

// Product 自動輪播設定 
var onChange = false;
var protimer =setInterval("clock(timer)",10000);
var timer = 1;
var proStop = true;
var productOpen = 1;
function clock(num) {
	if(proStop) { return }
  	if(num<4) {
    		$("#pro-btn"+num).click();
    		timer++;
    		productOpen = num;
	}
	else {
		timer = 1
		$("#pro-btn1").click();
		timer++;
		productOpen = 1;
	}

}
function productChange(path) {
	if(onChange) { return; }
	onChange = true;
	proStop = true;
	let blockNum = $(".product .product-list .title-box .list-item.is-open").data('num');
	console.log(blockNum);
	let num = parseInt(blockNum + path);
	if(num > 3) {
		num = 1;
	} else {
		if(num == 0) {
			num = 3;
		}
	}
	onChange = false;
	proStop = false;
	console.log(num);
	$("#pro-btn"+num).click();

}

var sendText = {
	cn:{
		errorname:'請輸入姓名',
		erroremail:'請輸入電子郵件',
		errortitle:'請輸入主旨',
		errormessage:'請輸入訊息',
		sendout:'已送出',
		send:'送出'
	},
	en:{
		errorname:'Please enter the Name',
		erroremail:'Please enter an Email',
		errortitle:'Please enter the Subject',
		errormessage:'Please enter the Message',
		sendout:'Send Out',
		send:'Submit'
	}
}
function checkform(lang) {
	$('.error-text').text(""); 

    if($("#messageName").val()==""){
    	let errorname;
    	lang == 'en' ? errorname = sendText.en.errorname : errorname = sendText.cn.errorname;
        $("#messageName").next('.error-text').text(errorname);  
    }
    if($("#messageEmail").val()==""){
    	let erroremail;
    	lang == 'en' ? erroremail = sendText.en.erroremail : erroremail = sendText.cn.erroremail;
       $("#messageEmail").next('.error-text').text(erroremail);  
    }
    if($("#messageTitle").val()==""){
    	let errortitle;
    	lang == 'en' ? errortitle = sendText.en.errortitle : errortitle = sendText.cn.errortitle;
        $("#messageTitle").next('.error-text').text(errortitle);  
    }
    if($("#messageText").val()==""){
    	let errormessage;
    	lang == 'en' ? errormessage = sendText.en.errormessage : errormessage = sendText.cn.errormessage;
        $("#messageText").next('.error-text').text(errormessage);  
    }
    else{
        let send,sendout;
        lang == 'en' ? send = sendText.en.send : send = sendText.cn.send;
        lang == 'en' ? sendout = sendText.en.sendout : sendout = sendText.cn.sendout;
        $('.btn-send .send-text').text(sendout);
        submitHandler();
        // $('#send').click();
        $('.form-item input, .form-item textarea').val('');
		setTimeout(function(){
			$('.btn-send .send-text').text(send);
		},1500);
    }
}

function changeText(){
	$('.form-box').remove();
	$('.form-text').show();
	$('.btn_send').remove();
}

//宣告預設表單內容為空 （你想要的話也可以加東西）
var initSubject='',initBody='';
function submitHandler(){
	var to = "service@theboartech.com";//寫死的傳送對象 就是公司的信箱 不會顯示在網頁上
	var name = messageName.value;//讀取ID為 nameTextuser 物件中的值
	var email = messageEmail.value;
	var subject = messageTitle.value;
	var message = messageText.value;
	//把user填的資料都塞到 mail body 中
	var body = ""+message+'%0A%0A%0A';//%0A是換行 換了三行
	    body += "From："+name+'%0A';
	    body += "Email："+email+'%0A';
	    body += "Tel："+messageTel.value;
	//傳送的主要程式碼
    // mailTo.href="mailto:"+to+"?subject="+subject+"&body="+body;
    changeText();
    // mailTo.click();
}
//在body onload
function init(){
    subText.value=initSubject;
    toText.value=initTo;
    bodyText.value=initBody;
}

$(document).ready(function(){

	if(navigator.userAgent.indexOf('Mac OS')=="-1") {
		$("html, body").css('font-family','"Arial","Microsoft JhengHei"')
	}
	// getSectionTop();
	if($(window).innerWidth() > 1024) {
		$('.product .product-list').css('height',getProductHeight());
	}
	else {
		$('.product .product-list').css('height','auto');
		$('.product .product-list .list-content-box').css('height',getProductHeight());
	}
	cookie();
	setCookie('visited','true',1);

	$('.cs-item .btn-cs').click(function() {
		if($('.cs-item').hasClass('is-open')) {
			$('.cs-item').removeClass('is-open');
		} else {
			$('.cs-item').addClass('is-open');
		}
	});

	// 切換Product
	$(".product-list .title-box .list-item").click(function(event){
		if(onChange) { return; }
		onChange = true;
		let blockNum = $(this).data('num');
	  	if($(this).hasClass('is-open')) {
	  		onChange = false;
	  		return;
	  	} else {
	  		proStop = true;
	  		$(".product .product-list .vision-box .list-item.is-open").css('z-index','2');
	  		$(".product-list .title-box .list-item").removeClass('is-open');
	  		$(this).addClass('is-open');
	  		$(".product-list .list-box .list-item").removeClass('is-open');
	  			$(".product-list .list-box .list-item:nth-of-type("+blockNum+")").addClass('is-open');
	  			setTimeout(function(){
	  				$(".product .product-list .vision-box .list-item").css('z-index','unset');
	  				timer = blockNum;
	  				proStop = false;
	  				onChange = false;
	  			},600);
	  		
	  		$(".product-list .list-num .num").removeClass('is-open');
	  		$(".product-list .list-num .num:nth-of-type("+blockNum+")").addClass('is-open');
	  	}
	});
	// 維持幻燈片自動播放
	$('.swiper-pagination').click(function() {
		VisionSwiper.autoplay.start();
	});
	// 語言切換按紐延遲變化
	$('.lang-box .btn-lang').mouseover(function(){
		if($(this).hasClass('is-hover') || loading) {
			return;
		} else{
			loading = true;
			let btn = $(this);
			if(btn.siblings().hasClass('is-hover')) {
				btn.siblings().removeClass('is-hover');
				console.log('ww');
				setTimeout(function(){
					console.log(btn);
					btn.addClass('is-hover');
					loading = false;
				},360);
			} else {
				btn.addClass('is-hover');
				loading = false;
			}
		}
		
	})
	$('.lang-box').mouseleave(function(){
		$(this).children('.btn-lang').removeClass('is-hover');
	})

	$('.form-item').click(function() {
		if($(this).children('.error-text').html()!='') {
			$(this).children('.error-text').text('');
		}
	})

	if(isMobile()) {
		$('.is-hover').removeClass('is-hover');
	}

})

var onChangeSize = false;

$(window).resize(function(){
	getSectionTop();
	if($(window).innerWidth() > 1024) {
		$('.product .product-list').css('height',getProductHeight());
	}
	else {
		$('.product .product-list').css('height','auto');
		$('.product .product-list .list-content-box').css('height',getProductHeight());
	}
	if(onChangeSize) {return}
	onChangeSize = true;
	$('.product .product-list .vision-box .list-item .vision').css('transition','none');
	setTimeout(function(){
		$('.product .product-list .vision-box .list-item .vision').css('transition','linear 20s');
		onChangeSize = false;
	},350)
	if($(window).innerWidth()>768 && evnSwiperShow) {
		evnSwiperShow = false;
	}
	if($(window).innerWidth()<=768 && !evnSwiperShow) {
		envSwiper = new Swiper ( ".enviroment-swiper-box", {
		  	slidesPerView: 1.6,
		  	spaceBetween: 24,
	      	centeredSlides: true,
	      	loop: true,
	      	loopedSlides: 3,
	      	speed:800,
	      	autoplay: {
	        	delay: 2500,
	        	disableOnInteraction: false,
	      	},
		})
		envSwiper.autoplay.stop();
		evnSwiperShow = true;
		setTimeout(function(){
			if($(window).innerWidth()<=768) {
				envSwiper.autoplay.start(true);
				evnSwiperShow = true;
			}
		},2500);
	}
})


$(window).scroll(function(){
	let scrollTop = window.pageYOffset;
	if(scrollTop > ($(window).innerHeight()*0.9) && $('.cs-item').hasClass('hide')) {
		$('.cs-item').removeClass('hide');
		$('header').addClass('white-head');
	} else if(scrollTop < $(window).innerHeight()*0.9 && !$('.cs-item').hasClass('hide')) {
		$('.cs-item').addClass('hide');
		$('header').removeClass('white-head');
	}
	if(onScroll) {return}
	onScroll = true;
	addAnimate(scrollTop); onScroll = false;

})
