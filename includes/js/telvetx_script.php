<script type="text/javascript">
	function telvetx() {
		$("#logo_link img").stop().fadeOut(1500);
	}
	function newLogo() {
		$("#logo_link").append('<img id="test_logo" style="display:none;" height="90px" src="images/telvetx.jpg" >');
		$("#test_logo").fadeIn(1500);
	}
	$("document").ready(function() {

	});
	$(window).load( function() {
		telvetx();
		window.setTimeout(function(){
			newLogo();
		}, 1500);
		
	});
</script>