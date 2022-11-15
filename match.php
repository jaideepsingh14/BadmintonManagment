<?php  
include('include/connection.php');



?><!DOCTYPE html>
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
				<div class="title">Schedule</div>
			    	<div class="col-sm-12 fform">
			    		<?php $sql = "SELECT * FROM schedule";
                                                        $result = $conn->query($sql);

                                                        if ($result->num_rows > 0) {
                                                            while($row = $result->fetch_assoc()) {
                                                        		$id = $row["match_id"];
                                                        		$p1 = $row["p1"];
                                                        		$p2 = $row["p2"];
                                                        		$venue = $row["venue"];
                                                        		$time = $row["time"];
                                                            $date = $row["date"];
                                                        			?>	
                                                        			<p><b>Id : <?php echo $id; ?></b>&nbsp;Team 1 ID : <?php echo $p1; ?>&nbsp;Team 2 ID : <?php echo $p2; ?> &nbsp; venue : <?php echo $venue;  ?> &nbsp; Time : <?php echo $time;  ?> &nbsp; date: <?php echo $date;  ?>  <hr>  </p>

                                                        			<?php
                                                        	}
                                                        }
                                                         ?>  
			    	</div>
			</div>
		</div>



	 
	</div>



	</div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
