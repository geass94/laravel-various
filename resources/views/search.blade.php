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
        <h3 style="text-align: center;">ფილტრი</h3>
        <form style="width: 400px; margin: 0 auto;">
            <div class="form-group">
                <label>კატეგორია</label>
                <select name="category" class="form-control">
                    <option value="">კატეგორია 1</option>
                    <option value="">კატეგორია 2</option>
                </select>
            </div>
            <div class="form-group">
                <label>სათაური</label>
                <input name="title" class="form-control">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="გაფილტვრა">
            </div>
        </form>
        <h3 style="text-align: center;">გაფილტრული სურათები</h3>
        <div class='profile-images-div'>
            <div class='profile-image-div'>
                <a class='image-anchor' href='image.html'><img class='profile-image' src='images/image-placeholder.png'></a>
            </div>
            <div class='profile-image-div'>
                <a class='image-anchor' href='image.html'><img class='profile-image' src='images/image-placeholder.png'></a>
            </div>
            <div class='profile-image-div'>
                <a class='image-anchor' href='image.html'><img class='profile-image' src='images/image-placeholder.png'></a>
            </div>
            <div class='profile-image-div'>
                <a class='image-anchor' href='image.html'><img class='profile-image' src='images/image-placeholder.png'></a>
            </div>
        </div>
    </body>
</html>