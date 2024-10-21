<?php include "header.php"; ?>
<style>
    /* General content styling */
    .content {
        padding: 20px;
        font-family: 'Arial', sans-serif; /* Choose a font family */
    }

    /* Styled table */
    .styled-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 18px;
        text-align: left;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow */
    }

    .styled-table th, .styled-table td {
        padding: 12px 15px;
        border: 1px solid #ddd; /* Light border for cells */
    }

    .styled-table th {
        background-color: #009879; /* Table header background color */
        color: #ffffff; /* Table header text color */
        text-align: center; /* Center align text in header */
    }

    .styled-table tr {
        background-color: #f3f3f3; /* Alternating row background color */
    }

    .styled-table tr:nth-of-type(even) {
        background-color: #f9f9f9; /* Alternating row background color */
    }

    .styled-table tr:hover {
        background-color: #f1f1f1; /* Highlight row on hover */
    }

    .styled-table th[colspan="8"] {
        background-color: #333; /* Header row with colspan background color */
        font-size: 24px;
    }

    .styled-table a {
        text-decoration: none;
        color: #009879; /* Link color */
        font-weight: bold;
        transition: color 0.3s; /* Smooth transition for hover effect */
    }

    .styled-table a:hover {
        color: #005f5f; /* Change color on hover */
    }
</style>
<div class="content">
    <br><br>
    <?php include "connect.php"; ?>
    <table class="styled-table">
        <tr>
            <th colspan="8">PARCEL CLIENTS</th>
        </tr>
        <tr>
            <th>Username</th>
            <th>Customer Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Address</th>
            <th>View Product</th>
            <th>Delete</th>
        </tr>
        <?php
        // Fetching data from checkout table
        $s = mysqli_query($con, "SELECT * FROM checkout");
        while ($r = mysqli_fetch_array($s)) {
        ?>
        <tr>
            <td><?php echo ucfirst($r['u_id']); ?></td>
            <td><?php echo ucfirst($r['name']); ?></td>
            <td><?php echo $r['mobile']; ?></td>
            <td><?php echo $r['email']; ?></td>
            <td><?php echo ucfirst($r['location']); ?></td>
            <td><a href="viewcart.php?pid=<?php echo $r['p_id']; ?>&uid=<?php echo $r['u_id']; ?>">View Product</a></td>
            <td><a href="delorder.php?a=<?php echo $r['id']; ?>" class="del">DELETE</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>
<?php include "footer.php"; ?>
