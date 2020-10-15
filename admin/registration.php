<!DOCTYPE html>
<html lang="en">


<head>
    <title>Admin Panel - Future Computer</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="../img/logo/future logo.png">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <style>
    
    .course-foot-spacing {
        margin-bottom: 88px;
        padding-bottom: 88px;
    }

    .page-title h1 {
        color: #6C3353;
    }
</style>

</head>

<body>
    <!-- begin app -->
<?php include'header.php'; ?>

    


    <div class="app-main" id="main">
                    <!-- begin container-fluid -->
        <div class="container-fluid">
                        <!-- begin row -->
            <div class="row">
                <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                    <div class="d-block d-lg-flex flex-nowrap align-items-center">
                        <div class="page-title mr-4 pr-4 border-right">
                            <h1>Registration</h1>
                        </div>
                        <div class="breadcrumb-bar align-items-center">
                            <nav>
                                <ol class="breadcrumb p-0 m-b-0">
                                    <li class="breadcrumb-item"></li>
                                </ol>
                            </nav>
                        </div>
                                   
                    </div>
                <!-- end page title -->
                </div>
            </div>


 <div class="card-body course-foot-spacing">
                            <div class="datatable-wrapper table-responsive">
                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable" class="display compact table table-striped table-bordered dataTable" role="grid" aria-describedby="datatable_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 75px;">Name</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Number: activate to sort column ascending" style="width: 65px;">Number</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Course: activate to sort column ascending" style="width: 75px;">Course</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Email-ID: activate to sort column ascending" style="width: 20px;">Email ID</th>
                                                        <!-- <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="End-Date: activate to sort column ascending" style="width: 25px;">End-Date</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 25px;">Action</th> -->
                                                     
                                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="activate to sort column ascending" style="width: 100.625px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>   
                                                    
                                                    <!-- <tr role="row" class="odd">
                                                        <td class="sorting_1">Rakesh Sharma</td>
                                                        <td>Java</td>
                                                        <td>3 Months</td>
                                                        <td>01/01/2021</td>
                                                        <td>31/03/2021</td>
                                                        <td style="white-space: nowrap; width: 1%;">
                                                            <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                                    <button type="button" class="btn btn-sm btn-success" style="float: none;"><span class="fa fa-check"></span> &nbsp; RESPOND</button>
                                                                    <button type="button" class="btn btn-sm btn-danger" style="float: none;"><span class="fa fa-ban"></span> &nbsp; IGNORE</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr> -->

                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">Shivani Joshi</td>
                                                        <td>9876543210</td>
                                                        <td>Python</td>
                                                        <td>abc@xyz.com</td>
                                                        <td style="white-space: nowrap; width: 1%;">
                                                            <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                                    <button type="button" class="btn btn-sm btn-success" style="float: none;"><span class="fa fa-check"></span> &nbsp; OK</button>
                                                                    <button type="button" class="btn btn-sm btn-danger" style="float: none;"><span class="fa fa-ban"></span> &nbsp; IGNORE</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">Shivani Joshi</td>
                                                        <td>9876543210</td>
                                                        <td>Python</td>
                                                        <td>abc@xyz.com</td>
                                                        <td style="white-space: nowrap; width: 1%;">
                                                            <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                                    <button type="button" class="btn btn-sm btn-success" style="float: none;"><span class="fa fa-check"></span> &nbsp; OK</button>
                                                                    <button type="button" class="btn btn-sm btn-danger" style="float: none;"><span class="fa fa-ban"></span> &nbsp; IGNORE</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">Karan Singh</td>
                                                        <td>9876543210</td>
                                                        <td>Python</td>
                                                        <td>abc@xyz.com</td>
                                                        <td style="white-space: nowrap; width: 1%;">
                                                            <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                                    <button type="button" class="btn btn-sm btn-success" style="float: none;"><span class="fa fa-check"></span> &nbsp; OK</button>
                                                                    <button type="button" class="btn btn-sm btn-danger" style="float: none;"><span class="fa fa-ban"></span> &nbsp; IGNORE</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">Shivani Joshi</td>
                                                        <td>9876543210</td>
                                                        <td>Python</td>
                                                        <td>abc@xyz.com</td>
                                                        <td style="white-space: nowrap; width: 1%;">
                                                            <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                                    <button type="button" class="btn btn-sm btn-success" style="float: none;"><span class="fa fa-check"></span> &nbsp; OK</button>
                                                                    <button type="button" class="btn btn-sm btn-danger" style="float: none;"><span class="fa fa-ban"></span> &nbsp; IGNORE</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                    
                                                </tbody>
                                                <!-- <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">Name</th>
                                                        <th rowspan="1" colspan="1">Position</th>
                                                        <th rowspan="1" colspan="1">Office</th>
                                                        <th rowspan="1" colspan="1">Age</th>
                                                        <th rowspan="1" colspan="1">Start date</th>
                                                        <th rowspan="1" colspan="1">Salary</th></tr>
                                                </tfoot> -->
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 11 entries
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                    <li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> -->
                                    </div>
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