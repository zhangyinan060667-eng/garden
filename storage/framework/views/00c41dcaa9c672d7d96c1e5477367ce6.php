<?php echo $__env->make('header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

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

					<?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="service-item col-md-4">
							<span><i class="fa fa-calendar"></i></span>
							<div class="tittle"><h3><?php echo e($event->title); ?></h3></div>
							<?php if($event->event_date): ?>
								<p><?php echo e(\Carbon\Carbon::parse($event->event_date)->format('jS F Y')); ?></p>
							<?php endif; ?>
							<?php if($event->details): ?>
								<p><?php echo e($event->details); ?></p>
							<?php endif; ?>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
					</div>
				</section>

<?php echo $__env->make('footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php echo $__env->make('scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\Users\zhang\web\resources\views\events.blade.php ENDPATH**/ ?>