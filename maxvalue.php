<?php 
// // find max value in array
// $array = array(80,90,30,50,100,140,200,250);
// $max = $array[0];
// $count = count($array);

// for($i=0; $i < $count; $i++ ){

//     if($array[$i] > $max){
//         $max = $array[$i];
//     }
// }

// echo "max value in array-". $max;

// array sort assending or decending order
// $array = array(10,30,5,40,4,3,56,23);
// $total = count($array);
// $temp = 0;

// for($i = 0; $i < $total; $i++){
//     for($j= $i + 1; $j < $total; $j++){
//     if($array[$i] < $array[$j]){
//         $temp = $array[$i];
//         $array[$i] = $array[$j];
//         $array[$j] = $temp;

//     }
// }
// }
// echo "<pre>";
// echo 'array assending order';
// print_r($array);
// echo "</pre>";



// $array = array(1, 6, 23, 10, 3, 2, 15,7);
// $total = count($array);
// for ($i=0; $i < $total; $i++) { 
//     for ($j=$i + 1; $j < $total; $j++) { 
//         if($array[$i] > $array[$j]) {
//             $temp = $array[$i];
//             $array[$i] = $array[$j];
//             $array[$j] = $temp;
//         }
//     }
// }
// echo '<pre>';
// echo "Ascending Sorted Array is: "; 
// print_r($array);



//array ascending and descending order
$array = array(1,4,5,3,2,6,9,22,77,88,44,33,90,21);
$count = count($array);
for($i = 0; $i < $count; $i++){
    for($j = $i+1; $j < $count; $j++){
        if($array[$i] > $array[$j]){
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;            
        }
    }
}
echo "<pre>";
print_r($array);

//remove duplicate value
// $number = array(1, 3, 4, 2, 1, 6, 4, 9, 7, 2, 9);
// $newArr = array();
// foreach($number as $val){
//    $newArr[$val] = $val;
// }

// echo '<pre>'; print_r($number);
// echo "<br/>";
// echo '<pre>'; print_r($newArr);

// //find first and second highest value
// $array = array(10, 5, 8, 12, 7);
//       rsort($array);
//       list($highest, $secondHighest) = $array;
//       echo "Highest: $highest, Second Highest: $secondHighest";


//Write shortcode to replace hi with hello everywhere in the paragraph.

// function replace_hi_with_hello_shortcode($atts, $content = null) {
//     if ($content) {
        // Replace "hi" with "hello"

    echo $content = " Lorem Ipsum is simply hi dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining hi essentially unchanged. It was  hi popularised in the 1960s with the release of 
                    Letraset sheets containing hi Lorem Ipsum passages, hi and more recently
                    with desktop publishing software like Aldus PageMaker including hi versions of Lorem Ipsum.";
        $content = str_replace('hi', 'hello', $content);
//     }
//     return $content;
// }
// add_shortcode('replace_hi', 'replace_hi_with_hello_shortcode');




// ['replace_hi']
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
print_r($content);



?>