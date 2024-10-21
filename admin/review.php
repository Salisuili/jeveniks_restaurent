<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<style type="text/css">
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
    box-shadow: 5px 4px 10px 2px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow */
    background-color: #ffffff; /* Background color for the table */
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

.styled-table a {
    text-decoration: none;
    color: #009879; /* Link color */
    font-weight: bold;
    transition: color 0.3s; /* Smooth transition for hover effect */
}

.styled-table a:hover {
    color: #005f5f; /* Change color on hover */
}

.styled-table .del {
    color: #ff4c4c; /* Delete link color */
}

.styled-table .del:hover {
    color: #ff0000; /* Delete link color on hover */
}

</style>
<div class="content">
    <table class="styled-table">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>REVIEW</th>
            <th>COMMENTS</th>
            <th>REMOVE</th>
        </tr>
        <?php 
            $s = mysqli_query($con, "select * from review");
            while ($r = mysqli_fetch_array($s)) {
        ?>
        <tr align="center">
            <td><?php echo $r['id']; ?></td>
            <td><?php echo $r['name']; ?></td>
            <td><?php echo $r['review']; ?></td>
            <td><?php echo $r['description']; ?></td>
            <td><a href="delreview.php?a=<?php echo $r['id']; ?>" class="del">DELETE</a></td>
        </tr>
        <?php    
            }
        ?>
    </table>
</div>
<?php include "footer.php"; ?>
