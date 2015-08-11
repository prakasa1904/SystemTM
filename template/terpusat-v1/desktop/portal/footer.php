    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-4">
                    <p>&copy; <?php echo date('Y'); ?> Terpusat Media. All Rights Reserved.</p>
                </div>
				<div class="col-lg-4">

                </div>
				<div class="col-lg-4" style="text-align: right;">
					<a title="+ Terpusat Media" href="https://plus.google.com/+TerpusatMedia" rel="publisher"><img style="width:30px;" alt="Google + TerpusatMedia" src="<?php echo base_url(); ?>assets/portal/ico/g+.png" /></a>
					<a title="Fans Page Terpusat Media" href="https://id-id.facebook.com/TerpusatMedia"><img style="width:30px;" alt="Facebook TerpusatMedia" src="<?php echo base_url(); ?>assets/portal/ico/facebook.png" /></a>
					<a title="Twitter Terpusat Media" href="https://twitter.com/TerpusatMedia"><img style="width:30px;" alt="Follow TerpusatMedia" src="<?php echo base_url(); ?>assets/portal/ico/twitter.png" /></a>
					<a title="Pinteres Terpusat Media" href="http://www.pinterest.com/TerpusatMedia/"><img style="width:30px;" alt="Pint eres TerpusatMedia" src="<?php echo base_url(); ?>assets/portal/ico/pinterest.png" /></a>
                </div>
            </div>
        </footer>

    </div>
		<!-- JavaScript -->
    <script src="<?php echo base_url(); ?>assets/portal/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>assets/portal/js/bootstrap.min.js"></script>
    <!-- /.container -->
    <script>
		$(document).on('click', '.yamm .dropdown-menu', function(e){
		  e.stopPropagation()
		})
	</script>
</body>

</html>