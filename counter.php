<!DOCTYPE html>
<html>
<head>
    <title>Modulo-10 Gray Code Counter</title>
    <link rel="stylesheet" href="css/counter.css">
</head>
<body>
	<div class="institute-logo">
        <img src="img/diu_logo-removebg-preview.png" alt="Institute-Logo" id="insti-img" onclick="returnhome()">
    </div>
    <div class="logo-img">
        <img src="img/logo-bg.png" alt="Logo" id="grp-img">
    </div>
    <div class="container" id="con">
        <h1>Modulo-10 Gray Code Counter</h1>
        <form method="post" action="counter.php">
            <label for="start">Enter Starting Number (4-bit Binary):</label>
            <input type="text" name="start" id="start" placeholder="e.g. 1010">
            <input type="submit" value="Submit">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $start = $_POST["start"];
			if (!preg_match("/^[01]{4}$/", $start)) {
				echo "<div class='error'>Invalid Input! Please enter a 4-bit binary value.</div>";
			}
	
			else {
				$decimal = bindec($start);
				$grayCode = array($decimal);
	
				for ($i = 0; $i < 9; $i++) {
					$grayCode[] = ($grayCode[$i] ^ ($grayCode[$i] >> 1)) % 10;
				}
	
				echo "<div class='result'><h2>The Modulo-10 Gray Code Counter Starting from Binary $start is:</h2>";
				echo "<div class='circular-list'>";
	
				foreach ($grayCode as $code) {
					$binary = decbin($code);
					$binary = str_pad($binary, 4, "0", STR_PAD_LEFT);
					echo "<div class='circular-item'>";
					echo "<div class='binary'>$binary</div>";
					echo "<div class='decimal'>$code</div>";
					echo "</div>";
				}
	
				echo "</div></div>";
			}
		 }
		?>
	</div>
	<script>
        function returnhome(){
            window.location.href = "index.html";
        }
    </script>
</body>
</html>