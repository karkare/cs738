<html>
<body bgcolor=linen>

<?php
/*--- CONFIGURATION SECTION ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

$coursenum="CS738";
$coursename="Advanced Compiler Optimizations";

////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// IMPORTANT: THE NEXT FEW VARIABLES AND THE DATA FILE MUST BE CONSISTENT IN NUMBER/MEANING OF FIELDS!. ///
///            ALSO, FIRST THREE COLUMN MUST BE -- ID, ROLL_NO, NAME -- IN THAT ORDER                    ///
////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*****  FINAL STUFF; COMMENTED FOR NOW SO THAT STUDENT CAN CHK PARTIAL MARKS *******************************************************************
// title-string for various evaluations
$col_headings  = array("ID", "RollNo",  "Name", "Mid Sem",   "QQ1",   "QQ2",   "QQ3",   "QQ4",   "QQ5",   "QQ6", "Asgn1", "Asgn2", "Asgn3", "Asgn4", "Critique", "Review", "Proposal", "Report",  "Demo", "End Sem"); 

// maximum marks for each component
$max_marks     = array(   0,        0,       0,         0,       5,       5,       5,       5,       5,       5,       5,       5,       5,       5,         15,        5,          5,       20,      15,       100);
$weightage     = array(   0,        0,       0,         0,       1,       1,       1,       1,       1,       1,       1,       1,       1,       1,         15,        5,          5,       20,      15,        30);
$collect_stats = array(   0,        0, array(),   array(), array(), array(), array(), array(), array(), array(), array(), array(), array(), array(),    array(),  array(),    array(),  array(), array(),   array());
******** END OF FINAL STUFF **********************************************************************************************************************/
// title-string for various evaluations
$col_headings  = array("ID", "RollNo",  "Name",   "QQ1",   "QQ2",   "QQ3",   "QQ4", "Asgn1", "Asgn2", "Asgn3", "Asgn4", "ProjectAll", "Critique", "EndSem"); 

// maximum marks for each component
$max_marks     = array(   0,        0,       0,      10,      10,      10,      10,      10,      10,      10,      10,          80,         45,       180);
$weightage     = array(   0,        0,       0,       1,       1,       1,       1,       1,       1,       2,       2,          40,         20,        30);
$collect_stats = array(   0,        0, array(), array(), array(), array(), array(), array(), array(), array(), array(),     array(),    array(),   array());

# OFFSET is the field from which the marks begin
$OFFSET = 3;

# SPECIAL VALUES
$supass = "cokEkOl" ; // super user password :)

#$note = "(* rounded to next higher integer; <b>Abs</b>: Absent; <b>EDNS</b>: Effort Declaration Not Submitted)";
$note = "<ol> <li> * Ignore <b>Weighted Total</b> column.</li><li> <b>Abs</b>: Absent</li></ol>";



