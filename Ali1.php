<!DOCTYPE html>
<html><head>
    <title>Ali by Groot</title>
    <style>
        table{width: 100%; border: 0px solid;}
        tr,td{border: 0px solid;}
</style>
</head>

<body>

<div><table>
<?php 

for($i = 1; $i <= 12; $i++)
{	
echo "<tr>";

for($j = 1; $j <= 3; $j++)
	{
		$result = ($i * $j);
		echo "<td> $j * $i = $result </td>";
    }
echo "</tr>";
}

?>
</table>
<hr></div>

<div><table>
<?php 

for($i = 1; $i <= 12; $i++)
{	
echo "<tr>";

for($j = 4; $j <= 6; $j++)
	{
		$result = ($i * $j);
		echo "<td> $j * $i = $result </td>";
    }
    echo "</tr>";
}

?>
</table>
<hr></div>

<div><table>
<?php 

for($i = 1; $i <= 12; $i++)
{	
    echo "<tr>";

for($j = 7; $j <= 9; $j++)
	{
		$result = ($i * $j);
		echo "<td> $j * $i = $result </td>";
    }
    echo "</tr>";
}

?>
</table>
<hr></div>

<div><table>
<?php 

for($i = 1; $i <= 12; $i++)
{	
    echo "<tr>";

for($j = 10; $j <= 12; $j++)
	{
		$result = ($i * $j);
		echo "<td> $j * $i = $result </td>";
    }
    echo "</tr>";
}

?>
</table>
<hr></div>

</body></html>