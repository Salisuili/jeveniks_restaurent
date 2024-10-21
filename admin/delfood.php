<?php
include "connect.php";

if (isset($_GET['a'])) {
    $id = $_GET['a'];

    // SQL query to delete the record with the specified id
    $delete_query = "DELETE FROM menu WHERE id = '$id'";

    if (mysqli_query($con, $delete_query)) {
        echo "<script>alert('Item deleted successfully');</script>";
    } else {
        echo "<script>alert('Error deleting item');</script>";
    }

    // Redirect back to the page that lists the items
    echo "<script>window.location.href='view_food.php';</script>";
} else {
    echo "<script>alert('Invalid request');</script>";
    echo "<script>window.location.href='view_food.php';</script>";
}
?>
