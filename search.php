<?php

	ini_set('display_errors', 1);

	include('functions/functions.php');



	$post = $_POST;

	if (isset($post['submit1']))
	{
		if (isset($post['breed']) && !empty($post['breed']) && isset($post['sex']) && !empty($post['sex']) && isset($post['age']) && !empty($post['age']) && isset($post['state']) && !empty($post['state']))
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



			$database = database_connect();

			$q1 = "SELECT * FROM `puppies`";

			$blah = mysql_query($q1);


			while($puppy = mysql_fetch_assoc($blah))
			{
				$puppy_id = $puppy['puppy_id'];   // Keep as hidden field on image links to pupInfo. Then we can just send this field with the link and query for the correct id on pupInfo.php
				$pupName = $puppy['name'];
				$breed = $puppy['breed'];
				$birthday = $puppy['birthday'];
				$sex = $puppy['sex'];
				if ($puppy['vaccination'] == 1)
					$vaccin = "Yes";
				else
					$vaccin = "No";
				$price = $puppy['price'];
				$location = $puppy['location'];
				$img = $puppy['img_name'];

				$puppies[] = $puppy;  //Stores info into puppies[] for potential use later. May not be necessary.

				echo "<div class='puppic'>";
					echo"<a href='pupInfo.php?id=" . $puppy_id . "'><img src='$img' alt='Puppy image'/></a>";
				echo "</div>";

				echo "<div class='puppy-list'>";
					echo "<table>";
						echo "<tr><td>Name:</td><td><b>$pupName</b></td></tr>";
						echo "<tr><td>Breed:</td><td><b>$breed</b></td></tr>";
						echo "<tr><td>Sex:</td><td><b>$sex</b></td></tr>";
						echo "<tr><td>Birthday:</td><td><b>$birthday</b></td></tr>";
						echo "<tr><td>Vaccinated:</td><td><b>$vaccin</b></td></tr>";
						echo "<tr><td>Price:</td><td><b>$$price</b></td></tr>";
						echo "<tr><td>Location:</td><td><b>$location</b></td></tr>";
					echo "</table>";
				echo "</div>";

			}



		}
		else
		{
			header("LOCATION: index.php?error=1");	// Send to index and print an error
		}

	}


	else if (isset($post['submit2']))
	{
		if (isset($post['size']) && !empty($post['size']) && isset($post['upkeep']) && !empty($post['upkeep']) && isset($post['state']) && !empty($post['state']))
		{
			echo "<br><br>";

			$size = $post['size'];
			$upkeep = $post['upkeep'];
			$location = $post['state'];


			$location = setState($location);


			echo "Size: " . $size . "<br>";
			echo "Upkeep: " . $upkeep . "<br>";
			echo "Location: " . $location . "<br>";



			$database = database_connect();

			$q1 = "SELECT * FROM `puppies`";

			$blah = mysql_query($q1);


			while($puppy = mysql_fetch_assoc($blah))
			{
				$puppy_id = $puppy['puppy_id'];   // Keep as hidden field on image links to pupInfo. Then we can just send this field with the link and query for the correct id on pupInfo.php
				$pupName = $puppy['name'];
				$breed = $puppy['breed'];
				$birthday = $puppy['birthday'];
				$sex = $puppy['sex'];
				if ($puppy['vaccination'] == 1)
					$vaccin = "Yes";
				else
					$vaccin = "No";
				$price = $puppy['price'];
				$location = $puppy['location'];
				$img = $puppy['img_name'];

				$puppies[] = $puppy;  //Stores info into puppies[] for potential use later. May not be necessary.

				echo "<div class='puppic'>";
					echo"<a href='pupInfo.php?id=" . $puppy_id . "'><img src='$img' alt='Puppy image'/></a>";
				echo "</div>";

				echo "<div class='puppy-list'>";
					echo "<table>";
						echo "<tr><td>Name:</td><td><b>$pupName</b></td></tr>";
						echo "<tr><td>Breed:</td><td><b>$breed</b></td></tr>";
						echo "<tr><td>Sex:</td><td><b>$sex</b></td></tr>";
						echo "<tr><td>Birthday:</td><td><b>$birthday</b></td></tr>";
						echo "<tr><td>Vaccinated:</td><td><b>$vaccin</b></td></tr>";
						echo "<tr><td>Price:</td><td><b>$$price</b></td></tr>";
						echo "<tr><td>Location:</td><td><b>$location</b></td></tr>";
					echo "</table>";
				echo "</div>";

			}


		}
		else
		{
			header("LOCATION: index.php?error=1");	// Send to index and print an error
		}
	}




?>