<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <!-- JQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>


</head>
<body>
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                        <div class="card-header">
                            <h2 class="h2 text-center fw-bold">Signup form for user</h2>
                        </div>
                        <div class="card-body">
                            <form id="singup_form" method="post">
                                <div class="row mb-2">
                                    <div class="col-4">
                                        <label class="label fw-bold" for="username">User Name :</label>
                                    </div>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            <input class=" form-control" type="text" name="username" id="username">
                                        </div>
                                        <div id="nameError" class="text text-danger fz-1"></div>
                                        
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4">
                                        <label class="label fw-bold" for="user_email">Email :</label>
                                    </div>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                            <input class=" form-control" type="email" name="user_email" id="user_email">
                                        </div>
                                        <div id="emailError" class="text text-danger fz-1"></div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4">
                                        <label class="label fw-bold" for="phone">Phone(BD) :</label>
                                    </div>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                            <input class=" form-control" type="text" name="phone" id="phone">
                                        </div>
                                        <div id="phoneError" class="text text-danger fz-1"></div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4">
                                        <label class="label fw-bold" for="password">Password :</label>
                                    </div>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <input class=" form-control" type="password" name="password" id="password">
                                            <span class="input-group-text"> <i id="eye-btn" class="fa fa-eye-slash"></i> </span>
                                        </div>
                                        <div id="passError" class="text text-danger fz-1"></div>
                                        <div id="passSymbolError" class="text text-danger fz-1"></div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4">
                                        <label class="label fw-bold" for="confirm_pass">Confirm Password :</label>
                                    </div>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <input class=" form-control" type="password" name="confirm_pass" id="confirm_pass">
                                            <span class="input-group-text"> <i id="confrm-eye-btn" class="fa fa-eye-slash"></i> </span>
                                        </div>
                                        <div id="confrmPassError" class="text text-danger fz-1"></div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4">
                                    </div>
                                    <div class="col-8">
                                        <button class="btn btn-success text-uppercase" type="submit">Signup</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>



    <script src="scripts.js"></script>
</body>
</html>