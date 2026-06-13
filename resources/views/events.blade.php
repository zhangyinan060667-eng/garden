@include('header')

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s">
					<div class="container">
						<div class="page-name">
							<h1>Events</h1>
							<span>Upcoming gardening club events</span>
						</div>
					</div>
				</section>

				<section class="services on-services green">
					<div class="container">
					<div class="row">
						<div class="section-heading">
							<h2>Upcoming Events</h2>
							<div class="section-dec"></div>
						</div>

					@foreach($arr as $event)
						<div class="service-item col-md-4">
							<span><i class="fa fa-calendar"></i></span>
							<div class="tittle"><h3>{{$event->title}}</h3></div>
							@if($event->event_date)
								<p>{{ \Carbon\Carbon::parse($event->event_date)->format('jS F Y') }}</p>
							@endif
							@if($event->details)
								<p>{{$event->details}}</p>
							@endif
						</div>
					@endforeach

					</div>
					</div>
				</section>

@include('footer')

@include('scripts')
