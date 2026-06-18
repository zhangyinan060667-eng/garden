<?php echo $__env->make('header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

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
								<img src="<?php echo e(asset('images/gardening-club-home.jpg')); ?>" alt="Gardening Club flyer" class="img-responsive" style="margin: 0 auto;">
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
							<?php $__currentLoopData = $events_i; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<p>
									<?php if($event->event_date): ?><?php echo e(\Carbon\Carbon::parse($event->event_date)->format('jS F Y')); ?> - <?php endif; ?><?php echo e($event->title); ?><?php if($event->details): ?> - <?php echo e($event->details); ?><?php endif; ?>
								</p>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php echo $__env->make('scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zhang\web\resources\views\index.blade.php ENDPATH**/ ?>