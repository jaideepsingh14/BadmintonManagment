<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="s11.css">

  <title>Badminton</title>




  	<div class="container-fluid heading">
  		<div class="row rowh">
  			<div class="col-sm-3">
  			</div>
  			<div class="col-sm-5">
  				<div class="text-lead h1 cricket">BADMINTON MANAGEMENT SYSTEM</div>
  			</div>
  			<div class="col-sm-4"></div>
  		</div>
  		  			<center><P style="color:white;text-decoration: none;background: white;"><a href="player.php"> PLAYER LIST</a> &nbsp;&nbsp; <a href="match.php"> MATCH LIST</a>&nbsp;&nbsp; <a href="index.php"> UPDATE LIST</a></P></center>

  	</div>






</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-sm-5 fform">
			<div class="title">Player</div>




      <form method="post" action="include/player.php" >
				<div class="form-group">
					<label for="tid">Player ID:</label>
					<input type="number" placeholder="Please Enter only Numbers" tabindex="-1" name="pid" class="form-control" required="Please fill team id" pattern="\d{4}">
				</div>
				<div class="form-group">
					<label for="tname">Name:</label>
					<input  type="text" tabindex="-1" placeholder="Please Enter Text" name="pname" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="tcountry">Country:</label>
					<input type="text" tabindex="-1" placeholder="Please Enter Country name"name="pcountry" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="captainid">Age</label>
					<input type="number" tabindex="-1" placeholder="Please Enter only Numbers" name="age" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="vcapid">Gender:</label>
					<input type="text" tabindex="-1" placeholder="Please Enter only Numbers" name="gender" class="form-control" required="Please fill all the details">
				</div>
				
				<div>
					<input type="submit" name="submit1" tabindex="-1" class="btn btn-success btn-submit">
				</div>
			</form>




    </div>
		<div class="col-sm-1"></div>
		<div class="col-sm-5 fform">
			<div class="title text-danger">Schedule</div>
			<form method="post" action="include/sch.php">
				<div class="form-group">
					<label for="mid">Match ID:</label>
					<input type="number" placeholder="Please Enter only Numbers" tabindex="-1" name="mid" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="team1id">Player1 Id:</label>
					<input type="number" placeholder="Please Enter only Numbers" tabindex="-1" name="p1" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="team2id">Player2 Id:</label>
					<input type="number" placeholder="Please Enter only Numbers" tabindex="-1" name="p2" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="ttvenue">Venue:</label>
					<input type="text"  placeholder="Please Enter only Venue" tabindex="-1" name="venue" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="tttime">match Time:</label>
					<input type="text" placeholder="Please Enter only Numbers" tabindex="-1"  name="time" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="ttprice"> Match date</label>
					<input type="text" placeholder="Please Enter only Numbers" tabindex="-1"  name="date" class="form-control" required="Please fill all the details">
				</div>
				<div>
					<input type="submit"tabindex="-1" name="submit3" class="btn btn-success btn-submit">
				</div>
			</form>
		</div>
		<div class="col-sm-5 fform">
			<div class="title text-danger">Match Update</div>
			<form method="post" action="include/update.php">
				<div class="form-group">
					<label for="mid">Match ID:</label>
					<input type="number" placeholder="Please Enter only Numbers" tabindex="-1" name="match_id" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="team1id">Winner id</label>
					<input type="number" placeholder="Please Enter only Numbers" tabindex="-1" name="win" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="team2id">Looser id:</label>
					<input type="number" placeholder="Please Enter only Numbers" tabindex="-1" name="loss" class="form-control" required="Please fill all the details">
				</div>
				<div>
					<input type="submit"tabindex="-1" name="submit3" class="btn btn-success btn-submit">
				</div>
			</form>
		</div>
		
	</div>



	 
	</div>


    <!--<div class="row">
    	<div class="col-sm-3"></div>
    	<div class="col-sm-6 fform">
    		<div class="title text-danger">Ranking</div>
			<form method="post" action="includes/player.php" class="form">
				<div class="form-group">
					<label for="pid">Player ID:</label>
					<input type="number" placeholder="Please Enter only Numbers" tabindex="-1" name="pid" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="prank">Player Ranking:</label>
					<input type="number" placeholder="Please Enter only Numbers" tabindex="-1" name="prank" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="pteam">singles:</label>
					<input type="text" placeholder="Please Enter Text" tabindex="-1" name="pteam" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="pname">doubles:</label>
					<input type="text" placeholder="Please Enter Text" tabindex="-1"name="pname" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="page">mixed-doubles:</label>
					<input type="number" placeholder="Please Enter only Numbers" tabindex="-1" name="page" class="form-control" required="Please fill all the details">
				</div>
				
				<div>
					<input type="submit" name="submit5" tabindex="-1" class="btn btn-success btn-submit">
				</div>
			</form>
    	</div>
    	<div class="col-sm-2"></div>
    </div>-->

	</div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
