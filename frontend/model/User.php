<?php
  class User
  {
      private $id        = -1;  
      private $user_name = "";
      private $password  = "";  
      private $role      = "";	
      private $state     = "inactive";
      
      function __construct($id, $user_name, $password, $role, $state)
      {
         $this->id        = $id;
         $this->user_name = $user_name;
         $this->password  = $password;
         $this->role      = $role;
         $this->state     = $state;
      }
      
      function setId($id)
      {
         $this->id = $id;
      }
      
      function getId()
      {
         return $this->id;
      }
      
      function setUserName($user_name)
      {
         $this->user_name = $user_name;
      }
     
      function getUserName()
      {
         return $this->user_name;
      }
      
      function setPassword($password)
      {
         $this->password = $password;
      }
        
      function getPassword()
      {
         return $this->password;
      }
      
      function setRole ($role)
      {
         $this->role = $role;
      }
      
      function getRole ()
      {
         return $this->role;
      }
      
      function setState($state)
      {
         $this->state = $state;
      }
      
      function getState()
      {
         return $this->state;
      }
      
      function toString()
      {
         return '{id='.$this->id.', user_name='.$this->user_name.'password='.$this->password.', role='.$this->role.', state='.$this->state.'}';
      }
  }
?>