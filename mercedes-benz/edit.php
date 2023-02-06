<?php
// including the database connection file
include_once(".\config\config.php");

if(isset($_POST['update'])){    

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
        $result = mysqli_query($mysqli, "UPDATE car_info SET car_model='$car_model', car_name='$car_name',manufacturer_id=$manufacturer_id, car_year='$car_year', 
        color='$color', car_price=$car_price, pic='$pic', tire_id = $tire_id, shortdescription = '$shortdescription' WHERE car_id=$car_id");
        
        $mysqli->close();
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>

<?php
//getting id from url
$car_id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM car_info WHERE car_id=$car_id");
$manufacturer = mysqli_query($mysqli, "SELECT * FROM manufacturer");
$tire = mysqli_query($mysqli, "SELECT * FROM tire");
$engine = mysqli_query($mysqli, "SELECT * FROM engine");

$res = mysqli_fetch_array($result);
$car_name = $res['car_name'];
$car_model = $res['car_model'];
$car_year = $res['car_year'];
$car_price = $res['car_price'];
$manufacturer_id = $res['manufacturer_id'];
$pic = $res['pic'];
$tire_id = $res['tire_id'];
$color = $res['color'];
$engine_id = $res['engine_id'];
$shortdescription = $res['shortdescription'];

$mysqli->close();
?>

<html>
<head>  
    <title>Edit CAR INFO</title>
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
        echo "<a href=car.php?id=$car_id><button>BACK</button></a>"
    ?><br/><br/>
    <h1 style='color:gray;padding:20px 0px;font-family: sans-serif;text-align:center;width:100%;'> EDIT CAR INFO </h1>
    
    <form name="form1" method="post" action="edit.php"  enctype="multipart/form-data">
    <table width="450px" border="0" style="margin:0 auto;">
			<tr> 
                <td>Car ID</td>
                <td><input readonly type="text" name="car_id" style="background-color: #717171;" value="<?php echo $car_id;?>"></td>
            </tr>
            <tr> 
                <td>Car Name</td>
                <td><input type="text" name="car_name" value="<?php echo $car_name;?>"></td>
            </tr>
            <tr> 
                <td>Car Model</td>
                <td><input type="text" name="car_model" value="<?php echo $car_model;?>"></td>
            </tr>
            <tr> 
                <td>Car year</td>
                <td><input type="text" name="car_year" value="<?php echo $car_year;?>"></td>
            </tr>
            <tr> 
                <td>Car price</td>
                <td><input type="text" name="car_price" value="<?php echo $car_price;?>"></td>
            </tr>
            <tr> 
                <td>Tire</td>
				<td>				
					<select name="tire_id" id="tire_id" value="<?php echo $tire_id;?>">
                        <?php
                            while ($tire_res = mysqli_fetch_array($tire)) {
                                if ($tire_id == $tire_res['tire_id']) {
                                    echo "<option value=$tire_res[tire_id] selected>$tire_res[tire_name]</option>";
                                } else {
                                    echo "<option value=$tire_res[tire_id]>$tire_res[tire_name]</option>";
                                }
                            }
                        ?>
					</select>
				</td>
            </tr>
            <tr> 
                <td>Manufacturer</td>
				<td><!-- default selection theek krna hai -->				
					<select name="manufacturer_id" id="manufacturer_id" value="<?php echo $manufacturer_id;?>">
                    <?php
                            while ($manufacturer_res = mysqli_fetch_array($manufacturer)) {
                                if ($manufacturer_id == $manufacturer_res['manufacturer_id']) {
                                    echo "<option value=$manufacturer_res[manufacturer_id] selected>$manufacturer_res[manufacturer_name]</option>";
                                } else {
                                    echo "<option value=$manufacturer_res[manufacturer_id]>$manufacturer_res[manufacturer_name]</option>";
                                }
                            }
                        ?>
					</select>
				</td>
            </tr>
            <tr> 
                <td>Engine Id</td>
				<td>				
					<select name="engine_id" id="engine_id" value="<?php echo $engine_id;?>">
                    <?php
                            while ($engine_res = mysqli_fetch_array($engine)) {
                                if ($engine_id == $engine_res['engine_id']) {
                                    echo "<option value=$engine_res[engine_id] selected>$engine_res[engine_id]</option>";
                                } else {
                                    echo "<option value=$engine_res[engine_id]>$engine_res[engine_id]</option>";
                                }
                            }
                        ?>
					</select>
				</td>
            </tr>
            <tr> 
                <td>Color</td>
                <td><input type="text" name="color" value="<?php echo $color;?>"></td>
            </tr>
            <tr>
                <td>pic</td>
                <td><input type="text" name="pic" id="pic" value="<?php echo $pic;?>"></td>
            </tr>
            <tr>
                <td>Short description</td>
                <td><textarea type="text" name="shortdescription" id="shortdescription" cols="60" rows="5"> <?php echo $shortdescription;?></textarea></td>
            </tr>
            <tr>
                <td><input type="hidden" name="car_id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
