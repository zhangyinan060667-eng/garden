@include('header')

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s">
					<div class="container">
						<div class="page-name">
							<h1>Contact Us</h1>
							<span>Lovely layout of heading</span>
						</div>
					</div>
				</section>	

				<section class="page-heading wow fadeIn">
				</section>

				<section class="contact-us">
					<div class="container">
						<div class="section-heading">
							<h2>Send Us A Message</h2>
							<div class="section-dec"></div>
						</div>
						<div class="send-message col-sm-12">
							<form id="contact_form" method="POST" enctype="multipart/form-data">
								@csrf
								<div class=" col-md-4 col-sm-4 col-xs-6">
									<input type="text" class="blog-search-field" name="name" placeholder="Your name..." value="" maxlength="15" required>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6">
									<input type="text" class="blog-search-field" name="email" placeholder="Your email..." value="" maxlength="20" required>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<input type="text" class="subject" name="subject" placeholder="Subject..." value="" maxlength="30" required>
								</div>
								<div class="col-md-12 col-sm-12">
									<textarea id="message" class="input" name="message" placeholder="Message..." maxlength="300" required></textarea>
								</div>
								<div class="submit-coment col-md-12">
									<div class="btn-black">
										<input type="submit" name="submit_contact" value="SEND NOW">
									</div>
								</div>
							</form>		
						</div>
					</div>
				</section>

				<section class="contact-map-wrapper">
					<div class="container">
						<div class="section-heading">
							<h2>Find Us On Map</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<iframe style="margin-left: 250px; border: none; " src="https://www.google.com/maps?q=Garden%20club%2C%20SM6%208BL%20UK&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							<div class="col-sm-12">
							</div>
						</div>
					</div>
				</section>


@include('footer')

@include('scripts')