<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Schedule | Future Computer</title>

    <!-- Favicon -->
    <link rel="icon" href="img/logo/future logo.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>
    
    .reg-modal .modal-header {
        background-color: #343a40;
        /*color: #fff;*/
    }

    .reg-modal .modal-header button,
    .reg-modal .modal-header h4 {
        color: #fff;
    }

    .reg-modal-foot {
        margin-right: 70px; 
    }

    @media only screen and (min-width: 300px) and (max-width: 575px){
        .reg-modal-foot {
        margin-right: 5px; 
    }
    }
    @media only screen and (min-width: 576px) and (max-width: 765px){
        .reg-modal-foot {
        margin-right: 45px; 
    }
    }
    @media only screen and (min-width: 766px) and (max-width: 991px) {
        .reg-modal-foot {
        margin-right: 45px; 
    }
    }

    .reg-modal .modal-content .modal-body .mod-content input::-webkit-outer-spin-button,
    .reg-modal .modal-content .modal-body .mod-content input::-webkit-inner-spin-button {
        -webkit-appearance: none !important;
        margin: 0 !important;
    }
    .reg-modal .modal-content .modal-body .mod-content input[type=number] {
        -moz-appearance: textfield !important;
    }

</style>
<style>
    
    .course-schedule .course-schedule-content {
        margin: 10px 20px;
        padding: 10px 20px;
        justify-content: center;
        font-size: 16px;
    }
    .course-schedule .course-schedule-content td{
        padding-top: 15px;
        padding-left: 15px;
        padding-right: 20px; 
    }
    .course-schedule .course-schedule-content td button {
        /*margin-bottom: 20px;*/
        /*margin-left: 20px;*/
        justify-content: center;
        /*position: relative;
        right: 80px;*/
    }
    /*
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .course-schedule .course-schedule-content {
        margin: 10px 20px; } }
    @media only screen and (max-width: 767px) {
      .course-schedule .course-schedule-content {
        padding: 10px 20px; } }
*/
/*@media only screen and (min-width: 575px) and (max-width: 766px){
    .course-schedule .course-schedule-content {
    margin: 10px 20px;
    padding: 10px 20px;
}}*/


    @media only screen and (max-width: 1200px) {
        #course-tables table, #course-tables thead, #course-tables tbody, #course-tables th, #course-tables td, #course-tables tr {
             display: block;
    }
}

@media only screen and (max-width: 1200px) {
    #course-tables td  {
        position: relative;
        border: none;
        border-bottom: 1px solid #eee;
        padding-left: 50%;
        white-space: normal;
        text-align: left;
    }
}
@media only screen and (max-width: 1200px) {
    #course-tables tr {
        border: 1px solid #ccc;
    }
}
@media only screen and (max-width: 1200px) {
    #course-tables thead {
        display: none;
    }
}
@media only screen and (max-width: 1200px) {
#course-tables td:before {
    content: attr(data-title);
} }
@media only screen and (max-width: 1200px) {
#course-tables td:before {
    position: absolute;
    top: 6px;
    left: 6px;
    width: 45%;
    padding-top: 15px;
    padding-left: 15px;
    padding-right: 20px; 
    padding-bottom: 15px;
    white-space: nowrap;
    text-align: left;
    font-weight: bold;
}}
@media only screen and (max-width: 1200px) {
    #course-tables button {
        position: relative;
        right: 65px;
    }
}
</style>
</head>

<body>
   <?php include'header.php'; ?> 

       <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Time-Table</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->



