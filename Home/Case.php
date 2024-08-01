<?php
//Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "case_status";

//Connect to Database
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Initialize an empty variable to store the search results HTML
$searchResultsHTML = "";

if (isset($_POST['search']) && isset($_POST['casenumber'])) {
    $casetype = $_POST['casetype'];
    $casenumber= $_POST['casenumber'];
    $year = $_POST['year'];

    $sql = "SELECT * FROM andhra_pradesh WHERE CaseType= '$casetype' AND CaseNumber = '$casenumber' AND Year = '$year'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
	$searchResultsHTML .= '<div style="text-align: center;">'; //Center-aligning div
        $searchResultsHTML .= '<table border="1" style="margin: auto;">'; //Center-aligning table
        $searchResultsHTML .= '<tr><th>CaseType</th><th>CaseNumber</th><th>Year</th><th>PoliceStation</th><th>FIRNumber</th><th>AdvocateName</th><th>Petitioner</th><th>Respondent</th><th>FillingNumber</th><th>CaseStatus</th></tr>';
        while ($row = $result->fetch_assoc()) {
            // Append the retrieved data to the search results HTML
            $searchResultsHTML .= '<tr>';
            $searchResultsHTML .= '<td>' . $row["CaseType"] . '</td>';
            $searchResultsHTML .= '<td>' . $row["CaseNumber"] . '</td>';
            $searchResultsHTML .= '<td>' . $row["Year"] . '</td>';
            $searchResultsHTML .= '<td>'. $row["PoliceStation"] . '</td>';
            $searchResultsHTML .= '<td>' . $row["FIRNumber"] . '</td>';
            $searchResultsHTML .= '<td>' . $row["AdvocateName"] . '</td>';
            $searchResultsHTML .= '<td>' . $row["Petitioner"] . '</td>';
            $searchResultsHTML .= '<td>' . $row["Respondant"] . '</td>';
            $searchResultsHTML .= '<td>' . $row["FillingNumber"] . '</td>';
            $searchResultsHTML .= '<td>' . $row["CaseStatus"] . '</td>';
            $searchResultsHTML .= '</tr>';
        }
        $searchResultsHTML .= '</table>';

    } 
    else {
        $searchResultsHTML = "Incorrect Data or Case does not exist";
    }
    $_SESSION['search_results_message'] = $searchResultsHTML;

}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Status</title>
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
    margin-top: 20px;
}

