<header id="main-header">
    <div class="container flex-container">
        <div class="left-main-header">
            <ul>
                <li><a class="home-link" href="/">Home</a></li>
            </ul>
        </div>
        <div class="right-main-header">
            <form action="search.html" method="GET" class="search-form">
                <input class="search-input" type="text" placeholder="Search" name="search">
            </form>
            <ul>
                <li><a href="/register">Register</a></li>
                <li><a href="/login">Login</a></li>
                <li class="dropdown-li" onClick="toggleUserDropdown();"><span class="user-image"><img  src="images/profile_default2.png"></span><span>Username</span><i id="dropdown-icon" class="fa fa-caret-down"></i>
                    <ul id="user-dropdown-ul">
                        <li><a href="/profile">Profile</a></li>
                        <!-- <li><a href="">Gallery</a></li>
                        <li><a href="">Settings</a></li> -->
                        <li><a href="/logout">Sign Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>