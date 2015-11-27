<?php
require_once '_db.php';
    
$result = $db->query('SELECT * FROM events');

class Event {}
$events = array();
$eve=array();
foreach($result as $row) {
  $e = new Event();
  $e->id = $row['id'];
  $e->text = $row['name'];
  $e->start = $row['start'];
  $e->end = $row['end'];
  $events[] = $e;
}

header('Content-Type: application/json');
//$ec={"id":"6","text":"Event","start":"2013-05-02T00:00:00","end":"2013-05-04T00:00:00"};
//$even={'id'=1,'text'='repairing A','start'=2013-05-02T00:00:00,'end'=2013-05-04T00:00:00};

echo json_encode($events);

?>
