function connectTypeahead (element, source) {
    $.get(source, function(data) {
        var strings = [];

        data = JSON.parse(data);
        data.charitySearchResults.forEach(function (e, i) {
            strings[i] = e.charityDisplayName;
        });

        console.log(data);
        console.log(strings);

        element.typeahead({
            source: ["Another", "Test"]
        });
    });
}
