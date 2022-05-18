<script>
    function get_weather(){
        let formData = new FormData();
        let value = document.getElementById('value').value;
        formData.append("value", value);
        showSwal("{{__('Yükleniyor...')}}", 'info');
            request("{{ API('get_weather') }}", formData, function(response){
                $('#get_weather').text(response);
                Swal.close();
            }, function(response){
                response = JSON.parse(response);
                showSwal(response.message, 'error');
            });
    }
</script>