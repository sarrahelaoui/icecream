<?php
session_start();
require 'include/database.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

/* SAVE ORDER */
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product'])) {

    $product  = $_POST['product'];
    $image    = $_POST['image'];
    $price    = $_POST['price'];
    $quantity = $_POST['quantity'];

    $total = $price * $quantity;

    $stmt = $pdo->prepare("
        INSERT INTO orders(user_id, product_name, product_image, price, quantity, total)
        VALUES (?, ?, ?, ?, ?, ?)
    ");

    $stmt->execute([$user_id, $product, $image, $price, $quantity, $total]);

    header("Location: save_order.php");
    exit;
}

/* DELETE ORDER */
if (isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $stmt = $pdo->prepare("DELETE FROM orders WHERE id=? AND user_id=?");
    $stmt->execute([$id, $user_id]);

    header("Location: save_order.php");
    exit;
}

/* UPDATE QUANTITY */
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_id'])) {

    $id       = $_POST['update_id'];
    $quantity = $_POST['quantity'];
    $price    = $_POST['price'];

    $total = $quantity * $price;

    $stmt = $pdo->prepare("
        UPDATE orders
        SET quantity=?, total=?
        WHERE id=? AND user_id=?
    ");

    $stmt->execute([$quantity, $total, $id, $user_id]);

    header("Location: save_order.php");
    exit;
}

/* FETCH ORDERS */
$stmt = $pdo->prepare("
    SELECT * FROM orders
    WHERE user_id=?
    ORDER BY id DESC
");

$stmt->execute([$user_id]);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>My Orders</title>

<style>

body{
    font-family:Arial;
    background:#fff0f5;
    margin:0;
    padding:20px;
}

h1{
    text-align:center;
    color:#db2626;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

th,td{
    border:1px solid #eee;
    padding:10px;
    text-align:center;
}

th{
    background:#ff7aa2;
    color:white;
}

img{
    width:70px;
    height:70px;
    object-fit:cover;
    border-radius:10px;
}

input[type=number]{
    width:60px;
    padding:5px;
}

button{
    padding:7px 10px;
    border:none;
    border-radius:6px;
    cursor:pointer;
}

.update{
    background:#28a745;
    color:white;
}

.delete{
    background:red;
    color:white;
    text-decoration:none;
    padding:7px 10px;
    border-radius:6px;
}

.total-box{
    margin-top:20px;
    text-align:right;
    font-size:22px;
    color:#db2626;
    font-weight:bold;
}

.back{
    display:inline-block;
    margin-bottom:15px;
    text-decoration:none;
    background:#ff4f87;
    color:white;
    padding:10px 15px;
    border-radius:8px;
}

</style>
</head>
<body>

<a href="ajouter.php" class="back">← Back To Shop</a>

<h1>My Orders</h1>

<table>

<tr>
<th>Image</th>
<th>Product</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
<th>Action</th>
</tr>

<?php
$grandTotal = 0;

foreach($orders as $row):

$grandTotal += $row['total'];
?>

<tr>

<td>
<img src="<?php echo $row['product_image']; ?>">
</td>

<td>
<?php echo $row['product_name']; ?>
</td>

<td>
$<?php echo $row['price']; ?>
</td>

<td>

<form method="POST">

<input type="hidden" name="update_id" value="<?php echo $row['id']; ?>">
<input type="hidden" name="price" value="<?php echo $row['price']; ?>">

<input type="number"
name="quantity"
value="<?php echo $row['quantity']; ?>"
min="1">

<button type="submit" class="update">Update</button>

</form>

</td>

<td>
$<?php echo $row['total']; ?>
</td>

<td>
<a class="delete"
href="save_order.php?delete=<?php echo $row['id']; ?>"
onclick="return confirm('Delete order?')">
Delete
</a>
</td>

</tr>

<?php endforeach; ?>

</table>

<div class="total-box">
Grand Total: $<?php echo $grandTotal; ?>
</div>

</body>
</html>