<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
    <div class="container col-md-3">
        <center><h3 class="mt-4">Register</h3></center>
        <form method="post" action="/">
          @csrf
          <div class="form-floating mb-3 mt-5 ">
              <input type="text" class="form-control" id="nama" placeholder="Name">
              <label for="nama">Name</label>
          </div>
          <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" placeholder="name@example.com">
              <label for="email">Email address</label>
          </div>
          <div class="form-floating">
              <input type="password" class="form-control" id="password" placeholder="Password">
              <label for="floatingPassword">Password</label>
          </div>
          <button type="submit" class="btn btn-success mt-4">Register</button>
        </form>
    </div>
    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>