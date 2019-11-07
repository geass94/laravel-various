<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>გალერია</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/script.js"></script>
</head>
<body>
<header id="main-header">
    <div class="container flex-container">
        <div class="left-main-header">
            <ul>
                <li><a class="home-link" href="index.html">Home</a></li>
            </ul>
        </div>
        <div class="right-main-header">
            <form action="search.html" method="GET" class="search-form">
                <input class="search-input" type="text" placeholder="Search" name="search">
            </form>
            <ul>
                <li><a href="registration.html">Register</a></li>
                <li><a href="login.html">Login</a></li>
                <li class="dropdown-li" onClick="toggleUserDropdown();"><span class="user-image"><img  src="images/profile_default2.png"></span><span>Username</span><i id="dropdown-icon" class="fa fa-caret-down"></i>
                    <ul id="user-dropdown-ul">
                        <li><a href="profile.html">Profile</a></li>
                        <!-- <li><a href="">Gallery</a></li>
                        <li><a href="">Settings</a></li> -->
                        <li><a href="logout">Sign Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>

<form id="registration-form" method="POST" action="">
      <div class="registration-form-title">კატეგორიის დამატება / რედაქტირება</div>
      <hr>
      <div class="form-group">
        <label for="email-input">კატეგორია</label>
        <input type="email" placeholder="" name="email" id="email-input">
        <span class="left-error"></span>
      </div>
      <div class="form-group">
        <span class="error-message"></span>
        <input class="submit-btn" type="submit" value="დამატება">
      </div>
    </form>
</body>
</html>