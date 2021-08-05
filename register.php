<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="css/index.css">
    <!-- boostrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="container-login">
            <div class="div-login">
                <div class="image-con d-flex justify-content-center">
                    <img src="image/hacker.png" alt="hacker.png" width="150px" height="150px">
                </div>
                <div class="container d-flex justify-content-center">
                    <form action="php/registerprocess.php" method="post">
                        <label for="fnamereg" class="form-label">First Name</label>
                        <input type="text" name="fnamereg" id="fnamereg" class="form-control mb-4" required>
                        <label for="lnamereg" class="form-label">Last Name</label>
                        <input type="text" name="lnamereg" id="lnamereg" class="form-control mb-4" required>
                        <label for="emaillogin" class="form-label">Email</label>
                        <input type="email" name="emaillogin" id="emaillogin" class="form-control mb-4" required>
                        <label for="phonenumbreg" class="form-label">Phone Number</label>
                        <input type="number" name="phonenumbreg" id="phonenumbreg" class="form-control mb-4" required>
                        <label for="passwordlogin" class="form-label">Password</label>
                        <input type="password" name="passwordlogin" id="passwordlogin" class="form-control" required>
                        <div class="row mt-4">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
                            </div>
                            <div class="col-6">
                                <a href="login.php" class="btn btn-secondary">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>