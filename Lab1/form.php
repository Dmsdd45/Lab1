<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>
<!-- Script 2.1 - form.html -->

<form action="handle_form.php" method="post">

	<fieldset><legend>Enter your information in the form below:</legend>

	<p><label>Name: <input type="text" name="firstName" size="20" maxlength="40"></label></p>
	
	<p><label>Name: <input type="text" name="lastName" size="20" maxlength="40"></label></p>

	<p><label>Email Address: <input type="email" name="email" size="40" maxlength="60"></label></p>

	<p><label for="gender">Gender: </label><input type="radio" name="gender" value="M"> Male <input type="radio" name="gender" value="F"> Female</p>

	<p><label>Age:
	<select name="age">
		<option value="0-29">Under 30</option>
		<option value="30-60">Between 30 and 60</option>
		<option value="60+">Over 60</option>
	</select></label></p>

	<p><label>Comments: <textarea name="comments" rows="3" cols="40"></textarea></label></p>

	</fieldset>

	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

<?php

// This script makes three pull-down menus
// for an HTML form: months, days, years.

// Make the states array:
$states = [1 => 'Georgia', 'Alabama', 'Florida', 'Tennessee', 'South Carolina', 'North Carolina'];

// Make the states pull-down menu:
echo '<select name="state">';
foreach ($states as $key => $value) {
	echo "<option value=\"$key\">$value</option>\n";
}
echo '</select>';

?>
</form>

</body>
</html>