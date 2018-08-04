<?php 

$socks = [21,1,1,5,2,3,1,2,3,1];
echo '$socks = ['; 
foreach ($socks as $n)
{
	echo $n.' ';
}
echo ']'.'<br>';

function countUnpaired($socks)
{
$i=0;
while ($i != count($socks))	//цикл поиска, завершается, если проверил каждый элемент
{
$temp = $socks[$i]; // выбираем элемент
unset($socks[$i]);	// убираем его из массива для поиска пары
$num = array_search($temp,$socks); //номер парного элемента
	if ($num != false)		//если парный элемент найден
	{	
		unset($socks[$num]); //удаление парного элемента
		$i=0;				//запуск цикла сначала
	}
	else					
	{	
		array_unshift($socks, $temp);  //возврат выбранного элемента, если пара не найдена
		$i++;							//проверка следующего элемента
	}
$arr = array_values($socks);	// обновление ключей массива
$socks = $arr;
}
$x = count($socks); 			//счетчик кол-ва элементов
return($x);
}
$x = countUnpaired($socks);
echo 'The answer: '.$x;

?>

