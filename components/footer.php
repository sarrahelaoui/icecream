<!-- components/footer.php -->
<footer class="footer">
    <div class="footer-container">

        <!-- Logo & description -->
        <div class="footer-brand">
            <div class="logo">
                <img src="image/logo.png" alt="logo">
            </div>
            <p>
                Bringing you the finest ice cream delights made with love and quality ingredients.
            </p>
        </div>

        <!-- Navigation -->
        <div class="footer-links">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Order</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div class="footer-contact">
            <h4>Contact</h4>
            <p><i class="fa fa-map-marker"></i> Monastir, Tunisia</p>
            <p><i class="fa fa-phone"></i> +216 XX XXX XXX</p>
            <p><i class="fa fa-envelope"></i> contact@icecream.com</p>
        </div>

        <!-- Social -->
        <div class="footer-social">
            <h4>Follow Us</h4>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

    </div>

    <!-- Bottom -->
    <div class="footer-bottom">
        <p>© 2026 Ice Cream Delights. All rights reserved.</p>
    </div>
</footer>

<style>
.footer {
    background:  #ffb6c1;
    color: #e70f8a;
    padding: 60px 0 20px;
    font-family: 'Segoe UI', sans-serif;
}

.footer-container {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 40px;
    padding: 0 20px;
}

.footer h4 {
    color: #281e1e;
    margin-bottom: 15px;
    font-size: 18px;
}

.footer p {
    font-size: 14px;
    line-height: 1.6;
}

.footer a {
    color: #614545;
    text-decoration: none;
    font-size: 14px;
}

.footer a:hover {
    color: #ff7aa2;
}

/* Logo */
.footer .logo img {
    width: 120px;
    margin-bottom: 15px;
}

/* Links */
.footer-links ul {
    list-style: none;
    padding: 0;
}

.footer-links ul li {
    margin-bottom: 8px;
}

/* Contact */
.footer-contact i {
    margin-right: 8px;
    color: #ff7aa2;
}

/* Social */
.social-icons a {
    display: inline-block;
    margin-right: 12px;
    font-size: 18px;
    color: #751212;
}

.social-icons a:hover {
    color: #ff7aa2;
}

/* Bottom */
.footer-bottom {
    border-top: 1px solid #333;
    margin-top: 40px;
    padding-top: 15px;
    text-align: center;
    font-size: 13px;
    color: #b91c94;
}
</style>
