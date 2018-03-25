#!/usr/bin/php

<?php

$txt_file = file_get_contents('guestbook_entries.bak');
$rows = explode("\n", $txt_file);
$id = 0;

foreach($rows as $row => $data)
{
  $row_data = explode('|', $data);

  $name_and_location = explode(',', $row_data[6]);
  $name     = $name_and_location[0];
  $location = $name_and_location[1];
  $message_body = $row_data[10];

  echo $name . "\t" . $location . "\t\t\t" . $message_body . "\tOn the previous website\t0\t0\t\n";

  $id++;
}

?>
