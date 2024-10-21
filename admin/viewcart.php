<?php  
session_start();
if(isset($_SESSION['aid'])) {

include "header.php"; ?>
<style type="text/css">
    /* General content styling */
    .content {
        padding: 20px;
        font-family: 'Arial', sans-serif;
    }

    /* Styled table container */
    .styled-table-container {
        background-color: white;
        width: 98%;
        margin: 0 auto;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Styled table */
    .styled-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 18px;
        text-align: left;
    } 

    .styled-table th, .styled-table td {
        padding: 12px 15px;
        border: 1px solid #ddd;
    }

    .styled-table th {
        background-color: #009879;
        color: #ffffff;
        text-align: center;
    }

    .styled-table tr {
        background-color: #f3f3f3;
    }

</style>
<div class="content">
    <div class="styled-table-container">
        <br>
               
        <?php 
        include "connect.php";
        
        if(isset($_GET['pid']) && isset($_GET['uid'])) {
            $pid = intval($_GET['pid']);
            $uid = ($_GET['uid']);
             
        } else {
            echo "Invalid parameters.";
            exit;
        }

        // Update query to fetch additional details (address, phone, delivered)
        $query = "SELECT addcart.price, addcart.p_id, addcart.qty, addcart.total, addcart.id, checkout.name, checkout.mobile, checkout.location, checkout.delivered, addcart.u_id, menu.image
                  FROM addcart
                  INNER JOIN checkout ON addcart.p_id = checkout.p_id
                  INNER JOIN menu ON menu.id = checkout.p_id
                  WHERE addcart.u_id = '$uid' AND checkout.p_id = $pid";
        
        $s = mysqli_query($con, $query);

        if (!$s) {
            echo "Error: " . mysqli_error($con);
            exit;
        }
        ?>

        <table class="styled-table">
            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Product ID</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Delivery Status</th>
                <th>IMAGE</th>
            </tr>
            <?php
            while ($r = mysqli_fetch_array($s)) {
                // Check the delivery status and apply color based on the value
                $deliveryStatus = $r['delivered'] == 1 ? "Delivered" : "Not Delivered";
                $statusColor = $r['delivered'] == 1 ? "green" : "red";
            ?>
            <tr>
                <td><?php echo $r['u_id']; ?></td>
                <td><?php echo $r['name']; ?></td>
                <td><?php echo $r['mobile']; ?></td>
                <td><?php echo $r['location']; ?></td>
                <td><?php echo $r['p_id']; ?></td>
                <td><?php echo $r['price']; ?></td>
                <td><?php echo $r['qty']; ?></td>
                <td><?php echo $r['total']; ?></td>
                <td style="color: <?php echo $statusColor; ?>;"><?php echo $deliveryStatus; ?></td>
                <td><img src="<?php echo $r['image']; ?>" width="100" height="100"></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>
<?php include "footer.php"; ?>

<?php
} else {
    header("location:index.php");
}
?>
