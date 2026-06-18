<?php if($paginator->hasPages()): ?>

            
            <?php if($paginator->onFirstPage()): ?>
                
            <?php else: ?>
            	<li><a href="<?php echo e($paginator->previousPageUrl()); ?>"><i class="fa fa-angle-double-left"></i></a></li>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link"><?php echo e($element); ?></span></li>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li><span class="current-page"><?php echo e($page); ?></span></li>
                        <?php else: ?>
                            <li><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
                <li><a href="<?php echo e($paginator->nextPageUrl()); ?>"><i class="fa fa-angle-double-right"></i></a></li>
            <?php else: ?>
               
            <?php endif; ?>

<?php endif; ?>
									
<?php /**PATH C:\Users\zhang\web\resources\views\pagination\photos-pagination.blade.php ENDPATH**/ ?>