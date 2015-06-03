<?php
	function voucherValidate()
	{
		$check = str_split($voucher);

		$c1 = ($check[0]);
		$c2 = ($check[1]);
		$c3 = ($check[2]);
		$c4 = ($check[3]);
		$c5 = ($check[4]);

		$v1 = ($check[6]);
		$v2 = ($check[7]);
		$v3 = ($check[8]);
		$v4 = ($check[9]);
		$v5 = ($check[10]);

		$a1 = ($check[12]);
		$a2 = ($check[13]);		

		$check1 = (($c1 * $c2 +$c3) * $c4 + $c5)%26;
		$check2 = (($v1 * $v2 +$v3) * $v4 + $v5)%26;

		print_r($check);
		print_r($check1);
		print_r($check2);

		$checksum = array
		("A", "B", "C", "D", "E", "F", "G", 
		"H", "I", "J", "K", "L", "M", "N", "O", 
		"P", "Q", "R", "S","T", "U", "V", "W", 
		"X", "Y", "Z");

		if ($checksum[$check1] == $a1) 
		{
		    if ($checksum[$check2] == $a2) 
		    {
		        $price * 0.8;
		    }
		}
	}
?>