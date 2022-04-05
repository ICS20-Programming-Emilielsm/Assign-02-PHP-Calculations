<?php
	// get the base and height from the textfields
	$radius = $_POST['radius'];

	// calculate the area and circumfrence
	$area = pi() * $radius**2;
  $circumfrence = 2 * pi() * $radius ;
  $area = number_format($area, 2);
  $circumfrence = number_format($circumfrence, 2);
?>
 



<?php // the results that are going to be displayed?>
<h3>Results:</h3>
The Area of the circle is <?php echo "$area" ?>cm<sup>2</sup>.
The Circumfrence of the circle is <?php echo "$circumfrence" ?>cm<sup>2</sup>.