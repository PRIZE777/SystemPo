<?php
$str='<?php 5 or 5 == 10 ?>';
echo htmlspecialchars($str)."<br>";
$tokens = token_get_all($str);
foreach ($tokens as $token) {
    if (is_array($token)) {
        echo "Line {$token[2]}:"." ('{$token[1]}')".token_name($token[0]) , PHP_EOL."<br>";
    }
}
?>