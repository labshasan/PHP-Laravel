<?php

echo "<br/>";
echo "array_key():"; echo "<br/>";
echo "===========================================";
echo "<br/>";

/* array_key(): The array_keys() function returns an array containing the keys.

Syntax
    array_keys(array,value,strict)

    value এবং strict parameter দুটি optional.
    যদি value specify করে দেয়া হয় তাহলে শুধুমাত্র ঐ value এর key return করবে।
    strict parameter টি value এর সাথে ব্যবহ্রিত হয়। strict value দুটি True or False.
    True -  value এর type অনুযায়ী key return করে। অর্থাৎ যদি কোন array দুটি value থাকে
            10 and "10", যা দুটি আলাদা type এর value (integer ও String), এক্ষেত্রে যে
            value দিয়ে key search করে হবে শুধুমাত্র ঐ type এর ভালুগুলোর key return করবে। অর্থাৎ এক্ষেত্রে শুধুমাত্র একই type এর
            data এর key return করবে।
    False - এটি default value. এটি value এর type অনুযায়ী key return করে না।
*/

// Example 1: only array, return all key.

$array3 = ["Volvo"=>"CD01", "BMW"=>"x23"];

print_r (array_keys($array3));



echo "<br/><br/><br/><br/>";

// Example 2: specific value. return the specific key of that value

$array4 = ["Volvo"=>"CD01", "BMW"=>"x23"];

print_r (array_keys($array4, "x23"));



echo "<br/><br/><br/><br/>";

// Example 3: Using the strict parameter, false:

$array5 = [10, 20, 30, "10"];

print_r (array_keys($array5, "10", false));



echo "<br/><br/><br/><br/>";

// Example 4: Using the strict parameter, true:

$array6 = [10, 20, 30, "10"];

print_r (array_keys($array6, 10, true));

echo "<br/>";

print_r (array_keys($array6, "10", true));


echo "<br/><br/>";
echo "array_key-exists():"; echo "<br/>";
echo "===========================================";
echo "<br/>";

/* array_key_exists: এই ফাংশনটি array এর নিদৃষ্ট key exists করে কি না তা check করে এবং
   boolean value return করে । যদি কাংখিত key খুঁজে পায় তাহলে true নাহলে false return করে।

Syntax:
   array_key_exists(key, array);
*/



// Example 1:

$array1 = ["Volvo"=>"XC90", "BMW"=>"X5"];

if (array_key_exists("BMW", $array1)){
    echo "The Key 'BMW' is exists!";
}
else{
    echo "Key dose not exists!";
}



echo "<br/><br/><br/><br/>";

// Example 2 : Check if the integer key exists in the array

$array2 = ["Volvo", "BMW"];

if(array_key_exists("1", $array2)){
    echo "Array key '1' exists!";
}
else{
    echo "Array key dose not exists";
}



echo "<br/><br/><br/>";
echo "array_merge():"; echo "<br/>";
echo "===========================================";
echo "<br/>";

/* array_merge(): এই ফানংশটি দুটি বা ততোধিক array কে merge করে একটি array তে পরিনত করে। যদি দুই বা ততোধিক array
   তে same string key থাকে, তাহলে last array এর key এর value আগের সকল array এর key এর value কে overwrite করবে।

Syntax
   array_merge(array1,array2,array3...)
 */

// Example 1:

$array7 = ["red", "blue", "white", "green"];
$array8 = ["pink", "black", "purple", "yellow"];

print_r (array_merge($array7, $array8));

echo "<br/><br/>";

// Example: Numeric key

$numeric1 = [1,2,3,4,5,6];
$numeric2 = [1,2,3,7,9,11];

print_r (array_merge($numeric1, $numeric2));

echo "<br/><br/><br/><br/>";
// Example 2: Merge two associative arrays into one array(different key):

$array9 = ["a"=>"red", "b"=>"white", "c"=>"green", "d"=>"black"];
$array10 = ["e"=>"red", "f"=>"white", "g"=>"green", "h"=>"black"];

print_r (array_merge($array9, $array10));

echo "<br/><br/>";
// Example 3: Merge two associative arrays into one array(same key):

$array11 = ["a"=>"red", "b"=>"white", "c"=>"green", "d"=>"black"];
$array12 = ["a"=>"purple", "c"=>"pink", "g"=>"green", "h"=>"black"];

print_r (array_merge($array11, $array12));



echo "<br/><br/><br/>";
echo "array_merge_recursive():"; echo "<br/>";
echo "===========================================";
echo "<br/>";

/* array_merge() function থেকে এই funtion এর difference হলো, এই funtion টি দুটি array merge করার ক্ষেত্রে
   যদি same key পায় তাহলে overwrite নয়া করে ঐ key এর যতগুলো value পাওয়া যাবে সবগুলোকে নিয়ে একটি array গঠন
   করে।

Syntax
   array_merge_recursive ($array1, $array2, $array3......);
 */

