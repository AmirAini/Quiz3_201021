Q1:


<!-- //! Trying select and POST --> 

<form action="q1.php" method="post">
<br/>Place Star Numbers: <input type="text" name="number"><br>
<select name="stars">                      
  <option value="0">--Select Stars--</option>
  <option value="half">Half</option>
  <option value="full">Full</option>
</select>
<input type="submit">
</form>





<?php


//! Question 1 

echo 'you chose '.$_POST['stars'].' with '.$_POST['number'].'max stars'; 
echo "<br>";
if ($_POST['stars'] == "half"){
    echo "<br>";
    
    for ($rows=1;$rows<=$_POST['number'];$rows++){
        for ($columns=1;$columns<=$rows;$columns++){
        echo '*';
    }
    echo "<br>";
}

} else if ($_POST['stars'] == "full"){
    echo "<br>";
    for ($rows=1;$rows<= $_POST['number'];$rows++){

        //stars less or equal to row
        for ($columns=1;$columns<=$rows;$columns++){
            echo '*';
        }
        echo "<br>";
    }
    
    //start 5 -> 1
    for ($rows=$_POST['number'];$rows>=1;$rows--){
        
        //still same 
        for ($columns=1;$columns<=$rows;$columns++){
            echo "*";
        }
        echo "<br>";
    }
}

echo "<br>";
echo "<br>";
?>


