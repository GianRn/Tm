

 <?php
 
 
 
 
 			echo "Tugas Kalian PHP<br>";
 			echo "Xi RPL2 <br>";
 			
 			
 
 	function sisiM  (){
 		
 	echo "Panjang sisi miring :) <br>";
 	
 		$alas = 6;
 		$tinggi = 8;
 		
 		echo "Alasnya adalah : $alas <br>";
 		echo "tingginya adalah : $tinggi <br>";
 		
 		$Ps = sqrt(($tinggi**2) + ($alas**2));
 		
 		echo "Panjang sisi miring nya adalah : $Ps <br><br>";
 	
 		
 	}
 	
 	echo sisiM();
 	
 	
 	function lPP(){
 		
 	echo "Luas persegi panjang <br> ";
 		$panjang = 20; 
 		$lebar = 22;
 		
 		echo "Panjangnya : $panjang <br>";
 		echo "Lebarnya : $lebar <br>";
 		
 		$luas = $lebar * $panjang;
 		
 		echo "Jadi luanya adalah : $luas <br><br>"
 		
 		
 	}
 	
 	echo lPP();
 	
 	function blk(){
 		
 	echo "volume balok <br> ";
 		$panjang = 17; 
 		$lebar = 24;
 		$tinggi = 2;
 		
 		echo "Panjangnya : $panjang <br>";
 		echo "Lebarnya` : $tinggi <br>";
 		echo "Tingginya : $lebar <br>";
 		
 		$luas = $lebar * $tinggi * $panjang;
 		
 		echo "volumenya adalah : $luas <br><br>"
 		
 		
 	}
 	
 	echo blk();
 	
 	
 
 
 
 ?>
