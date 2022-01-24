
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form action="<?php echo e(route('submit')); ?>" method="POST">
    <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">age</label>
    <input type="text" class="form-control" name="age" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">description</label>
    <input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">salary</label>
    <input type="text" class="form-control" name="salary" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form><?php /**PATH /opt/lampp/htdocs/secondhandbazar/resources/views/form.blade.php ENDPATH**/ ?>