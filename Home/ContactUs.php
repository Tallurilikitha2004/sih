<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        /* Reset some default styles */
body, ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

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
    background-color: goldenrod;
}

.table .members{
    width: 100%;
    height: 400px;
}
.table  tr td{
    text-align: center;
    font-size: 20px;
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
        <img src="mainlogo.png" >
    </div>
    <div class="tab" >
        <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="AboutUs.php">About us</a></li>
            <li>
                <a href="#">Case Status</a>
                <ul class="dropdown" style="width: 140px;">
                    <li><a href="Case.php">Andhra Pradesh</a></li>
                    <li><a  href="Case.php">Arunachal Pradesh</a></li>
                    <li><a  href="Case.php">Assam</a></li>
                    <li><a  href="Case.php">Bihar</a></li>
                    <li><a  href="Case.php">chhattisgarh</a></li>
                    <li><a  href="Case.php">Goa</a></li>
                    <li><a  href="Case.php">Gujarat</a></li>
                    <li><a  href="Case.php">Haryana</a></li>
                    <li><a  href="Case.php">Himachal Pradesh</a></li>
                    <li><a  href="Case.php">Jharkhand</a></li>
                    <li><a  href="Case.php">Karnataka</a></li>
                    <li><a  href="Case.php">Kerala</a></li>
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
    </div>
    <div class="table">
        <h1 style="text-align: center;">Team Name:VibeSentinels</h1>
        <table class="members" border="1" >
            <tr>
                <td> </td>
                <td>Name</td>
                <td>Gender (M/F)</td>
                <td>Email id</td>
            </tr>
            <tr>
                <td>Team Leader</td>
                <td>M. Nikitha</td>
                <td>F</td>
                <td>matta17nikitha@gmail.com</td>
            </tr>
            <tr>
                <td>Team member</td>
                <td>D. Pradeep Kumar</td>
                <td>M</td>
                <td>pradeepkumar15131767@gmail.com</td>
            </tr>
            <tr>
                <td>Team member</td>
                <td>G.Srikanth</td>
                <td>M</td>
                <td>srikanthgunji2323gmail.com</td>
            </tr>
            <tr>
                <td>Team member</td>
                <td>T.Likitha</td>
                <td>F</td>
                <td>tallurilikitha2004@gmail.com</td>
            </tr>
            
            <tr>
                <td>Team member</td>
                <td>T. Lithish Babu</td>
                <td>M</td>
                <td>lithishbabutamma@gmail.com</td>
            </tr>
            <tr>
                <td>Team member</td>
                <td>T. Leela Vamsi</td>
                <td>M</td>
                <td>tleelavamsi0124@gmail.com</td>
            </tr>
        </table>
    </div>
</body>
</html>