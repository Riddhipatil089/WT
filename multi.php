<html>
    <head>
    <title> Multidimensional array</title>
</head>
<body>
    <?php
$user=array(

    array
    (
        "name"=> "Siddhi Patil",
        "age"=>20,
        "email"=>"patilsiddhi28@gmail.com",
        "city"=>"India"
    ),

    array
    (
        "name"=> "Rutuja Pawar",
        "age"=>22,
        "email"=>"pawarrutuja19@gmail.com",
        "city"=>"New York"
    ),

    array
    (
        "name"=> "Akanksha Chaudhari",
        "age"=>25,
        "email"=>"chaudhariakanksha12@gmail.com",
        "city"=>"Los Angeles"
    ),

    array
    (
        "name"=> "Vaishanavi Desale",
        "age"=>35,
        "email"=>"desalevaishanvai01gmail.com",
        "city"=>"Australia"
    ),

    array
    (
        "name"=> "Rashmi Patil",
        "age"=>18,
        "email"=>"patilrashmi11@gmail.com",
        "city"=>"Japan"
    )

);
//Print user information 
echo"User Information <br>";
echo "------------<br>";

foreach($user
 as $value)
{
    echo "Name:" .$value["name"]."<br>";
    echo "Age:" .$value["age"]."<br>";
    echo"Email:" .$value["email"]."<br>";
    echo"City:".$value["city"]."<br>";
    echo"--------------<br>";
}
?>
</body>
</html>