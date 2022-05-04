<?php
require_once "dbconnect.php";

/*this is the login page*/
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">

    <title>Login</title>

<link rel ="stylesheet" href="assets/css/cssY/style.css">
<link rel ="stylesheet" href="assets/css/cssY/modal.css">
<script src="assets/js/jsTech/modal.js"></script>


</head>
		<!-- The Modal -->
		<div id="myModal" class="modal">

		<!-- Modal content -->
			<div class="modal-content">
  				<span class="close" onclick='document.getElementById("myModal").style.display = "none";
'>&times;</span>
  				<h2>Wrong Password or Username</h2>
			</div>

		</div>

<?php
if ( isset($_POST['userNameI']) && isset($_POST['userPassI'])){
    $sql="SELECT user_name,user_pass,user_type from users where  user_pass= :pw and user_name= :un";
    //echo "<pre> \n$sql\n </pre>\n";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(
        ':un' => $_POST['userNameI'],
        ':pw' => $_POST['userPassI']));

    $row=$stmt->fetchAll(PDO::FETCH_ASSOC);


    //var_dump($row);
    if( $row==false){
		?>
		<script>
			document.getElementById("myModal").style.display = "block";

		</script>
		<?php
    } else { 
        $username=$row[0]['user_name'];
        $type=$row[0]['user_type'];
        session_start();
        $_SESSION['username'] = "$username";
        $_SESSION['type'] = "$type"; 
        
        

        if($type==='admin'){
        /*go to home page*/

            ?>
            <script> window.location.href='index.php';
            </script>
            <?php

        } else {
            ?>
            <script> 
			window.location.href='index.php';
			</script>
            <?php
        }
		?>

        <?php
        
    }
}
?>


<?php
if ( isset($_POST['userNameU']) && isset($_POST['userPassU']) && isset($_POST['userMailU'])){
    $sql="insert into users values (:un,:pw,:um,'avg');";

    //echo "<pre> \n$sql\n </pre>\n";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(
        ':un' => $_POST['userNameU'],
        ':pw' => $_POST['userPassU'],
		':um' => $_POST['userMailU']));
	}
?>
<body>



<div class="login-wrap">
	<div class="login-html">
		<input id="space1" type="radio" name="sign" class="sign-in" checked><label for="space1" class="space">Sign In</label>
		<input id="space2" type="radio" name="sign" class="sign-up"><label for="space2" class="space">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
            <form method="post">

				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" name ="userNameI" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="userPassI" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr1"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
            </form>

			<div class="sign-up-htm">
                <form method="post">

				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" name ="userNameU" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name ="userPassU" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" name ="userMailU" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr2"></div>
				<div class="foot-lnk">
					<label for="space1">Already Member?</a>
				</div>
                </form>

			</div>
		</div>
	</div>
</div>

</body>
</html>