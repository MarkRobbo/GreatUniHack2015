function connectTypeahead (element, source) {
    $.get(source, function(data) {
        data = JSON.parse(data);

        element.typeahead({
            source: data
        });
    });
}
