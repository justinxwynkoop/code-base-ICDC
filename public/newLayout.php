<!DOCTYPE html>
<html>
	<head>
		<title>In-Classroom Data Collector</title>
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<!-- Konva is our javascript based canvas manager helps us -->
		<script src="js/konva.js"></script>

		<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/canvas.css">

	</head>

	<body>

<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

 include_once('header.php'); 

if (!isset($_SESSION['loggedIn'])) {
	    $errorMessage = "You must be logged in to create a new layout.";
	    $_SESSION['errorMessage'] = $errorMessage;
	    header('location: ../errorMessagePage.php');
	    exit;
}
else{
?>


		<div class="container">
			<br>
			<div class="row">
				<div class="col-lg-4">
					<!--BEGIN This is the canvas-->
					<div id="stage-parent">
	        	<div id="container"></div>
	    		</div>
	    		<!--END This is the canvas-->
				</div>
			

				<br>
				<div class="col-lg-8" id="addObjectArea">
					<button type="button" class="btn btn-primary" onclick="addNodeChair()">Add Chair</button>
					<button type="button" class="btn btn-primary" onclick="addTableWith4Chairs()">Table with 4 Chairs</button>
					<button type="button" class="btn btn-primary" onclick="addPerson()">Add Person</button>
				</div>


				<hr class="my-4">
				
				<div class="row">
					<div class="col-lg-12" id="adminControls">
						<button type="button" class="btn btn-primary" onclick="convertCanvasToJson()">Convert To Json(Goes to console.log now)</button>
					</div>				
				</div>


			</div>
		</div>
		<?php
		}
		?>
	</body>
	<!-- Load general Konva Funtionality-->
	<script src="js/generalKonvaFunctions.js"></script>

</html>