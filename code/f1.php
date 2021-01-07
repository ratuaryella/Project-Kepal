<?php

function write(){
	
	echo "hallo everyone"; 
	
}
//write();
/*function write(){
	
	echo "good morning";
	
}
*/
function greet($name, $time){
	
	for(; $time>0; --$time){
		
		echo "hallo".$name."<br>";
		
	}
	
}
//greet("bunga", 5);

function greet2($name, $time=1){
	for (;$time>0; --$time){
		
		echo "hallo".$name."<br>";
	}
}

//greet2("jaka");
function add($x, $y){
	$z = $x + $y;
	return $z;
}
//echo add(3, 6);

function save(&$num){
	$num +=10;
	
}
/*$x = 10;
echo "sebelum memanggil fungsi ".$x."<br>";
save($x);
echo "sebelum memanggil fungsi ".$x;
*/

function tambah($x,$y){
	static $count = 0;
	echo "fungsi tambah telah dipangggil sebanyak ".++$count. " kali";
	return ($x + $y);
	}
/*echo "<br>hasilnya adalah".tambah(9,5)."<br>";
echo "<br>hasilnya adalah".tambah(9,7);
*/
?>