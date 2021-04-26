<!doctype html>
<html>
<head>
</head>
<body>
<?php
    $correct=0;
    $q1ans="Emmit Smith";
    $q2ans="Mosquito bite caused disease";
    $q3ans="Emus";
    $q4ans="12";
    $q5ans="Absofruitly I did";
    $q1="Which running back has the most rushing yards all time in the NFL?";
    $q2="How did Alexander the Great die?";
    $q3="What bird did Australians go to war against?";
    $q4="144 / 12 =";
    $q5="Am I so bored that I ran out of better questions?";
    

    //print_r($_POST);
    $userq1=$_POST['group1'];
    
    if ($userq1==$q1ans){
        $correct++;
    }
    

  
        //echo "This is the value you are selected".$_POST['ans'];  
    $userq2=$_POST['group2'];     
    if ($userq2==$q2ans){
        $correct++;
    }
          
            
                //echo "This is the value you are selected".$_POST['ans'];  
                
    $userq3=$_POST['group3'];        
    if ($userq3==$q3ans){
        $correct++;
    }                 
                    //echo "This is the value you are selected".$_POST['ans'];  
    $userq4=$_POST['group4'];            
    if ($userq4==$q4ans){
        $correct++;
    }           
                   
        //echo "This is the value you are selected".$_POST['ans'];  
    $userq5=$_POST['group5']; 
    if ($userq5==$q5ans){
        $correct++;
    }

    
    echo "Your Score : ";
    echo $correct;
    echo " / 5 <br> Percentage: ";
    echo $correct*20;
    echo "% <br>";
    
    echo "1. ";                
    echo $q1;
    echo "<br> Your Answer: ";
    echo $userq1;
    echo "<br> Correct Answer: ";
    echo $q1ans;
    echo "<br><br>";
    echo "2. ";
    echo $q2;
    echo "<br> Your Answer: ";
    echo $userq2;
    echo "<br> Correct Answer: ";
    echo $q2ans;
    echo "<br><br>";
    echo "3. ";
    echo $q3;
    echo "<br> Your Answer: ";
    echo $userq3;
    echo "<br> Correct Answer: ";
    echo $q3ans;
    echo "<br><br>";
    echo "4. ";
    echo $q4;
    echo "<br> Your Answer: ";
    echo $userq4;
    echo "<br> Correct Answer: ";
    echo $q4ans;
    echo "<br><br>";
    echo "5. ";
    echo $q5;
    echo "<br> Your Answer: ";
    echo $userq5;
    echo "<br> Correct Answer: ";
    echo $q5ans;
    echo "<br><br>";
    
?>
</body>
</html>