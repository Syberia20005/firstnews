<?php
	
	$s = 130;
	$t = 1;
	$v = $s/$t;
	
	$s_m = 130 * 1000;
	$t_s = 1 * 3600;
	$v_m = $s_m/$t_s;
	
	echo "Авто двигалось со скоростью ".$v." км/час<br/>";
	echo "Авто двигалось со скоростью ".$v_m." м/сек";

?>