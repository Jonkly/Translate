<?php
  // Index.php
  
  function Translit($Text) 
  {
    
    $Converted=transliterator_transliterate('Any-Latin; Latin-ASCII', $Text);
    return $Converted;
    
  };
  
  $String=file_get_contents("php://input");
  
  $Completed=Translit($String);
  
  echo $Completed;
  
  
  
?>
