<?php
session_start();
include 'components/navbar.php';

$search = "";
if (isset($_GET['search'])) {
    $search = strtolower(trim($_GET['search']));
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Ice Cream Shop</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>

body{
    font-family: Arial, sans-serif;
    background:#fff0f5;
    margin:0;
    padding:10px;
}

h1{
    text-align:center;
    color:#db2626;
}

.grid-container{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
}

.product-card{
    background:#fff;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    text-align:center;
    padding:15px;
}

.product-card img{
    width:100%;
    border-radius:10px;
    height:220px;
    object-fit:cover;
}

.product-card h3{
    color:#db2626;
}

.price{
    color:#ff4f87;
    font-weight:bold;
}

.icons{
    margin:10px 0;
    font-size:20px;
}

.quantity input{
    width:70px;
    padding:7px;
    text-align:center;
    border:1px solid pink;
    border-radius:6px;
}

.buy{
    width:100%;
    padding:10px;
    margin-top:10px;
    border:none;
    border-radius:10px;
    background:linear-gradient(45deg,#ff7aa2,#ff4f87);
    color:white;
    font-weight:bold;
    cursor:pointer;
}

.buy:hover{
    opacity:0.9;
}

.success{
    background:#d4edda;
    color:green;
    padding:10px;
    margin:15px;
    border-radius:8px;
    text-align:center;
}

.no-result{
    text-align:center;
    color:red;
    font-weight:bold;
    margin:20px;
}

</style>
</head>

<body>

<main>

<?php if(isset($_GET['success'])){ ?>
<div class="success">✅ Order saved successfully</div>
<?php } ?>

<h1>Our Ice Cream Collection</h1>

<div class="grid-container">

<?php

$products = [

["Chocolate Ice Cream","image/products/chocolate.jpg",25],
["Vanilla Ice Cream","image/products/vanilla.jpg",40],
["Strawberry Ice Cream","image/products/strawberry.jpg",20],
["Mango Ice Cream","image/products/mango.jpg",29],
["Coffee Ice Cream","image/products/coffe.jpg",28],
["Cookies Ice Cream","image/products/cookies ice cream.jpeg",27],
["Blueberry Ice Cream","image/products/blueberry.jpg",16],
["Cherry Ice Cream","image/products/cherry.jpg",19],
["Caramel Ice Cream","image/products/caramel.jpeg",20],
["Chocolate Banana Ice Cream","image/products/chocolate banana.jpg",23],
["Coconut Ice Cream","image/products/coconut ice cream.jpg",50],
["Frozen Yogurt Ice Cream","image/products/frozen yogurt.jpeg",12],
["Corn Ice Cream","image/products/corn ice cream.jpg",26],
["Cake Ice Cream","image/products/cake ice cream.jpg",20],
["Mint Chocolate Ice Cream","image/products/mint chocolate chip.jpg",24],
["Tiramisu Ice Cream","image/products/tiramisu-ice-cream-scoops-with.jpg",27],
["Lemon Chocolate Ice Cream","image/products/lemon chocolate.jpg",22],
["Dondurma Ice Cream","image/products/Dondurma.jpeg",25],
["Gelato Ice Cream","image/products/gelato.jpg",20],
["Blackberry Ice Cream","image/products/blackberry.jpeg",30],
["Lemon Ice Cream","image/products/lemon.jpg",15],
["Rocky Road Ice Cream","image/products/rocky road.jpg",35],
["Ice Popsicle Ice Cream","image/products/ice popsicle.jpeg",10]

];

$count = 0;

foreach($products as $product){

$name  = $product[0];
$image = $product[1];
$price = $product[2];

/* ✅ FILTER SEARCH */
if ($search != "" && strpos(strtolower($name), $search) === false) {
    continue;
}

$count++;

?>

<div class="product-card">

<img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">

<h3><?php echo $name; ?></h3>

<p class="price">Price: $<?php echo $price; ?></p>

<div class="icons">❤️ 👁️</div>

<form action="save_order.php" method="POST">

<input type="hidden" name="product" value="<?php echo $name; ?>">
<input type="hidden" name="image" value="<?php echo $image; ?>">
<input type="hidden" name="price" value="<?php echo $price; ?>">

<div class="quantity">
<input type="number" name="quantity" value="1" min="1" required>
</div>

<button type="submit" class="buy">Buy Now</button>

</form>

</div>

<?php } ?>

</div>

<?php
/* ✅ if no product found */
if($count == 0){
    echo "<div class='no-result'>❌ No products found</div>";
}
?>

</main>

<?php include 'components/footer.php'; ?>

</body>
</html>