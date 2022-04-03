<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Area and Circumfrence of a circle in PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Area and Circumfrence of a circle in PHP</h1>";
			echo "<h3>This program will calculate Area and Circumfrence of a circle</h3>";
      echo <img src="./images/mathphp.webp" alt="math"/>
		?>
		<!-- form to get the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblRadius">Radius (cm):</label>
      <input type="text" id="radius" placeholder="Enter the radius (cm)" name="radius"><br><br>
      <input type="submit" value="Calculate Area">
      <input type="submit" value="Calculate Circumfrence">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				Area of the circle is" + $area + cm<sup>2</sup>
        Circumfrence of the circle is" + $circumfrence + cm
	    </iframe>
	</body>
</html>