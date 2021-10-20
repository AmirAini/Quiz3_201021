Q2:

<form action="q2.php" method="post">
Name: <input type="text" name="name"><br>
IC: <input type="int" name="ic"><br>
Phone Number: <input type="int" name="ph_Number"><br>
<input type="submit">
</form>



<!-- //!Question 2 -->
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
    echo "The name is $info1 and the ic is $info2 and the no. is $info3";

}

// display ($_POST['name'],$_POST['ic'],$_POST['ph_Number']);

$name = getName($_POST['name']);
$ic = getIC($_POST['ic']);
$mobile= ($_POST['ph_Number']);

display($name,$ic,$mobile);

?>