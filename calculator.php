<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    
<form action="calculator.php" method="get">
        <input type ="number" name="num1" placeholder="Enter the first number">
        <br><br>
        <input type ="number" name="num2" placeholder="Enter the second number">
        <br><br>
    
        <button type ="submit" name="operation" value="addition">+</button>
        <button type ="submit" name="operation" value="subtraction">-</button>
        <button type ="submit" name="operation" value="multiplication">*</button>
        <button type ="submit" name="operation" value="division">/</button>
        </form>
        <br>
    <?php
    if(isset($_GET["operation"])){
        $num1=$_GET["num1"];
        $num2=$_GET["num2"];
        $operation=$_GET["operation"];

        switch($operation){
            case "addition":
                $result=$num1+$num2;
                break;
            case "subtraction":
                $result=$num1-$num2;
                break;

            case "multiplication":
                $result=$num1*$num2;
                break;
            case "division":
                if($num2 !=0){
                    $result=$num1/$num2;
                } else{
                    $result="Cannot divide by zero";
                }
                break;
        }
        
        echo "Answer: " . $result;
    }
    ?>
</body>
</html>