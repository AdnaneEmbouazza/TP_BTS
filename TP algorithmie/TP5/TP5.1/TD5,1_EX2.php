<?php
$tableau=array();
for($i=0;$i<6;$i++) {
    switch ($i) {
    case 0:$tableau[$i]="a";
        break;
    case 1:$tableau[$i]="e";
        break;
    case 2:$tableau[$i]="i";
        break;
    case 3:$tableau[$i]="o";
        break;
    case 4:$tableau[$i]="u";
        break;
    case 5:$tableau[$i]="y";
        break;
    };
    print $tableau[$i];
}
?>