//Example 1: Numeric key

$numeric3 = [1,2,3,4,5,6];
$numeric4 = [1,3,7,8,2,9];

print_r (array_merge_recursive($numeric3, $numeric4));

echo "<br/><br/>";

// Example 2: Merge two associative arrays into one array(different key):

$array13 = ["a"=>"red", "b"=>"white", "c"=>"green", "d"=>"black"];
$array14 = ["e"=>"red", "f"=>"white", "g"=>"green", "h"=>"black"];

print_r (array_merge_recursive($array13, $array14));

echo "<br/><br/>";

// Example 3: Merge two associative arrays into one array(same key):

$array15 = ["a"=>"red", "b"=>"white", "c"=>"green", "d"=>"black"];
$array16 = ["a"=>"purple", "c"=>"pink", "g"=>"green", "h"=>"black"];

print_r (array_merge_recursive($array15, $array16));



echo "<br/><br/><br/>";
echo "array_count_values():"; echo "<br/>";
echo "===========================================";
echo "<br/>";

/*  array_count_values(): এই function এর মাধ্যমে কোন array এর value count করা হয়।

Syntax
    array_count_values($array)
*/

// Example 1: Numaric value

$array17 = [1,2,3,4,5,3,6,2];

print_r (array_count_values($array17));

echo "<br/><br/>";

// Example 2: Count all the values of an array:

$array18 = ["A", "dog", "cat", "a", "dog", "water", "a", "cat", "dog"];

print_r (array_count_values($array18));


echo "<br/><br/><br/>";
echo "count():"; echo "<br/>";
echo "===========================================";
echo "<br/>";

/*  count() function এর মাধ্যমে array এর কয়টি element আছে তা count করা হয়।

Syntax
    count(array,mode);

    এখানে mode parameter টি optional. mode এর দুটি value রয়েছেঃ 0 and 1.
    0 - এইটি default value. এই mode এ multidimensional array এর সকল element count করা হয় নয়া।
    1 - এই mode এ array কে recursively count করা হয়। অর্থাৎ array টি multidimensional হলে এর সকল element count করা হয়।
*/

// Example 1: simple array

$array19 = [1,2,3,4,5,6];

echo count($array19);

echo "<br/><br/>";

$array20 = ["a"=>"red", "b"=>"white", "c"=>"blue", "d"=>"red"];

echo count($array20);

echo "<br/><br/>";

// Example 2: Multidimensional array

$array21 = ["volvo"=>["a", "b", "c"], "bmw"=>[1,2,3], "a", 5, "red"];

echo count($array21);

echo "<br/><br/>";

// Example 3: Multidimensional array recursive count using mode

$array21 = ["volvo"=>["a", "b", "c"], "bmw"=>[1,2,3], "a", 5, "red"];

echo count($array21,1);


echo "<br/><br/><br/>";
echo "array_splice():"; echo "<br/>";
echo "===========================================";
echo "<br/>";


/*  array_splice() function এর মাধ্যমে কোন array এর নির্দিষ্ট element মুছে
    নতুন element দ্বারা replace করা হয়। এই function একটি array return করে।


Syntax
    array_splice(array,start,length,array)

    start parameter দ্বারা নির্দেশ করা হয়, যে array টিকে replace করা হবে তার কোন
    পজিশন থেকে ২য় array টিকে insert করা হবে। যদি এর মান নেগেটিভ হয় তাহলে function
    টি শেষ দিক থেকে শুরু করবে, যেমন start parameter যদি -২ হয় তাহলে শেষ থেকে ২য় পজিশন
    থেকে replace করবে।

    length parameter দ্বারা নির্দেষ করা হয় array এর কয়টি element replace করা হবে।
    যদি length zero(0) হয়, তাহলে function টি কোন element কে remove করবে না, বরং start parameter
    থেকে দ্বিতীয় array টিকে insert করবে। length যদি 4 হয়, এক্ষেত্রে array এর 4টি element remove করে replace
    করা হবে।
    */

// Example 1:

$array22 = [1,2,3,4,5,6,7,8,9];
$array23 = [1,2,3,4,2,3,9,10,11];

array_splice($array22, 2,2, $array23);
print_r ($array22);

echo "<br/><br/>";

// Example 2:

$a1=array("0"=>"red","1"=>"green", "2"=>"blue", "3"=>"white", "4"=>"whe", "5"=>"te", "6"=>"ite", "7"=>"e");
$a2=array("0"=>"purple","1"=>"orange");

array_splice($a1,2,4,$a2);

print_r($a1);


?>