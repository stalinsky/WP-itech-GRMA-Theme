<h3 class="text-center bg-info py-3">Top music charts</h3>
<div class="row justify-content-center bg-warning py-3">

<?php
// 
$json = file_get_contents("http://mysound.ge/api.php?t=t&q=radionor");
$arr = json_decode($json, true);
$html = '';
foreach ($arr as $key => $val) {
  if (isset($val['title']) && isset($val['id'])) {
    // $date = date('', $val['id']); // Можно удалить весь foreach
    $html .= "<p>{$val['title']}<br>$date</p>";
  } else {
    foreach ($val as $key2 => $val2) {
      if (isset($val2['title']) && isset($val2['id'])) {
        // $date = date('', $val2['title']); // Можно удалить
        $html .= "<div class='col-md-4 m-2 p-2 bg-inverse text-center'><a target='_blank' class='text-white fw-bold' href='http://mysound.ge/track/{$val2['id']}'>{$val2['title']}</a></div>";
      }
    }
  }
}
// echo ( '</ul>');
echo $html;
?>
</div>
