<html>
<body>
<form name="a" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
Enter filled cells:<input type="text" name="s"><br>
Enter necessary distance:<input type="text" name="a"><br>
<input type="submit">
</form>
<?php 
$str = $_GET['s'];
$cells = explode(' ',$str);
$distanse = $_GET['a'];;
sort($cells);
if ($cells == Null)
{
echo 'The cells are empty'.'<br>';	
}
else
{	
	foreach ($cells as $n)
	{
		echo $n.' ';
	}
}
$x=0;
echo '<br>';
$dis=$distanse*2;
for ($i = 0; $i < (count($cells)-1); $i++) 
{
$a=($cells[$i+1]-$cells[$i]);
	while (true)
	{
		if ($a > $dis)
		{	
		$cells[$i] = $cells[$i]+$distanse;
		$x++;
		$a=($cells[$i+1]-$cells[$i]);
		}
		else
		{
		break;	
		}
	}	
}
echo 'Result: '.$x.'<br>';
?>
</body>
</html>