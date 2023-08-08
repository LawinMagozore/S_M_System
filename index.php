<?php include("includes/config.php") ?>
<?php include("header.php") ?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary navbar-dark ">
  <!-- Container wrapper -->
  <div class="container-fluid">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#"><b>SMS</b></a> <a class="navbar-brand" href="#">Home</a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <!-- Link -->
        <li class="nav-item"> <a class="nav-link" href="#">About Us</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#">Courses</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#">Events</a> </li>


        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li> <a class="dropdown-item" href="#">Action</a> </li>
            <li> <a class="dropdown-item" href="#">Another action</a> </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li> <a class="dropdown-item" href="#"></a> </li>
          </ul>
        </li>
      </ul>

      <!-- Icons -->
      <ul class="navbar-nav d-flex flex-row me-1">
        <li class="nav-item me-3 me-lg-0"> <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a> </li>
        <li class="nav-item me-3 me-lg-0"> <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a> </li>
      </ul>

      <!-- new dropdown far end side -->

      <ul class="navbar-nav m1-auto nav-flex-icons text-white">

        <!-- Dropdown -->
        <li class="nav-item dropdown text-white">
          <?php if (isset($_SESSION['login'])) { ?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="fas fa-user"></i>Account </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbar">



            </div>



            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li> <a class="dropdown-item" href="#">Action</a> </li>
              <li> <a class="dropdown-item" href="#">Another action</a> </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li> <a class="dropdown-item" href="logout.php">Logout</a> </li>
            </ul>
          <?php } else { ?>
            <a href="login.php" class="nav-link text-white"><i class="fa fa-user mr-2 text-white"></i>User login</a>
          <?php } ?>
      </ul>
      </li>

      <!-- new dropdown far end side-->

    </div>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<!-- form section-->
<section class="py-8">
  <div class="d-flex mt-1 shadow" style=" height:600 px; background: linear-gradient(-45deg, #3232bf 50%,transparent 50%) "> <br>
    <br>
    <br>
    <br>
    <div class=" container-fluid my-auto"> <br>
      <br>
      <div class="row">
        <div class=" col-lg-6 my-auto">
          <h1 class="display-3 fw-bolder"><b>School Management Systems</b></h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            cupiditate harum iusto.<br>
            Sint aliquid consequuntur cum fugit. Ipsam.</P>
          <a href="" class=" btn btn-lg btn-primary">Call For Action</a>
        </div>
        <div class="col-lg-6">
          <div class="col-lg-7 mx-auto card shadow-lg mb-4">
            <div class="card-body mt-4  ">
              <h3>Addmision Form</h3>
              <form action="" method="post" class="">
                <!-- Material input -->

                <div class="md-form">
                  <input type="text" id="name" class="form-control" placeholder="Your Name" autofocus>
                </div>

                <!-- Material input -->

                <div class="md-form mt-2 ">
                  <input type="text" id="email" class="form-control" placeholder="Your Email">
                </div>
                <!-- Material input -->

                <div class="md-form mt-2">
                  <input type="text" id="mobile" class="form-control" placeholder="Your Mobile">
                </div>
                <!-- Material input -->

                <div class="md-form mt-2 mb-2 ">
                  <input type="text" id="class" class="form-control" placeholder="Your Class">
                </div>
                <button class="btn btn-primary btn-block"> Submit Form</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end of form section-->

<!--About Us section-->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 py-5">
        <h2 class="fw-bolder"> About <br>
          School Management Systems</h2>
        <div class="pr-5">
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste ex doloremque voluptate ut. Amet dolores corrupti unde, aliquid ducimus beatae, est, rem tempora excepturi dicta, repellendus officiis commodi vel!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat vero accusantium doloribus. Corrupti, quis, blanditiis! Magnam voluptatibus, adipisci perferendis, quia natus alias. Dignissimos nemo ipsum, vel voluptates vitae, accusamus provident!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium commodi quibusdam recusandae deserunt possimus libero laboriosam. Voluptatem optio atque laboriosam. Labore iste pariatur vitae culpa. Sequi sed, doloremque consequatur similique. </p>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A expedita aperiam saepe vel officia laboriosam rerum magnam voluptatibus tempore porro quia, incidunt, laudantium ipsa culpa, architecto veritatis asperiores possimus vero? </p>
        </div>
        <a href="about-us.php" class="btn btn-primary">Know More</a>
      </div>
      <div class="col-lg-6" style="background-image:url(assets/images/p2.jpg)"> </div>
    </div>
  </div>
</section>
<!-- end of about us section-->

<!-- courses section-->
<section class="py-5 bg-light">
  <div class="text-center mb-5">
    <h2 class="fw-bolder"> Our Courses</h2>
    <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus et in aspernatur, ea tempora</p>
  </div>
  <div class="container">
    <div class="row">
      <?php

      $query = mysqli_query($db_conn, "SELECT * FROM courses ORDER BY id DESC LIMIT 0, 8");
      while ($course = mysqli_fetch_object($query)) {
      ?>
        <div class="col-lg-3 mb-4">
          <div class="card"> <img src="./dist/uploads/<?php echo $course->image ?>" alt="" class="img-fluid rounded-top course-image">
            <div class="card-body"> <b> <?php echo $course->name ?></b>
              <p class="card-text"> <b> Duration: </b><?php echo $course->duration ?> <br>
                <b> Price:</b> 500/- Us
              </p>
              <button class="btn btn-block btn-primary btn-sm">Enroll Now</button>
            </div>
          </div>
        </div>
      <?php   }  ?>
    </div>
  </div>
</section>
<!-- end of courses section-->

