<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<style>
    /* Navbar icons */
.nav-icon {
    position: relative;
    display: inline-block;
    margin-left: 20px;
    cursor: pointer;
}

.nav-icon img {
    width: 30px;
    height: 30px;
}

/* Badge number */
.nav-icon .badge {
    position: absolute;
    top: -5px;
    right: -10px;
    background-color: red;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    border-radius: 50%;
    padding: 2px 6px;
}
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

.user-dropdown .dropdown-menu a:hover {
    background-color: #f0f0f0;
}

.user-dropdown .dropdown-menu.show {
    display: block;
}
</style>

<header class="navbar">
    <div class="logo">
        <img src="./image/logo.png" alt="logo">
    </div>

    <ul class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="ajouter.php">Shop</a></li>
        <li><a href="save_order.php">Order</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>

    <div class="search">
        <input type="text" placeholder="Search product">
        <i class="fa fa-search"></i>
    </div>
    <!-- Like and Cart Icons -->
    <div class="nav-icon">
        <a href="like.php">
            <img src="./image/heart.png" alt="like">
            <span class="badge"><?php echo isset($_SESSION['likes_count']) ? $_SESSION['likes_count'] : 0; ?></span>
        </a>
    </div>

    <div class="nav-icon">
        <a href="save_order.php">
            <img src="./image/shopping.png" alt="cart">
            <span class="badge"><?php echo isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0; ?></span>
        </a>
    </div>
    <!-- User dropdown -->
    <div class="user-dropdown">
        <img src="./image/user.png" alt="user logo" class="user-logo">
        <div class="dropdown-menu">
            <?php if(isset($_SESSION['user_id'])): ?>
                <span style="display:block;padding:10px 15px;color:#555;font-weight:bold;"><?php echo $_SESSION['email']; ?></span>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="inscription.php">Sign Up</a>
                <a href="login.php">Login</a>
            <?php endif; ?>
        </div>
    </div>
</header>

<script>
const userDropdown = document.querySelector('.user-dropdown');
const dropdownMenu = userDropdown.querySelector('.dropdown-menu');

userDropdown.addEventListener('click', (e) => {
    e.stopPropagation();
    dropdownMenu.classList.toggle('show');
});

document.addEventListener('click', () => {
    dropdownMenu.classList.remove('show');
});
</script>
