 <?php
//DATE : 27/5/2021 TASK-3 For Loop Demo

echo "<center> <h2> Odd/Even </h2> <table >";


	for($i=1;$i<=10;$i++)
	{
		if ($i%2==0) 
			{
				echo "<td bgcolor='lightblue' width='100px' align='center'>$i</td>";
			}
			else
			{
				echo "<td bgcolor='pink' width='100px' align='center'>$i</td>";
			}
		
		
	
	echo "</tr>";
}
echo "</table> </center>";
?>