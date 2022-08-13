<html>
   <head>
      <title>Online Voting System</title>
      <link rel="stylesheet" href="stylesheet.css">
   </head>
   <body>
      <center>
         <div id="headerSection">
            <h1>Online Voting System</h1>
         </div>
         <hr>

         <div id="loginSection">
            <h2>Login</h2>
            <form action="api/login.php" method="POST">
               <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
               <input type="password" name="pass" placeholder="Enter password" required><br><br>
               <select name="role" style="width: 15%; border: 2px solid black">
               </select><br><br>
               <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
               New User? <a href="routes/register.php">Register here</a>
            </form>
         </div>
      </center>
   </body>
</html>