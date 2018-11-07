<?php
echo '<div style="background-color: #f8d6d9;padding: 2px; margin-top:10px; width:40%; float: left">';
echo '<h2>Classes</h2>';
print('<pre>');
print_r(get_declared_classes());
print('</pre>');
echo '</div>';

echo '<div style="background-color: #d1ecf1;padding: 2px; margin-top:10px; width:40%; float:left;">';
echo '<h2>Interfaces</h2>';
print('<pre>');
print_r(get_declared_interfaces());
print('</pre>');
echo '</div>';