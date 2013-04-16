<?php

	ini_set('display_errors', 1);

	include('functions/functions.php');



	$post = $_POST;

	print_r($post);


	if (isset($post['submit1']))
	{

		$breed = $post['breed'];
		$name = $post['pupName'];
		$sex = $post['sex'];
		$age = $post['age'];
		$location = $post['state'];

		$location = setState($location);

		if ($age == "0-1")	// If the age is from 0-1 weeks
		{
			$startAge = 0;	// Get beginning date (in days) for subtraction from time stamp to get rang of dates
			$endAge = 7;	// Get end date (in days) for subtraction from time stamp to get rang of dates
		}
		if ($age == "1-4")	// If age is from 1-4 weeks
		{
			$startAge = 7;	// Get range in days
			$endAge = 28;
		}
		if ($age == "4-3m") // Repeat for all ages
		{
			$startAge = 28;
			$endAge = 91;
		}
		if ($age == "3m-6m")
		{
			$startAge = 91;
			$endAge = 182;
		}
		if ($age == "6m-1y")
		{
			$startAge = 182;
			$endAge = 365;
		}
		if ($age == "1y-more")
		{
			$startAge = 365;
		}


		echo "<br><br>";
		echo "Breed: " . $breed . "<br>";
		echo "Name: " . $name . "<br>";
		echo "Sex: " . $sex . "<br>";
		echo "Age: " . $age . "<br>";
		echo "Location: " . $location . "<br>";
		echo "Start: " . $startAge . " days before present<br>";
		echo "End: " . $endAge . " days before present<br>";


		$currentDate = date("m-d-y");	// Get current date
		echo "Current date: " . date("m-d-y") . "<br>";

		$startDate = mktime(0,0,0,date("m"),date("d")-$endAge,date("Y"));		// Gets the beginning date for query range
		echo "Beginning query date: " . date("m-d-Y", $startDate) . "<br>";
		$endDate = mktime(0,0,0,date("m"),date("d")-$startAge,date("Y"));		// Gets the end date for query range
		echo "End query date: " . date("m-d-Y", $endDate) . "<br>";





		else
		{
			header("LOCATION: index.php?error=1");
		}

	}


	else if (isset($post['submit2']))
	{
		echo "<br><br>";

		$size = $post['size'];
		$upkeep = $post['upkeep'];
		$location = $post['state'];


		$location = setState($location);


		echo "Size: " . $size . "<br>";
		echo "Upkeep: " . $upkeep . "<br>";
		echo "Location: " . $location . "<br>";
	}




?>