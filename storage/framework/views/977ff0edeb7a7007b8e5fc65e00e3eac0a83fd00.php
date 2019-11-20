<?php $__env->startSection('content'); ?>
<h1>Account Page</h1>

<form action="/createsubmit" method="post">
<?php echo csrf_field(); ?>
<div class="form-group">
    <label for="username">username:</label>
    <input type="text" class="form-control" name="username" id="username">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="text" class="form-control" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" name="pwd" id="pwd">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/soumya/Documents/workspace/Laravel/blog/resources/views/create.blade.php ENDPATH**/ ?>