<?php
ob_start();
?>

<h1>KÕIK UUDISED</h1>

<?php
ViewNews::AllNews($arr);
$content = ob_get_clean();
include_once 'view/layout.php';

?>