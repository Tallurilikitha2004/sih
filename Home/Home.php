<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* Reset some default styles */
        body, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        /* Style the header and logo */
        .logo {
            text-align: left;
            margin-top: 0px;
            padding-left:10px ;
        }

        .logo img {
            height: 120px;
            width: 300px;
        }

        /* Style the navigation menu */
        .tab ul {
            background-color: #333;
            text-align: left;
        }

        .tab ul li {
            display: inline-block;
            position: relative;
            padding-right: 100px;
        }

        .tab ul li a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 20px 20px;
            width: 100px;
        }

        .tab ul li:hover a {
            background-color: goldenrod;
        }

        /* Style the dropdown menus */
        .tab ul ul {
            display: none;
            position: absolute;
            background-color: #333;
            z-index: 1;
        }

        .tab ul li:hover ul {
            display: block;
            left: 0;
            width: 200px;
        }

        .tab ul ul li {
            display: block;
            border-bottom: 1px solid #777;
        }

        .tab ul ul li:last-child {
            border-bottom: none;
        }

        .tab ul ul li a {
            padding: 10px 20px;
        }

        .tab ul ul li:hover a {
            background-color: #555;
        }

        /* Create the slider container */
        /* Styling for the slideshow container and images */
        .slideshow-container {
            max-width: 8000px;
            position: relative;
            margin: auto;
        }

        .mySlides {
            display: none;
        }

        img {
            width: 100%;
            height: auto;
        }

        /* Styling for the navigation dots */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .active {
            background-color: #717171;
        }
    
        footer {
            height: 100%;
            width: 100%;
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        footer h1 {
            font-size: 24px;
            margin-bottom: 10px;
            padding-right: 1000px;
        }
        
        footer ul {
            list-style: none;
            padding: 0;
            width: 1000px;
        }
        
        footer ul li {
            margin-bottom: 0px;
            
        }
        
        footer ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s ease;
            padding-right: 1000px;
            
            
        }
        
        footer ul li a:hover {
            color: #555;
        }
        .dropdown{
            max-height: 500px;
            overflow: auto;
        }
        .drop{
            max-height: 500px;
            overflow: auto;
            max-width: 140px;
        }
    </style>
</head>
<body style="background-color:#E9E1CE">

    <div class="logo" >
        <img src="MainLogo.png" >
    </div>
    <div class="tab">
        <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="AboutUs.php">About us</a></li>
            <li>
                <a href="#">Case Status</a>
                <ul class="dropdown" style="width: 140px;">
                    <li><a href="Case.php">Andhra Pradesh</a></li>
                    <li><a href="Case.php">Arunachal Pradesh</a></li>
                    <li><a href="Case.php">Assam</a></li>
                    <li><a href="Case.php">Bihar</a></li>
                    <li><a href="Case.php">chhattisgarh</a></li>
                    <li><a href="Case.php">Goa</a></li>
                    <li><a href="Case.php">Gujarat</a></li>
                    <li><a href="Case.php">Haryana</a></li>
                    <li><a href="Case.php">Himachal Pradesh</a></li>
                    <li><a href="Case.php">Jharkhand</a></li>
                    <li><a href="Case.php">Karnataka</a></li>
                    <li><a href="Case.php">Kerala</a></li>
                    <li><a href="Case.php">Madhya Pradesh</a></li>
                    <li><a href="Case.php">Manipur</a></li>
                    <li><a href="Case.php">Meghalaya</a></li>
                    <li><a href="Case.php">Mizoram</a></li>
                    <li><a href="Case.php">Nagaland</a></li>
                    <li><a href="Case.php">Odisha</a></li>
                    <li><a href="Case.php">Punjab</a></li>
                    <li><a href="Case.php">Rajasthan</a></li>
                    <li><a href="Case.php">Sikkim</a></li>
                    <li><a href="Case.php">Tamil Nadu</a></li>
                    <li><a href="Case.php">Telangana</a></li>
                    <li><a href="Case.php">Tripura</a></li>
                    <li><a href="Case.php">Uttar Pradesh</a></li>
                    <li><a href="Case.php">Uttarakhand</a></li>
                    <li><a href="Case.php">West Bengal</a></li>
                </ul>
            </li>
            <li><a href="Login.php" target="_blank">Login</a></li>
            <li><a href="ContactUs.php">Contact us</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
        </ul>
    
        <div class="slideshow-container">
    <!-- Slides -->
    <div class="mySlides">
        <img src="31.jpg" alt="Image 1">
    </div>

    <div class="mySlides">
        <img src="32.jpg" alt="Image 2">
    </div>

    <div class="mySlides">
        <img src="33.jpg" alt="Image 3">
    </div>

    <div class="mySlides">
        <img src="34.jpg" alt="Image 4">
    </div>

    <div class="mySlides">
        <img src="35.jpg" alt="Image 5">
    </div>

    <!-- Navigation dots -->
    <div style="text-align: center;">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</div>

<script>
    let slideIndex = 0;

    // Function to show the current slide and hide others
    function showSlides() {
        const slides = document.getElementsByClassName("mySlides");
        const dots = document.getElementsByClassName("dot");

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slideIndex++;

        if (slideIndex > slides.length) {
            slideIndex = 1;
        }

        for (let i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";

        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }

    showSlides(); // Start the slideshow
</script>
    <div class="just">
        <h1 style="text-align:center;">Law &amp; Justice</h1>
        <img src="Law.jpg" style="float:left;width:300px;height:240px;">
        <p style="font-size: 30px;">
            The Constitution of India guarantees protection of life and personal liberty to one and all.
            It provides adequate safeguards to fundamental rights against arbitrary decisions. 
            This section has detailed information about various legislations, rules and regulations, legal institutions, commissions and tribunals.
            You can also get information about the Supreme Court, High Courts, Subordinate Courts, Legal Aid, Profession, 
            Alternative Dispute Resolution (ADR) etc. Details of online services and free legal aid schemes are also available.
            Related documents and forms are provided in this section. 
        </p>
    </div>
    <footer>
        <h1 ><u> Important Links</u></h1>
        <ul >
            <li><a href="https://lawmin.gov.in/">Website of Ministry of Law and Justice</a></li>
            <li><a href="https://doj.gov.in/">Website of Department of Justice</a></li>
            <li><a href="https://legalaffairs.gov.in/">Information of Department of Legal Affairs</a></li>
            <li><a href="https://legislative.gov.in/">Legislative Department of Ministry of Law and Justice</a></li><br>
        </ul>
    </footer>
</body>
</html>
