<?php

while ($row = mysql_fetch_array($result)) {
   // echo "ID:".$row{'id'}."NAME:".$row{'full_name'}."<br>";
	   echo "ID:".$row{'trainer_id'}."<br>";

}
