<nav class="navbar navbar-expand-lg navbar-dark justify-content-center header">
    <a  onclick="goHome()">
      <img class="logo ms-5" src = './static/logo.ico'>
    </a>
    <a class="navbar-brand textLogo text-white" onclick="goHome()">
      <?php echo($companyName)?>
    </a>
      <button class="navbar-toggler togglerButton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
      </button> 
     <div class="collapse navbar-collapse" id="navbarNavDropdown"> 
      <ul class="navbar-nav text-center "> 
<?php
      if (isset($_SESSION['role']))
      {
?>
        <li class="nav-item"> 
          <a class="nav-link text-white menu" onclick="goDashboard()">Dashboard</a>
        </li> 
<?php
      }
?>      
        <li class="nav-item"> 
          <a class="nav-link text-white menu" onclick="goProduct()">Products</a>
        </li> 
        <li class="nav-item"> 
          <a class="nav-link text-white menu" onclick="goAbout()">About us</a> 
        </li> 
        <li class="nav-item dropdown"> 
          <a class="nav-link text-white menu" onclick="goContact()">Contact</a>
        </li> 
      </ul>
    </div>
    <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNavDropdown"> 
      <ul class="navbar-nav text-center me-0"> 
<?php
    if (!isset($_SESSION['username']))
    {
?>
        <li class="nav-item"> 
          <a class="nav-link text-white menu" onclick="toLogin()">
            <svg width="1.8rem" height="1.8rem" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 20 20">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg>
          Login
          </a>
        </li> 
<?php
    }
    else
    {
?>
       <li class="nav-item"> 
        <a class="nav-link text-white menu" onclick="logout()">
          <svg width="1.8rem" height="1.8rem" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 20 20">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
          </svg>
          <?php echo($_SESSION['username'])?>
        </a>
      </li> 
<?php      
    }
?> 
      </ul>
    </div>
</nav>
