<?php include("header.php") ?>
<section class="bg-dark vh-100 d-flex">
  <div class="col-3 m-auto">
    <div class="card">
      <div class="card-body">
        <div class="border rounded-circle mx-auto d-flex" style="width: 100px;height: 100px"><i class="fa fa-user text-dark fa-3x m-auto"></i></div>
        <form action="actions/login.php" method="POST">
          
          <!-- Material input -->
          
          <div class="md-form mt-2 ">
            <input type="text" id="email" name="email" class="form-control" placeholder="Your Email">
          </div>
          <!-- Material input -->
          
          <div class="md-form mt-2 ">
            <input id="password" type="password" name="password" class="form-control" placeholder="Your Password">
          </div>
          <div class="text-center mt-2">
            <button class="btn btn-primary" name="login"> Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include("footer.php") ?>