<?php
	

	$post = $_POST;

	print_r($post);

	$breed = $post['breed'];
	$name = $post['pupName'];
	$sex = $post['sex'];
	$age = $post['age'];
	$location = $post['state'];

	$currentDate = date("m-d-y");	// Get current date


	$states = array(

		"AL" => "Alabama",
		"AK" => "Alaska",
		"AZ" => "Arizona",
		"AR" => "Arkansas",
		"CA" => "California",
		"CO" => "Colorado",
		"CT" => "Connecticut",
		"DE" => "Delaware",
		"DC" => "District Of Columbia",
		"FL" => "Florida",
		"GA" => "Georgia",
		"HI" => "Hawaii",
		"ID" => "Idaho",
		"IL" => "Illinois",
		"IN" => "Indiana",
		"IA" => "Iowa",
		"KS" => "Kansas",
		"KY" => "Kentucky",
		"LA" => "Louisiana",
		"ME" => "Maine",
		"MD" => "Maryland",
		"MA" => "Massachusetts",
		"MI" => "Michigan",
		"MN" => "Minnesota",
		"MS" => "Mississippi",
		"MO" => "Missouri",
		"MT" => "Montana",
		"NE" => "Nebraska",
		"NV" => "Nevada",
		"NH" => "New Hampshire",
		"NJ" => "New Jersey",
		"NM" => "New Mexico",
		"NY" => "New York",
		"NC" => "North Carolina",
		"ND" => "North Dakota",
		"OH" => "Ohio",
		"OK" => "Oklahoma",
		"OR" => "Oregon",
		"PA" => "Pennsylvania",
		"RI" => "Rhode Island",
		"SC" => "South Carolina",
		"SD" => "South Dakota",
		"TN" => "Tennessee",
		"TX" => "Texas",
		"UT" => "Utah",
		"VT" => "Vermont",
		"VA" => "Virginia",
		"WA" => "Washington",
		"WV" => "West Virginia",
		"WI" => "Wisconsin",
		"WY" => "Wyoming"

	);

	foreach($states as $abbrev => $state)
	{
		if($location == $abbrev)
		{
			$location = $state;		// Set the acronym to the corresponding state
		}
	}

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
	echo "Start: " . $startAge . "<br>";
	echo "End: " . $endAge . "<br>";
	echo date("m-d-y") . "<br>";

	$startDate = mktime(0,0,0,date("m"),date("d")-$endAge,date("Y"));		// Gets the beginning date for query range
	echo "Beginning query date is " . date("m-d-Y", $startDate) . "<br>";

	$endDate = mktime(0,0,0,date("m"),date("d")-$startAge,date("Y"));		// Gets the end date for query range
	echo "End query date is " . date("m-d-Y", $endDate) . "<br>";



	$query = "SELECT * FROM `puppies` WHERE ";









?>