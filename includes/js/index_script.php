<script type="text/javascript">
	function clearMovie () {
		$("img:animated").stop();
		$(".ami").stop().animate({opacity: 0}, 600);
		$("#main_content").animate({top: 0}, 600).css("overflow","hidden");
		$("#main_slider").css("display","block").animate({bottom: 0}, 1500);
		$(".slider_1 img").animate({left: 0});
	}
	function playMovie () {
		$("img:animated").stop();
		$("#phone_inner").stop().animate({opacity: 1}, 1500);
		$("#arrow").stop().animate({top: 150},1500).animate({left: 600}, 1500);
		$("#monitor_inner").stop().animate({left: 685}, 2500).animate({opacity: 1}, 1500);
	}
	function resetMovie () {
		$("img:animated").stop();
		$("#phone_inner").stop().animate({opacity: 0}, 700);
		$("#monitor_inner").stop().animate({opacity: 0}, 700);
		$("#arrow").stop().animate({opacity: 0}, 700).css("left","200px").animate({opacity: 1}, 100)	
	}

	function moveIt () {
		// $(".blaz").animate({opacity: 0}, 500);
		$(".slider_1").stop().animate({opacity: 1}, 1000).animate({left: 1500}, 600);
	}
	function fadeReplace() {
		$("#s1").stop().animate({opacity: 0}, 500);
		$("#s2").stop().animate({top: 0}, 500).css("display", "block").animate({opacity: 1}, 500);
	}
	function movePic() {
		$("#slider_22").animate({left: 1000}, 1000);
		// $("#slider_22 img").animate({top: -500}, 800).animate({top: 0}, 800);
		// $("#slider_22 .blaz").animate({top: 500}, 800).append("<h2>ello</h2>").animate({top: 0}, 800);
	}
	$("document").ready(function() {
		// alert("ello");
		// $("#phone_inner").animate({opacity: 1}, 1500);
		// $("#arrow").animate({top: 250},1500).animate({left: 600}, 1500);
		// $("#monitor_inner").animate({opacity: 1}, 1500);
		// $("#preview").stop().animate({top: 0}, 1500);
// $("#preview").animate({"top": "-285px"}, 1500);
		$("#clickable").click(
			function() {
				fadeReplace();
			});
		$("#link_test").click( 
			function() {
				movePic();
			});

		$(".hoverable").click(
			function() {
				clearMovie();
			});
		$("img.hoverable").hover(
			function() {
				$(this).stop().animate({opacity: .5}, 500);
			},function() {
				$(this).stop().animate({opacity: 1}, 500);
			});
		$("#clickable_1").click(
			function() {
				$(".slider_22:not(#s1)").stop().css("display" , "none");
				$("#s1").stop().css("display" , "block");
				$("#clickable_1").css("background-position", "0px 21px");
				$(".sb:not(#clickable_1)").css("background-position", "0px 0px");
			});
		$("#clickable_2").click(
			function() {
				$(".slider_22:not(#s2)").stop().css("display" , "none");
				$("#s2").stop().css("display" , "block");
				$("#clickable_2").css("background-position", "0px 21px");
				$(".sb:not(#clickable_2)").css("background-position", "0px 0px");
			});
		$("#clickable_3").click(
			function() {
				$(".slider_22:not(#s3)").stop().css("display" , "none");
				$("#s3").stop().css("display" , "block");
				$("#clickable_3").css("background-position", "0px 21px");
				$(".sb:not(#clickable_3)").css("background-position", "0px 0px");
			});
		$("#clickable_4").click(
			function() {
				$(".slider_22:not(#s4)").stop().css("display" , "none");
				$("#s4").stop().css("display" , "block");
				$("#clickable_4").css("background-position", "0px 21px");
				$(".sb:not(#clickable_4)").css("background-position", "0px 0px");
			});

	});
	$(window).load( function() {
		
		playMovie();
		window.setTimeout(function(){
			clearMovie();
		}, 7000);
	});
	</script>