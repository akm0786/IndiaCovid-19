<?php

				$data=file_get_contents('https://api.covid19india.org/data.json');
				$coronaIndia=json_decode($data,true);

				// echo $coronaIndia['statewise'][1]['state'];

				$totalStates= count($coronaIndia['statewise']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INDIA COVID 19</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

  <style>
  	
  	*{
  		font-family: 'Roboto', sans-serif;
  		/*background-color: #fff;*/
   	}


  </style>
</head>
<body >
	
	<div class="main " style="background:orange;">
		

 			<div  style="height:83px;  ">
			
			<h3 class=" p-3 pd-3 text-center text-uppercase "  style="background-color:#2c3e50; color:white; padding-bottom: 7px;"  >	india covid-19 live update </h3>
			
		


			</div>

    
  </div>
  				<h3 class="text-uppercase m-0 p-3 text-center" style="background-color: #FFE53B;
background-image: -webkit-linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
background-image: -moz-linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
background-image: -o-linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
">total covid-19 cases in india</h3>

<div class="table-responsive">
			<table class="table text-center table-striped table-hover" >
				<thead>
				<tr>
					<th class="text-capitalize "  style="background-color:white;color:#17A2B8; ">LastUpdateTime</th>		
							
					<th class="text-capitalize " style="background-color:white;color:red; ">Confirmed</th>		
					<th class="text-capitalize " style="background-color:white;color:#007bff; ">Active</th>		
					<th class="text-capitalize " style="background-color:white;color:#28a745; ">Recovered</th>
					<th class="text-capitalize "style="background-color:white;color:6C757D; ">Deaths</th>



				<tr>
					<td class="bg-info " style="color:white;"><?php echo $coronaIndia['statewise'][0]['lastupdatedtime'] ?></td>
					
					<td class="bg-danger" style="color:white;"><?php echo $coronaIndia['statewise'][0]['confirmed'] ?></td>
					<td class="bg-primary" style="color:white;"><?php echo $coronaIndia['statewise'][0]['active'] ?></td>
					<td class="bg-success" style="color:white;"><?php echo $coronaIndia['statewise'][0]['recovered'] ?></td>
					<td class="bg-secondary" style="color:white;"><?php echo $coronaIndia['statewise'][0]['deaths'] ?></td>

			    </tr>
				</thead>
			</table>	
</div>

	<h3 class="text-uppercase text-center p-3" style="background-color: #21D4FD;
background-image: -webkit-linear-gradient(90deg, #21D4FD 0%, #B721FF 100%);
background-image: -moz-linear-gradient(90deg, #21D4FD 0%, #B721FF 100%);
background-image: -o-linear-gradient(90deg, #21D4FD 0%, #B721FF 100%);
background-image: linear-gradient(90deg, #21D4FD 0%, #B721FF 100%);

"> State-wise covid-19 cases in india</h3>

		<div class="table-responsive">
			
			<table class="table table-striped text-center table-hover  " >
				<thead >
				<tr>
					<th class="text-capitalize "  style="background-color:white;color:#17A2B8; ">LastUpdateTime</th>		
					<th class="text-capitalize"  style="background-color:white;color:#f39c12; ">State</th>		
					<th class="text-capitalize " style="background-color:white;color:red; ">Confirmed</th>		
					<th class="text-capitalize " style="background-color:white;color:#007bff; ">Active</th>		
					<th class="text-capitalize " style="background-color:white;color:#28a745; ">Recovered</th>
					<th class="text-capitalize "style="background-color:white;color:6C757D; ">Deaths</th>		
			

				</tr>	



				
				<?php


				$i=1;	
				while ($i<$totalStates) 
				{

					?>
			
			<tr>
					<td class="bg-info " style="color:white;"><?php echo $coronaIndia['statewise'][$i]['lastupdatedtime'] ?></td>
					<td  style="color:white; background-color: #f39c12"><?php echo $coronaIndia['statewise'][$i]['state'] ?></td>
					<td class="bg-danger" style="color:white;"><?php echo $coronaIndia['statewise'][$i]['confirmed'] ?></td>
					<td class="bg-primary" style="color:white;"><?php echo $coronaIndia['statewise'][$i]['active'] ?></td>
					<td class="bg-success" style="color:white;"><?php echo $coronaIndia['statewise'][$i]['recovered'] ?></td>
					<td class="bg-secondary" style="color:white;"><?php echo $coronaIndia['statewise'][$i]['deaths'] ?></td>

			</tr>




			<?php
					$i++;
				}

				?>
			</thead>
			</table>
		</div>
			

					<!-- Footer -->
			<footer class="page-footer font-small blue">

			  <!-- Copyright -->
			  <div class="footer-copyright text-center py-3">© 2020 Copyright:
			    <a href="https://github.com/akm0786"target="_blank"> Developed By Abhishek Mishra </a>
			  </div>
			  <!-- Copyright -->

			</footer>
			<!-- Footer -->
	</div>


</body>
</html>
