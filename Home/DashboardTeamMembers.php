<?php
session_start();

// Check if a success message is set
if (isset($_SESSION['success_message'])) {
    echo "<div style='color: green; text-align: center;'>" . $_SESSION['success_message'] . "</div>";
    unset($_SESSION['success_message']); // Clear the message after displaying it
}

// Check if an error message is set
if (isset($_SESSION['error_message'])) {
    echo "<div style='color: red; text-align: center;'>" . $_SESSION['error_message'] . "</div>";
    unset($_SESSION['error_message']); // Clear the error after displaying it
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Team Members</title>
	<link rel="stylesheet"
		href="DashboardStyle.css">
	<link rel="DashboardStylesheet"
		href="DashboardResponsive.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            .container {
                text-align: center;
                margin-top: 20px;
    
            }
            .schedule-form {
                max-width: 400px;
                margin: 0 auto;
                text-align: left;
            }
            
            .form-box {
                background-color: #f7f7f7;
                border: 1px solid #ccc;
                padding: 30px;
                max-width: 1000px;
                width: 100%;
                margin: 0 auto;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                border-radius: 5px;
                line-height: 1.6;
                font-size: 16px;
            }
    
            
            .form-container {
                display: flex;
                flex-wrap: wrap;
            }
    
            
            .form-element {
                flex: 1;
                margin-right: 10px;
                margin-bottom: 10px;
            }
    
            
            .form-element:last-child {
                margin-right: 0;
            }
            .modal-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 85%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            justify-content: center;
            align-items: center;
            margin-left: 220px;
        }

        /* Style for the modal content */
        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Close button style */
        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
        </style>
</head>

<body >

	<!-- for header part -->
	<header >

		<div class="logosec col-7" >
			<img src="logo.jpg" height="70px" width="300px" >
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon">
				<div class="searchbar">
					<input type="text"
						placeholder="Search">
					<div class="searchbtn">
					<img src=
		"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
							class="icn srchicn"
							alt="search-icon">
					</div>
				</div>
		
				<div class="message col-1">
					<div class="circle"></div>
					<img src=
		"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
						class="icn"
						alt="">
					<div class="dp">
					<img src=
		"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
							class="dpicn"
							alt="dp">
					</div>
				</div>
		</div>

		

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav" style="background-color:rgb(1, 34, 101); padding-left:25px" >
				<div class="nav-upper-options" style="display: block;  ">
					<div class="nav-option option1" >
						<img src=
						"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
							class="nav-img"
							alt="dashboard">
						<p><a href="Dashboard.php" style="text-decoration: none; color:white" >Dashboard</a></p>
					</div>
					<br>
					<div class="option2 nav-option" >
						<img src="client.jpg"
							class="nav-img"
							alt="articles">
						<p><a href="DashboardClient.php" style="text-decoration: none; color:white" >Client</a></p>
					</div>
					<br>
					<div class="nav-option option3" >
						<img src=
						"note.png"
							class="nav-img"
							alt="report">
						<p ><a href="DashboardCase.php" style="text-decoration: none; color:white">Case</a></p>
					</div>
					<br>
					
					<div class="nav-option option6" >
						<img src=
						"cal.png"
							class="nav-img"
							alt="calender">
						<p><a href="DashboardSchedule.php" style="text-decoration: none; color:white" > Schedule </a></p>
					</div>
					<br>
					<div class="nav-option option6" >
						<img src=
						"teammembers.png"
							class="nav-img"
							alt="settings">
						<p><a href="DashboardTeamMembers.php" style="text-decoration: none; color:white" > Team Members</a></p>
					</div>
                    <br>
					<div class="nav-option logout">
						<img src="LogOut.jpg"
							class="nav-img"
							alt="logout">
						<p><a href="Home.php" style="text-decoration: none; color:white"> &nbsp;Logout</a></p>
					</div>

				</div>
			</nav>
		</div>
		<div class="main">

			<div class="searchbar2">
				<input type="text"
					name=""
					id=""
					placeholder="Search">
				<div class="searchbtn">
				<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn"
						alt="search-button">
				</div>
			</div>
			<h1 style="text-align:center"><u>Team Members</u> </h1>
            <button onclick="openModal()">ADD TEAM MEMBERS</button>
			<div id="myModal" class="modal-container">
        <div class="modal-content" style="margin-top:200px; background-color:black">
            <span class="close-button" onclick="closeModal()" style="color:white" >&times;</span>
            <div class="form-box">
    <form id="infoForm" action="TeamData.php" method="post" style="text-align:left">
        <!-- Name Section -->
        <label for="first_name">First Name:</label>
        <input type="text" id="firstName" name="FirstName" required>
        
        <label for="middle_name">Middle Name:</label>
        <input type="text" id="middleName" name="MiddleName">
        
        <label for="last_name">Last Name:</label>
        <input type="text" id="lastName" name="LastName" required>
        
        <br><br> <!-- Line break to move to the next row -->
        
        <!-- Contact Information Section -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="Email" required>
        
        <label for="mobile_number">Mobile Number:</label>
        <input type="text" id="mobileNumber" name="MobileNumber" required>
        
        <label for="zip_code">Zip Code:</label>
        <input type="text" id="zipcode" name="ZipCode" required>
        
        <br><br> <!-- Line break to move to the next row -->
        
        <!-- Additional Information Section -->
        <label for="city">City:</label>
        <input type="text" id="city" name="City" required>
        
        <label for="role">Role:</label>
        <input type="text" id="role" name="Role" required>
        
        <label for="employee_id">Employee ID:</label>
        <input type="text" id="employeeid" name="EmployeeID" required>
        
        <br><br> <!-- Line break to separate the additional information section from the submit button -->
        
        <!-- Address and Password Section -->
        <label for="address">Address:</label>
        <input type="text" id="address" name="Address" required>
        
        
        <label for="state">State:</label>
        <input type="text" id="state" name="State" required>
        
        <br><br> <!-- Line break to move to the next row -->
        <input type="submit" value="Add Team Member">
    </form>
            </div>
            </div>
    </div>
    <div style="margin-top:100px; font-size: 20px; " >
    <?php
