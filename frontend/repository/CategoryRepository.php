<?php
   require '../config/SqlConfig.php';  
   require '../model/Category.php';
   
   class CategoryRepository
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
      
      function getAllCategory()
      {
         if($this->connection == null)
         {
            return null;
         }
         else 
         {
            try 
            {
               $result = $this->connection->query("SELECT * FROM category WHERE state ='active'");
               $arr = array();
               while ($row = $result->fetch())
               {
                  $category = new Category($row['id'], $row['category_name'], $row['link'], $row['state']);
                  array_push($arr, $category);
               }
               return $arr;
            }
            catch(PDOException $e)
            {
               echo("<p class='title text-white'>PDO ERROR:<br>" . $e . "</p>");
            }
         }
      }
      
      function updateCategory()
      {
         
      }
      
      function deleteCategory()
      {
         
      }
      
      
  }
?>