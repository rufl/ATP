<?php



class Auth
{
	
	// required fields
	var $cookieName = "cookie_name";
	var $sessionName = "session_name";
	var $users = array( array('username'=>'root', 'password'=>'root') );
	var $cookieDuration = 2592000;
	
	
	
	var $version = 1.0;
	
	
	function Auth()
	{
	}
	

	
	
	
	function check_auth()
	{
		$id=-1;
		
		session_start();
		
		// check from cookie
		if(isset($_COOKIE[$this->cookieName]) && !isset($_SESSION[$this->sessionName]) )
		{
			$id = $this->check_user( $_COOKIE[$this->cookieName]['username'], $_COOKIE[$this->cookieName]['password']);
			//error_log("[DEV] auth from COOKIE");
		}
		
		
		// check from session
		if(isset($_SESSION[$this->sessionName]))
		{
			$id = $this->check_user($_SESSION[$this->sessionName]['username'], $_SESSION[$this->sessionName]['password']);
			$alreadyRegistered = true;
			//error_log("[DEV] auth from SESSION");
		}
		
		
		if($id>=0)
		{
			if($alreadyRegistered) return true;
			return $this->registerSession($id);
		}else{
			return $this->failedLogin();
		}
	}
	
	
	
	function do_auth($usr, $pxw, $rem)
	{
		$id = $this->check_user($usr, $pxw);
		
		if($id>=0)
		{
			return $this->registerLogin($id, $rem);
		}else{
			return $this->failedLogin();
		}
	}
	
	
	
	function check_user($u, $p)
	{
		$id = -1;
		for($i=0; $i<count($this->users); ++$i)
		{
			$user = $this->users[$i];
			if ($u===md5($user['username']) && $p===md5($user['password']))
			{
				$id = $i;
				break;
			}
		}
		return $id;
	}
	
	
	function registerLogin($id, $remember)
	{
		$user = $this->users[$id];
		
		$pass = $this->registerSession($id);
		
		if($remember)
		{
			setcookie($this->cookieName."[username]",md5($user['username']), time()+$this->cookieDuration);
			setcookie($this->cookieName."[password]",md5($user['password']), time()+$this->cookieDuration);
		}
		
		return $pass;
	}
	
	
	
	function registerSession($id)
	{
		session_start();
		
		$user = $this->users[$id];
		
		$_SESSION[$this->sessionName] = array(
			"ID" => session_id(), 
			"username" => md5( $user['username'] ), 
			"password" => md5( $user['password'] ),
			"user_id" => $id
			);
			
		session_register($sessionName); 	
		
		return true;
	}
	
	
	
	
	
	function failedLogin()
	{
		$this->do_logout();
		return false;
	}
	
	
	
	function do_logout()
	{
		session_start();
		unset( $_SESSION[$this->sessionName] );
		$_SESSION[$this->sessionName] = array();

		if(isset($_COOKIE[$this->cookieName]))
		{    
			foreach ($_COOKIE[$this->cookieName] as $name => $value)
			{
			    $name = htmlspecialchars($name);
			    $value = htmlspecialchars($value);
				setcookie($this->cookieName."[".$name."]", "", mktime(0,0,0,1,1,1970));
			}
		}
	}
	
	
	
}






?>