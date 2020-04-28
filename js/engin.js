function prepare() {

    var r = confirm("คุณแน่ใจว่าต้องการ upload ข้อมูลไป Sever4 !!!");

    if (r == true) {
        $('#show_list').html("<img src='image/loading.gif'>");
        $.post("data.php", {},
            function(data) {
                sendjson(data);
            }
        );
    }
}

function sendjson(data) {

    $.post("http://203.157.172.4/cockpit63/webservice_sync/master.php", { url_json: data },
        function(data) {
            $('#show_list').html(data);
        });

}