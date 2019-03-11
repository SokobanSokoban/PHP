<?php
// ??????? ???????? 
function diff($a,$b){
    return ($a-$b);
}

function multiply($a,$b){
    return ($a*$b);
}

function sum($a,$b){
    return ($a+$b);
}

function div($a,$b){
    if ($b==0){
        return " деление на ноль";
    }
    else {
        return ($a/$b);
    }
}

function mathOperation($arg1, $arg2, $operation){
    switch ($operation) {
        case "+":
            return sum($arg1, $arg2);        
        case "-":
            return diff($arg1, $arg2);       
        case "/":
            return div($arg1, $arg2);         
        case "*":
            return multiply($arg1, $arg2);        
    }  
}
  
$view = "";
$arg1 = 0;
$arg2 = 0;
$operation = "";
$result = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // из поста берем данные
    $arg1 = (int)$_POST["arg1"];
    $arg2 = (int)$_POST["arg2"];
    $operation = $_POST["operation"];

    if ($operation == "") {
        $result = "не заполнена операция";
        exit;
    }else{
        $result = mathOperation($arg1 , $arg2, $operation);
    }
}

// не понял как экранировать value="<?php echo $arg1
?>
   <form action="" method="post">
        agr1 = <input name="arg1" type="text" value="<?php echo $arg1?>" >

        <select name="operation" onchange="submit()">
            <option value="">Select operation</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <input name="operation" value="+" type="submit" />
        <input name="operation" value="-" type="submit" />
        <input name="operation" value="*" type="submit" />
        <input name="operation" value="/" type="submit" />

        agr2 = <input name="arg2" type="text" value="<?php echo $arg2?>" >

        <h3>result = <?php echo $result; ?></h3>

        <br>


    </form>

