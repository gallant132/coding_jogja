
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/"> -->

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url("assets/home/") ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url("assets/login/") ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url("assets/login/") ?>login.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form method="post" action="<?= base_url('getlogin/login_aksi');?>" class="form-signin">
      <img class="mb-4" src="<?= base_url("assets/login/") ?>lock.png" alt="" width="200" height="200">
      <h1 class="h3 mb-3 font-weight-normal">Welcome Admin </h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="username" required autofocus>
      <br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" onclick="login_aksi();" type="submit">Masuk</button>
      
    </form>
  </body>
</html>
