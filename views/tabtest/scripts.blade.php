<script>

   if(location.hash === ""){
        tab1();
    }

    function tab1(){
        var form = new FormData();
        request("{{API('tab1_test')}}", form, function(response) {
            message = JSON.parse(response)["message"];
            $('#tab1').html(message);
        }, function(error) {
            $('#tab1').html("Hata oluştu");
        });
    }

    function tab2(){
        var form = new FormData();
        request("{{API('tab2_test')}}", form, function(response) {
            message = JSON.parse(response)["message"];
            $('#tab2').html(message);
        }, function(error) {
            $('#tab2').html("Hata oluştu");
        });
    }
</script>