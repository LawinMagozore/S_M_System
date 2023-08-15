<?php include('../includes/config.php') ?>
<?php

if (isset($_POST['submit'])) {

    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $from = isset($_POST['from']) ? $_POST['from'] : '';
    $to = isset($_POST['to']) ? $_POST['to'] : '';
    $status = 'publish';
    $type = 'period';
    $date_add = date('Y-m-d g:i:s');

    $query = mysqli_query($db_conn, "INSERT INTO `posts` (`title`,`status`,`publish_date`,`type`) VALUES('$title','$status','$date_add','$type') ");

    if ($query) {


        $item_id = mysqli_insert_id($db_conn);
    }

    mysqli_query($db_conn, "INSERT INTO `metadata` (`meta_key`,`meta_value`,`item_id`) VALUES('from','$from','$item_id') ");
    mysqli_query($db_conn, "INSERT INTO `metadata` (`meta_key`,`meta_value`,`item_id`) VALUES('to','$from','$item_id') ");
}



?>

<?php include('header.php') ?>
<?php include('sidebar.php') ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Periods</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin </a></li>
                        <li class="breadcrumb-item active">Periods </li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Info boxes -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> Periods </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive bg-white">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>title</th>
                                            <th>From</th>
                                            <th>To</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $count = 1;
                                        $args = array(
                                            'type' => 'period',
                                            'status' => 'publish',
                                        );
                                        $periods = get_posts($args);
                                        foreach ($periods as $period) {
                                        ?>
                                            <tr>
                                                <td><?= $count++ ?></td>
                                                <td><?= $period->title ?></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Info boxes -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> Add New period </h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" placeholder="title" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="title">From</label>
                                    <input type="time" name="from" placeholder="From" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="title">To</label>
                                    <input type="time" name="to" placeholder="To" required class="form-control">
                                </div>

                                <button name="submit" class="btn btn-success float-right"> Submit </button>
                            </form>
                        </div>
                    </div>
                </div>
                </di>
            </div>
            <!-- /.row -->
            <!--/. container-fluid -->
    </section>
    <!-- /.content -->

    <?php include('footer.php') ?>