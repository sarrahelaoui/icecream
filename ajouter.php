<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Ice Cream Shop</title>
<style>

    
body {
    font-family: Arial, sans-serif;
    background: #fff0f5;
    margin: 0;
    padding: 10px;
}

/* Grid container */
.grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

/* Each product card */
.product-card {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-align: center;
    padding: 15px;
    transition: transform 0.3s;
}

.product-card:hover {
    transform: translateY(-5px);
}

.product-card img {
    width: 100%;
    border-radius: 10px;
}

.product-card h3 {
    margin: 10px 0 5px;
    color: #db2626;
}

.product-card p.price {
    font-weight: bold;
    color: #ff4f87;
}

.product-card .icons {
    margin: 10px 0;
}

.product-card .icons span {
    font-size: 20px;
    margin: 0 5px;
    cursor: pointer;
    transition: transform 0.2s;
}

.product-card .icons span:hover {
    transform: scale(1.2);
}

.product-card .quantity {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px 0;
}

.product-card .quantity button {
    width: 30px;
    height: 30px;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    background: #ff7aa2;
    color: white;
    cursor: pointer;
    margin: 0 5px;
    transition: background 0.3s;
}

.product-card .quantity button:hover {
    background: #ff4f87;
}

.product-card .quantity input {
    width: 40px;
    text-align: center;
    font-size: 16px;
    border: 1px solid #ffc0cb;
    border-radius: 5px;
}

.product-card button.buy {
    width: 100%;
    padding: 10px;
    background: linear-gradient(45deg, #ff7aa2, #ff4f87);
    border: none;
    border-radius: 10px;
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: transform 0.3s;
}

.product-card button.buy:hover {
    transform: scale(1.05);
}
</style>
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<?php include 'components/navbar.php'; ?>
<main>
<h1 style="text-align:center; color:#db2626;">Our Ice Cream Collection</h1>

<div class="grid-container">

  <!-- Product 1 -->
  <div class="product-card">
    <img src="image/products/chocolate.jpg" alt="Chocolate Ice Cream">
    <h3>Chocolate Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>

  <!-- Product 2 -->
  <div class="product-card">
    <img src="image/products/vanilla.jpg" alt="Vanilla Ice Cream">
    <h3>Vanilla Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>

  <!-- Product 3 -->
  <div class="product-card">
    <img src="image/products/strawberry.jpg" alt="Strawberry Ice Cream">
    <h3>Strawberry Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>

  <!-- Product 4 -->
  <div class="product-card">
    <img src="image/products/mango.jpg" alt="Mango Ice Cream">
    <h3>Mango Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>

  <!-- Product 5 -->
  <div class="product-card">
    <img src="image/products/coffe.jpg" alt="Coffee Ice Cream">
    <h3>Coffee Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>

  <!-- Product 6 -->
  <div class="product-card">
    <img src="image/products/cookies ice cream.jpeg" alt="Cookies Ice Cream">
    <h3>Cookies Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>
   
    <!-- Product 7 -->
  <div class="product-card">
    <img src="image/products/blueberry.jpg" alt="blueberry Ice Cream">
    <h3>blueberry Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div> 
  <!-- Product 5 -->
  <div class="product-card">
    <img src="image/products/cherry.jpg" alt="Cherry Ice Cream">
    <h3>Cherry Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>


  <!-- Product 5 -->
  <div class="product-card">
    <img src="image/products/caramel.jpeg" alt="caramel Ice Cream">
    <h3>caramel Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>

<div class="product-card">
    <img src="image/products/chocolate banana.jpg" alt="chocolate banana Ice Cream">
    <h3>chocolate banana Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>
<!-- Product 5 -->
  <div class="product-card">
    <img src="image/products/coconut ice cream.jpg" alt="coconut Ice Cream">
    <h3>coconut Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>
   <!-- Product 6 -->
  <div class="product-card">
    <img src="image/products/frozen yogurt.jpeg" alt="frozen yogurt Ice Cream">
    <h3>frozen yogurt Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>
  <!-- Product 5 -->
  <div class="product-card">
    <img src="image/products/corn ice cream.jpg" alt="corn Ice Cream">
    <h3>corn Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>
  <!-- Product 5 -->
  <div class="product-card">
    <img src="image/products/cake ice cream.jpg" alt="cake Ice Cream">
    <h3>cake Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>
  <!-- Product 5 -->
  <div class="product-card">
    <img src="image/products/mint chocolate chip.jpg" alt="mint chocolate Ice Cream">
    <h3>mint chocolate Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>
  <!-- Product 5 -->
  <div class="product-card">
    <img src="image/products/strawberry.jpg" alt="strawberry Ice Cream">
    <h3>strawberry Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>
  <!-- Product 5 -->
  <div class="product-card">
    <img src="image/products/tiramisu-ice-cream-scoops-with.jpg" alt="tiramisu Ice Cream">
    <h3>tiramisu Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>
  <!-- Product 5 -->
  <div class="product-card">
    <img src="image/products/lemon chocolate.jpg" alt="lemon chocolate Ice Cream">
    <h3>lemon chocolate Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>
  <!-- Product 5 -->
  <div class="product-card">
    <img src="image/products/Dondurma.jpeg" alt="Dondurma Ice Cream">
    <h3>Dondurma Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>
  <!-- Product 5 -->
  <div class="product-card">
    <img src="image/products/gelato.jpg" alt="gelato Ice Cream">
    <h3>gelato Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>
  <!-- Product 5 -->
  <div class="product-card">
    <img src="image/products/chocolate banana.jpg" alt="chocolate banana Ice Cream">
    <h3>chocolate banana Ice Cream</h3>
    <p class="price">Price: $20</p>

    <div class="icons">
        <span title="Love">❤️</span>
        <span title="View">👁️</span>
    </div>

    <div class="quantity">
        <button class="decrease">-</button>
        <input type="text" value="1" readonly>
        <button class="increase">+</button>
    </div>

    <button class="buy">Buy Now</button>
  </div>
  </main>
  <?php include 'components/footer.php'; ?>
<script>
// Gestion + / - et Buy Now
document.querySelectorAll('.product-card').forEach(card => {
    const decrease = card.querySelector('.decrease');
    const increase = card.querySelector('.increase');
    const input = card.querySelector('input');
    const buy = card.querySelector('.buy');

    decrease.addEventListener('click', () => {
        if (parseInt(input.value) > 1) input.value = parseInt(input.value) - 1;
    });

    increase.addEventListener('click', () => {
        input.value = parseInt(input.value) + 1;
    });

   buy.addEventListener('click', () => {
    const product = card.querySelector('h3').innerText;
    const priceText = card.querySelector('.price').innerText;
    const price = priceText.replace(/[^0-9.]/g, '');
    const quantity = input.value;

    fetch('save_order.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `product=${encodeURIComponent(product)}&price=${price}&quantity=${quantity}`
    })
    .then(res => res.text())
.then(data => {
    if (data === "success") {
        alert("✅ Commande enregistrée !");
    } else if (data === "not_logged_in") {
        alert("⚠️ Vous devez vous connecter !");
    } else {
        alert("❌ Erreur lors de l'enregistrement");
    }
});


});

});
</script>

</body>
</html>
