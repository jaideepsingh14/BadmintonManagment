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
  	</div>






</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-5 fform">
				<div class="title">Player</div>
			    	<div class="col-sm-12 fform">
			    		<?php $sql = "SELECT * FROM player";
                                                        $result = $conn->query($sql);

                                                        if ($result->num_rows > 0) {
                                                            while($row = $result->fetch_assoc()) {
                                                        		$name = $row["name"];
                                                        		$pid = $row["pid"];
                                                        		$country = $row["country"];
                                                        		$age = $row["age"];
                                                        		$gender = $row["gender"];
                                                        			?>	
                                                        			<p><b>Id : <?php echo $pid; ?></b>&nbsp;Name : <?php echo $name; ?> &nbsp; Country : <?php echo $country;  ?> &nbsp; Age : <?php echo $age;  ?> &nbsp; Gender: <?php echo $gender;  ?>  </p>

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
