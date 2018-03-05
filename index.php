<?php
// call security file first
require_once('src/security.php');

// script containing javasctipt or other tags
$string =' this is some javascritp code block <script type="text/javascritp"> Code.... </script>';

// call Procedural fucntion
echo ProceduralXssSecuirty($string);

// add a line break
echo "<br />";

// create new object instance of OopSecurity class
$security = new OopSecurity();

// call the method and pass the string
echo $security -> XssSecuirty($string);
?>
