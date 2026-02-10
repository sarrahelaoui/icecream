<style>

    /* User dropdown */
.user-dropdown {
    position: relative;
    display: inline-block;
    cursor: pointer;
    margin-left: 20px;
}

.user-dropdown .user-logo {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.user-dropdown .dropdown-menu {
    display: none;
    position: absolute;
    top: 50px;
    right: 0;
    background-color: #fff;
    min-width: 120px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    border-radius: 5px;
    overflow: hidden;
    z-index: 1000;
}

.user-dropdown .dropdown-menu a {
    display: block;
    padding: 10px 15px;
    text-decoration: none;
    color: #333;
    transition: background 0.3s;
}
/* Show menu when .show class is added */
.user-dropdown .dropdown-menu.show {
    display: block;
}
.user-dropdown .dropdown-menu a:hover {
    background-color: #f0f0f0;
}

/* Show menu on hover */
.user-dropdown:hover .dropdown-menu {
    display: block;
}

</style>
<header class="navbar">
    <div class="logo">
        <img src="./image/logo.png" alt="logo">
    </div>

    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">Order</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>

    <div class="search">
        <input type="text" placeholder="Search product">
        <i class="fa fa-search"></i>
    </div>

    <!-- User dropdown -->
    <div class="user-dropdown">
        <img src="./image/user.png" alt="user logo" class="user-logo">
        <div class="dropdown-menu">
            <a href="inscription.php">Sign Up</a>
            <a href="login.php">Login</a>
        </div>
    </div>
</header>
<script>
const userDropdown = document.querySelector('.user-dropdown');
const dropdownMenu = userDropdown.querySelector('.dropdown-menu');

userDropdown.addEventListener('click', (e) => {
    e.stopPropagation(); // prevent closing immediately
    dropdownMenu.classList.toggle('show');
});

// close dropdown if click outside
document.addEventListener('click', () => {
    dropdownMenu.classList.remove('show');
});
</script>
