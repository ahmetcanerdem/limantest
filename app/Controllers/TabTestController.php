<?php 
namespace App\Controllers;

class TabTestController
{

    function tab1(){
        return respond("Merhaba Dunyali!!",200);
    }

    function tab2(){
        return respond("Merhaba Uzayli!!",200);
    }
}
?>
