
	@extends('app')
	@section('content')
	<section id="content">
		<div class="ic">More Website Templates @ TemplateMonster.com - Mrach 03, 2012!</div>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<article class="grid_8">
						<h3>Contact Form</h3>
						<form action="#" method="POST" class="registrationform">
							<div class="form-group">
								<label for="exampleInputPassword1">Name</label>
								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name"
									name="name">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
									placeholder="Enter email" name="email">

							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Phone number</label>
								<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Phone No."
									name="phone">
							</div>

							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</article>
					<article class="grid_4">
						<div class="indent-top indent-left">
							<div class="wrapper p3">
								<figure class="img-indent-r"><a href="#"><img src="images/page1-img1.png" alt=""></a></figure>
								<div class="extra-wrap">
									<strong class="title-1">Tell Your<strong>Friends</strong><em>About</em><em>Our
											Cafe</em></strong>
								</div>
							</div>
							<h3 class="p1">Latest News</h3>
							<p class="prev-indent-bot">24 Hour Emergency Towing</p>
							<p class="p0">Monday - Friday: 7:30 am - 6:00</p>
							<p class="prev-indent-bot">Saturday: 7:30 am - Noon</p>
							<p class="img-indent-bot">Night Drop Available</p>
							<dl>
								<dt class="prev-indent-bot">Demolink.org 8901 Marmora Road, Glasgow, D04 89GR.</dt>
								<dd><span>Telephone:</span>+1 959 552 5963;</dd>
								<dd><span>FAX:</span>+1 959 552 5963</dd>
								<dd><span>E-mail:</span><a href="#">mail@demolink.org</a></dd>
							</dl>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
	@endsection

	<script>
		$('.registrationform').submit(function(e){
			e.preventDefault();
                    var fd = new FormData(this);
                    fd.append('_token',"{{ csrf_token() }}");
                    $.ajax({
				          	url: "{{ route('user.contact.save') }}",
                    type: "post",
				  	        data: fd,
				          	dataType: "json",
				          	processData: false,
                    contentType: false,
                    beforeSend: function () {
                 $('.generalsets').prop('disabled', true);
                  },
				     	success: function (result) {
                if(result.status===true){
						iziToast.success({
                     message: result.msg,
                     position: 'topRight'
                   });
                   setInterval( location.reload(), 10000);
                }
                else{
                toast.error(result.msg);
                }

					       }
			        	})

		});
	</script>
</body>

</html>