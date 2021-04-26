<!doctype html>
<html>
<head>
    <link href="style.css"
    rel="stylesheet"
    type="text/css"/>
</head>
<body>
<?php
   $item1cost=500.00;
   $item2cost=24.99;
   $item3cost=76.21;
   $choice1=0.00;
   $choice2=5.00;
   $choice3=50.00;
   $username=$_POST['user'];
   $password=$_POST['pass'];
   echo "Thank you user ";
   echo $username;
   echo ", password = ";
   echo $password;
   echo "<br><br><br>";
    //print_r($_POST);
    $item1count=$_POST['quantity1'];
    $item2count=$_POST['quantity2'];
    $item3count=$_POST['quantity3'];
    $shipchoice=$_POST['ship'];

    if ($shipchoice==1){
        $cost= ($item1count *$item1cost)+($item2count*$item2cost)+($item3count*$item3cost)+ $choice1;
    }
    else if ($shipchoice==2){
        $cost= ($item1count *$item1cost)+($item2count*$item2cost)+($item3count*$item3cost)+ $choice2;
    }
    else{
        $cost= ($item1count *$item1cost)+($item2count*$item2cost)+($item3count*$item3cost)+ $choice3;
    }
    
    echo "<table border=\"1\">";
	echo '<tr>';

	echo '<td>' ." ". '</td>';
    echo '<th>' ."Quantity ". '</th>';
    echo '<th>' ."Cost per Item ". '</th>';
    echo '<th>' ."Subtotal ". '</th>';
		
    echo '</tr>';	
	
    echo '<tr>';

    echo '<th>' . "Box 'o Squirrels".'</th>';
    echo '<td>' . $item1count.'</td>';
    echo '<td>' . $item1cost.'</td>';
    echo '<td>' . $item1cost*$item1count.'</td>';

    echo '</tr>';

    echo '<tr>';

    echo '<th>' . "Rabbit's Right Foot".'</th>';
    echo '<td>' . $item2count.'</td>';
    echo '<td>' . $item2cost.'</td>';
    echo '<td>' . $item2cost*$item2count.'</td>';

    echo '</tr>';

    echo '<tr>';

    echo '<th>' . "Rabbit's Left Foot".'</th>';
    echo '<td>' . $item3count.'</td>';
    echo '<td>' . $item3cost.'</td>';
    echo '<td>' . $item3cost*$item3count.'</td>';

    echo '</tr>';

    echo '<tr>';

    echo '<th>' . "Shipping" . '</th>';
    echo '<td>' . "1 ". '</td>';
    if ($shipchoice==1){
        echo '<td>'.$choice1. '</td>';
        echo '<td>'.$choice1. '</td>';
    }
    else if ($shipchoice==2){
        echo '<td>'.$choice2. '</td>';
        echo '<td>'.$choice2. '</td>';
    }
    else{
        echo '<td>'.$choice3. '</td>';
        echo '<td>'.$choice3. '</td>';
    } 
    echo '</tr>';

    echo '<tr>';

    echo '<th colspan="3">' . "Total Cost" . '</th>';
    echo '<td>' .$cost . '</td>';

    echo"</table>";


?>
</body>
</html>