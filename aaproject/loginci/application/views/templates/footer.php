<br><br>			    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
			    <script>
			      $("#image").change(function(){
			        readURL(this);
			        //other uploading proccess [server side by ajax and form-data ]
			    });

			function readURL(input) {
			        if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            
			            reader.onload = function (e) {
			                $('#profile').attr('src', e.target.result);
			            }
			            
			            reader.readAsDataURL(input.files[0]);
			        }
			    }
			    </script>
			    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
			    <!-- Include all compiled plugins (below), or include individual files as needed -->
			    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
			<div id="footer">Footer here</div>
		</div>
	</body>
</html>