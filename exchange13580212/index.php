<!DOCTYPE html>
	<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	</head>
	<body>
		<div class="container">

		<form action="calculate-result.php" method="post">
			<h2>เครื่องคำนวณอัตราการเเลกเปลี่ยน</h2>
			<label>จำนวนเงินไทย</label>
			<br>


			<input type="text" name="thb">

			<br>
			<br>
			<label>สกุลเงินที่ต้องการคำนวณ</label>
			<select name="type">
				<option value="usd">USD</option>
				<option value="jyp">JYP</option>
				<option value="krw">KRW</option>
				<option value="gbp">GBP</option>
				<option value="eur">EUR</option>
			</select>
			<br>
			<br>

				<!-- <button type="submit">Calculate</button> -->
				<button type="submit" class="btn btn-info">Calculate</button>
		</form>

	</div>

	</body>
</html>