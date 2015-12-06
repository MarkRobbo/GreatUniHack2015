function connectTypeahead (element, source) {
    $.get(source, function(data) {
        var string = [];

        data = JSON.parse(data);
        data.forEach(function (e, i) {
            string[i] = e.charityDisplayName;
        });

        element.typeahead({
            source: data
        });
    });
}
