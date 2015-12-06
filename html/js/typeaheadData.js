function connectTypeahead (element, source) {
    $.get(source, function(data) {
        var string = [];

        data = JSON.parse(data);
        [].forEach.call(data, function (e, i) {
            string[i] = e.charityDisplayName;
        });

        console.log(data);

        element.typeahead({
            source: data
        });
    });
}
