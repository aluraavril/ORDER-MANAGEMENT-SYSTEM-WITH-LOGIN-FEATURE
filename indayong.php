<!DOCTYPE html>
<html>
<head>
    <title>Customer Order Summary</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['username'])) {
        $item = $_POST['item'];
        $quantity = $_POST['quantity'];
        $cash = $_POST['cash'];

        $prices = array(
            'Rose' => 50,
            'Tulips' => 150,
            'Sunflower' => 100
        );

        $total_cost = $prices[$item] * $quantity;

        if ($cash < $total_cost) {
            echo "<h2>Payment not enough, Please provide the right amount.</h2>";
            echo '<a href="index.php">Try Again</a>';
            echo ' | ';
            echo '<a href="logout.php">Logout</a>';
        } else {
            $change = $cash - $total_cost;
            echo "<h2>Your Order Summary</h2>";
            echo "<p>Item: $item</p>";
            echo "<p>Quantity: $quantity</p>";
            echo "<p>Total Cost: $total_cost pesos</p>";
            echo "<p>Money: $cash pesos</p>";
            echo "<p>Change: $change pesos</p>";
            echo "<p>Thank you for your order! Come back and shop again <3</p>";
            echo '<a href="index.php">Create New Transaction</a>';
            echo ' | ';
            echo '<a href="logout.php">Logout</a>';
        }
    } else {
        echo "<h2>Unauthorized access. Please login first.</h2>";
        echo '<a href="login.php">Login</a>';
    }
    ?>
</body>
</html>
