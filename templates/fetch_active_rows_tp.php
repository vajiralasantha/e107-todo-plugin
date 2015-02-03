<?php 
global $sc_style;

$sc_style['TODO_ACTIVE_TITLE']['pre'] = "<td width='50%'>";
$sc_style['TODO_ACTIVE_TITLE']['post'] = "</td>";

$sc_style['TODO_ACTIVE_STATUS']['pre'] = "<td width='25%'>";
$sc_style['TODO_ACTIVE_STATUS']['post'] = "</td>";

$sc_style['TODO_ACTIVE_OPTIONS']['pre'] = "<td width='25%'>";
$sc_style['TODO_ACTIVE_OPTIONS']['post'] = "</td>";

$FETCH_ACTIVE_ROWS_TEMPLATE = "
   <tr>
      {TODO_ACTIVE_TITLE}
      {TODO_ACTIVE_STATUS}
      {TODO_ACTIVE_OPTIONS}
   </tr>
";
?>