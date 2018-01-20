<div class="col-md-12 blog-post">
	<!-- Contact Me Start -->
	<div class="post-title margin-top-70">
		<h1>Contact <span class="main-color">Me</span></h1>
	</div>
	
	<div class="row margin-top-30">
		<div class="col-md-12">   
			<div class="row">
				<form action="contact/send" method="post">
					<div class="col-sm-6">
						<div class="form-group">
							<input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
							<input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
						</div>
					</div>
					
					<div class="col-sm-12">
						<div class="form-group">
							<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
						</div>
					</div>

					<div class="col-sm-12">
						<div class="textarea-message form-group">
							<textarea name="message" id="message" class="textarea-message form-control" placeholder="Your Message" rows="5"></textarea>
						</div>
					</div>

					<div class="text-center">      
						<button type="submit" name="submit" id="submit" class="load-more-button">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Contact Me End -->
</div>

<script>
	$("#submit").click(function(event) 
	{
		var name = $("#name").val();
		var email = $("#email").val();
		var subject = $("#subject").val();
		var message = $("#message").val();
		
		if(isEmpty(name) || isEmpty(email) || isEmpty(subject) || isEmpty(message))
		{
			alert("Toate campurile necesita completate.");
			event.preventDefault();
		}
	});
	
	function isEmpty(value) 
	{
		return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
	}
</script>