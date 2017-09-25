<?

$arTransParams = array(
   "max_len" => 100,
   "change_case" => 'L', // 'L' - toLower, 'U' - toUpper, false - do not change
   "replace_space" => '-',
   "replace_other" => '-',
   "delete_repeat_replace" => true
);

$transName = CUtil::translit($ar_res["NAME"], "ru", $arTransParams);
?>
