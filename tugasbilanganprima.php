<?php
// tugas2
// buat array[1,5,6,7,11,17,18,20];
// cetak isi dalam array yang termasuk bilangan prima,
// cetak dari bilangan prima terbesar.
 
// $angka = [1,5,6,7,11,17,18,20];

// for($a=0; $a<=count ($angka); $a++) {
//     $prima = true;
//     for($i=2; $i<$a; $i++)
//     {
//         if( ($angka[$a] ) % $i == 0 )
//         $prima = false;
//     }
//     if($prima)
//     echo "$angka[$a]" ;
// }




// $parabot = array("Meja Komputer", "Tempat Tidur", "Korsi", "Kompor", "Ember", "Sapu");
// $hitung = count($parabot);
// for($x = 1; $x < $hitung; $x++) {
//     echo $x.'. '.$parabot[$x];
//     echo "<br>";
// }




$angka = [1,5,6,7,11,17,18,20];
$nilai = count($angka);


for( $i=1; $i<= $nilai; $i++ ) {
    $a = 0;

    for( $j = 1; $j <= $i; $j++) {
        if( $i % $j == 0) {
            $a++;
        }
    }

    if($a == 2) {
        echo $i. '<br>';
    }
    // echo $i. '<br>';

}






// for( $i=1; $i<=20; $i++ ) {
//     $a = 0;
//     for($j=1; $j<=$i; $j++) {
//         if($i % $j == 0) {
//             $a++;
//         }
//     }
//     if($a == 2) {
//         echo $i. '<br>';
//     }

// }







// for($a=1; $a<=sizeof($angka); $a++) {                        // perulangan 1 sampai 20
//     $k=0;
//     for( $b=1; $b<=$a; $b++){                    // perulangan bilangan pembagi
//         if($a % $b == 0){                        // modulus
//             $k++;
//         }
//     }
//         if($k == 2)
//         {                           // salah satu syarat 2 bukan merupakan bilangan prima
//         echo $angka[$a].',';
//         }
// }
 
?>