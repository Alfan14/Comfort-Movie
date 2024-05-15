<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <form action="insert-register.php" method="post">
    <h2>Register</h2>
    <p>Create your account</p>
    <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email">
    <div id="email" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="pasword" class="form-label">Password</label>
    <input type="text" class="form-control" id="pasword" name="pasword">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </body>
</html>