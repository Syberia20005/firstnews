<?php
	if(isset($_POST['a'])) { $a = $_POST['a']; } else { $a = ''; }
	if(isset($_POST['b'])) { $b = $_POST['b']; } else { $b = ''; }
	if(isset($_POST['operator'])) { $operator = $_POST['operator']; } else { $operator = ''; }
	
	if ($operator == '+'){
		$res = $a + $b;
	} elseif($operator == '*'){
		$res = $a * $b;
	} elseif($operator == '-'){
		$res = $a - $b;
	} elseif($operator == '/'){
		if($b != 0){
			$res = $a / $b;	
		}else{
			echo 'На 0 делить нельзя';
		}
	} elseif($operator == '%'){
		$res = $a % $b;
	}
	
?>

<form action='' method="post">
	
	<input type='text' name='a' value='<?php echo $a;?>'/>

	<select name='operator' value='<?php echo $operator; ?>'>
		<option value='+'>+</option>
		<option value='-'>-</option>
		<option value='/'>/</option>
		<option value='*'>*</option>
		<option value='%'>%</option>
	</select>

	<input type='text' name='b' value='<?php echo $b;?>'/>

	<input type="submit" name='calc' value='='/>
	
	<?php if(isset($res)) echo $res; ?>
	
</form>