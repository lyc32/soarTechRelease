<?php
   require '../config/SqlConfig.php';  
   require '../model/User.php';
   
   class UserRepository
   {
      private $connection;
      
      function __construct()
      {
         $sqlConfig = new SqlConfig();
         try 
         {
             $this->connection = new PDO("mysql:host=".$sqlConfig->host.";dbname=".$sqlConfig->db."" , $sqlConfig->user, $sqlConfig->pass);
         
         }
         catch(PDOException $e)
         {
            $this->connection = null;
            echo("<p class='title text-white'>PDO Unable To Connect DataBase!<br>" . $e . "</p>");
         }
      }
      
      function getAllUser()
      {
         if($this->connection == null)
         {
            return null;
         }
         else 
         {
            try 
            {
               $result = $this->connection->query("SELECT * FROM user");
               $arr = array();
               while ($row = $result->fetch())
               {
                  $user = new User($row['id'], $row['user_name'], $row['password'], $row['role'], $row['state']);
                  array_push($arr, $user);
               }
               return $arr;
            }
            catch(PDOException $e)
            {
               echo("<p class='title text-white'>PDO ERROR:<br>" . $e . "</p>");
            }
         }
      }
      
      function login($user_name, $password)
      {
         if($this->connection == null)
         {
            return null;
         }
         else 
         {
            try 
            {
               $result = $this->connection->query("SELECT * FROM user WHERE user_name = '".$user_name."' AND password = '".$password."' AND state='active'");
               $user = null;
               $count = 0;
               while ($row = $result->fetch())
               {
                  $count++;
                  $user = new User($row['id'], $row['user_name'], $row['password'], $row['role'], $row['state']);
               }
               if($count == 1)
               {
                  session_start();
                  $_SESSION['username'] = $user->getUserName();
                  $_SESSION['role']  = $user->getRole();
                  echo("success");
               }
               else 
               {
                  echo("failed");
               };
            }
            catch(PDOException $e)
            {
               echo("<p class='title text-white'>PDO ERROR:<br>" . $e . "</p>");
            }
         }
      }
      
      
  }
?>