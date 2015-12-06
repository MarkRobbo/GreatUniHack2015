function connectTypeahead (element, source) {
    $.get(source, function(data) {
        var strings = [];

        data = JSON.parse(data);
        data.charitySearchResults.forEach(data, function (e, i) {
            string[i] = e.charityDisplayName;
        });

        console.log(data);
        console.log(strings);

        element.typeahead({
            source: data
        });
    });
}
