<?php echo $__env->make('header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

				<section class="page-heading page-heading-small wow fadeIn" data-wow-duration="1.5s">
					<div class="container">
						<div class="page-name">
							<h1>Our Gallery</h1>
							<span>Lovely layout of heading</span>
						</div>
					</div>
				</section>
				
				<section class="on-blog-grid">
					<div class="container">
						<div class="row">

					<?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-md-4">
								<div class="blog-item">
									<a href="/gallery-single/<?php echo e($blog->id); ?>"><img src="<?php echo e(asset('images/'.$blog->image)); ?>" alt=""></a>
									<h3><a href="/gallery-single/<?php echo e($blog->id); ?>"><?php echo e($blog->title); ?></a></h3>

									<p><?php echo e($blog->short_details); ?></p>
									<div class="read-more">
										<a href="/gallery-single/<?php echo e($blog->id); ?>">Read more</a>
									</div>
								</div>
							</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
							<div class="col-md-12">
								<div class="portfolio-page-nav text-center">
									<ul>
										<?php echo e($arr->links('/pagination/blog-pagination')); ?>

									</ul>
								</div>
							</div>
						</div>	
					</div>		
				</section>


<?php echo $__env->make('footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php echo $__env->make('scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zhang\web\resources\views\blog.blade.php ENDPATH**/ ?>