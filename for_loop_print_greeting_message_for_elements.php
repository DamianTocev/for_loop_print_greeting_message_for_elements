<?php
$elements = ['Ivan', 9, 'Drago', 'Petko', 3.14, 'Gosho', '9'];
$lines = [];

while (FALSE !== ($line = fgets(STDIN))) {
  $lines[] = trim($line);
}

$validIterations = 0;
$count = count($elements);

for ($i = 0; $i < $count; $i++) {
    $element = $elements[$i];
    if (is_string($element)) {
        $validIterations++;
        echo "<p>Hello {$element}, this is iteration {$validIterations}</p>";
    }
}
?>