<!-- ##### Register Modal starts ##### -->
    <div id="regModal1" class="modal fade" role="dailog">
        <div class="reg-modal modal-dialog modal-lg modal-dialog-centered" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registration Form</h4>
                    <button class="close" type="button" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-horizontal mod-content">
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputEmail">Name :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" placeholder="Name" autofocus required>
                            </div>
                            <div class="mod-content form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Mobile No. :</label> -->
                                <input class="form-control form-control-sm mr-1" type="number" id="" placeholder="Phone Number" autofocus maxlength="10" minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Course :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" value="Java" disabled style="cursor: no-drop;">
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">E-mail ID :</label> -->
                                <input class="form-control form-control-sm mr-1" type="email" id="" placeholder="E-mail ID" autofocus required>
                            </div>
                        </div>
                        <div class="container">
                            <div class="reg-modal-foot">
                                <div class="form-row">
                                    <button class="btn btn-secondary btn-md ml-auto" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-warning btn-md ml-1">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="regModal2" class="modal fade" role="dailog">
        <div class="reg-modal modal-dialog modal-lg modal-dialog-centered" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registration Form</h4>
                    <button class="close" type="button" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-horizontal mod-content">
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputEmail">Name :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" placeholder="Name" autofocus required>
                            </div>
                            <div class="mod-content form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Mobile No. :</label> -->
                                <input class="form-control form-control-sm mr-1" type="number" id="" placeholder="Phone Number" autofocus maxlength="10" minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Course :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" value="Web Development" disabled style="cursor: no-drop;">
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">E-mail ID :</label> -->
                                <input class="form-control form-control-sm mr-1" type="email" id="" placeholder="E-mail ID" autofocus required>
                            </div>
                        </div>
                        <div class="container">
                            <div class="reg-modal-foot">
                                <div class="form-row">
                                    <button class="btn btn-secondary btn-md ml-auto" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-warning btn-md ml-1">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <div id="regModal3" class="modal fade" role="dailog">
        <div class="reg-modal modal-dialog modal-lg modal-dialog-centered" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registration Form</h4>
                    <button class="close" type="button" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-horizontal mod-content">
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputEmail">Name :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" placeholder="Name" autofocus required>
                            </div>
                            <div class="mod-content form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Mobile No. :</label> -->
                                <input class="form-control form-control-sm mr-1" type="number" id="" placeholder="Phone Number" autofocus maxlength="10" minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Course :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" value="Python" disabled style="cursor: no-drop;">
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">E-mail ID :</label> -->
                                <input class="form-control form-control-sm mr-1" type="email" id="" placeholder="E-mail ID" autofocus required>
                            </div>
                        </div>
                        <div class="container">
                            <div class="reg-modal-foot">
                                <div class="form-row">
                                    <button class="btn btn-secondary btn-md ml-auto" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-warning btn-md ml-1">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <div id="regModal4" class="modal fade" role="dailog">
        <div class="reg-modal modal-dialog modal-lg modal-dialog-centered" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registration Form</h4>
                    <button class="close" type="button" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-horizontal mod-content">
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputEmail">Name :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" placeholder="Name" autofocus required>
                            </div>
                            <div class="mod-content form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Mobile No. :</label> -->
                                <input class="form-control form-control-sm mr-1" type="number" id="" placeholder="Phone Number" autofocus maxlength="10" minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Course :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" value="ASP.NET" disabled style="cursor: no-drop;">
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">E-mail ID :</label> -->
                                <input class="form-control form-control-sm mr-1" type="email" id="" placeholder="E-mail ID" autofocus required>
                            </div>
                        </div>
                        <div class="container">
                            <div class="reg-modal-foot">
                                <div class="form-row">
                                    <button class="btn btn-secondary btn-md ml-auto" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-warning btn-md ml-1">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <div id="regModal5" class="modal fade" role="dailog">
        <div class="reg-modal modal-dialog modal-lg modal-dialog-centered" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registration Form</h4>
                    <button class="close" type="button" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-horizontal mod-content">
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputEmail">Name :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" placeholder="Name" autofocus required>
                            </div>
                            <div class="mod-content form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Mobile No. :</label> -->
                                <input class="form-control form-control-sm mr-1" type="number" id="" placeholder="Phone Number" autofocus maxlength="10" minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Course :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" value="SQL" disabled style="cursor: no-drop;">
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">E-mail ID :</label> -->
                                <input class="form-control form-control-sm mr-1" type="email" id="" placeholder="E-mail ID" autofocus required>
                            </div>
                        </div>
                        <div class="container">
                            <div class="reg-modal-foot">
                                <div class="form-row">
                                    <button class="btn btn-secondary btn-md ml-auto" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-warning btn-md ml-1">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <div id="regModal6" class="modal fade" role="dailog">
        <div class="reg-modal modal-dialog modal-lg modal-dialog-centered" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registration Form</h4>
                    <button class="close" type="button" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-horizontal mod-content">
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputEmail">Name :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" placeholder="Name" autofocus required>
                            </div>
                            <div class="mod-content form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Mobile No. :</label> -->
                                <input class="form-control form-control-sm mr-1" type="number" id="" placeholder="Phone Number" autofocus maxlength="10" minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Course :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" value="C & C++" disabled style="cursor: no-drop;">
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">E-mail ID :</label> -->
                                <input class="form-control form-control-sm mr-1" type="email" id="" placeholder="E-mail ID" autofocus required>
                            </div>
                        </div>
                        <div class="container">
                            <div class="reg-modal-foot">
                                <div class="form-row">
                                    <button class="btn btn-secondary btn-md ml-auto" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-warning btn-md ml-1">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <div id="regModal7" class="modal fade" role="dailog">
        <div class="reg-modal modal-dialog modal-lg modal-dialog-centered" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registration Form</h4>
                    <button class="close" type="button" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-horizontal mod-content">
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputEmail">Name :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" placeholder="Name" autofocus required>
                            </div>
                            <div class="mod-content form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Mobile No. :</label> -->
                                <input class="form-control form-control-sm mr-1" type="number" id="" placeholder="Phone Number" autofocus maxlength="10" minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Course :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" value="Tally" disabled style="cursor: no-drop;">
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">E-mail ID :</label> -->
                                <input class="form-control form-control-sm mr-1" type="email" id="" placeholder="E-mail ID" autofocus required>
                            </div>
                        </div>
                        <div class="container">
                            <div class="reg-modal-foot">
                                <div class="form-row">
                                    <button class="btn btn-secondary btn-md ml-auto" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-warning btn-md ml-1">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <div id="regModal8" class="modal fade" role="dailog">
        <div class="reg-modal modal-dialog modal-lg modal-dialog-centered" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registration Form</h4>
                    <button class="close" type="button" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-horizontal mod-content">
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputEmail">Name :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" placeholder="Name" autofocus required>
                            </div>
                            <div class="mod-content form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Mobile No. :</label> -->
                                <input class="form-control form-control-sm mr-1" type="number" id="" placeholder="Phone Number" autofocus maxlength="10" minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Course :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" value="C#" disabled style="cursor: no-drop;">
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">E-mail ID :</label> -->
                                <input class="form-control form-control-sm mr-1" type="email" id="" placeholder="E-mail ID" autofocus required>
                            </div>
                        </div>
                        <div class="container">
                            <div class="reg-modal-foot">
                                <div class="form-row">
                                    <button class="btn btn-secondary btn-md ml-auto" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-warning btn-md ml-1">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <div id="regModal9" class="modal fade" role="dailog">
        <div class="reg-modal modal-dialog modal-lg modal-dialog-centered" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registration Form</h4>
                    <button class="close" type="button" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-horizontal mod-content">
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputEmail">Name :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" placeholder="Name" autofocus required>
                            </div>
                            <div class="mod-content form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Mobile No. :</label> -->
                                <input class="form-control form-control-sm mr-1" type="number" id="" placeholder="Phone Number" autofocus maxlength="10" minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Course :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" value="Python" disabled style="cursor: no-drop;">
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">E-mail ID :</label> -->
                                <input class="form-control form-control-sm mr-1" type="email" id="" placeholder="E-mail ID" autofocus required>
                            </div>
                        </div>
                        <div class="container">
                            <div class="reg-modal-foot">
                                <div class="form-row">
                                    <button class="btn btn-secondary btn-md ml-auto" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-warning btn-md ml-1">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <div id="regModal10" class="modal fade" role="dailog">
        <div class="reg-modal modal-dialog modal-lg modal-dialog-centered" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registration Form</h4>
                    <button class="close" type="button" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-horizontal mod-content">
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputEmail">Name :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" placeholder="Name" autofocus required>
                            </div>
                            <div class="mod-content form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Mobile No. :</label> -->
                                <input class="form-control form-control-sm mr-1" type="number" id="" placeholder="Phone Number" autofocus maxlength="10" minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">Course :</label> -->
                                <input class="form-control form-control-sm mr-1" type="text" id="" value="Java" disabled style="cursor: no-drop;">
                            </div>
                            <div class="form-group col-sm-10 offset-sm-1">
                                <!-- <label class="" for="inputPassword">E-mail ID :</label> -->
                                <input class="form-control form-control-sm mr-1" type="email" id="" placeholder="E-mail ID" autofocus required>
                            </div>
                        </div>
                        <div class="container">
                            <div class="reg-modal-foot">
                                <div class="form-row">
                                    <button class="btn btn-secondary btn-md ml-auto" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-warning btn-md ml-1">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- ##### Register Modal ends ##### -->



