@include('header')

				<section class="services services_edit gardening-club-home">
					<div class="container">
						<div class="section-heading">
							<h2>WALLINGTON, CARSHALTON & BEDDINGTON HORTICULTURAL SOCIETY</h2>
							<div class="section-dec"></div>
						</div>

						<div class="row">
							<div class="col-md-7 text-center">
								<h1>GARDENING CLUB</h1>
								<p>A gardening club for local people who enjoy gardens and gardening</p>

								<p>Do you enjoy your garden?<br>
								Would like to know more about gardening?</p>

								<p>Then, why not join our gardening group?</p>

								<p>Learn from our expert speakers, get tips from the group<br>
								and enjoy the company of other gardeners.</p>

								<p>We meet at the Trinity Centre, Holy Trinity Church,<br>
								Malden Road, Wallington, SM6 8BL</p>

								<p>Usually on the third Wednesday of the month, 7.15 – 9.30pm</p>
							</div>
							<div class="col-md-5 text-center">
								<img src="{{asset('images/gardening-club-home.jpg')}}" alt="Gardening Club flyer" class="img-responsive" style="margin: 0 auto;">
							</div>
						</div>
					</div>
				</section>

				<section class="call-to-action-1 coming-up-home">
					<div class="container">
						<div class="section-heading coming-up-heading">
							<h2>COMING UP</h2>
							<div class="section-dec"></div>
						</div>

						<div class="col-md-10 col-md-offset-1 text-center">
							@foreach($events_i as $event)
								<p>
									@if($event->event_date){{ \Carbon\Carbon::parse($event->event_date)->format('jS F Y') }} - @endif{{ $event->title }}@if($event->details) - {{ $event->details }}@endif
								</p>
							@endforeach
						</div>
					</div>
				</section>

				<section class="services green services_edit">
					<div class="container">
						<div class="col-md-10 col-md-offset-1 text-center">
							<p>If you think you would like to join us<br>
							just call Diane on 020 8669 0318,<br>
							or Rupert on 077240 15431 for details.</p>
						</div>
					</div>
				</section>

@include('footer')

@include('scripts')