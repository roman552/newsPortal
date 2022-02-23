<?php
ob_start();
?>

<h1>UUDISED (kategoori)</h1>

<?php
ViewNews::NewsByCategory($arr);
$content = ob_get_clean();
include_once 'view/layout.php';

?>