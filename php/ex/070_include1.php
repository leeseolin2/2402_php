<?php
include("./070_include2.php"); // 원래는 다른파일에 있는 함수를 못쓰지만 include를 하면 쓸수있다 
include_once("./070_include2.php"); // 여러번써도 한번만 가져와진다 
include_once("./070_include2.php"); // 여러번써도 한번만 가져와진다 
// 다른파일이 include하고있는 그파일을 include하게되면 include하고있는 파일까지 다가져와짐
echo my_sum(1, 2); // include보다 위에 쓰면 안된다
