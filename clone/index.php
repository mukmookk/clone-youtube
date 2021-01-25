<?php require_once("includes/header.php"); ?>


<?php
if(isset($_SESSION["userLoggedIn"])) {
    echo "user is logged in as " . $_SESSION["userLoggedIn"];
} 
else {
    echo "not logged in";
}

// session_destroy(); // log out
// or unset($_SESSION["userLoggedIn"]);
?>

<?php require_once("includes/footer.php"); ?>
                