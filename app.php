<?php

$gender = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)
$guess = "1470"; // Tahmin edilen değer
//hesaplamalar icin gerekli bir degisken tanimladik
$bmr = 0;
//$guess'i int'e cevirdik
$guess_int = (int) $guess;
//Hesaplamada kullanacagimiz formulde bazi sabitler var. Bu sabitleri burada tanimladik.
define("maleConst", 88.362);
define("femaleConst", 447.593);
define("maleConstWeight", 13.397);
define("femaleConstWeight", 9.247);
define("maleConstHeight", 4.799);
define("femaleConstHeight", 3.098);
define("maleConstAge", 5.677);
define("femaleConstAge", 4.330);


//Eger kullanicimiz erkekse erkekler icin olan formulu kullanacagiz.
if ($gender=="male") {
    $bmr = maleConst + (maleConstWeight * $weight) + (maleConstHeight * $height) - (maleConstAge * $age);
    echo "BMR = $bmr\n"; //Formulun sonucunu yazdirdiktan sonra tahmin degerimiz ile sonucu karsilastiriyoruz.
    if ($guess_int < $bmr) {
        echo "Tahmin değerinden büyük";
    }
    elseif ($guess_int == $bmr) {
        echo "Tahmin değerine eşit";
    }
    else {
        echo "Tahmin değerinden küçük";
    }}
//Eger kullanicimiz kadinsa buradaki formulu kullaniyoruz.
elseif ($gender == "female") {
    $bmr = femaleConst + (femaleConstWeight * $weight) + (femaleConstHeight * $height) - (femaleConstAge * $age);
    echo "BMR = $bmr\n";//Bu kisimlar bir onceki if ile ayni.
    if ($guess_int < $bmr) {
        echo "Tahmin değerinden büyük";
    }
    elseif ($guess_int == $bmr) {
        echo "Tahmin değerine eşit";
    }
    else {
        echo "Tahmin değerinden küçük";
    }}
//Eger kullanici "male" ya da "female" stringlerinden baska bir input verdiyse asagidaki hata mesajini gosteriyoruz.
else {
    echo "Cinsiyet seçimi için maalesef sadece male ve female girdisini kabul ediyoruz.";
}



/**
 * Bu ödevde bazal metabolizma hesaplaması yapacağız.
 * Yukarıdaki değişkenleri ve aşağıdaki formülü kullanarak
 * kişinin günlük BMR ihtiyacını hesaplayıp
 * bunu ekrana yazan ve tahmin değeri ile karşılaştıran
 * PHP kodunu oluşturmamız gerekiyor.
 * 
 * Erkekler için; 88.362 + (13.397 x kilo) + (4.799 x boy) – (5.677 x yaş)
 * Kadınlar için; 447.593 + (9.247 x kilo) + (3.098 x boy) – (4.330 x yaş)
 * 
 * Tahmin değeri ile karşılaştırmanızın sonucunda
 * "Tahmin değerinden düşük", "Tahmin değerinden büyük" veya
 * "Tahmin değerine eşit" şeklinde çıktı vermeniz gerekiyor.
 * 
 * Örneğin;
 * $gender = "female";
 * $weight = 60;
 * $height = 170;
 * $age = 30;
 * 
 * Ekrana
 * 
 * BMR: 1399.173
 * Tahmin değerinden düşük
 * 
 * yazması gerekiyor.
 */
