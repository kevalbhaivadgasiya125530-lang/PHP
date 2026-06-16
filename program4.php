<?php
$monthNum = date('M'); // Gets current month as a three-letter abbreviation (e.g., "Jan", "Feb", etc.)

if ($monthNum == "jan") echo "January";
elseif ($monthNum == "feb") echo "February";
elseif ($monthNum == "mar") echo "March";
elseif ($monthNum == "apr") echo "April";
elseif ($monthNum == "may") echo "May";
elseif ($monthNum == "Jun") echo "June";
elseif ($monthNum == "july") echo "July";
elseif ($monthNum == "aug") echo "August";
elseif ($monthNum == "sep") echo "September";
elseif ($monthNum == "oct") echo "October";
elseif ($monthNum == "nov") echo "November";
else echo "December";


?>
