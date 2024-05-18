<?php echo $__env->make('frontend/layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php echo $__env->make('frontend/layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;




<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('frontend/layout.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;<?php /**PATH C:\xampp\htdocs\e-commerce\resources\views/frontend/layout/app.blade.php ENDPATH**/ ?>