.logo img {
    height: 100px;
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
    background-color: #555;
}

    </style>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(45.jpg);
            background-repeat: none;
            background-size: cover;
            padding: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form-container-h1{
            background-color: gray;
        }
        .form-group {
            margin-bottom: 15px;
			
        }
        label {
            font-weight: bold;
			
        }

        input[type="text"] {
            width: 580px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
			
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

		nav {
			margin: auto;
			margin-top: 40px;
			position: relative;
			width: clamp(320px, 50vw ,100%);
            top: -10px;
		  }
		  
		  nav p {
			font-size: 1.5rem;
			border-radius: 2px;
			position: relative;
			background: white;
			height: 40px;
			margin-bottom: 0;
			color: inherit;
			font-weight: 10;
			display: flex;
			flex: 1;
			justify-content: left;
			align-items: center;
			box-shadow: 4px 4px 20px -2px rgba(0, 0, 0, 0.35);
			transition: all 0.4s;
			
		  }
		  
		  nav:hover p {
			transform: translateY(-2px);
			box-shadow: 2px 2px 5px -1px rgba(0, 0, 0, 0.35);
			transistion: all 0.4s;
		  }
		  
		  #toggle {
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			z-index: 1;
			opacity: 0;
			cursor: pointer;
			height: 40px;
		  }
		  
		  p::before{
			position: absolute;
			right: 0;
			top: 0;
			height: inherit;
			aspect-ratio: 1;
			background: currentColor;
			display: flex;
			align-items: center;
			padding-right: 1rem;
			content: "";
			clip-path: polygon(50% 25%, 20% 80%, 80% 80%);
			transform: rotate(180deg) scale(0.75);
		  }
		  
		  #toggle:not(:checked) ~ h2::before {
			transform: rotate(0deg) scale(0.75);
		  }
		  
		  #toggle:focus ~ p{
			background: white;
			transition: background 0.45s;
		  }
		  
		  #toggle:checked ~ ul {
			visibility: hidden;
			opacity: 0;
		  }
		  
		  #toggle:not(:checked) ~ ul {
			opacity: 1;
			transition: opacity 0.3s ease-in-out;
		  }
		  
		  
		  nav ul {
			padding-left: 0;
			padding-top: 1rem;
			margin-top: 0;
			background: #ece5da;
			list-style: none;
			overflow: hidden;
			text-align: right;
			text-align: center;
			transition: all 0.4s ease-out;
			width: 100%;
			position: absolute;
		  }
		  nav ul li {
			border-radius: 2px;
			position: relative;
			display: inline-block;
			line-height: 1.5;
			width: 100%;
			margin: 0 0 0.25rem 0;
			background:white;
			transition: background 3s;
			box-shadow: 2px 2px 10px -2px rgba(0, 0, 0, 0.35);
		  }
		  
		  nav ul li:hover,
		  nav ul li a:focus {
			background: white;
			transition: background 0.45s;
		  }
		  
		  nav ul a {
			display: block;
			color: inherit;
			text-transform: lowercase;
			font-weight: 200;
			text-decoration: none;
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
    <div class="logo"><img src="MainLogo.png" height="100px" width="150px"></div>
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
            <li><a href="ContactUs.php">Contact us </a></li>
            <li><a href="FAQ.php">FAQ</a></li>
        </ul>
    </div>
    <div class="form-container">
        <h2>Case Status</h2>
        <form method="post">
            <div class="form-group">
                    <label for="casetype">*Case Type</label>
                    <br>
                    <select name="casetype" id="casetype" style="width: 100%; height:40px; border-radius:6px">
                      <option value="case">APPL-APPLICATION IN CIVIL SUIT</option>
                      <option value="case">ARBAPPL-ARBITRATION APPLICATION</option>
                      <option value="case">AS-FIRST APPEAL</option>
                      <option value="case">CA-CONTEMPT APPEAL</option>
                      <option value="CAPPEAL-COMPANY APPEAL">CAPPEAL-COMPANY APPEAL</option>
                      <option value="case">CC-CONTEMPT CASE</option>
                      <option value="case">CC(AT)-CONTEMPT CASE TRANSFERED FROM APAT</option>
                      <option value="case">CCCA-CITY CIVIL COURT APPEAL</option>
                      <option value="case">CC(TR)-CONTEMPT CASE TRANSFERED</option>
                      <option value="case">CEA-CENTRAL EXCISE APPEALS</option>
                      <option value="case">CERC-CUSTOMS EXCISE REVISION CASE</option>
                      <option value="case">CETC-CENTRAL EXCISE TAX CASE</option>
                      <option value="case">CMA-CIVIL MISCELLANEOUS APPEAL</option>
                      <option value="case">CMSA-CIVIL MISCELLANEOUS SECOND APPEAL</option>
                      <option value="case">COMAA-COMMERCIAL ARBITRATION APPEAL</option>
                      <option value="case">COMAOA-COMMERCIAL ARBITRATION ORIGINAL APPLICATION</option>
                      <option value="case">COMCA COMMERCIAL COURT APPEAL</option>
                      <option value="case">COMDA-COMMERCIAL APPEAL</option>
                      <option value="case">COMOP-COMMERCIAL ORIGINAL PETITION</option>
                      <option value="case">COMPA-COMPANY APPL. IN COMPANY PETITION</option>
                      <option value="case">COMS-COMMERCIAL SUIT</option>
                      <option value="case">COMTA-COMMERCIAL TRANSFER APPLICATION</option>
                      <option value="case">COMTOA-TRANSFER APPLICATION BEFORE COMMERCIAL APPELLATE DIVISION</option>
                      <option value="case">CP-COMPANY PETITION</option>
                      <option value="case">CRLA-CRIMINAL APPEAL</option>
                      <option value="case">CRLATR-CRIMINAL APPEAL TRANSFER</option>
                      <option value="case">CRLP-CRIMINAL PETITION</option>
                      <option value="case">CRLRC-CRIMINAL REVISION CASE</option>
                      <option value="case">CRP-CIVIL REVISION PETITION</option>
                      <option value="case">CS-CIVIL SUIT</option>
                      <option value="case">EC-ENQUIRY CELL</option>
                      <option value="case">EDC-ESTATE DUTY CASE</option>
                      <option value="case">EP-ELECTION PETITION</option>
                      <option value="case">EPTC-EXCESS PROFIT TAX CASE</option>
                      <option value="case">EXEP-EXECUTION PETITION</option>
                      <option value="case">FCA-FAMILY COURT APPEAL (FCA)</option>
                      <option value="case">GTC-GIFT TAX CASE</option>
                      <option value="case">ICOMAA-INTERNATIONAL COMMERCIAL ARBITRATION APPEAL</option>
                      <option value="case">ICOMAOA-INTERNATIONAL COMMERCIAL ARBITRATION ORIGINAL APPLICATION</option>
                      <option value="case">ITC-INCOME TAX CASE</option>
                      <option value="case">ITTA-INCOME TAX TRIBUNAL APPEAL</option>
                      <option value="case">LAAS-LAND ACQUISITION FIRST APPEAL</option>
                      <option value="case">LGA-LAND GRABBING APPEAL</option>
                      <option value="case">LPA-LETTER PATENT APPEAL</option>
                      <option value="case">MACMA-MOTOR ACCIDENT CIVIL MISCELLANEOUS APPEAL</option>
                      <option value="case">OP-ORIGINAL PETITION</option>
                      <option value="case">OSA-ORIGINAL SIDE APPEAL</option>
                      <option value="case">PIL-PUBLIC INTEREST LITIGATION</option>
                      <option value="case">RC-REFERRED CASE</option>
                      <option value="case">RCC-REFERRED COMPANY CASE</option>
                      <option value="case">RECR-RECRIMINATION PETITION</option>
                      <option value="case">REFORLA-REFERRED CRLA</option>
                      <option value="case">RESLGAIA-RESTORATION LAND GRABBING APPLICATION</option>
                      <option value="case">RESWPMP(TR)- WPMP TRANSFERRED</option>
                      <option value="case">REV CMP</option>
                      <option value="case">REVWP TRIMP-REVIEW WP(TR)</option>
                      <option value="case">RT-REFERRED TRIAL</option>
                      <option value="case">RTP-RECEIVE AND TRANSMIT PETITION</option>
                      <option value="case">SA-SECOND APPEAL</option>
                      <option value="case">SCLP-SUPREME COURT LEAVE PETITION</option>
                      <option value="case">SPLA-SPECIAL APPEAL</option>
                      <option value="case">STA-SPECIAL TRIBUNAL APPEAL</option>
                      <option value="case">TRAS-TRANSFER APPEAL</option>
                      <option value="case">TRC-TAX REVISION CASE</option>
                      <option value="case">TRCCCA - TRANSFER CCCA</option>
                      <option value="case">TRCMA-TRANSFER CIVIL MISC APPEAL</option>
                      <option value="case">TRCMP-TRANS. CIVIL MISC PETITION</option>
                      <option value="case">TRCRLA-TRANSFER CRIMINAL APPEAL</option>
                      <option value="case">TRCRLMP-TRANS. CRIMINAL MISC.PETITION</option>
                      <option value="case">TRCRLP-TRANSFER CRIMINAL PETITION</option>
                      <option value="case">TREVC-TAX REVISION CASE</option>
                      <option value="case">TRICOMAOA-TRANSFER INTERNATIONAL COMMERCIAL ARBITRATION ORIGINAL APPLICATION</option>
                      <option value="case">WA-WRIT APPEAL</option>
                      <option value="case">WF-WRIT PETITION</option>
                      <option value="case">WP(AT)-WRIT PETITION TRANSFERED FROM APAT</option>
                      <option value="case">WP(PIL)-PUBLIC INTEREST LITIGATION</option>
                      <option value="case">WP(TR)-WRIT PETITION TRANSFERED</option>
                      <option value="case">WTA-WEALTH TAX APPEAL</option>
                      <option value="case">WTC-WEALTH TAX CASE</option>
                      <option value="case">X-OBJ-Cross Objection</option>
                    </select>
            </div>

            <div class="form-group" >
                <label for="casenumber">*Case Number</label>
                <input type="text" id="casenumber" name="casenumber" placeholder="CaseNumber">
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="text" id="year" name="year" placeholder="Year">
            </div>

            <div class="form-group">
                <input type="submit" name="search" value="Search">
            </div>
        </div>
        
        <div id="search_results" style="text-align: center">
        <?php
        if (isset($_SESSION['search_results_message'])) {
            echo "<br>";
            echo $_SESSION['search_results_message'];
            // Clear the session variable to make it disappear on manual refresh
            unset($_SESSION['search_results_message']);
        }
        ?>
        </div>

        </form>
    </div>

    <script>
    // Check if the page was manually refreshed
    if (performance.navigation.type === 1) {
        // If refreshed, hide the search results message
        document.getElementById("search_results").style.display = "none";
        }
    </script>
</body>
</html>