<?php
function addUser($conn, $username, $password) {
    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);


    if ($stmt->rowCount() == 0) {
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$username, $password]);
    }
    return false;
}


function login($conn, $username, $password) {
    $query = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$username]);


    if ($stmt->rowCount() == 1) {
        $row = $stmt->fetch();
        $uid = $row['user_id'];
        $uname = $row['username'];
        $passHash = $row['password'];


        if (password_verify($password, $passHash)) {
            $_SESSION['user_id'] = $uid;
            $_SESSION['username'] = $uname;
            $_SESSION['userLoginStatus'] = 1;
            return true;
        }
    }
    return false;
}
?>


