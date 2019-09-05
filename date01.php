<?php

//searang tanggal 13 april 2006 09:53:49

echo "<br>". date("d/m/Y H:i:s"); //13/04/2006 09:53:49
echo "<br>". date("F j,Y,g:i a"); //April 13, 2006,9:53
echo "<br>". date("d.m.y"); //13.04.06
echo "<br>". date(Ymd); //20060413
// 13-04-06, 4330 4349 4 Thuam06 102
echo "<br>". date('j-m-y, i-t i-s-w D-a-y-z ');
// it is the 13th day.
echo "<br>". date('\i\t \i\s \t\h\e jS \d\a\y.');
// Thu Apr 13 9:43:49 KRAST 2006
echo "<br>". date("D M j G:i:s T Y");
echo "<br>". date("H:i:s");
// 17:16:17

?>