// Establish a connection to the MySQL database
$conn = new mysqli("localhost", "root", "", "team_members");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve all data from the table
$sql = "SELECT * FROM team_members";
$result = $conn->query($sql);

// Check if there are rows in the result
if ($result->num_rows > 0) {
	echo '<div style="text-align: center;">'; //Center-aligning div
        echo '<table border="1" style="margin: auto;">'; //Center-aligning table
        echo '<tr><th>FirstName</th><th>MiddleName</th><th>LastName</th><th>Email</th><th>MobileNumber</th><th>ZipCode</th><th>Cityr</th><th>Role</th><th>EmployeeID</th></tr>';
        while ($row = $result->fetch_assoc()) {
            // Append the retrieved data to the search results HTML
            echo '<tr>';
            echo '<td>' . $row["FirstName"] . '</td>';
            echo '<td>' . $row["MiddleName"] . '</td>';
            echo '<td>' . $row["LastName"] . '</td>';
            echo '<td>'. $row["Email"] . '</td>';
            echo '<td>' . $row["MobileNumber"] . '</td>';
            echo '<td>' . $row["ZipCode"] . '</td>';
            echo '<td>' . $row["City"] . '</td>';
            echo '<td>' . $row["Role"] . '</td>';
            echo '<td>' . $row["EmployeeID"] . '</td>';
            echo '</tr>';
        }
        echo '</table>';

    } 
    else {
        echo "DATA NOT PRESENT";
    }
    

// Close the database connection
$conn->close();
?>
    </div>
            <div style="background-color:white; margin-top:20px">

</div>
            <!-- Team List -->
            <div id="team-list">
                    <!-- Team details will be dynamically added here -->
            </div>

    <script>
        function addTeamMember(){
                // Get form values
                const firstName = document.getElementById('first_name').value;
                const middleName = document.getElementById('middle_name').value;
                const lastName = document.getElementById('last_name').value;
                const email = document.getElementById('email').value;
                const mobileNumber = document.getElementById('mobile_number').value;
                const zipCode = document.getElementById('zip_code').value;
                const address = document.getElementById('address').value;
                const password = document.getElementById('password').value;
                const state = document.getElementById('state').value;
                const city = document.getElementById('city').value;
                const role = document.getElementById('role').value;
                const employeeId = document.getElementById('employee_id').value;

                // Create a list item to display the information
                const teamMemberEntry= `
                    <p><strong>Name:</strong> ${firstName} ${middleName} ${lastName}</p>
                    <p><strong>Email:</strong> ${email}</p>
                    <p><strong>Mobile Number:</strong> ${mobileNumber}</p>
                    <p><strong>Zip Code:</strong> ${zipCode}</p>
                    <p><strong>Address:</strong> ${address}</p>
                    <p><strong>Password:</strong> ${password}</p>
                    <p><strong>State:</strong> ${state}</p>
                    <p><strong>City:</strong> ${city}</p>
                    <p><strong>Role:</strong> ${role}</p>
                    <p><strong>Employee ID:</strong> ${employeeid}</p>
                `;

                const teamMemberDisplay = document.getElementById('teamMemberDisplay');
                teamMemberDisplay.innerHTML += teamMemberEntry;

              
                }   
    </script>
    <script>
        // JavaScript functions to open and close the modal
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
    </script>
    <script>
    // JavaScript function to remove messages after 5 seconds
    setTimeout(function() {
        var successMessage = document.getElementById('success-message');
        var errorMessage = document.getElementById('error-message');
        
        if (successMessage) {
            successMessage.style.display = 'none';
        }

        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 5000); // 5000 milliseconds = 5 seconds
    </script>
	</div>


	<script src="index.js"></script>
</body>
</html>
