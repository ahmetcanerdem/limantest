<?php 
namespace App\Controllers;

class TabTestController
{
    
    function tab1(){
        return respond("Merhaba Dünya !!",200);
    }

    function tab2(){
        return respond("Merhaba Uzaylı !!",200);
    }
}
?>
