<?php

function rect($x1, $y1, $x2, $y2) {
	echo "      (rectangle (start $x1 $y1) (end $x2 $y2)\n";
	echo "        (stroke (width 0) (type default) (color 0 0 0 0))\n";
	echo "        (fill (type none))\n";
	echo "      )\n";
}

for ($i = 0; $i < 7; $i++) {
	rect(-5.08, 1.27 + $i * 2.54 + 0.63, -1.27, 1.27 + $i * 2.54 - 0.63);
	rect(-5.08, -1.27 - $i * 2.54 + 0.63, -1.27, -1.27 - $i * 2.54 - 0.63);
	rect(1.27, 1.27 + $i * 2.54 + 0.63, 5.08, 1.27 + $i * 2.54 - 0.63);
	rect(1.27, -1.27 - $i * 2.54 + 0.63, 5.08, -1.27 - $i * 2.54 - 0.63);
}
