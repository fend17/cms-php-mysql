<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
</head>
<body>
  <!-- HTML LAND -->
  <?php 
    // $ means variable
    define('PI', 3.14); // CONST
    $first_name = "Jesper"; //var
    $last_name = "Orb";
    $last_name = 10;
    $last_name = 10 + 10;

    echo "<h1> $first_name $last_name </h1>";

    $bool = true;

    // if($bool){
    //   echo "This is true";
    // } else {
    //   echo "this wont print";
    // }

    //Associative array === object
    $person = array(
      "name"  => "Jesper",
      "age"   => 26
    );
    echo $person["name"];
    echo "<h1> $person[name] </h1>";
    echo $person["age"];

    //array === array
    $values = [10, 20, 30];
    echo $values[0];

    for($i = 0; $i < count($values); $i++ ){
      echo $values[$i];
    } 

    // ASS LOOP
    // "0" => "10"
    // "1" => "20"
    // "2" => "30"
    foreach($values as $banana => $banana_value){
      echo $banana;
      echo "<br>";
      echo $banana_value;
    }
  ?>

</body>
</html>




