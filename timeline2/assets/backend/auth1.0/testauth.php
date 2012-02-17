<?php

// this should be the header of every page you want to protect.

// import the class
include("Auth.class.php");  

// setting up the auth required data
$auth = new Auth;
$auth->cookieName = "my_app_cookie";
$auth->sessionName = "my_app_session";

// the user array must be an array of arrays
$auth->users = array( array('username'=>'user1', 'password'=>'user1'), array('username'=>'user2', 'password'=>'user2') );


// the login page
$loginPage = "testlogin.html";

//call the authentication process, usually from a form post request
if($_POST['login_form'])
{
	// fill with md5 encoding, and the optional rememberMe flag
	$remember = ($_POST['remember']) ? true : false;
	$auth->do_auth(md5($_POST['username']), md5($_POST['password']), $remember);
}

//call the logout process, usually from a get request
if($_GET['logout']=="true")
{
	$auth->do_logout();
	header(sprintf("Location: %s", $loginPage));
}

// check if the user is logged, if yes continue, otherwise redirect to login page
if($auth->check_auth() != true)
{
	header(sprintf("Location: %s", $loginPage));
}

// your protected stuff here
echo "My protected Data";
echo "<a href='?logout=true'>Log Out</a>"
?>