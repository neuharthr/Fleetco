<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php"); 
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>PDF Building</title>
</head>
<body>
<div class="printpdf"></div>
<?php echo GetBaseScriptsForPage(false); ?>
<script type='text/javascript' src="<?php echo GetRootPathForResources("include/pdfnewwindow.js"); ?>"></script>
</body>
</html>