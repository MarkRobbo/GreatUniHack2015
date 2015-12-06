function connectTypeahead (element, source) {
    $.get(source, function(data) {
        var strings = [];

        data = JSON.parse(data);
        [].forEach.call(data, function (e, i) {
            string[i] = e.charityDisplayName;
        });

        console.log(data);
        console.log(strings);

        element.typeahead({
            source: data
        });
    });
}
