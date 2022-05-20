<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<style>

  .form-group {
  margin-left: 101px;
  width: 500px;
  margin-bottom: 4rem;
}

.right{
  color: grey;
  margin-top: 24%;

}
.btn {
  margin-left: 100px;
}
h3{
  color:rgb(160, 30, 7);
  margin-bottom: 31px;
  font-family: Monospace;
}
.btn{
  background-color:rgb(160, 30, 7);
  border-color:rgb(160, 30, 7);
}
.forget{
  margin-left: 200px;
}
.form-control{
  opacity: 0.7;
  filter: alpha(opacity=70);
  border-radius: 25px;
}
.reg{
  display: block;
  margin-top: 10px;
  margin-left: 366px;
}
.forget{


}
img{
    width: 700px;
    height: 800px;
}
</style>
</head>
<body>


  <div class="row">
      <div class="col-lg-6">
         <img src="images/boo.jfif" >

      </div>
      <div class="col-lg-6 ">

          <form  class="right" method="POST" action="<?php echo e(route('login')); ?>">
              <?php echo csrf_field(); ?>

                <div class="form-group">
                  <h3> LOGIN </h3>
                                              <label for="email" class= "text-md-right"><?php echo e(__('E-Mail Address')); ?></label>


                                              <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong><?php echo e($message); ?></strong>
                                                  </span>
                                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                  <label for="password" class=" text-md-right"><?php echo e(__('Password')); ?></label>


                                              <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                                              <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong><?php echo e($message); ?></strong>
                                                  </span>
                                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group form-check">
                   <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                   <label> Remember me </label>
                </div>
                <button type="submit" class="btn btn-primary">
                                                  <?php echo e(__('Login')); ?>

                                              </button>

                                              <?php if(Route::has('password.request')): ?>
                                                  <a class="forget" href="<?php echo e(route('password.request')); ?>">
                                                      <?php echo e(__('Forgot Your Password?')); ?>

                                                  </a>
                                              <?php endif; ?>
                <a class="reg" href="<?php echo e(route('register')); ?>"> Don't Have An Account ? Register</a>
              </form>

      </div>
   </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH G:\projects\example-app2\resources\views/auth/login.blade.php ENDPATH**/ ?>