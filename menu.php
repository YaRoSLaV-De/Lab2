<?php
$menu_ran = array(
  "<a href=\"index.php\">Главна  </a>", "<a href=\"university.php\">Університет  </a>",
  "<a href=\"subjects.php\">Навчальний план  </a>", "<a href=\"aboutme.php\">Про мене  </a>"
);
shuffle($menu_ran);
foreach ($menu_ran as $menu){
    echo "$menu ";
}
?>
