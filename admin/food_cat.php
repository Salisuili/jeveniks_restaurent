<?php include "header.php"; ?>
<style type="text/css">
/* General content styling */
.content {
    padding: 20px;
    font-family: 'Arial', sans-serif;
}

/* Form table styling */
form table {
    width: 40%;
    margin: 0 auto;
    background-color: white;
    box-shadow: 1px 3px 15px 2px rgba(0, 0, 0, 0.1);
    border-collapse: collapse;
}

form table td {
    padding: 10px 15px;
    text-align: center;
}

form .title {
    font-size: 1.5em;
    font-weight: bold;
    color: #009879;
    text-align: center;
}

form .text {
    width: 80%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1em;
    transition: border-color 0.3s;
}

form .text:focus {
    border-color: #009879;
}

form .btn {
    padding: 10px 20px;
    background-color: #009879;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s;
}

form .btn:hover {
    background-color: #007f67;
}

.alert {
    color: red;
    font-size: 1.5em;
    font-family: 'Arial', sans-serif;
    text-align: center;
    margin-top: 20px;
}

</style>
<div class="content">
    <form action="" method="post">
        <table>
            <tr>
                <td class="title">Upload New Food Category</td>
            </tr>
            <tr>
                <td>
                    <select class="text" name="cat">
                        <option value="swallows">Swallows</option>
                        <option value="soups">Soups</option>
                        <option value="rice dishes">Rice Dishes</option>
                        <option value="grilled and fried foods">Grilled and Fried Foods</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="text" name="scat" placeholder="Enter Sub Category" class="text" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="s" value="Upload Now" class="btn"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['s'])) {
        include "connect.php";
        $cat = $_POST['cat'];
        $scat = $_POST['scat'];
        mysqli_query($con, "insert into food_cat(catnm, sub_cat) values('$cat', '$scat')") or die(mysqli_error($con));
        echo "<script>alert('Category Upload SuccessFully');</script>";
        echo "<div class='alert'>Category Uploaded</div>";
    }
    ?>
</div>
<?php include "footer.php"; ?>
