<?php
//exo1 

for ($nbr = 0 ; $nbr < 10 ; $nbr++) 
{
	echo $nbr;
}

//exo2 
echo "<br>";
$b = 70; 
for ($i=0; $i < 20 ; $i++) 
{ 
	$c = $b * $i ;
	echo "<br>".$c;	
}

//exo3
echo "<br>";

$bb = 80; 
for ($aa=100; $aa >= 10 ; $aa--) 
{ 
	$cc = $bb*$aa; 
	echo "<br>".$cc;
}

//exo 4
echo "<br>";
$nbr = 1;
while ($nbr <= 10) 
{
	echo $nbr . "<br>";
	$moitie = $nbr / 2;
	$nbr += $moitie ;
}

//exo 5
$i = 1;
while ($i <= 15) 
{
	echo $i." On y arrive presque ! <br>";
	$i++;
}

//exo6
echo "<br>";

$i = 20; 
while($i >= 0) 
{
	echo $i." C'est presque bon ! <br>";
	$i--; 
}

//exo7
echo "<br>";
$i = 1; 
while ($i <= 100) 
{
	echo $i." On tient le bon bout ! <br>";
	$i+=15;
}

//exo 8
echo "<br>";
$i = 200; 
while ($i >= 0) {
	echo $i." Enfin !!! <br>";
	$i-=12;
}



  ?>