<!-- Teachers section-->
<section class="py-5 ">
  <div class="text-center mb-5">
    <h2 class="fw-bolder"> Our Teachers</h2>
    <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus et in aspernatur, ea tempora</p>
  </div>
  <div class="container">
    <div class="row">
      <?php

      for ($r = 0; $r < 8; $r++) {
      ?>
        <div class="col-lg-3 py-5">
          <div class="card">
            <div class="col-7 position-absolute" style="top:-50px"> <img src="assets/images/p4.jpg" alt="" class="mw-100 border rounded-circle"> </div>
            <div class="card-body">
              <h5 class="card-title"> Teacher's Name</h5>
              <p class="card-text"> <b> Courses:</b> 5<br>
                <b>Rating:</b> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i>
              </p>
            </div>
          </div>
        </div>
      <?php
      }

      ?>
    </div>
  </div>
</section>
<!-- end of Teachers section-->

<!--archivements-->
<section class="py-4 text-white" style=" height:600 px;background: #3232bf">
  <div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2> Archivements</h2>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa rerum, consect consequuntur, possimus.</p>
          <img src="assets/images/p2.jpg" alt="" class="img-fluid rounded">
        </div>
        <div class="col-lg-6 my-auto">
          <div class="row ">
            <div class="col-lg-6 mb-4">
              <div class="border rounded ">
                <div class="card-body text-center"> <span> <i class="text-warning fas fa-graduation-cap fa-3x"></i></span>
                  <h2 class="my-2 fw-bold ">455</h2>
                  <hr class="border-warning">
                  <h4> Graduates</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="border rounded ">
                <div class="card-body text-center"> <span> <i class="text-warning fas fa-graduation-cap fa-3x"></i></span>
                  <h2 class="my-2 fw-bold ">455</h2>
                  <hr class="border-warning">
                  <h4> Graduates</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="border rounded ">
                <div class="card-body text-center"> <span> <i class="text-warning fas fa-graduation-cap fa-3x"></i></span>
                  <h2 class="my-2 fw-bold ">455</h2>
                  <hr class="border-warning">
                  <h4> Graduates</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="border rounded ">
                <div class="card-body text-center"> <span> <i class="text-warning fas fa-graduation-cap fa-3x"></i></span>
                  <h2 class="my-2 fw-bold ">455</h2>
                  <hr class="border-warning">
                  <h4> Graduates</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--end archivements-->

<!--Testimonies-->
<section class="py-5">
  <div class="text-center mb-5">
    <h2 class="fw-bolder"> What People Say </h2>
    <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus et in aspernatur, ea tempora</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="border rounded position-relative">
          <div class="p-4 text-centre"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam amet doloribus velit harum cum consequuntur, debitis laboriosam ratione a ex aliquam laudantium repudiandae quas magni saepe veniam molestiae incidunt esse! </div>
          <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem;left:.5rem; opacity: .2"></i>
        </div>
        <div class="text-center mt-n2"> <img src="assets/images/p4.jpg" alt="" class="rounded-circle border" width="100" height="100">
          <h6 class="mb-0 fw-bold">Name Of candidates </h6>
          <p><i> Destination</i></p>
        </div>
      </div>
      <div class="col-6">
        <div class="border rounded position-relative">
          <div class="p-4 text-centre"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam amet doloribus velit harum cum consequuntur, debitis laboriosam ratione a ex aliquam laudantium repudiandae quas magni saepe veniam molestiae incidunt esse! </div>
          <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem;left:.5rem; opacity: .2"></i>
        </div>
        <div class="text-center mt-n2"> <img src="assets/images/p4.jpg" alt="" class="rounded-circle border" width="100" height="100">
          <h6 class="mb-0 fw-bold">Name Of candidates </h6>
          <p><i> Destination</i></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--end of Testimonies-->

<!--footer-->
<footer style="background:url(assets/images/p2.jpg)center/cover no-repeat">
  <div class="py-5 text-white" style="background: #000000bb">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="col-lg-4">
            <h5> Useful Links </h5>
            <ul class="fa-ul ml-4">
              <li> <a href="" class="text-light"><i class="fa-li fa fa-angle-right"> </i>List icons</a> </li>
              <li> <a href="" class="text-light"><i class="fa-li fa fa-angle-right"> </i>can be used </a> </li>
              <li> <a href="" class="text-light"><i class="fa-li fa fa-angle-right"> </i>as bullets</a> </li>
              <li> <a href="" class="text-light"><i class="fa-li fa fa-angle-right"> </i>in Lists</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="col-lg-4">
            <h5> Useful Links </h5>
            <ul class="fa-ul ml-4">
              <li> <a href="" class="text-light"><i class="fa-li fa fa-angle-right"> </i>List icons</a> </li>
              <li> <a href="" class="text-light"><i class="fa-li fa fa-angle-right"> </i>can be used </a> </li>
              <li> <a href="" class="text-light"><i class="fa-li fa fa-angle-right"> </i>as bullets</a> </li>
              <li> <a href="" class="text-light"><i class="fa-li fa fa-angle-right"> </i>in Lists</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="col-lg-4">
            <h5> Useful Links </h5>
            <ul class="fa-ul ml-4">
              <li> <a href="" class="text-light"><i class="fa-li fa fa-angle-right"> </i>List icons</a> </li>
              <li> <a href="" class="text-light"><i class="fa-li fa fa-angle-right"> </i>can be used </a> </li>
              <li> <a href="" class="text-light"><i class="fa-li fa fa-angle-right"> </i>as bullets</a> </li>
              <li> <a href="" class="text-light"><i class="fa-li fa fa-angle-right"> </i>in Lists</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--end footer-->

<?php include("footer.php") ?>