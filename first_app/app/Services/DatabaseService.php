<?php 
namespace App\Services;

class DatabaseService
{
    // 性別
    public static function checkGender($database){
        // 性別
        if($database->gender == 0){
            $gender = '男性';
        }
        if($database->gender == 1){
            $gender = '女性';
        }

        return $gender;
    }

    // 年齢層
    public static function checkAge($database){

        if($database->age === 1 ){$age = '~19歳';}
        if($database->age === 2 ){$age = '20歳~29歳';}
        if($database->age === 3 ){$age = '30歳~39歳';}
        if($database->age === 4 ){$age = '40歳~49歳';}
        if($database->age === 5 ){$age = '50歳~59歳';}
        if($database->age === 6 ){$age = '60歳~';}

        return $age;
    }
}
?>