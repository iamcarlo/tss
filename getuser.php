<style>
th{background-image:url(bgpatt.jpg);}
tr:nth-child(odd){ background-color:none; }
tr:nth-child(even){ background-color:#fff; }
</style>

<?php
$con=mysqli_connect("localhost","root","1234","tssdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM tasktb");

echo "<center><table border='1'width='696'>
<tr>
<th><span>Date</span></th>
<th><span>Category</span></th>
<th><span>Task</span></th>
<th><span>Problem Encountered</span></th>
<th><span>Submitted By</span></th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr><span>";
  echo "<td width='80' overflow='hidden' align='center' style='table-layout:fixed'><span>" . $row['date'] . "</span></td>";
  echo "<td width='50' overflow='hidden' align='center' style='table-layout:fixed'><span>" . $row['category'] . "</span></td>";
  echo "<td width='150' overflow='hidden' align='center' style='table-layout:fixed'><span>" . $row['task'] . "</span></td>";
  echo "<td width='auto' overflow='hidden' align='center' style='table-layout:fixed'><span>" . $row['problem'] . "</span></td>";
  echo "<td width='80' overflow='hidden' align='center' style='table-layout:fixed'><span>" . $row['task_from'] . "</span></td>";
  echo "</span></tr>";
  }
echo "</table></center>";

mysqli_close($con);
?> 
</center>