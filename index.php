<?php
include ("simple_html_dom.php");
$html = file_get_html('https://www.imdb.com/title/tt15234108/ratings?ref_=tturv_ql_4');

$ratingValue = $html->find('div[class="bigcell"]',0)->plaintext;
echo $ratingValue;

//$list_array = $list->find('a');

?>