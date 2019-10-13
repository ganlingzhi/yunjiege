<?php
 $name ="Tom";
 if(empty($_POST['name']))
 {
     echo "没有填写名字";

 }
 else if ($_POST['name']=="Tom")
 echo "Tom";
 else  echo  "??";