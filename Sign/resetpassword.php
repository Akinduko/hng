<?php
include_once("header.php");
?>


<div class="container" >
    <div class="row justify-content-md-center">
        <form style='text-align: center; padding: 100px'>
            <h1>Reset Password</h1>
            <p style="width: 480px; margin-left: 150px;">
                Enter your email address and we'll send you an email with instructions to reset your password.
            </p>
            <div style="padding: 20px 200px 0px 200px;  width: 800px;">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POSTc">
                <input type="text" name="email" class="form-control form-control-lg rounded-right" placeholder="johndoe@example.com" aria-label="Username" aria-describedby="basic-addon1">
                <br />
                <button class="btn btn-primary btn-block" type="submit" style="border-radius: 8px;" >Reset Password</button>
                </form>
                <p style='color: #ADADAD '>
                     Already have account? <a href="login.php" style="text-decoration: none; "><span style="color: #1E99E0">Log In</span></a> 
                </p>
            </div>
        </form>
    </div> 
</div>


<?php
$to = $_POST["name"];
$subject = "HTML email";

$message ="
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <slayers@hng.fun>' . "\r\n";
$headers .= 'Cc: slayers@hng.fun' . "\r\n";

mail($to,$subject,$message,$headers);
// define variables and set to empty values
 $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
include_once("footer.php");
?>
