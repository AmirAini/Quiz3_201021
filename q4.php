
Q4:

<form action="q4.php" method="post">
What's your name? <input type="text" name="name"><br>
What is your hobby? <input type="text" name="ic"><br>
What is your favourite club? <input type="text" name="ph_Number"><br>

<input type="submit">
</form>


<?php

echo "<br><br>";

echo 'Name is '.$_POST['name'];
echo ' IC is '.$_POST['ic'];
echo ' ph number is '.$_POST['ph_Number'];

echo "<br><br>";

function getName($name){
    return $name;
}

function getIC($ic){
    return $ic;
}

function getMobile($ph){
    return $ph;
}

function display($info1,$info2,$info3){
    getName($info1);
    getIC($info2);
    getMobile($info3);
    echo "The name is $info1 and my hobby is $info2 and my fav. club is $info3";

}

// display ($_POST['name'],$_POST['ic'],$_POST['ph_Number']);

$name = getName($_POST['name']);
$ic = getIC($_POST['ic']);
$mobile= ($_POST['ph_Number']);

display($name,$ic,$mobile);

?>










?>