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
                    <h1 class="m-0">Manage Timetable

                        <a href="?action=add" class="btn btn-success btn-sm">Add New</a>
                    </h1>
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
            <?php if (isset($_GET['action']) && $_GET['action'] == 'add') { ?>


                <div class="card">
                    <div class="card-body">

                        <form action="" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="form-group">
                                            <label for="class_id">Select Class</label>
                                            <select require name="class_id" id="class_id" class="form-control">
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
                                    <div class="col-lg">


                                        <div class="form-group" id="section-container">
                                            <label for="teacher_id">Select Teacher</label>
                                            <select require name="teacher_id" id="teacher_id" class="form-control">
                                                <option value="">-Select Teacher-</option>
                                                <option value="1">Teacher 1</option>
                                                <option value="2">Teacher 2</option>
                                            </select>
                                        </div>



                                    </div>
                                    <div class="col-lg">

                                        <div class="form-group" id="section-container">
                                            <label for="section">Select Section</label>
                                            <select require name="section" id="section" class="form-control">
                                                <option value="">-Select Section-</option>
                                            </select>
                                        </div>



                                    </div>
                                    <div class="col-lg">


                                        <div class="form-group" id="section-container">
                                            <label for="period_id">Select Period</label>
                                            <select require name="period_id" id="period_id" class="form-control">
                                                <option value="">-Select Period-</option>

                                                <?php
                                                $count = 1;
                                                $args = array(
                                                    'type' => 'period',
                                                    'status' => 'publish',
                                                );

                                                $periods = get_posts($args);
                                                foreach ($periods as $key => $period) { ?>
                                                    <option value="<?php echo $period->id ?>"> <?php echo $period->title ?> </option>
                                                <?php } ?>



                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-lg">


                                        <div class="form-group" id="section-container">
                                            <label for="day_name">Select Day</label>
                                            <select require name="day_name" id="day_name" class="form-control">
                                                <option value="">-Select Day-</option>


                                                <?php
                                                $days = ['Monday', 'Tuesday', 'Wensday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                                                foreach ($days as $key => $day) { ?>
                                                    <option value="<?php echo $day ?>"> <?php echo ucwords($day) ?> </option>

                                                <?php } ?>



                                            </select>
                                        </div>



                                    </div>
                                    <div class="col-lg">


                                        <div class="form-group" id="section-container">
                                            <label for="subject_id">Select subject</label>
                                            <select require name="subject_id" id="subject_id" class="form-control">
                                                <option value="">-Select subject-</option>
                                                <option value="1">Mathematics</option>
                                                <option value="2">English</option>
                                            </select>
                                        </div>



                                    </div>
                                </div>

                                </select>
                            </div>



                        </form>


                    </div>
                </div>



            <?php } else { ?>
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
                                foreach ($periods as $period) {

                                    $from = get_metadata($period->id, 'from')[0]->meta_value;
                                    $to = get_metadata($period->id, 'to')[0]->meta_value;
                                ?>
                                    <tr>
                                        <td><?php echo date('h:i A', strtotime($from)) ?> - <?php echo date('h:i A', strtotime($to)) ?></td>
                                        <?php
                                        $days = ['Monday', 'Tuesday', 'Wensday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                                        foreach ($days as $day) {
                                            $query = mysqli_query($db_conn, "SELECT * FROM posts as p INNER JOIN metadata as md ON (md.item_id = p.id) INNER JOIN metadata as mp ON (mp.item_id = p.id) WHERE p.type = 'timetable' AND p.status = 'publish' AND md.meta_key ='day_name' AND md.meta_value = '$day' AND mp.meta_key = 'period_id' AND mp.meta_value = '$period->id' ");


                                            if (mysqli_num_rows($query) > 0) {
                                                while ($timetable = mysqli_fetch_object($query)) { ?>
                                                    <td>
                                                        <P>
                                                            <b>Teacher:</b>
                                                            <?php
                                                            $teacher_id = get_metadata($timetable->item_id, 'teacher_id')[0]->meta_value;
                                                            echo get_user_data($teacher_id)[0]->name;
                                                            ?>
                                                            <br>
                                                            <b>Class:</b>Class 1 <br>
                                                            <b>Section:</b>B <br>
                                                            <b>Subject:</b>Mathematics <br>

                                                        </P>
                                                    </td>
                                                <?php }
                                            } else { ?>
                                                <td>
                                                    <P>
                                                        Unscheduled

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


            <?php } ?>
        </div>
        <!-- /.row -->
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->

    <?php include('footer.php') ?>