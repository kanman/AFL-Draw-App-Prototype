<?php include('inc/data.php');

//Conditionals for form submission


if(isset($_POST['aflteam']) && (ucfirst($_POST['aflteam']) == "Essendon"))  {
foreach($Essendon as $key => $value) {
echo "<p>" . $key . " " . "<strong>" . $value . "</strong>" . "</p>" . "\n";   
}
  
echo "<hr>";
echo "<p style='text-transform: uppercase'>comparison</p>"; 
echo "<hr>";   
echo "<p>Consecutive 6 Day Breaks:</p>"; 

//Comparison
         
$output = array_column($aflteams, 'Consecutive 6 day Breaks:', 'Team:');
asort($output);
foreach($output as $key => $value) {
echo $key . " " . $value . "\n";
}
  

echo "<p>Road Trips:</p>"; 

    
$output = array_column($aflteams, 'Road Trips:', 'Team:');
asort($output);
foreach($output as $key => $value) {
echo $key . " " . $value . "\n";
    }

    echo "<br/>"; 
    echo "<p>Home Versus Interstate(HvIS):</p>";
  
 
$output = array_column($aflteams, 'Home Versus Interstate(HvIS):', 'Team:');
asort($output);
foreach($output as $key => $value) {
echo $key . " " . $value . "\n";    
    }


} elseif(isset($_POST['aflteam']) && (ucfirst($_POST['aflteam']) == "Carlton"))  {
foreach($Carlton as $key => $value) {
echo "<p>" . $key . " " . "<strong>" . $value . "</strong>" . "</p>" . "\n";   
}    

echo "<hr>";
echo "<p>In comparison:</p>"; 
echo "<hr>";   
echo "<p>Consecutive 6 Day Breaks:</p>"; 

         
$output = array_column($aflteams, 'Consecutive 6 day Breaks:', 'Team:');
asort($output);
foreach($output as $key => $value) {
echo $key . " " . $value . "\n";
}
  
echo "<p>Road Trips:</p>"; 

    
$output = array_column($aflteams, 'Road Trips:', 'Team:');
asort($output);
foreach($output as $key => $value) {
echo $key . " " . $value . "\n";
    }

    echo "<br/>"; 
    echo "<p>Home Versus Interstate(HvIS):</p>";
  
 
$output = array_column($aflteams, 'Home Versus Interstate(HvIS):', 'Team:');
asort($output);
foreach($output as $key => $value) {
echo $key . " " . $value . "\n";    
    }

//Geelong

} elseif(isset($_POST['aflteam']) && (ucfirst($_POST['aflteam']) == "Geelong"))  {
    foreach($Geelong as $key => $value) {
    echo "<p>" . $key . " " . "<strong>" . $value . "</strong>" . "</p>" . "\n";   
    }    
    
    echo "<hr>";
    echo "<p>In comparison:</p>"; 
    echo "<hr>";   
    echo "<p>Consecutive 6 Day Breaks:</p>"; 
    
             
    $output = array_column($aflteams, 'Consecutive 6 day Breaks:', 'Team:');
    asort($output);
    foreach($output as $key => $value) {
    echo $key . " " . $value . "\n";
    }
      
    echo "<p>Road Trips:</p>"; 
    
        
    $output = array_column($aflteams, 'Road Trips:', 'Team:');
    asort($output);
    foreach($output as $key => $value) {
    echo $key . " " . $value . "\n";
        }
    
        echo "<br/>"; 
        echo "<p>Home Versus Interstate(HvIS):</p>";
      
     
    $output = array_column($aflteams, 'Home Versus Interstate(HvIS):', 'Team:');
    asort($output);
    foreach($output as $key => $value) {
    echo $key . " " . $value . "\n";    
        }
    

} else {

echo "You need to enter an AFL Team";    
    
};

