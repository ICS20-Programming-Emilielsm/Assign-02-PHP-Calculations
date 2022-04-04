<?php
	// get the base and height from the textfields
	$radius = $_POST['radius'];

	// calculate the area
	$area = format_number(pi() * $radius**2 , 2);
  $circumfrence = 2 * pi() * $radius ;
?>

<h3>Results:</h3>
The Area of the circle is <?php echo "$area" ?>cm<sup>2</sup>.
The Circumfrence of the circle is <?php echo "$circumfrence" ?>cm<sup>2</sup>.