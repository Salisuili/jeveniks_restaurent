<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<style type="text/css">
/* General content styling */
.content {
    padding: 20px;
    font-family: 'Arial', sans-serif; /* Choose a font family */
}

/* Link styling */
.content a {
    text-decoration: none;
    color: #ff4c4c; /* Link color */
    font-weight: bold;
    margin: 0 20px; /* Adds spacing between links */
    transition: color 0.3s; /* Smooth transition for hover effect */
}

.content a:hover {
    color: #ff0000; /* Change color on hover */
}

/* Table styling */
.content table {
    width: 100%;
    margin: 25px 0;
    border-collapse: collapse;
    text-align: center;
}

.content table td {
    padding: 10px;
    border: none; /* Removes default border */
}

.content table img {
    border-radius: 8px; /* Adds rounded corners to images */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow to images */
    width: 210px;
    height: 210px;
}

.content .delete-link {
    text-decoration: none;
    color: #ff4c4c; /* Delete link color */
    font-weight: bold;
    transition: color 0.3s; /* Smooth transition for hover effect */
}

.content .delete-link:hover {
    color: #ff0000; /* Delete link color on hover */
}

</style>
<div class="content">
    <center>
        <a href="gallery.php">Upload Gallery</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="vgallery.php">View Gallery</a>
    </center>
    <?php include "connect.php"; ?>
    <table>
        <?php
        $r = 0;
        $s = mysqli_query($con, "select * from gallery");
        while ($row = mysqli_fetch_array($s)) {
            if ($r % 4 == 0) {
                echo "<tr>";
            }
            echo "<td> <img src='{$row['image']}' alt=''> <br><center><a href='dgallery.php?id={$row['id']}' class='delete-link'>Delete</a></center> </td>";
            if ($r % 4 == 3) {
                echo "</tr>";
            }
            $r++;
        }
        ?>
    </table>
    <br><br>
</div>
<?php include "footer.php"; ?>
