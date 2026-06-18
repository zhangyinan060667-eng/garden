<?php echo $__env->make('header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s">
					<div class="container">
						<div class="page-name">
							<h1>Latest Photos</h1>
							<span>Lovely layout of heading</span>
						</div>
					</div>
				</section>

				<section class="portfolio on-portfolio">
					<div class="container">
						<div class="col-sm-12 text-center">
							<div id="projects-filter">
								<a href="#" data-filter="*" class="active">Show All</a>
								<a href="#" data-filter=".furniture">Furniture on this page</a>
								<a href="#" data-filter=".wallpaper">Wallpaper on this page</a>
								<a href="#" data-filter=".nature">Nature on this page</a>
								<a href="#" data-filter=".branding">Branding on this page</a>
							</div>
						</div>
						<div class="row">
							<div class="row" id="portfolio-grid">

							<?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>			
								<div class="item col-md-4 col-sm-6 col-xs-12 <?php echo e($photos->type); ?>">
							  		<figure>
			        					<img alt="1-image" src="<?php echo e(asset('images/'.$photos->image)); ?>">
			        					<figcaption>
			            					<h3><?php echo e($photos->title); ?></h3>
			            					<p><?php echo e($photos->details); ?></p>
			        					</figcaption>
			    					</figure>	
							    </div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</div>
						</div>
						<div class="col-md-12">
							<div class="portfolio-page-nav text-center">
								<ul>
									<?php echo e($arr->links('/pagination/photos-pagination')); ?>								
								</ul>
							</div>
						</div>
					</div>
				</section>
 
<?php echo $__env->make('footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php echo $__env->make('scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zhang\web\resources\views\work-3columns.blade.php ENDPATH**/ ?>