<?php echo $__env->make('header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s">
					<div class="container">
						<div class="page-name">
							<h1>Our Clients</h1>
							<span>Lovely layout of heading</span>
						</div>
					</div>
				</section>

				<section class="clients">
					<div class="container">
						<div class="section-heading">
							<h2>Our Clients</h2>
							<div class="section-dec"></div>
						</div>

					<?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo e(asset('images/'.$client->image)); ?>" alt=""></a>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
				</section>


<?php echo $__env->make('footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php echo $__env->make('scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zhang\web\resources\views\clients.blade.php ENDPATH**/ ?>