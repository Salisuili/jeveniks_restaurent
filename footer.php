
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

    /* Footer styles */
    .contact-imfo-box {
        background-color: #f8f9fa;
        padding: 20px 0;
    }

    .contact-imfo-box .col-md-4 {
        text-align: center;
        padding: 20px;
    }

    .contact-imfo-box i {
        font-size: 24px;
        color: #009879;
        margin-bottom: 10px;
    }

    .contact-imfo-box h4 {
        font-size: 18px;
        color: #333;
        margin-bottom: 10px;
    }

    .contact-imfo-box p {
        font-size: 16px;
        color: #555;
    }

    .footer-area {
        background-color: #333;
        padding: 60px 0 20px;
        color: #fff;
    }

    .footer-area h3 {
        font-size: 18px;
        color: #ffffff;
        margin-bottom: 20px;
    }

    .footer-area p {
        color: #bbbbbb;
        font-size: 16px;
    }

    .footer-area a {
        color: #009879;
        transition: color 0.3s;
    }

    .footer-area a:hover {
        color: #005f5f;
    }

    .f-social .list-inline-item a {
        color: #ffffff;
        font-size: 20px;
        margin: 0 10px;
    }

    .f-social .list-inline-item a:hover {
        color: #009879;
    }

    .footer-area .text-color {
        color: #009879;
    }

    .copyright {
        background-color: #222;
        padding: 10px 0;
        text-align: center;
    }

    .copyright p {
        color: #ffffff;
        margin: 0;
    }
</style>

<!-- Start Contact info -->
<div class="contact-imfo-box" style="width:100%;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 arrow-right">
                <i class="fa fa-volume-control-phone"></i>
                <div class="overflow-hidden">
                    <h4>Phone</h4>
                    <p class="lead">+2349101010101</p>
                </div>
            </div>
            <div class="col-md-4 arrow-right">
                <i class="fa fa-envelope"></i>
                <div class="overflow-hidden">
                    <h4>Email</h4>
                    <p class="lead">Jeveniksservice@gmail.com</p>
                </div>
            </div>
            <div class="col-md-4">
                <i class="fa fa-map-marker"></i>
                <div class="overflow-hidden">
                    <h4>Location</h4>
                    <p class="lead">Kaduna, Nigeria</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact info -->

<!-- Start Footer -->
 <center>
<footer class="footer-area bg-f" style="width:100%;">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-3 col-md-6">
                <h3>Useful Links</h3>
                <div class="subscribe_form">
                    <a href="index.php">Home</a><br>
                    <a href="contact.php">Contact Us</a><br>
                    <a href="menu.php">Food Menu</a><br>
                    <a href="gallery.php">Gallery</a><br>
                </div>
                
            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Contact Information</h3>
                <p class="lead">Rigasa - Kaduna, Nigeria</p>
                <p class="lead"><a href="tel:+2349101010101">+2349101010101</a></p>
                <p><a href="mailto:Jeveniksservice@gmail.com">Jeveniksservice@gmail.com</a></p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Opening Hours</h3>
                <p><span class="text-color">Monday: </span> 7:00 AM - 12:00 PM</p>
                <p><span class="text-color">Tue-Wed :</span> 7:00 AM - 12:00 PM</p>
                <p><span class="text-color">Thu-Fri :</span> 7:00 AM - 12:00 PM</p>
                <p><span class="text-color">Sat-Sun :</span> 7:00 AM - 12:00 PM</p>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="company-name"> &copy; 2024 <a href="#">Jeveniks Restaurant</a> Developed By : Project Group 4 Iya Abubakar ABU, Zaria</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</center>
<!-- End Footer -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

<!-- ALL JS FILES -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="js/jquery.superslides.min.js"></script>
<script src="js/images-loded.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/baguetteBox.min.js"></script>
<script src="js/form-validator.min.js"></script>
<script src="js/contact-form-script.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