<!-- ##### Table starts here ##### -->

<section class="section-padding-100">
    <div class="container">
        <div class="col-12">
            <div class="section-heading text-center mx-auto wow bounceIn" data-wow-delay="300ms">
                <span> Here are some </span>
                <h3>Online Batch Schedule</h3>
            </div>
        </div>
        <!-- <h1>hello</h1> -->
        <div class="course-schedule wow bounceInUp" data-wow-delay="300ms">
            <div class="course-schedule-content">
                <div class="table-responsive" id="course-tables">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <div class="order-2">
                        <tr role="row">
                            <th>Course</th>
                            <th>Faculty</th>
                            <th>Date</th>
                            <th>Time(IST)</th>
                            <th>Duration</th>
                            <th></th>
                        </tr>
                        </div>
                    </thead>
                    <tbody> 
                        <tr class="text-align-center">
                            <td data-title="Course">Java</td>
                            <td data-title="Faculty">Mr. Rakesh Sharma</td>
                            <td data-title="Date">1st Jan 2021</td>
                            <td data-title="Time(IST)">10.00 AM</td>
                            <td data-title="Duration">42 Hrs</td>
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#regModal1">Register Now</button></td>
                        </tr>
                        <tr class="info">
                            <td data-title="Course">Web Development</td>
                            <td data-title="Faculty">Mr. Rakesh Sharma</td>
                            <td data-title="Date">1st Jan 2021</td>
                            <td data-title="Time(IST)">10.00 AM</td>
                            <td data-title="Duration">42 Hrs</td>
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#regModal2">Register Now</button></td>
                        </tr>
                        <tr class="info">
                            <td data-title="Course">Python</td>
                            <td data-title="Faculty">Mr. Rakesh Sharma</td>
                            <td data-title="Date">1st Jan 2021</td>
                            <td data-title="Time(IST)">10.00 AM</td>
                            <td data-title="Duration">42 Hrs</td>
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#regModal3">Register Now</button></td>
                        </tr>
                        <tr class="info">
                            <td data-title="Course">ASP.NET</td>
                            <td data-title="Faculty">Mr. Rakesh Sharma</td>
                            <td data-title="Date">1st Jan 2021</td>
                            <td data-title="Time(IST)">10.00 AM</td>
                            <td data-title="Duration">42 Hrs</td>
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#regModal4">Register Now</button></td>
                        </tr>
                        <tr class="info">
                            <td data-title="Course">SQL</td>
                            <td data-title="Faculty">Mr. Rakesh Sharma</td>
                            <td data-title="Date">1st Jan 2021</td>
                            <td data-title="Time(IST)">10.00 AM</td>
                            <td data-title="Duration">42 Hrs</td>
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#regModal5">Register Now</button></td>
                        </tr>
                        <tr class="info">
                            <td data-title="Course">C & C++</td>
                            <td data-title="Faculty">Mr. Rakesh Sharma</td>
                            <td data-title="Date">21st Dec 2020</td>
                            <td data-title="Time(IST)">04.00 PM</td>
                            <td data-title="Duration">42 Hrs</td>
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#regModal6">Register Now</button></td>
                        </tr>
                        <tr class="info">
                            <td data-title="Course">Tally</td>
                            <td data-title="Faculty">Mr. Rakesh Sharma</td>
                            <td data-title="Date">25th Oct 2020</td>
                            <td data-title="Time(IST)">06.00 PM</td>
                            <td data-title="Duration">42 Hrs</td>
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#regModal7">Register Now</button></td>
                        </tr>
                        <tr class="info">
                            <td data-title="Course">C#</td>
                            <td data-title="Faculty">Mr. Rakesh Sharma</td>
                            <td data-title="Date">1st Jan 2021</td>
                            <td data-title="Time(IST)">02.00 PM</td>
                            <td data-title="Duration">42 Hrs</td>
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#regModal8">Register Now</button></td>
                        </tr>
                        <tr class="info">
                            <td data-title="Course">Python</td>
                            <td data-title="Faculty">Mr. Rakesh Sharma</td>
                            <td data-title="Date">15th Nov 2021</td>
                            <td data-title="Time(IST)">10.00 AM</td>
                            <td data-title="Duration">42 Hrs</td>
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#regModal9">Register Now</button></td>
                        </tr>
                        <tr class="info">
                            <td data-title="Course">Java</td>
                            <td data-title="Faculty">Mr. Rakesh Sharma</td>
                            <td data-title="Date">1st Jan 2021</td>
                            <td data-title="Time(IST)">06.00 AM</td>
                            <td data-title="Duration">42 Hrs</td>
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#regModal10">Register Now</button></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ##### Table ends here ##### -->





<?php include 'footer.php';?>
    <!-- ##### All Javascript Script ##### -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>