<!DOCTYPE html>
<html>
  <head>
    <title>Simple login form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <form action="post.php" method="post">
      <h1>Login Form</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="username"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" >
        <label for="password"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" >
      </div>
      <button type="submit">Login</button>
    </form>
  </body>
</html>