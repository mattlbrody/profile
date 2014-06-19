	<div id="contactwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<p>DON'T BE SHY, GET IN TOUCH!</p>
					<p>Call me, email me, or fill out the contact form. Whichever method you feel more comfortable with works for me. Look forward to speaking with you.</p>
					<p>
						<small>Tel. 925-876-3287<br/>
						Email. mattlbrody@gmail.com<br/></small>
					</p>
					<p>
						<small>Address. 1327 Homestead Ave.<br/>
						Walnut Creek, CA 94598<br/>
						USA</small>
					</p>
				</div>
				
				<div class="col-lg-6">
					<form role="form" method="post" action="mail.php">
					  <div class="form-group">
					    <label for="name">Your Name</label>
					    <input required name="contactname" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
					    <label for="email">Email address</label>
					    <input required name="contactemail" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					    <label for="message">Message</label>
					    <textarea required name ="contactmessage" class="form-control" rows="3"></textarea>
					  </div>
					  <button name="submit" type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			
			</div><! --/row -->
		</div><!-- /container -->
	</div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/classie.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smoothscroll.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.js"></script>    
	<script src="js/main.js"></script>
		<script>
			var isMobile = {
		    Android: function() {
		        return navigator.userAgent.match(/Android/i);
		    },
		    BlackBerry: function() {
		        return navigator.userAgent.match(/BlackBerry/i);
		    },
		    iOS: function() {
		        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		    },
		    Opera: function() {
		        return navigator.userAgent.match(/Opera Mini/i);
		    },
		    Windows: function() {
		        return navigator.userAgent.match(/IEMobile/i);
		    },
		    any: function() {
		        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		    }
			};
			jQuery(document).ready(function(){
			    if( !isMobile.any() )
					$(function(){
					    $.stellar({
					    horizontalScrolling: false,
					    verticalOffset: 50
					    });
					});
			});
		</script>
		// <script>
		// $(function(){
		// 	$.stellar({
		// 		horizontalScrolling: false,
		// 		verticalOffset: 40
		// 	});
		// });
		// </script>
		
		<script type="text/javascript">
	      $(function() {
	        //    fancybox
	          jQuery(".fancybox").fancybox();
      });
	   </script>
  </body>
</html>