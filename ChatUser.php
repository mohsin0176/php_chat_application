<?php

class ChatUser
{
   private $user_id;
   private $user_name;
   private $user_email;
   private $user_password;
   private $user_profile;
   private $user_status;
   private $user_created_on;
   private $user_verification_code;
   private $user_login_status;
   public $connect;

   public function __construct()
   {
   	require_once('Database_connection.php');
   	$database_object=new Database_connection;
    $this->connect=$database_object->connect();
   }
   function setUserId($user_id)	
   {
   	$this->user_id=$user_id;
   }
   function getUserId($user_id)	
   {
   	$this->user_id=$user_id;
   }
   function setUserName($user_name)	
   {
   	$this->user_name=$user_name;
   }
   function getUserName()	
   {
   	return $this->$user_name;
   }
   function setUserEmail($user_email)
   {
   	$this->user_email=$user_email;
   }
   function getUserEmail()
   {
   	return $this->user_email;
   }

   function setUserPassword($user_password)
   {
   	$this->user_password=$user_password;
   }
   function getUserPassword()
   {
   	return $this->user_password;
   }

   function setUserProfile($user_profile)
   {
   	$this->user_profile=$user_profile;
   }

   function getUserProfile()
   {
   	return $this->user_profile;
   }
   function setUserStatus($user_status)
   {
   	$this->user_status=$user_status;
   }
   function getUserStatus()
   {
   	return $this->user_status;
   }


}

?>