function connectTypeahead (element, source) {
    $.get(source, function(data) {
        data = JSON.parse(data);

        console.log(data);

        element.typeahead({
            source: data
        });
    });
}
