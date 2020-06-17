$(document).ready(function() {
    if ($('#config').val() == "ba") {
        getProvince();
        getCity(0);
        provinceChange();
    }

    if ($('#config').val() == "comm") {
        $("#community_created").datepicker({
            dateFormat: 'yy-mm-dd',
        });
        getCities();
    }
});

function provinceChange() {
    $("#province").change(function() {
        var id = this.value
        getCity(id);
    });
}

function getProvince() {
    var m = $("meta[name=api-base-url]");
    var link = m.attr("content");
    $("#province").empty();

    $("#province").append('<option value="Pilih">Loading Data...</option>');

    axios.get(link + '/api/province')
        .then(function(result) {
            $("#province").empty();
            $.each(result.data, function(key, value) {
                $("#province").append($('<option>', {
                    value: value.id,
                    text: value.name
                }));
            });
        })
        .catch(function(error) {
            console.log(error);
        });
}

function getCity(val) {
    var m = $("meta[name=api-base-url]");
    var link = m.attr("content");
    $("#city").empty();

    $("#city").append('<option value="Pilih">Loading Data...</option>');

    if (val == 0) {
        axios.get(link + '/api/city/1')
            .then(function(result) {
                $("#city").empty();
                $.each(result.data, function(key, value) {
                    $("#city").append($('<option>', {
                        value: value.id,
                        text: value.name
                    }));
                });
            })
            .catch(function(error) {
                console.log(error);
            });
    } else {
        axios.get(link + '/api/city/' + val)
            .then(function(result) {
                $("#city").empty();
                $.each(result.data, function(key, value) {
                    $("#city").append($('<option>', {
                        value: value.id,
                        text: value.name
                    }));
                });
            })
            .catch(function(error) {
                console.log(error);
            });
    }
}

function getCities() {
    var m = $("meta[name=api-base-url]");
    var link = m.attr("content");
    $("#community_city").empty();

    $("#community_city").append('<option value="Pilih">Loading Data...</option>');

    axios.get(link + '/api/cities')
        .then(function(result) {
            $("#community_city").empty();
            $.each(result.data, function(key, value) {
                $("#community_city").append($('<option>', {
                    value: value.id,
                    text: value.name
                }));
            });
        })
        .catch(function(error) {
            console.log(error);
        });
}