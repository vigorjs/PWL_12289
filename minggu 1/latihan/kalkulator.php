<?php //credit : https://www.kursuswebsite.org/membuat-kalkulator-sederhana-menggunakan-php/ ?>
<!Doctype html> 
<html>
<head>
	<title>Kalkulator</title>
</head>
<?php // Virgo fajar Pamungkas - A11.2019.12289
if (isset($_POST["submit"])){
	$satu = $_POST["satu"];
	$dua = $_POST["dua"];
	$operator = $_POST["operator"];

	if($operator == "+"){
		$hasil = $satu+$dua;
	}elseif($operator == "-"){
		$hasil = $satu-$dua;
	}elseif($operator == "X"){
		$hasil = $satu*$dua;
	}elseif($operator == "/"){
		$hasil = $satu/$dua;
	}else{
		echo "Pilih Operator";
	}	
}
?>
<body>
	<form method="post" action="">
		<table>
			<tr>
				<td>Kalkulator</td>
			</tr>
			<tr>
				<td colspan="2">bil1<input type="text" name="satu" value=""></td>
			</tr>
			<tr>
				<td colspan="2">bil2<input type="text" name="dua" value=""></td>
            </tr>
            <tr>
            <?php if(isset($_POST["submit"])){ ?>
		    <td colspan="2">hasil<input type="text" name="hasil" value="<?php echo $hasil ?>"></td>
	        <?php } ?>
            <tr>	
            </tr>
			</tr>
			<tr>
				<td colspan="2">
					<select name="operator">
						<option>operator</option>
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="X">X</option>
						<option value="/">/</option>
                    </select>
                    <input type="reset" name="reset" value="C">
				<input type="submit" name="submit" value="=">
			</td>
			</tr>
			
			
	</form>
</body>
</html>