<?php 
global $sc_style;

$sc_style['TODO_COMPLETED_TITLE']['pre'] = "<td width='50%'>";
$sc_style['TODO_COMPLETED_TITLE']['post'] = "</td>";

$sc_style['TODO_COMPLETED_STATUS']['pre'] = "<td width='25%'>";
$sc_style['TODO_COMPLETED_STATUS']['post'] = "</td>";

$sc_style['TODO_COMPLETED_OPTIONS']['pre'] = "<td width='25%'>";
$sc_style['TODO_COMPLETED_OPTIONS']['post'] = "</td>";

$FETCH_COMPLETED_ROWS_TEMPLATE = "
   <tr>
      {TODO_COMPLETED_TITLE}
      {TODO_COMPLETED_STATUS}
      {TODO_COMPLETED_OPTIONS}
   </tr>
";
?>