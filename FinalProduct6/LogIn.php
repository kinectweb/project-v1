<?php
  session_start();
  $link = mysqli_connect("129.105.36.214", "root", "123456", "kinectdata");
  if (mysqli_connect_error()){
    die("Could not connect to Database");
  }

  if($_POST['submit'] =="Signup"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO users (email,password) VALUES('$email','$password ')";
    mysqli_query($link,$query);
    $info =  "Sign up successfully";
    $_SESSION['id'] = mysqli_insert_id($link);
    header('Location: service.php');
    // print_r($_SESSION);
  }

  if($_POST['submit'] =="Login"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query="SELECT * FROM users Where email ='$email' AND password= '$password' LIMIT 1" ;
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_array($result);
    // print_r($row);
    if($row){
      $_SESSION['id'] = $row['id'];
      header('Location: service.php');
    }else{
      $info = "We can not find the matched email and password. Please try again.";
    }

    // print_r($_SESSION);
  }
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login-Page</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<style>
  #info{
    position:absolute;
  }
</style>

<body>


  <div class="container">

      <div id="login-form">

        <h3>Login</h3>

        <fieldset>

          <form  method="post">

            <input type="email" name='email' required value="Email" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' "> <!-- JS because of IE support; better: placeholder="Email" -->

            <input type="password" name='password' required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> <!-- JS because of IE support; better: placeholder="Password" -->

            <input id="Signup" name='submit' type="submit" value="Signup">

            <input id="Login" name='submit' type="submit" value="Login">

            <!-- <footer class="clearfix">

              <p><span class="info">?</span><a href="#">Forgot Password</a></p>

            </footer> -->

          </form>




        </fieldset>

      </div> <!-- end login-form -->
      <div id="info">
        <?php  echo htmlspecialchars($info); ?>
      </div>
</div>

</body>


<script type="text/javascript">

// var myvar = <?php echo json_encode($info); ?>;
// console.log(myvar);
</script>


</html>
