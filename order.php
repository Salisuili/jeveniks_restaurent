<?php 
session_start(); 
ob_start(); 
?>
<?php include "header.php"; ?>
<div style="height: 140px;"></div>
<div style="width: 90%; margin: 0 auto; background-color: silver; padding: 50px;">

<?php
if (isset($_SESSION['uid'])) {
    include "connect.php";
    $uid = $_SESSION['uid'];
    $nm = mysqli_real_escape_string($con, $_POST['nm']);
    $mo = mysqli_real_escape_string($con, $_POST['mo']);
    $em = mysqli_real_escape_string($con, $_POST['em']);
    $ad = mysqli_real_escape_string($con, $_POST['ad']);

    // Fetch all product IDs in the user's cart
    $product_ids = [];
    $s = mysqli_query($con, "SELECT p_id FROM addcart WHERE u_id='$uid'");
    while ($r = mysqli_fetch_array($s)) {
        $product_ids[] = $r['p_id'];
    }

    // Convert product IDs array to a comma-separated string
    $p_id_str = implode(',', $product_ids);

    $query = "INSERT INTO checkout (p_id, u_id, name, mobile, email, location) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($query);
    if ($stmt === false) {
        die("Prepare failed: " . $con->error);
    }
    $stmt->bind_param("isssss", $p_id_str, $uid, $nm, $mo, $em, $ad);

    if ($stmt->execute()) {
        ?>
        <div style="background-color: #3b0878; font-size:2.3em; color: #b7e352;">Order Placed Successfully</div>
        <div style="color: #4d2e1f; font-size:1.8em;"> 
            More Details to Contact 24x7 <br>
            +2349090909090
        </div>
        <?php
    } 
}
?>

</div>
<br><br><br>

<?php include "footer.php"; ?>    

<?php 
ob_end_flush(); 
?>
