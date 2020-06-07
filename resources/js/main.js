$(document).ready(function () {
    getProvince();
    getCity(0);

    $("#province").change(function () {
        var id = this.value
        getCity(id);
    });
});

function getProvince() {
    var m = $("meta[name=api-base-url]");
    var link = m.attr("content");
    $("#province").empty();

    $("#province").append('<option value="Pilih">Loading Data...</option>');
    
    axios.get(link+'/api/province')
    .then(function (result) {
        $("#province").empty();
        $.each(result.data, function(key, value) {
            $("#province").append($('<option>', {
                value: value.id,
                text: value.name
            }));
        });
    })
    .catch(function (error) {
        alert(error)
    });
}

function getCity(val) {
    var m = $("meta[name=api-base-url]");
    var link = m.attr("content");
    $("#city").empty();

    $("#city").append('<option value="Pilih">Loading Data...</option>');
    
    if(val == 0) {
        axios.get(link+'/api/city/1')
        .then(function (result) {
            $("#city").empty();
            $.each(result.data, function(key, value) {
                $("#city").append($('<option>', {
                    value: value.id,
                    text: value.name
                }));
            });
        })
        .catch(function (error) {
            alert(error)
        });
    } else {
        axios.get(link+'/api/city/'+val)
        .then(function (result) {
            $("#city").empty();
            $.each(result.data, function(key, value) {
                $("#city").append($('<option>', {
                    value: value.id,
                    text: value.name
                }));
            });
        })
        .catch(function (error) {
            alert(error)
        });
    }
}