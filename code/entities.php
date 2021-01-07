<?php
$str = "A 'quote' is <b>bold</b>";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);
//echo stripcslashes($str);
// Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
//echo htmlentities($str, ENT_QUOTES);
//print_r( get_html_translation_table(HTML_ENTITIES));
?>