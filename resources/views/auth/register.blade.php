<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    

    <!-- Title Page-->
    <title>Register Forms</title>

    <!-- Icons font CSS-->
    <link href="../../../signup-form/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../../../signup-form/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="../../../signup-form/https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../../../signup-form/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../../signup-form/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../../signup-form/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" style="background: url('../../../signup-form/images/download1.jpg') no-repeat center center fixed; background-size: cover;">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">fullname</label>
                                    <input class="input--style-4" type="text" name="fullname" :value = "old('fullname')">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                <label class="label">Password</label>
                                <input class="input--style-4" type="password" name="password" required :value = "old('password')">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday":value = "old('birthday')">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender":value = "old('gender')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender":value = "old('gender')">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email":value = "old('email')">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone":value = "old('number')">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Subject</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject":value = "old('value')">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Subject 1:value = "old('subject 1')"</option>
                                    <option>Subject 2:value = "old('subject 2')"</option>
                                    <option>Subject 3:value = "old('subject 3')"</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15 button-container">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button :value = "old('submit')">
                            <a href="{{ route('login')}}" class="btn btn--radius-2 btn--blue signup-link">Log In</a>
                            <a href="{{ url('/') }}" class="btn btn--radius-2 btn--blue">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../../../signup-form/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../../../signup-form/vendor/select2/select2.min.js"></script>
    <script src="../../../signup-form/vendor/datepicker/moment.min.js"></script>
    <script src="../../../signup-form/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../../../signup-form/js/global.js"></script>
    

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->