/*--- END OF CONFIGURATION SECTION ----------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

echo "<h1> $coursenum: $coursename </h1>";
echo "<h2> Grade Card </h2>";
$passwd = $_POST["passwd"];

function load_select_marks($str, $passwd, $id)
{
	global $OFFSET;
	global $col_headings;
	global $max_marks;
	global $supass;

	$grades = array();
	$grades_array = explode(" & ", $str);
	$len = count($grades_array);

	$total = compute_stats($grades_array);

	$formatted_str="";
	// [0] => id, [1] => roll no, [2] => name
	if ($passwd == $supass || $grades_array[0] == $id) {
		$formatted_str = "<tr> <td align=center>" . $grades_array[1] . "</td> <td align=center> " . str_replace("_", " ", $grades_array[2]) . " </td> \n";
		for ($i = $OFFSET; $i < count($col_headings); $i += 1) {
			$curr_grade = $grades_array[$i];
			if ($curr_grade == -1234)
				$curr_grade = "<b>Abs</b>";
			if ($curr_grade == -1239)
				$curr_grade = "<b>EDNS</b>";
			$formatted_str .= "<td align=center> " . $curr_grade . "</td> \n";
		}
		$formatted_str .= "<td align=center> " . $total . "</td> \n</tr>\n";
	}
	return $formatted_str;
}

function compute_stats($grades_array)
{
    global $collect_stats;
    global $OFFSET;
    global $col_headings;
    global $max_marks;
    global $weightage;

    $total = 0;

    for ($i = $OFFSET; $i < count($col_headings); $i += 1) {
        $curr_grade = $grades_array[$i];
        if ($curr_grade <= -1230)
            $curr_grade = 0;
        $collect_stats[$i][] = ceil($curr_grade); // collect stats by appending to the array of marks

		$total += ($curr_grade * $weightage[$i]) / $max_marks[$i];
	}

    // Total marks coverted till now
    $max_total = 0;
    for ($i = $OFFSET; $i < count($col_headings); $i += 1) {
        $max_total += $weightage[$i];
    }

	$total_percent = (($total * 100 ) / $max_total);

    // For the TOTALS field
    $collect_stats[count($col_headings)][] = $total_percent; // collect stats for TOTALS by appending to the array of marks

    return $total_percent;
}

function standard_deviation($grades)
{
	$mean = array_sum($grades) / count($grades);
	$variance = 0.0;

	foreach ($grades as $i)
	{
		$variance += pow($i - $mean, 2);
	}
	$variance /=  count($grades);
	return (float) sqrt($variance);
}

$id = $passwd; // SIMPLIFY... get_id($passwd);
$file  = "data/grade_sheet.txt"; 
$fp  = fopen($file, "r");
$first = true;
$field_array = array();

if ($fp) {
	echo "<table cellspacing=\"5\" cellpadding = \"5\" border=\"2\" align=\"center\">\n";
    // Headers row 1
	echo "<tr> <td align=center> <b> Roll No. </b> </td> <td align=center> <b> Name </b> </td>";
	for ($i = $OFFSET; $i < count($col_headings); $i += 1) { 
		echo "<td align=center> <b>" .  $col_headings[$i] . "</b> </td>";
	}
	echo "<td align=center> <b> Weighted Total<sup>*</sup> (%) </b> </td>\n</tr>\n";

    // Headers row 2
	echo "<tr> <td align=center>  </td> <td align=center> <b> Max Marks </b></td>";
	for ($i = $OFFSET; $i < count($col_headings); $i += 1) { 
		echo "<td align=center> <b>" .  $max_marks[$i] . "</b> </td>";
	}
	echo "<td align=center> <b>  </b> </td>\n</tr>\n";

    // Headers row 3
	echo "<tr> <td align=center>  </td> <td align=center> <b> Weightage </b> </td>";
	for ($i = $OFFSET; $i < count($col_headings); $i += 1) { 
		echo "<td align=center> <b>" .  $weightage[$i] . "</b> </td>";
	}
	echo "<td align=center> <b>  </b> </td>\n</tr>\n";

    // The Real Entries
	while (($buffer = fgets($fp, 4096)) !== false) {
		$output_str = load_select_marks($buffer, $passwd, $id);
		if ($output_str != "")
			echo $output_str;
	}

	echo "</table>\n";
	echo "<br><br>";
	echo "<h2>Class Performance Statistics</h2> ";
    echo "<table cellspacing=\"5\" cellpadding = \"5\" border=\"2\" align=\"center\">\n";
    echo "<tr> <td align=center> <b>  </b> </td>";
    for ($i = $OFFSET; $i < count($col_headings); $i += 1) {  // +1 for the TOTALS field
		echo "<td align=center> <b>" .  $col_headings[$i] . "</b> </td>";
	}
	echo "<td align=center> <b> Weighted Total<sup>*</sup> (%) </b> </td>\n</tr>\n";

	echo "<tr> <td align=center> <b> Maximum </b> </td>";
	for ($i = $OFFSET; $i < count($col_headings) + 1; $i += 1) { 
		$max = max($collect_stats[$i]);
		echo "<td align = center>" . ceil($max) . "</td>\n";
	}

	echo "<tr> <td align=center> <b> Average </b> </td>";
	for ($i = $OFFSET; $i < count($col_headings) + 1; $i += 1) { 
		$mean = array_sum($collect_stats[$i]) / count($collect_stats[$i]);
		echo "<td align = center>" . ceil($mean) . "</td>\n";
	}
    echo "</tr>\n";
    
	echo "<tr> <td align=center> <b> Standard Deviation </b> </td>";
	for ($i = $OFFSET; $i < count($col_headings) + 1; $i += 1) { 
		$sd = standard_deviation($collect_stats[$i]);
		echo "<td align = center>" . ceil($sd) . "</td>\n";
	}
    echo "</tr>\n";

	echo "</table>\n";
	if (!feof($fp)) {
		echo "Error: unexpected fgets() fail\n";
	}

	echo "<h2>NOTES</h2> <p>$note</p>";
	fclose($fp);

}
else
{
    echo "File not found!\n";
} 
?>

</body>
</html>
