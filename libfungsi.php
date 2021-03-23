<?php
    function kelulusan($average) {
        global $average;
        if($average > 55) {
            return 'LULUS';
        } else {
            return 'TIDAK LULUS';
    }
    }
    function grade($average){
        global $average;
        if ($average >= 0 && $average <= 35){
            return 'E';
            }elseif($average >= 36 && $average <= 55){
              return 'D';
            }elseif($average >= 56 && $average <= 69){
              return 'C';
            }elseif($average >= 70 && $average <= 84){
              return 'B';
            }elseif($average >= 85 && $average <=100){
              return 'A';
            }else{
              return 'Gagal';
            }
    }
    function predikat($average){
        global $average;
        if ($average >= 0 && $average <= 35){
            return 'Sangat Kurang';
            }elseif($average >= 36 && $average <= 55){
              return  'Kurang';
            }elseif($average >= 56 && $average <= 69){
              return 'Cukup';
            }elseif($average >= 70 && $average <= 84){
              return 'Memuaskan';
            }elseif($average >= 85 && $average <=100){
              return 'Sangat Memuaskan';
            }else{
              return  'Gagal';
            }
    }
?>
