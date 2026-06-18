<?php if($paginator->hasPages()): ?>										    
										    
										    <?php if($paginator->onFirstPage()): ?>
										                
										    <?php else: ?>
										        <li><a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"><?php echo app('translator')->get('pagination.previous'); ?></a></li>
										    <?php endif; ?>

										    
										    <?php if($paginator->hasMorePages()): ?>
										        <li><a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"><?php echo app('translator')->get('pagination.next'); ?></a></li>
										    <?php else: ?>
										                
										    <?php endif; ?>										        
										<?php endif; ?><?php /**PATH C:\Users\zhang\web\resources\views\pagination\blog-single-pagination.blade.php ENDPATH**/ ?>