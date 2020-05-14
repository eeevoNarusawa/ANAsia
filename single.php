<?php
  if (in_category('en')) {  //カテゴリ名だと反映されない？　IDだと反映確認済み
      include(TEMPLATEPATH.'/single-en.php');
  } elseif(in_category('jp')) {
      include(TEMPLATEPATH.'/single-jp.php');
  } else {
      include(TEMPLATEPATH.'/single-default.php');
  }
?>
