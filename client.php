</<!DOCTYPE html>
<html>
<head>
	<title>Cloud Computing</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<script type="text/javascript" src="js/jquery-2.2.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/all.js"></script>

</head>
<body>
	<div class="container">
		<div class="vertical-center-row">
			<div id="main"  class="col-xs-6">
			<div class="title">
				<h1>Quadratic Equation Solver</h1>
				<p>Enter the coefficients for the <strong>Ax^2 + Bx + C = 0	</strong></p>
			</div>
				<form>
					<div class="form-group">
						<label for="co-a">Coefficient A</label>
						<input type="number" name="co_a" class="form-control" id="co_a" placeholder="Enter Coefficient A">
					</div>
					<div class="form-group">
						<label for="co-b">Coefficient B</label>
						<input type="number" name="co_b" class="form-control" id="co_b" placeholder="Enter Coefficient B">
					</div>
					<div class="form-group">
						<label for="co-c">Coefficient C</label>
						<input type="number" name="co_c" class="form-control" id="co_c" placeholder="Enter Coefficient C">
					</div>
					<button type="button" id="calculate" class="btn btn-primary">Solve</button>
				</form>
				<div class="result">
					
				</div>
			</div>

		</div>

	</div>

</body>
</html>