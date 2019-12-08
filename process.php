<?php

if (!isset($_POST["form_id"])) {
	die("error");
}
require_once("connectdb.php");

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = strip_tags($data);
	$data = str_replace("'", "", $data);
	$data = str_replace("<", "", $data);
	$data = str_replace(">", "", $data);
	$data = htmlspecialchars($data);
	if (empty($data)) {
		return false;
	}
	return $data;
}

//LOGINNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
switch ($_POST["form_id"]) {
	case "login":
		if (!isset($_POST['email'])|| !isset($_POST['password']) || !isset($_POST['login_submit'])) {
			die("please fill all");
		}
        
     
		$email = test_input($_POST['email']);
		$password = test_input($_POST['password']);

		if (!$email) {
			die("email not good");
		}
		if (!$password) {
			die("password bad");
		}

		$password = md5($password);
		$sql = "SELECT * FROM users where email='$email' and password='$password'"; 
		$result = mysqli_query($conn, $sql);
		$exists = mysqli_num_rows($result);
		if ($exists != 1) {
			die("user not registered");
		}

		$user = mysqli_fetch_assoc($result);

		session_start();
		$_SESSION['user'] = $user;
		setcookie("user_id", $user['id'], time()+86400, "/");
		
		header('Location: home.php');
		break;


//REGISTERRRRRRRRRRRRRRRRRRRRRRRRRRR



	case "register":
		if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['password_2']) || !isset($_POST['register_submit'])) {
			die("place all infos pls");
		}
        $name = test_input($_POST["name"]);
		$email = test_input($_POST['email']);
		$password = test_input($_POST['password']);
		$password_2 = test_input($_POST['password_2']);
        $status = "Free";

		if (!$email) {
			die("Please enter email");
		}
		 
	     if (!$name) {
			die("Please enter name");
		} 

         if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
           echo "Only letters and white space allowed"; 
         }
         if ((filter_var($email, FILTER_VALIDATE_EMAIL)) !== false) {
             echo "Invalid email format"; 
         }

		  if (!$password || $password != $password_2) {
			die("Pass dont match");
		 }

		$password = md5($password);
		$sql = "select * from users where email='$email' and password='$password'";
		$result = mysqli_query($conn, $sql);
		$exists = mysqli_num_rows($result);
		if ($exists != 0) {
			die("user with same email alredy registered");
		}


		$sql = "insert into users (name, email, password, status) values ('$name', '$email', '$password','$status')";
		$result = mysqli_query($conn, $sql);
		$last_id = mysqli_insert_id($result);
		
		header("Location: login.php?status=login");
		break;

	default:
		echo "error_log(d): " . $_POST['form_id'];
		break;
}
