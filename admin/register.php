<?php include "../hub/function.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="fullname" class="form-control form-control-use"style="border-radius: 50px;" id="exampleFirstName"
                                            placeholder="Full Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" name="image" class="form-control" id="exampleLastName" style="border-radius: 50px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-use"style="border-radius: 50px;" id="exampleInputEmail"
                                        placeholder="Email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" name="phone" class="form-control form-control-use"style="border-radius: 50px;"
                                            id="exampleInputPassword" placeholder="Phone">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password" class="form-control form-control-use"style="border-radius: 50px;"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="role" class="form-label">Select User Role</label>
                                    <select name="role" class="form-control" id="exampleRole" style="border-radius: 50px;">
                                        <option >Select Role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Employee">Employer</option>
                                    </select>
                                    </div>
                                    <div class="col-sm-6">
                                    <label for="status" class="form-label">Select User Status</label>
                                        <select name="status" class="form-control" style="border-radius: 50px">
                                        <option >Select Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Draft">Draft</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" href="login.php" name="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                               
                            </form>
                             
                            <?php createUser(); ?>
                            
                            <hr>
                            
                            <div class="text-center">
                                <a type="submit" class="btn btn-primary small btn-user" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>