<html lang="en">

<?php
if (!file_exists("coins")) {
    file_put_contents("coins", "10");
}

$get_coin = file_get_contents("coins");
?>

<body>
    <p><?php echo $get_coin ?></p>
    <button onclick="CON_MODAL_BUTTON('A', 'operator.php'); reloadPage()">-5 coin</button>
    <button onclick="CON_MODAL_BUTTON('B', 'operator.php'); reloadPage()">+5 coin</button>

    <script src="../scripts/script.js"></script>
</body>

</html>