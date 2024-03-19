<?php
session_start();

// unset($_SESSION["my_session1"]); 하나만 지울려면 이거쓰면됨 -> unset
// 세션 파기
session_destroy(); // 다 지울때 쓰는경우