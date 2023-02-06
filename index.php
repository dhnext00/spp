<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="assets/image/logo.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-primary">
    <img src="assets/image/logosekolah.png" style="margin-left: 90%;">
    <div class="p-3 mb-2 text-white" style="margin-top: 1%">
    <div id="card">
        <div id="card-content" class="container text-center">
            <div class="row align-items-center">
            <div id="card-title"><h1>LOGIN</h1></div>
        </div>

    <form action="proses/proses_login.php">
    <div class="mb-3 col-md-5 text-center" style="margin-top: 5%;">
        <label for="username" class="form-label">Username</label>
        <span class="material-symbols-outlined">
        <input type="text" class="form-control" id="username" placeholder="Username"/>
        </span>
      </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">

        <div class="vstack gap-2 col-md-5 mx-auto bg-black" style="margin-top: 5%;">
            <button type="button" class="btn btn-outline-secondary text-white">Submit</button>
          </div>
      </div>
      
    </form>
      </div>
      </div>
</body>
</html>