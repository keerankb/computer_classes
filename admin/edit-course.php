<!DOCTYPE html>
<html lang="en">


<head>
    <title>Mentor - Bootstrap 4 Admin Dashboard Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <!-- begin app -->
<?php include'header.php'; ?>





<style>
    
.add-staff input::-webkit-outer-spin-button,
.add-staff input::-webkit-inner-spin-button {
  -webkit-appearance: none !important;
  margin: 0 !important;
}
.add-staff input[type=number] {
  -moz-appearance: textfield;
}


.course-foot-spacing {
    margin-bottom: 76px;
    padding-bottom: 76px;
}


</style>




    <div class="app-main" id="main">
                    <!-- begin container-fluid -->
        <div class="container-fluid">
                        <!-- begin row -->
            <div class="row">
                <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                    <div class="d-block d-lg-flex flex-nowrap align-items-center">
                        <div class="page-title mr-4 pr-4 border-right">
                            <h1> Course</h1>
                        </div>
                        <div class="breadcrumb-bar align-items-center">
                            <nav>
                                <ol class="breadcrumb p-0 m-b-0">
                                    <li class="breadcrumb-item">Add Course</li>
                                </ol>
                            </nav>
                        </div>
                                   
                    </div>
                <!-- end page title -->
                </div>
            </div>


                            <div class="col-xl-12 course-foot-spacing">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Add Course</h4>
                                        </div>
                                    </div>
                                    <div class="card-body add-staff">
                                        <form action="#">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="name"><h6>Name of Course</h6></label>
                                                    <input type="text" class="form-control" id="addCourse" placeholder="Name of Course" autofocus required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="duration"><h6>Duration</h6></label>
                                                    <input type="text" class="form-control" id="addDuration" placeholder="Duration" autofocus required>
                                                </div>    
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="startdate"><h6>Start-Date</h6></label>
                                                    <div class="input-group date display-years" data-date-format="dd-mm-yyyy" data-date="14-09-2020">
                                                        <input class="form-control" type="text" placeholder="12-12-2020">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="enddate"><h6>End-Date</h6></label>
                                                    <div class="input-group date display-years" data-date-format="dd-mm-yyyy" data-date="14-09-2018">
                                                        <input class="form-control" type="text" placeholder="12-12-2020">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mb-10 mt-20">
                                                <button type="submit" class="btn btn-lg btn-primary" value="submit" name="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        
<?php include'footer.php'; ?>
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>
</body>


</html>