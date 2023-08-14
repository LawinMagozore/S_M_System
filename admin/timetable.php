<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Timetable</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin </a></li>
                        <li class="breadcrumb-item active">Timetable </li>
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
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="class">Select Class</label>
                                    <select require name="class" id="class" class="form-control">
                                        <option value="">-Select Class-</option>
                                        <?php
                                        $count = 1;
                                        $args = array(
                                            'type' => 'class',
                                            'status' => 'publish',
                                        );

                                        $classes = get_posts($args);
                                        foreach ($classes as $key => $class) { ?>
                                            <option value="<?php echo $class->id ?>"> <?php echo $class->title ?> </option>
                                        <?php } ?>
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-6">


                                <div class="form-group" id="section-container">
                                    <label for="section">Select Section</label>
                                    <select require name="section" id="section" class="form-control">
                                        <option value="">-Select Section-</option>
                                    </select>
                                </div>



                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    <table class="table table-bordered">

                        <thead>
                            <tr>

                                <th>Timing</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wensday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>
                        <tbody style="font-size:x-small">
                            <?php

                            $args = array(
                                'type' => 'period',
                                'status' => 'publish',
                            );

                            $periods = get_posts($args);

                            foreach ($periods as $period) { ?>
                                <tr>
                                    <td>7:00 AM - 7:45 AM</td>
                                    <?php
                                    $days = ['Monday', 'Tuesday', 'Wensday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                                    foreach ($days as $day) {
                                        $query = mysqli_query($db_conn, "SELECT * FROM posts as p INNER JOIN metadata as md ON (md.item_id = p.id) INNER JOIN metadata as mp ON (mp.item_id = p.id) WHERE p.type = 'timetable' AND p.status = 'publish' AND md.meta_key ='day_name' AND md.meta_value = '$day' AND mp.meta_key = 'period_id' AND mp.meta_value = '$period->id' ");
                                        while ($timetable = mysqli_fetch_object($query)) {

                                    ?>
                                            <td>
                                                <P>
                                                    <b>Teacher:</b> <?php print_r(get_metadata($timetable->item_id, 'teacher_id')[0]->meta_value) ?> <br>
                                                    <b>Class:</b>Class 1 <br>
                                                    <b>Section:</b>B <br>
                                                    <b>Subject:</b>Mathematics <br>

                                                </P>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                            <?php  } ?>



                        </tbody>

                    </table>

                </div>

            </div>
        </div>
        <!-- /.row -->
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->

    <?php include('footer.php') ?>