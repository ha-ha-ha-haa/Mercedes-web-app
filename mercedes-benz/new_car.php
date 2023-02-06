<?php
// including the database connection file
include_once(".\config\config.php");

if(isset($_POST['create'])){    

    $dataEntered = 0;
    $car_id = mysqli_real_escape_string($mysqli, $_POST['car_id']);
    $car_name = mysqli_real_escape_string($mysqli, $_POST['car_name']);
    $car_model = mysqli_real_escape_string($mysqli, $_POST['car_model']);
    $manufacturer_id = mysqli_real_escape_string($mysqli, $_POST['manufacturer_id']);
    $car_year = mysqli_real_escape_string($mysqli, $_POST['car_year']);
    $color = mysqli_real_escape_string($mysqli, $_POST['color']);
    $car_price = mysqli_real_escape_string($mysqli, $_POST['car_price']);
    $tire_id = mysqli_real_escape_string($mysqli, $_POST['tire_id']);
    $engine_id = mysqli_real_escape_string($mysqli, $_POST['engine_id']);
    $pic = mysqli_real_escape_string($mysqli, $_POST['pic']);
    $shortdescription = mysqli_real_escape_string($mysqli, $_POST['shortdescription']);
    
    // checking empty fields
    if(empty($car_id) || empty($car_name) || empty($car_model) || empty($manufacturer_id) || empty($car_year) || empty($color) || empty($car_price) || empty($tire_id) || empty($engine_id) || empty($pic) || empty($shortdescription)) {
        $_GET['id'] = $car_id;
        if(empty($car_name)) {
            echo "<font color='red'>Car Name field is empty.</font><br/>";
        }
        if(empty($car_model)) {
            echo "<font color='red'>Car model field is empty.</font><br/>";
        }
        if(empty($manufacturer_id)) {
            echo "<font color='red'>Manufacture id is empty.</font><br/>";
        }
        if(empty($car_year)) {
            echo "<font color='red'>Car year field is empty.</font><br/>";
        }
        if(empty($color)) {
            echo "<font color='red'>Color field is empty.</font><br/>";
        }
        
        if(empty($car_price)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        }
        if(empty($engine_id)) {
            echo "<font color='red'>engine id is empty.</font><br/>";
        }
        if(empty($pic)) {
            echo "<font color='red'>Pic url is empty.</font><br/>";
        }
        if (empty($shortdescription)) {
            echo "<font color='red'>Description is empty.</font><br/>";
        }
        $dataEntered = 0;
    } else {    
        $dataEntered = 1;
    }
    if($dataEntered == 1){
        //updating the table
        $result = mysqli_query($mysqli, "INSERT INTO car_info(car_id, car_name, car_model, manufacturer_id, car_year, color, car_price, tire_id, engine_id, pic, shortdescription) VALUES ($car_id,'$car_name','$car_model','$manufacturer_id','$car_year','$color','$car_price','$tire_id','$engine_id','$pic','$shortdescription')");
        
        $mysqli->close();
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>

<?php

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT max(car_id) as max_id from car_info;");
$car_id = mysqli_fetch_array($result)["max_id"] + 1;
$mysqli->close();
?>

<html>
<head>  
    <title>Create new</title>
    <style>
		body{
			font-family: sans-serif;
            background-color: #262a2f;
            color:#a3a3a3
		}
		button{
		color:#a3a3a3;
		background-color: #3e444c;
		border: none;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		float: left;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
	}
input[type=text], select, textarea {
    font-family: sans-serif;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: #b4b2b2;
}

input[type=submit] {
  width: 100%;
  background-color: #3e444c;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=file] {
  width: 100%;
  background-color: #f3f3f3;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover{
	background-color: #32383e;
}
input[type=submit]:hover {
  background-color: #32383e;
}
td{
	display: block;
}
	</style>
</head>

<body>
    <?php
        echo "<a href=index.php><button>BACK</button></a>"
    ?><br/><br/>
    <h1 style='color:gray;padding:20px 0px;font-family: sans-serif;text-align:center;width:100%;'> Create New </h1>
    
    <form name="form1" method="post" action="new_car.php"  enctype="multipart/form-data">
    <table width="450px" border="0" style="margin:0 auto;">
			<tr> 
                <td>Car ID</td>
                <td><input readonly type="text" name="car_id" style="background-color: #717171;" value="<?php echo $car_id;?>"></td>
            </tr>
            <tr> 
                <td>Car Name</td>
                <td><input type="text" value="" name="car_name"></td>
            </tr>
            <tr> 
                <td>Car Model</td>
                <td><input type="text" value="" name="car_model"></td>
            </tr>
            <tr> 
                <td>Car year</td>
                <td><input type="text" name="car_year"></td>
            </tr>
            <tr> 
                <td>Car price</td>
                <td><input type="text" name="car_price"></td>
            </tr>
            <tr> 
                <td>Tire</td>
				<td>				
					<select name="tire_id" id="tire_id">
                    <option value="1">Michelin</option>
						<option value="2">Yokohama</option>
						<option value="3">Pirelli</option>
						<option value="4">Michelin</option>
						<option value="5">Dunlop</option>
						<option value="6">Bridgestone</option>
						<option value="7">Firestone</option>
                        <option value="8">Goodyear</option>
						<option value="9">Continental</option>
                        <option value="10">Hankook</option>
					</select>
				</td>
            </tr>
            <tr> 
                <td>Manufacturer</td>
				<td><!-- default selection theek krna hai -->				
					<select name="manufacturer_id" id="manufacturer_id">
                    <option value="1">Mercedes</option>
						<option value="2">BMW</option>
						<option value="3">Audi</option>
						<option value="4">Porsche</option>
						<option value="5">Wolkswagen</option>
						<option value="6">Lamborghini</option>
						<option value="7">Ferrari</option>
                        <option value="8">Maserati</option>
						<option value="9">Alfa Remeo</option>
                        <option value="10">Fiat</option>
					</select>
				</td>
            </tr>
            <tr> 
                <td>Engine Id</td>
				<td>				
					<select name="engine_id" id="engine_id">
                    <option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
                        <option value="8">8</option>
						<option value="9">9</option>
                        <option value="10">10</option>
					</select>
				</td>
            </tr>
            <tr> 
                <td>Color</td>
                <td><input type="text" name="color"></td>
            </tr>
            <tr>
                <td>pic</td>
                <td><input type="text" name="pic" id="pic"></td>
            </tr>
            <tr>
                <td>Short description</td>
                <td><textarea type="text" name="shortdescription" id="shortdescription" cols="60" rows="5"></textarea></td>
            </tr>
            <tr>
                <td><input type="hidden" name="car_id" value=<?php echo $car_id?>></td>
                <td><input type="submit" name="create" value="Create"></td>
            </tr>
        </table>
    </form>
</body>
</html>
