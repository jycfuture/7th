		$(function() {
		    $("#jquery_jplayer_1").jPlayer({
		        ready: function(event) {
		            $(this).jPlayer("setMedia", {
		                mp3: "static/dist/audio/ycjh.mp3" //mp3的播放地址
		            }).jPlayer("play");
		        },
		        timeupdate: function(event) {
		            if (event.jPlayer.status.currentTime == 0) {
		                time = "";
		            } else {
		                time = event.jPlayer.status.currentTime;
		            }
		        },
		        play: function(event) {
		            //点击开始方法调用lrc。start歌词方法 返回时间time
		            $.lrc.start($('#lrc_content').val(), function() {
		                return time;
		            });
		        },
		        swfPath: "/js", //存放jplayer.swf的决定路径
		        solution: "html, flash", //支持的页面
		        supplied: "mp3", //支持的音频的格式
		        wmode: "window"
		    });
		    $('.slider-pic1').slick({
		        dots: false,
		        arrows: true,
		        autoplay: true,
		        slidesToShow: 4,
		        slidesToScroll: 1,
		        responsive: [{
		                breakpoint: 1024,
		                settings: {
		                    slidesToShow: 2,
		                }
		            },
		            {
		                breakpoint: 767,
		                settings: {
		                    slidesToShow: 1,
		                    arrows: false
		                }
		            }
		        ]
		    })
		    $('.slider-pic2').slick({
		        dots: false,
		        arrows: true,
		        autoplay: true,
		        responsive: [{
		            breakpoint: 767,
		            settings: {
		                arrows: false
		            }
		        }]
		    })
		})
		// 返回顶部
		$('#goTop').click(function() {
		    $('body,html').animate({
		        'scrollTop': 0
		    }, 500);
		});
		$(window).scroll(function() {
		    var _top = $(window).scrollTop();
		    if (_top < 200) {
		        $('#goTop').stop().fadeOut(200);
		    } else {
		        $('#goTop').stop().fadeIn(200);
		    }
		});

		// 锚点
		var $root = $('html, body');
		$('.nav a').click(function() {
		    $(this).parents('li').addClass('on').siblings().removeClass('on');
		    var sum;
		    if ($(window).innerWidth() > 1360) { sum = 120 } else { sum = 80 }
		    $root.animate({
		        scrollTop: $($.attr(this, 'href')).offset().top - sum
		    }, 500);
		    return false;
		});
		$('.count-txt').downCount({
		    date: '11/11/2017 00:00:00',
		    offset: +10
		}, function() {
		    alert('倒计时结束!');
		});
		$(window).resize(function() {
		    resizeMove();
		});
		browserRedirect();
		$('.nav-btn').click(function(event) {
		    $(this).toggleClass('on');
		    $(this).parents('.header').toggleClass('on');
		    $(this).siblings('.nav').slideToggle(300);
		})

		function resizeMove() {
		    if ($(window).innerWidth() >= 1300) {
		        var s = skrollr.init();
		    }
		}

		function browserRedirect() {
		    var sUserAgent = navigator.userAgent.toLowerCase();
		    var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
		    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
		    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
		    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
		    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
		    var bIsAndroid = sUserAgent.match(/android/i) == "android";
		    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
		    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
		    if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {} else {
		        var s = skrollr.init();
		    }
		}