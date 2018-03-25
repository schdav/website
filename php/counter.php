<?php
  $counterfile = fopen('counter.txt', 'a+');
  $countertext = fgets($counterfile);
  echo $countertext;
  fclose($counterfile);

  $counterfile = fopen('counter.txt', 'w');
  fwrite($counterfile, strval(intval($countertext) + 1));
  fclose($counterfile);
