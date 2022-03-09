<?php  
//static properties

class Weather {
    public static $tempConditions = ['cold', 'mild', 'warm'];
    
    //static methods and properties can be called from the class directly without initializing an instance
    //visibility modifiers are applied also
    //a public function that converts celsius to farenheit
    public static function celsiusToFarenheit($celsius) {
        return $celsius * 9 / 5 + 32;
    }

    public static function determineTempCondition($f) {
        if ($f < 40) {
            //use "self" command if there is no instance in the class and "this" command if there are instances
            return self::$tempConditions[0];
        } elseif (($f < 70) and ($f > 40)) {
            return self::$tempConditions[1];
        } else {
            return self::$tempConditions[2];
        }
    }

    
}
// we called it directly here
print_r(Weather::$tempConditions);
echo "<br/>";
//calling a method
$farenheit = Weather::celsiusToFarenheit(5);
echo $farenheit . "<br/>";
echo Weather::determineTempCondition($farenheit);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Static Properties</h1>
</body>
</html>