<?php include "includes/header.php"?>
<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<?php include "includes/logo.php" ?>
			<?php include "includes/headerDiv.php" ?>
			<?php include "includes/menu.php"?>
			<div id="contenttext">
				<?php include "includes/title.php"?>
					<div class="bodytext" style="padding:12px;" align="justify">
					
					<strong><br /><br />
					<font color=#CC0000>* Required Fields</font>
					</strong><br /><br />
					<?php 
					//-----------------Variables Declaration---------------
					if($_POST){
					$weight = $_POST['inputWeight'];
					$height = $_POST['inputHeight'];
					$unit = $_POST['WeightMetric'];
					

					include "includes/functions.php";
				}
					

					//-----------------Variables Validation--------------- 					
					?>
					<form  action="" method="POST" onsubmit="return validateForm()" name="validate"> 
						<?php
						include "main.php";
						?>
					</form>

					<?php 
					if($_POST){
					echo "<font color=#CC0000 style='font-size:18px; padding:40px 0; '>Your BMI is "  .  number_format($BMI_result,2)  . "</font>"; 
					}
					?>
				</div>
			</div>
			<?php include "includes/footer.php"?>
		</div>
	</div>

	<script>
	function validateForm() {
    var x = document.forms["validate"]["inputWeight"].value;
	var y = document.forms["validate"]["WeightMetric"].value;
	if (x == "" || x == null) {
		document.getElementById('alert').innerHTML = ' Error : Weight is required!'
		return false;
	}else if (y == "" || y == null) {
		document.getElementById('alert2').innerHTML = 'Error : Height is required'
		return false;
	}
}
</script>

</body>
</html>