<?php

#------------------- ARRAY BASICS -------------------#
echo '<h4>Array Basics</h4>';
// Creating an Array
$products = array('Phone','Laptop','Air Conditioner');
echo 'Simple Array : ';
print_r($products);

// Indexed Array - Arrays having numbered index
$fruits[0] = 'Apple';
$fruits[1] = 'Banana';
$fruits[2] = 'Cherry';
echo '<br> Indexed Array : ';
print_r($fruits);

// Associative array - Arrays with string index
$person['name']='Jhon';
$person['age']=25;
$person['city']='NYC';
echo '<br> Associative Array : ';
print_r($person);

// Multidimensional Arrays
$table = [];
$table[0][0] = 'Name';
$table[0][1] = 'Age';
$table[0][2] = 'City';

$table[1][0] = 'Jhon';
$table[1][1] = '25';
$table[1][2] = 'NYC';

$table[2][0] = 'Alex';
$table[2][1] = '30';
$table[2][2] = 'LV';

echo '<p>Table Using Multi-dimensional array</p>';
echo '<table border=1><tbody>';
for($row=0; $row<3; $row++){
    echo '<tr>';
    for($col=0; $col<2; $col++){
        echo '<td>'.$table[$row][$col].'</td>';
    }
    echo '</tr>';
}
echo '</tbody></table>';

#------------------------------ ARRAY METHODS --------------------------#
// Sorting Arrays
$number_array = [5,2,7,24,79,24,787,33,32,65,89,59];
$string_array = ['Beta','Gamma','Alpha','Clion','Cat-ion'];
sort($number_array);

echo '<p>Sorted Array</p>';
print_r($number_array);

rsort($string_array);
echo '<p>Reverse Sorted Array</p>';
print_r($string_array);

// Sorting Indexed arrays
$person_work = ['jhon'=>'developer','mike'=>'testing','albert'=>'Accounts'];
asort($person_work);
echo '<p>Sorted Based on Value</p>';
print_r($person_work);

$person_work = ['jhon'=>'developer','bob'=>'testing','catherine'=>'Accounts'];
ksort($person_work);
echo '<p>Sorted Based on Key</p>';
print_r($person_work);
?>