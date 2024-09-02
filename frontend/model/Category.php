<?php
  class Category
  {
      private $id            = -1;  
      private $category_name = "";  
      private $link          = "";	
      private $state         = "inactive";
      
      function __construct($id, $category_name, $link, $state)
      {
         $this->id            = $id;
         $this->category_name = $category_name;
         $this->link          = $link;
         $this->state         = $state;
      }
      
      function setId($id)
      {
         $this->id = $id;
      }
      
      function getId()
      {
         return $this->id;
      }
      
      function setCategoryName($category_name)
      {
         $this->category_name = $category_name;
      }
     
      function getCategoryName()
      {
         return $this->category_name;
      }
      
      function setLink ($link)
      {
         $this->link = $link;
      }
      
      function getLink ()
      {
         return $this->link;
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
         return '{id='.$this->id.', category_name='.$this->category_name.', link='.$this->link.', state='.$this->state.'}';
      }
  }
?>