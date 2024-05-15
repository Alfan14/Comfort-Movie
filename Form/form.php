<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Add Record Form</title>
  </head>
  <body>
    <form action="insert-register.php" method="post">
      <p>
        <label for="username">username:</label>
        <input type="text" name="username" id="username">
      </p>
      <p>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
      </p>
      <p>
        <label for="pasword">pasword:</label>
        <input type="text" name="pasword" id="pasword">
      </p>
      <input type="submit" value="Submit" name="submit">
    </form>
  </body>
</html>