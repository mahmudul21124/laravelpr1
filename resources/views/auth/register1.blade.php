<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Register</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- vector map CSS -->
    <link href="{{ asset('public/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}"
        rel="stylesheet" type="text/css" />



    <!-- Custom CSS -->
    <link href="{{ asset('public/dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="wrapper pa-0">

        <!-- Main Content -->
        <div class="page-wrapper pa-0 ma-0">
            <div class="container-fluid">
                <!-- Row -->
                <div class="table-struct full-width full-height">
                    <div class="table-cell vertical-align-middle">
                        <div class="auth-form  ml-auto mr-auto no-float">
                            <div class="panel panel-default card-view mb-0">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Sign up</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-wrap">
                                                    <form action="{{ route('register') }}" method="POST">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label class="control-label mb-10"
                                                                for="exampleInputuname_2">Name</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    required="" id="exampleInputuname_2"
                                                                    placeholder="Enter Name" name="name">
                                                                <div class="input-group-addon"><i class="icon-user"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label mb-10"
                                                                for="exampleInputEmail_2">Email address</label>
                                                            <div class="input-group">
                                                                <input type="email" name="email" class="form-control"
                                                                    required="" id="exampleInputEmail_2"
                                                                    placeholder="Enter email">
                                                                <div class="input-group-addon"><i
                                                                        class="icon-envelope-open"></i></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label mb-10"
                                                                for="exampleInputpwd_2">Password</label>
                                                            <div class="input-group">
                                                                <input type="password" class="form-control"
                                                                    required="" id="exampleInputpwd_2"
                                                                    placeholder="Enter password" name="password">
                                                                <div class="input-group-addon"><i class="icon-lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label mb-10"
                                                                for="exampleInputpwd_3">Confirm Password</label>
                                                            <div class="input-group">
                                                                <input type="password" class="form-control"
                                                                    required="" id="exampleInputpwd_3"
                                                                    placeholder="Repeat password" name="password_confirmation">
                                                                <div class="input-group-addon"><i class="icon-lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit"
                                                                class="btn btn-success btn-block">sign up</button>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <span class="inline-block pr-5">Already have an
                                                                account?</span>
                                                            <a class="inline-block txt-danger"
                                                                href="{{ route('login') }}">Sign In</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="{{ asset('public/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('public/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('public/dist/js/jquery.slimscroll.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('public/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('public/dist/js/init.js') }}"></script>
</body>

</html>
