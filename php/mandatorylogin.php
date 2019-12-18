<?php
function  createConfirmationmbox(){
    echo '<script type="text/javascript"> ';
    echo ' function openulr(newurl) {';
    echo '  if (confirm("Are you sure you want to open new URL")) {';
    echo '    document.location = newurl;';
    echo '  }';
    echo '}';
    echo '</script>';
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JavaScript Alert Box by PHP</title>
<?php
createConfirmationmbox();
?>
</html>

</head>
<body>
<strong><a href="javascript:openulr('newurl.html');">Open new URL</a></strong>
</body>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JavaScript Alert Box by PHP</title>
<script type="text/javascript">  function openulr(newurl) {  if (confirm("Are you sure you want to open new URL")) {    document.location = newurl;  }}</script></head>
<body>
<strong><a href="javascript:openulr('newurl.html');">Open new URL</a></strong>
</body>
</html>
