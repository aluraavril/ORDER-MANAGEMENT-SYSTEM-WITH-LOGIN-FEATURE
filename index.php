<?php
session_start();

if(!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Avril's Secret Garden</title>
</head>
<body>
    <h1>Welcome to Avril's Flower Shop!</h1>
    <h2>Kumusta, <?php echo $_SESSION['username'];?>!</h2>
    <p>Here are the available flowers and their prices:</p>
    <ul>
        <li>Rose - 50 pesos</li>
        <li>Tulips - 150 pesos</li>
        <li>Sunflower - 100 pesos</li>
    </ul>
   
    <form method="post" action="indayong.php" style="display: inline-block;"> <!-- Added inline-block style -->
        <label for="item">Choose your order:</label>
        <select name="item" id="item">
            <option value="Rose">Rose</option>
            <option value="Tulips">Tulips</option>
            <option value="Sunflower">Sunflower</option>
        </select><br><br>
       
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity"><br><br>
       
        <label for="cash">Cash:</label>
        <input type="number" name="cash" id="cash"><br><br>
       
        <input type="submit" value="Submit">
    </form>
    <form action="logout.php" method="post" style="display: inline-block;"> <!-- Added inline-block style -->
        <input type="submit" value="Logout">
    </form>
</body>
</html>
