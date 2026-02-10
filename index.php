<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ice Cream Delights</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
        * { box-sizing: border-box; margin:0; padding:0; font-family: Verdana, sans-serif; }
        body { background: #fff; }

        /* HERO SECTION */
        .hero {
            text-align: center;
            padding: 60px 20px;
            background: #ffe0e6;
        }

        .hero-title {
            font-size: 40px;
            line-height: 1.2;
            color: #db2626;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #c13c18;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn:hover { background-color: #af108d; }

        /* SLIDESHOW */
        .slideshow-container {
            max-width: 700px;
            position: relative;
            margin: 40px auto;
        }

        .mySlides {
            display: none;
            position: relative;
        }

        .mySlides img {
            width: 100%;
            border-radius: 10px;
        }

        .numbertext {
            color: #da4689;
            font-size: 17px;
            padding: 8px 12px;
            text-align: center;
            background-color: rgba(255,255,255,0.7);
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .text {
            color: #db2626;
            font-size: 16px;
            text-align: center;
            margin-top: 5px;
        }

        /* Dots */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 5px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active { background-color: #717171; }

        /* Fade animation */
        .fade { animation-name: fade; animation-duration: 1.5s; }
        @keyframes fade { from {opacity: .4} to {opacity: 1} }

        /* SERVICES SECTION */
        .services {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 40px 20px;
        }

        .service-box {
            width: 200px;
            text-align: center;
        }

        .service-box img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .service-box h3 {
            color: #1a1212;
            font-size: 18px;
        }

        /* SLIDER CATEGORIES */
        #slider {
            text-align: center;
            margin: 50px 0 20px;
            font-size: 24px;
            color: #d42dad;
        }

      .menu-banner {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 30px;
}

.menu-banner img {
    width: 100%;
    max-width: 1200px; /* optional: keeps it clean on big screens */
    height: auto;
}


        @media only screen and (max-width: 768px) {
            .hero-title { font-size: 28px; }
            .service-box { width: 45%; }
        }

        @media only screen and (max-width: 480px) {
            .hero-title { font-size: 22px; }
            .service-box { width: 100%; }
        }

         .separator {
    display: flex;
    justify-content: center;
    margin: 20px 0;
}

.separator img {
    width: 20%;
}


.banner{
    position: relative;
    width: 100%;
}

.banner img{
    width: 100%;
    height: auto;
    display: block;
}

.banner .text{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;

    color: white;
    max-width: 70%;
    
    background: rgba(0, 0, 0, 0.4); /* optionnel */
    padding: 20px;
    border-radius: 10px;
}

.banner .text h2{
    font-size: 36px;
    margin-bottom: 15px;
}

.banner .text p{
    font-size: 16px;
    line-height: 1.6;
}
/* SERVICES SECTION */
.services-i {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    padding: 30px 10px;
}

.service-box-i {
    position: relative; /* Pour le texte overlay */
    width: 230px;
    border: 3px solid #f5a623; /* Couleur du cadre */
    border-radius: 10px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s, border-color 0.3s;
}

.service-box-i:hover {
    transform: scale(1.05);
    border-color: #db2626; /* Couleur du cadre au hover */
}

.service-box-i img {
    width: 100%;
    display: block;
    border-radius: 10px;
    transition: opacity 0.3s;
}

.service-box-i p {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0,0,0,0.6); /* fond semi-transparent */
    color: white;
    padding: 15px;
    font-size: 14px;
    opacity: 0;
    transform: translateY(100%);
    transition: opacity 0.3s, transform 0.3s;
}

.service-box-i:hover p {
    opacity: 1;
    transform: translateY(0);
}

.banner-btn {
    display: inline-block;
    margin-top: 10px;
    padding: 5px 12px;
    background-color: #db2626;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 13px;
}

.banner-btn:hover {
    background-color: #ff4b4b;
}

    </style>
</head>
<body>

<?php include 'components/navbar.php'; ?>

<!-- HERO -->
<section class="hero">
    <h1 class="hero-title">
        Welcome to <br>
        <span class="line1">the classic ice</span><br>
        <span class="line2">cream parlor</span><br>
    </h1>
    <a href="#" class="btn">Order Now</a>
</section>

<!-- SLIDESHOW -->
<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">
            Bad day? Ice cream doesn’t care.<br>
            Life can’t be perfect, but ice cream sure can be.<br>
            No solution? At least there’s ice cream!
        </div>
        <img src="image/home-img-3.png" alt="Ice Cream Slide 1">
        <div class="text">When life melts down, ice cream refills your cup</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">
            When the heart is heavy, ice cream is the sweet verse that lightens the poem of your day.
        </div>
        <img src="image/home-img-2.png" alt="Ice Cream Slide 2">
        <div class="text">No storm lasts forever—but ice cream is a rainbow in every bite.</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">
            You can’t fix everything, but ice cream can fix your mood.<br>
            No solution? At least there’s ice cream!
        </div>
        <img src="image/home-img-1.png" alt="Ice Cream Slide 3">
        <div class="text">Life may freeze, but a spoonful of ice cream melts the cold in your soul</div>
    </div>

</div>

<div style="text-align:center; margin-top: 10px;">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>
<!-- SEPARATOR -->
<div class="separator">
    <img src="image/separator-img.png">
</div>

<section class="services">
    <div class="service-box">
        <img src="image/service.png" class="img-black">
        <img src="image/service (1).png" class="img-white">
        <h3>Quality Ice Cream</h3>
    </div>

    <div class="service-box">
        <img src="image/services (7).png" class="img-black">
        <img src="image/services (8).png" class="img-white">
        <h3>Fresh Ingredients</h3>
    </div>

    <div class="service-box">
        <img src="image/services.png" class="img-black">
        <img src="image/services (1).png" class="img-white">
        <h3>Fast Delivery</h3>
    </div>

    <div class="service-box">
        <img src="image/services (5).png" class="img-black">
        <img src="image/services (6).png" class="img-white">
        <h3>Best Prices</h3>
    </div>

    <div class="service-box">
        <img src="image/services (2).png" class="img-black">
        <img src="image/services (3).png" class="img-white">
        <h3>Custom Flavors</h3>
    </div>

    <div class="service-box">
        <img src="image/form.png" class="img-black">
        <img src="image/form.png" class="img-white">
        <h3>Happy Clients</h3>
    </div>
</section>
<!-- SEPARATOR -->
<div class="separator">
    <img src="image/separator-img.png">
</div>

<!-- CATEGORIES -->
<div id="slider">Explore our categories</div>
<section class="services">
    <div class="service-box"><img src="image/categories1.jpg"></div>
    <div class="service-box"><img src="image/categories2.jpg"></div>
    <div class="service-box"><img src="image/categories3.jpg"></div>
    <div class="service-box"><img src="image/categories4.jpg"></div>
</section>

<!-- MENU BANNER -->
<div class="menu-banner">
    <img src="image/menu-banner.jpg">
</div>
<!-- SEPARATOR -->
<div class="separator">
    <img src="image/separator-img.png">
</div>

<!-- CATEGORIES -->
<div id="slider">Our Natural Ingredients</div>
<section class="services">
    <div class="service-box"><img src="image/vanilla-image.webp"></div>
    <div class="service-box"><img src="image/milk-image.avif"></div>
    <div class="service-box"><img src="image/chocolate-image.webp"></div>
   
</section>
<!-- SEPARATOR -->
<div class="separator">
    <img src="image/separator-img.png">
</div>
<div class="menu-banner">
    <img src="image/ice-bg.JPG" alt="Ice Cream Banner">

    <div class="banner-text">
        <h2>Ice cream turns every moment into something magical</h2>
        <p>
            Discover the magic in every scoop.<br>
            Flavors crafted to brighten your day.<br>
            Relish the sweetness of cool treats,<br>
            made to bring smiles and joy — bite after bite.
        </p>
        <a href="#" class="banner-btn">Shop Now</a>
    </div>
</div>

<!-- SEPARATOR -->
<div class="separator">
    <img src="image/separator-img.png">
</div>


<div class="banner">
    <img src="image/ice-creem-banner-bg.png" alt="Ice Cream Banner">

    <div class="text">
        <h2>“Life gives you meltdowns, ice cream gives you sundaes.”</h2>
        <p>
           “When shadows stretch long, ice cream is the gentle light that softens the edge of the evening.”

“Life’s unfinished lines find a sweet ending, one lick at a time.”<br>
            When life melts down, ice cream refills your cup..<br>
           Life’s a swirl of problems—thankfully, ice cream has all the toppings bite.
        </p>
        
    </div>
</div>











<!-- SEPARATOR -->
<div class="separator">
    <img src="image/separator-img.png">
</div>

<section class="services-i">
    <div class="service-box-i">
        <img src="image/type2.webp" class="img-black">
         <p>Strawberry & Lingonberry <br>
             
           find your tast of desserts
             <a href="#" class="banner-btn">Explore More</a></p>
     
    </div>

    <div class="service-box-i">
        <img src="image/type1.webp" class="img-black">
           <p>Fruit Ice Cream <br>
               Cookie Ice Cream <br>
           find your tast of desserts
             <a href="#" class="banner-btn">Explore More</a></p>
    </div>

    <div class="service-box-i">
        <img src="image/type3.webp" class="img-black">
        <p>Strawberry Coffee <br>
               Cookie Ice Cream <br>
           find your tast of desserts
             <a href="#" class="banner-btn">Explore More</a></p>
    </div>

    <div class="service-box-i">
        <img src="image/type5.webp" class="img-black">
          <p>Bubbies Mochi Ice Cream <br>
           find your tast of desserts
             <a href="#" class="banner-btn">Explore More</a></p>
    </div>

    <div class="service-box-i">
        <img src="image/type4.webp" class="img-black">
          <p>Chocolate Ice Cream<br>
             
           find your tast of desserts
             <a href="#" class="banner-btn">Explore More</a></p>
    </div>

    <div class="service-box-i">
        <img src="image/type6.webp" class="img-black">
         <p>Mango Ice Cream<br>
           find your tast of desserts
             <a href="#" class="banner-btn">Explore More</a></p>
    </div>
</section>

<!-- SEPARATOR -->
<div class="separator">
    <img src="image/separator-img.png">
</div>
<!-- MENU BANNER -->
<div class="icecream">
    <img src="image/left-banner2.JPG" alt="Ice Cream Banner">
    <div class="text">
        <h2>Hot Deal! Sale up To 20% off</h2>
        <p>Limited time only</p>
        <a href="#">Shop Now</a>
    </div>
</div>
<?php include 'components/footer.php'; ?>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }

  for (let i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }

  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].classList.add("active");

  setTimeout(showSlides, 3000);
}
</script>
</body>
</html>
