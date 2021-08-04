
    <footer class="container-fluid">
    	<div class="container">
    		<div class="row">
    			<col-12 class="text-center">
    				<p>Somatik Sound System</p>
    				<a href="mailto:ghettopsychedelic@gmail.com" class="mail">Связаться по почте</a>
    			</col-12>
    		</div>
    	</div>
    </footer>

	

    <!-- Scripts -->

    <!-- Jquery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core Script -->
    <script src="js/bootstrap.bundle.min.js"></script>


	<!-- Scroll to top -->
	<div id="toTop"><i class="fa fa-arrow-circle-up"></i></div>
    <script type="text/javascript">
		$(function() {
		    $(window).scroll(function() {
		        if ($(this).scrollTop() != 0) {
		            $('#toTop').fadeIn();
		        } else {
		            $('#toTop').fadeOut();
		        }
		    });
		    $('#toTop').click(function() {
		        $('body,html').animate({
		            scrollTop: 0
		        }, 500);
		    });
		});
	</script>

    <!-- WOW.js for animations -->
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</html>