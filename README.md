# XSS-Cross-site-scripting-security-in-php
XSS (Cross site scripting) security in php with both Procedural and Object Oriented Style

# What is XSS(Cross Site Scripting) Attack

XSS(Cross Site Scripting) Attack happen if any user try to input some "javascript" or "html" code into your database for render his page on your website or hack your users or hack user cookie etc.

# Table of Contents

- how to use code example.

1. index.php

- Main Security File

2. src/security.php

# Installation:

clone or download source files into your project.

# Usage:

require and use "src/security.php" as below example:

```php
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
```

# Credits:

Script Creator : <a href="https://siddharthgupta.online/" target="_blank">Siddharth Gupta</a>

Reference : https://php.earth/docs/security/intro#cross-site-scripting-xss

# License:

GNU General Public License V. 3.0 or later
