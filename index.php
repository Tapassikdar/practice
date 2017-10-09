<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>first php class</title>
</head>
<body>
   
   
   
    <?php 
    //variable declear
    echo "<h1>variable declear</h1><hr />";
    
    $name="tapas sikdar";
    $roll=737866;
    echo"My name is  ".$name." & my roll is  ".$roll;
    
    ?>
    
    
    <h1><?php echo"My name is  ".$name." & my roll is  ".$roll; ?></h1><hr>
    
    
    <h1>if else</h1><hr>
    
    <?php $city="rajshahi";?>
    <?php if($city=="rajshahi"):?>
    <h1>It is the capital of Bangladesh</h1>
    <?php else: ?>
    <h1>It is not the capital of Bangladesh</h1>
    <?php endif ;?>
    
  <?php 
    
//    if else
       
//    $city="dhaka";
//    if($city="dhaka"){
//    echo "It is the capital of Bangladesh";
//    
//    }
//    else{
//    echo "It is not the capital of bangladesh";
//    }
    
    ?>
    <hr>
    
    <h1>array</h1><hr>
    
    <?php
    $cities= array("dhaka","rajshahi","100","jessore");
    var_dump ($cities);
    echo "<hr>";
    print_r($cities);
    
    
    ?>
        <hr>
    
    <h1>associative array</h1><hr>
    
    <?php
    $profile= array("name"=>"tapas","roll"=>100,);
    var_dump ($profile);
    echo "<hr><pre>";
    print_r($profile);
    
    
    ?>
    
    
</body>
</html>