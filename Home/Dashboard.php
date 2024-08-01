<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>DASHBOARD</title>
	<link rel="stylesheet"
		href="DashboardStyle.css">
	<link rel="stylesheet"
		href="DashboardResponsive.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body style="background-color:white">

	<!-- for header part -->
	<header style="background-color:white">

		<div class="logosec col-7" >
		<img src= 
			"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn" 
				alt="menu-icon" style="margin-right:0px;">
			<img src="https://doj.gov.in/wp-content/themes/sdo-theme/images/emblem.svg" height="65px" width="65px" style="margin-bottom:13px;" ><p>E-GOV CASE MANAGER<p>
				<div class="searchbar">
					<input type="text"
						placeholder="Search">
					<div class="searchbtn" style="background-color:rgb(1, 34, 101)" >
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
				<img src="searchimg.png"
						class="icn srchicn"
						alt="search-button">
				</div>
			</div>
			<br><br>
			<div class="box-container col-10 text-center">

				<div class="box box1" style="background-color:rgb(1, 34, 101)">
					<div class="text">
						<h2 class="topic-heading" style="color:rgb(233, 225, 206)">35</h2>
						<h2 class="topic" style="color:rgb(233, 225, 206)">Total Cases</h2>
					</div>

					<img src="eye.png"
						alt="Views">
				</div>

				<div class="box box2" style="background-color:rgb(1, 34, 101)">
					<div class="text">
						<h2 class="topic-heading" style="color:rgb(233, 225, 206)">15</h2>
						<h2 class="topic" style="color:rgb(233, 225, 206)">Pending Cases</h2>
					</div>

					<img src="eye.png"
						alt="solved cases">
				</div>

				<div class="box box3" style="background-color:rgb(1, 34, 101)">
					<div class="text" >
						<h2 class="topic-heading" style="color:rgb(233, 225, 206)">20</h2>
						<h2 class="topic" style="color:rgb(233, 225, 206)">Disposed Cases</h2>
					</div>

					<img src="eye.png"
						alt="Disposed cases">
				</div>

				<div class="box box4" style="background-color:rgb(1, 34, 101)">
					<div class="text">
						<h2 class="topic-heading" style="color:rgb(233, 225, 206)">05</h2>
						<h2 class="topic" style="color:rgb(233, 225, 206)">Upcoming Hearings</h2>
					</div>

					<img src="eye.png"
						alt="solved cases">
				</div>

				<div class="box box5" style="background-color:rgb(1, 34, 101)">
					<div class="text">
						<h2 class="topic-heading" style="color:rgb(233, 225, 206)">07</h2>
						<h2 class="topic" style="color:rgb(233, 225, 206)">Pre-Trail Cases</h2>
					</div>

					<img src="eye.png"
						alt="solved cases">
				</div>

				<div class="box box6" style="background-color:rgb(1, 34, 101)">
					<div class="text">
						<h2 class="topic-heading" style="color:rgb(233, 225, 206)">08</h2>
						<h2 class="topic" style="color:rgb(233, 225, 206)">Trail Cases</h2>
					</div>

					<img src="eye.png"
						alt="solved cases">
				</div>


			</div>

			<div class="report-container">
				<div class="report-header">
					<h1 class="recent-Articles" style="color:black" >Recent Cases</h1>
					<button class="view" style="background-color:rgb(1, 34, 101); color: white;">View All</button>
				</div>

				<div class="report-body">
					<div class="report-topic-heading">
						<h3 class="t-op">S.No</h3>
						<h3 class="t-op">Case Number</h3>
						<h3 class="t-op" id="pretrail">Client Name</h3>
						<h3 class="t-op">Trial &nbsp; &nbsp; &nbsp;</h3>
						<h3 class="t-op">&nbsp; &nbsp; &nbsp;Status  &nbsp; &nbsp; &nbsp; &nbsp;</h3>
					</div>

					<div class="items">
						<div class="item1">
							<h3 class="t-op-nextlvl">01</h3>
							<h3 class="t-op-nextlvl">Case 73</h3>
							<h3 class="t-op-nextlvl">Vamsi</h3>
							<h3 class="t-op-nextlvl"> &nbsp; &nbsp;No</h3>
							<h3 class="t-op-nextlvl label-tag">Disposed</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">02</h3>
							<h3 class="t-op-nextlvl">Case 27</h3>
							<h3 class="t-op-nextlvl">Pradeep</h3>
							<h3 class="t-op-nextlvl">No</h3>
							<h3 class="t-op-nextlvl label-tag">Pending</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">03</h3>
							<h3 class="t-op-nextlvl">Case 17</h3>
							<h3 class="t-op-nextlvl"> &nbsp; Litish</h3>
							<h3 class="t-op-nextlvl">&nbsp; &nbsp; &nbsp; &nbsp;Yes</h3>
							<h3 class="t-op-nextlvl label-tag">Pending</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">04</h3>
							<h3 class="t-op-nextlvl">Case 10</h3>
							<h3 class="t-op-nextlvl">Nikitha &nbsp; </h3>
							<h3 class="t-op-nextlvl">No</h3>
							<h3 class="t-op-nextlvl label-tag">Disposed</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">05</h3>
							<h3 class="t-op-nextlvl">Case 23</h3>
							<h3 class="t-op-nextlvl"> &nbsp; Srikanth</h3>
							<h3 class="t-op-nextlvl">Yes</h3>
							<h3 class="t-op-nextlvl label-tag">Pending</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">06</h3>
							<h3 class="t-op-nextlvl">Case 45</h3>
							<h3 class="t-op-nextlvl">Rishita &nbsp;</h3>
							<h3 class="t-op-nextlvl">No</h3>
							<h3 class="t-op-nextlvl label-tag">Pending</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">07</h3>
							<h3 class="t-op-nextlvl">Case 63</h3>
							<h3 class="t-op-nextlvl">Babu</h3>
							<h3 class="t-op-nextlvl"> &nbsp; &nbsp; &nbsp;No</h3>
							<h3 class="t-op-nextlvl label-tag">Disposed</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">08</h3>
							<h3 class="t-op-nextlvl">Case 04</h3>
							<h3 class="t-op-nextlvl"> &nbsp;Tamma</h3>
							<h3 class="t-op-nextlvl">Yes</h3>
							<h3 class="t-op-nextlvl label-tag">Disposed</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">09</h3>
							<h3 class="t-op-nextlvl">Case 29</h3>
							<h3 class="t-op-nextlvl">Revathi</h3>
							<h3 class="t-op-nextlvl">No</h3>
							<h3 class="t-op-nextlvl label-tag">Pending</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="index.js"></script>
</body>
</html>
