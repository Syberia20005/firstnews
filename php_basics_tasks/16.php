<?php
	if(isset($_POST['a'])) { $a = $_POST['a']; } else { $a = ''; }
	if(isset($_POST['b'])) { $b = $_POST['b']; } else { $b = ''; }
	
	$max;
	
	if($a > $b){
		$max = $a;
	}else{
		$max =$b;
	}
	
?>
<form action='' method="post">
	
	<input type='text' name='a' value='<?php echo $a;?>'/>

	<input type='text' name='b' value='<?php echo $b;?>'/>

	<input type="submit" name='max' value='max'/>
	
	<?php if(isset($max)) echo $max; ?>
	
</form>
