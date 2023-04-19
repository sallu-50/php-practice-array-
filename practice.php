<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//echo '<pre>' . var_export($array, true) . '</pre>';

// echo "<br>";

// $array = ['banana','apple','banana','apple','apple','banana','apple','apple','apple','apple','banana'];
// $big_string = implode(" ", $array);
// $pattern = "/banana|apple/i";
// preg_match_all($pattern, $big_string, $matches);
// $counts = array_count_values($matches[0]);


// echo "apples = " . $counts['apple'] . " </br>";
// echo "bananas = " . $counts['banana'] . "";

$array2 = [ 
    ['name' => 'banana'],
    ['name' => 'apple'],
    ['name' => 'banana'],
    ['name' => 'apple'],
    ['name' => 'apple'],
    ['name' => 'banana'],
    ['name' => 'apple'],
    ['name' => 'apple'],
    ['name' => 'apple'],
    ['name' => 'apple'],
    ['name' => 'banana']
];
 foreach ($array2 as  $value) {
    echo $value['name'] . "<br>"; 
}
$apple_count = 0;
$banana_count = 0;

foreach ($array2 as $value) {
    if ($value['name'] == 'apple') {
        $apple_count++;
    } elseif ($value['name'] == 'banana') {
        $banana_count++;
    }
}


echo "--------------";
echo "<br>#Total Apple = $apple_count";
echo "<br>#Total banana = $banana_count";
echo "<hr>";
echo"</br>";


//loop exercise 1
for ($i=01; $i < 100; $i++) { 
    echo $i;
}
echo "<hr>";
$a=1;
while ($a <= 10) {
    echo $a;
    $a++;
}
echo "<hr>";
//loop exercise 2
$text="w3resource";
$search_char="r";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo $count."\n";
//loop exercise 3

//loop exercise 4

$email = "example.com";
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    
}


?>


<script>
  setTimeout(function(){
    location.reload();
  }, 5000);
</script>

</body>
</html>