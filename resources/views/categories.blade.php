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
                    <li class="dropdown-li" onClick="toggleUserDropdown();"><span class="user-image"><img src="images/profile_default2.png"></span><span>Username</span><i id="dropdown-icon" class="fa fa-caret-down"></i>
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
    <main style="display: flex;justify-content: center; flex-direction: column; max-width: 700px;margin:0 auto;">
        <h3 style="text-align: center;">კატეგორიები</h3>
        <a style="width: 200px;margin: 10px 0;" href="addcategory.html" class="btn btn-primary">კატეგორიის დამატება</a>
        <table class="table">
            <thead>
                <tr>
                    <th>კატეგორია</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>კატეგორია 1</td>
                    <td>
                        <a href=""><i class="fa fa-edit"></i></a>
                        <a href=""><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>კატეგორია 1</td>
                    <td>
                        <a href=""><i class="fa fa-edit"></i></a>
                        <a href=""><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
    </body>
</html>