<html>
<head>
<?php
include('includes/vars.php');
include("includes/functions.php");
$request = $_SERVER['REQUEST_URI'];
// Custom redirect for album covers that don't exist.
if (preg_match('/albumart\/small\/firefoxiscrap\/(.*?)---.*/', $request, $matches)) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    header("Location: ".get_base_url()."/albumart/small/".$matches[1].".jpg");
} elseif (preg_match('/albumart\/asdownloaded\/firefoxiscrap\/(.*?)---.*/', $request, $matches)) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    header("Location: ".get_base_url()."/albumart/asdownloaded/".$matches[1].".jpg");
} else {
	// Custom 404 page for anything else
    header("HTTP/1.1 404 Not Found");
?>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="themes/Darkness.css" />
<title>Badgers!</title>
</head>
<body>
<br><br><br>
<h2 align="center">404 Error!</h2>
<br><br>
<h2 align="center">It's all gone horribly wrong</h2>
<br><br>
<?php
print '<h3 align="center">The document &quot;'.$request."&quot; doesn't exist. Are you sure you know what you're doing?</h3>";
?>
</body>
<?php
}
?>
</html>