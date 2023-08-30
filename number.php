<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
	<h1>PHP Send SMS</h1>
		<form method="post" action="number_db.php">
		<div class="form-group">
			<label for="phoneno">Mobile Number</label>
			<input type="text" name="phoneno" class="form-control" placeholder="Enter Phone Number" >
		</div>
		<div class="form-group">
			<label for="exampleFormControlTextarea3">Enter Text Message</label>
			<textarea class="form-control" name="massage" id="massage"rows="7"></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="Sending" class="btn btn-primary" value="Send Message">
		</div>	
		</form>
	</div>	
</body>
</html>


