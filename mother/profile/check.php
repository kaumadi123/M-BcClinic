<?php
 
if(isset($_POST['Submit'])) 
{
  $alec = $_POST['lec_allocation'];
   
  if(!isset($alec)) 
  {
    echo("<p>You didn't select any lecture!</p>\n");
  } 
  else
  {
    $nCountries = count($alec);
     
    echo("<p>You selected $nlec lecture: ");
    for($i=0; $i < $nlec; $i++)
    {
      echo($alec[$i] . " ");
    }
    echo("</p>");
  }
}
 
?>