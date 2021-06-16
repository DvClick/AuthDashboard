<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Circl - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="../../assets/css/main.min.css" rel="stylesheet">
    <link href="../../assets/css/custom.css" rel="stylesheet">


</head>

<body class="login-page">

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-4">
                <div class="card login-box-container">
                    <div class="card-body">


                        <form action="{{route('login.check')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="username" id="floatingInput"
                                        placeholder="username">
                                    <label for="floatingInput">Username</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-info m-b-xs">Sign In</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Javascripts -->
    <script src="../../assets/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="../../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/main.min.js"></script>
</body>

</html>