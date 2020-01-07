
<?php
	function greet($name, $color) {
		echo "<p> Hi, my name is $name, and my favorite color is $color. </p>";
	}

	greet('John', 'blue');
	greet('Jane', 'green');
?>

<h1> <?php bloginfo('name'); ?> </h1>

<p> <?php bloginfo('description'); ?> </p>

<?php

	$names = array('Brad', 'Jane', 'John', 'Bigglesworth');

	$count = 0;

	while($count < count($names)) {
		echo "<li>Hi. my name is $names[$count] </li>";
		$count++;
	}
?>

<p> Hi, my name is <?php echo $names[0] ?> </p>
