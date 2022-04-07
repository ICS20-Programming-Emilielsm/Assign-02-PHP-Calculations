<?php
	// get the base and height from the textfields
	$radius = $_POST['radius'];

	// calculate the area and circumfrence
	$area = pi() * $radius**2;
  $circumference = 2 * pi() * $radius ;
  $area = number_format($area, 2);
  $circumference = number_format($circumference, 2);
?>

<?php // the results that are going to be displayed?>
<h3>Results:</h3>
The Area of the circle is <?php echo "$area" ?>cm<sup>2</sup>.
The Circumference of the circle is <?php echo "$circumference" ?>cm<sup>2</sup>.