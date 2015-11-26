<?php

$db_exists = file_exists("daypilot.sqlite");

$db = new PDO('sqlite:daypilot.sqlite');



    $insert = "INSERT INTO events (name, start, end, resource) VALUES (:name, :start, :end, :resource)";
    $stmt = $db->prepare($insert);
 
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':start', $start);
    $stmt->bindParam(':end', $end);
    $stmt->bindParam(':resource', $resource);
 
    foreach ($messages as $m) {
      $name = $m['name'];
      $start = $m['start'];
      $end = $m['end'];
      $resource = $m['resource'];
      $stmt->execute();
    }
    
}

?>
