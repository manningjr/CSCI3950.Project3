 <span class="toggle">
<a href="#"></a>
</span>
<div class="hiddenDiv">
<?php
ini_set('display_errors', 1);
echo"<p><h3> Select Your Puppy By</h3>";
   echo "<form action='search.php' method='post'>";
   echo "<table>";
   echo "<tr><td>Breed:</td><td><input type = 'text' name = 'breed' /></td></tr>";
   echo "<tr><td>Puppy Name:</td><td><input type = 'text' name = 'pupName' /></td></tr>";
     echo "<tr><td>Sex:</td><td><select name='sex'> 
<option value='' selected='selected'>Select</option> 
<option value='male'>Male</option> 
<option value='female'>Female</option>
</select></td></tr>";
    echo "<tr><td>Age:</td><td><select name='age'> 
<option value='' selected='selected'>Select an age</option> 
<option value='0-1'>Up to 1 week</option> 
<option value='1-4'>1 week to 4 weeks</option> 
<option value='4-3m'>4 weeks to 3 months</option>
<option value='3m-6m'>3 months to 6 months</option>
<option value='6m-1y'>6 months to 1 year</option>
<option value='1y-more'>Older than a year</option>
</select></td></tr>";
   
   echo "<tr><td>Location:</td><td><select name='state'> 
<option value='' selected='selected'>Select</option> 
<option value='AL'>Alabama</option> 
<option value='AK'>Alaska</option> 
<option value='AZ'>Arizona</option> 
<option value='AR'>Arkansas</option> 
<option value='CA'>California</option> 
<option value='CO'>Colorado</option> 
<option value='CT'>Connecticut</option> 
<option value='DE'>Delaware</option> 
<option value='DC'>District Of Columbia</option>
<option value='FL'>Florida</option> 
<option value='GA'>Georgia</option> 
<option value='HI'>Hawaii</option> 
<option value='ID'>Idaho</option> 
<option value='IL'>Illinois</option> 
<option value='IN'>Indiana</option> 
<option value='IA'>Iowa</option> 
<option value='KS'>Kansas</option> 
<option value='KY'>Kentucky</option> 
<option value='LA'>Louisiana</option> 
<option value='ME'>Maine</option> 
<option value='MD'>Maryland</option> 
<option value='MA'>Massachusetts</option> 
<option value='MI'>Michigan</option> 
<option value='MN'>Minnesota</option> 
<option value='MS'>Mississippi</option> 
<option value='MO'>Missouri</option> 
<option value='MT'>Montana</option> 
<option value='NE'>Nebraska</option> 
<option value='NV'>Nevada</option> 
<option value='NH'>New Hampshire</option> 
<option value='NJ'>New Jersey</option> 
<option value='NM'>New Mexico</option> 
<option value='NY'>New York</option> 
<option value='NC'>North Carolina</option> 
<option value='ND'>North Dakota</option> 
<option value='OH'>Ohio</option> 
<option value='OK'>Oklahoma</option> 
<option value='OR'>Oregon</option> 
<option value='PA'>Pennsylvania</option> 
<option value='RI'>Rhode Island</option> 
<option value='SC'>South Carolina</option> 
<option value='SD'>South Dakota</option> 
<option value='TN'>Tennessee</option> 
<option value='TX'>Texas</option> 
<option value='UT'>Utah</option> 
<option value='VT'>Vermont</option> 
<option value='VA'>Virginia</option> 
<option value='WA'>Washington</option> 
<option value='WV'>West Virginia</option> 
<option value='WI'>Wisconsin</option> 
<option value='WY'>Wyoming</option>
</select></td></tr>";

	echo   "<tr><td></td><td><button type='submit'>FETCH</button><button type='Reset'>Reset</button></td></tr>";
    echo "</table>";
   echo "</form>";
   
   
   echo"<p><h3> Or Select By</h3>";
      echo "<form action='pupFetch.php'>";
   echo "<table>";
     echo "<tr><td>Size:</td><td><select name='size'> 
<option value='' selected='selected'>Select</option> 
<option value='small'>Small</option> 
<option value='average'>Average</option>
<option value='big'>Big</option>
</select></td></tr>";
    echo "<tr><td>Upkeep:</td><td><select name='upkeep'> 
<option value='' selected='selected'>Between</option> 
<option value='easy'>Easy</option> 
<option value='average'>Average</option> 
<option value='no'>No Preference</option>
</select></td></tr>";


   echo "<tr><td>Location:</td><td><select name='state'> 
<option value='' selected='selected'>Select</option> 
<option value='AL'>Alabama</option> 
<option value='AK'>Alaska</option> 
<option value='AZ'>Arizona</option> 
<option value='AR'>Arkansas</option> 
<option value='CA'>California</option> 
<option value='CO'>Colorado</option> 
<option value='CT'>Connecticut</option> 
<option value='DE'>Delaware</option> 
<option value='DC'>District Of Columbia</option> 
<option value='FL'>Florida</option> 
<option value='GA'>Georgia</option> 
<option value='HI'>Hawaii</option> 
<option value='ID'>Idaho</option> 
<option value='IL'>Illinois</option> 
<option value='IN'>Indiana</option> 
<option value='IA'>Iowa</option> 
<option value='KS'>Kansas</option> 
<option value='KY'>Kentucky</option> 
<option value='LA'>Louisiana</option> 
<option value='ME'>Maine</option> 
<option value='MD'>Maryland</option> 
<option value='MA'>Massachusetts</option> 
<option value='MI'>Michigan</option> 
<option value='MN'>Minnesota</option> 
<option value='MS'>Mississippi</option> 
<option value='MO'>Missouri</option> 
<option value='MT'>Montana</option> 
<option value='NE'>Nebraska</option> 
<option value='NV'>Nevada</option> 
<option value='NH'>New Hampshire</option> 
<option value='NJ'>New Jersey</option> 
<option value='NM'>New Mexico</option> 
<option value='NY'>New York</option> 
<option value='NC'>North Carolina</option> 
<option value='ND'>North Dakota</option> 
<option value='OH'>Ohio</option> 
<option value='OK'>Oklahoma</option> 
<option value='OR'>Oregon</option> 
<option value='PA'>Pennsylvania</option> 
<option value='RI'>Rhode Island</option> 
<option value='SC'>South Carolina</option> 
<option value='SD'>South Dakota</option> 
<option value='TN'>Tennessee</option> 
<option value='TX'>Texas</option> 
<option value='UT'>Utah</option> 
<option value='VT'>Vermont</option> 
<option value='VA'>Virginia</option> 
<option value='WA'>Washington</option> 
<option value='WV'>West Virginia</option> 
<option value='WI'>Wisconsin</option> 
<option value='WY'>Wyoming</option>
</select></td></tr>";

	echo   "<tr><td></td><td><button type='submit'>FETCH</button><button type='Reset'>Reset</button></td></tr>";
    echo "</table>";
   echo "</form>";
 ?>
</div>