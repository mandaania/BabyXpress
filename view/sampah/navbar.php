<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Julius+Sans+One&display=swap">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap">

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <style>
    .navbar{
      align-items: center;
      padding: 10px;
      background-color: #DA7F8F;
      display: flex;
      height: 40px;
      width: auto;
      /* flex: 2; */
    }
    .sidebar {
      flex: 0 0 2%;
      position: sticky;
      /* top: 0; */
      /* left: 0; */
      width: 5%;
      height: 5%;
      /* opacity: 80%; */
      background-color: #DA7F8F;
      align-items: center;
    }

    .sidebar-icon {
      display: inline;
      /* padding: 10px; */
      cursor: pointer;
      align-items: center;
    }

    .sidebar-menu {
      /* padding: 10px; */
      background-color: #DA7F8F;
      width: 100%;
    }

.search-bar {
  /* border: #333; */
  flex: 0 0 90%;
  /* width: 90%; */
  padding: 10px;
  /* margin-bottom: 20px; */
  /* position: relative; */
}

.search-bar input[type="text"] {
  width: 90%;
  padding: 10px;
  border: 1px solid #999;
  border-radius: 50px;
  padding-right: 30px;
}
.search-bar input[type="text"]::before {
  content: "";
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  font-family: "Material Design Icons";
  font-size: 18px;
  color: #999;
  pointer-events: none;
  z-index: 1;
}

/* .search-bar button {
  padding: 10px;
  background-color: #DA7F8F;
  border: none;
  border-radius: 5px;
  margin-left: 10px;
  cursor: pointer;
  position: relative;
  display: inline-block;
} */
.search-input{
  padding-right: 30px;
  width: 200px;
}
.menu-items li {
  margin-bottom: 10px;
}

.menu-items a {
  text-decoration: none;
  color: #333;
}

.logout-button {
  align-items: center;
  flex: 0 0 5%;
  width: 5%;
  /* border-radius: 100px;

  margin-top: 20px; */
   /* margin-left: auto; */ 
 } 


.logout-button button {
  /* padding: 10px; */
  background-color: #A7BBC7;
  border: none;
  color: #ff0000;
  cursor: pointer;
  
}

/* Hide checkbox input */
.sidebar input[type="checkbox"] {
  display: none;
}
/* Hide sidebar when checkbox is not checked */
.sidebar-menu {
  transform: translateX(-1000%);
  transition: transform 0.3s ease-in-out;
}
.sidebar input[type="checkbox"]:checked ~ .sidebar-menu {
  transform: translateX(0);
}

.button {
  align-items: center;
  border-radius: 1000px;
  background-color: #A7BBC7;
  color: #333;
  border: 1px solid #999;
  padding: 8px 16px;
  border-radius: 4px;
  cursor: pointer;
}

.button:hover {
  background-color: #ddd;
}


  </style>

</head>
<body>
<div class="navbar">
  <div class="sidebar">
    <input type="checkbox" id="sidebar-toggle">
    <label for="sidebar-toggle" class="sidebar-icon">
      <i class="iconify my-icon" data-icon="ci:hamburger-lg"></i>
    </label>

    <div class="sidebar-menu">
      <ul class="menu-items">
        <li><a href="home.php">HOME</a></li>
        <li><a href="#">SCHEDULE</a></li>
        <li><a href="#">BOOK NOW</a></li>
        <li><a href="history.php">HISTORY</a></li>
        <li><a href="#">REFUND</a></li>
        <li><a href="#">SETTINGS</a></li>
        <li><a href="#">CONTACT US</a></li>
      </ul>
    </div>

  </div>
  <div class="search-bar">
    <input type="text" placeholder="Search..." class="search-input">
  </div>
  <div class="logout-button">
      <a href="logout.php" class="button"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
  </div>
  
</div>

</body>
</html>