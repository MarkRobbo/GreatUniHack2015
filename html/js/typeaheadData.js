function connectTypeahead (element, source) {
    element.typeahead();

    element.keypress(function (e) {
        $.get(source + element.val(), function(data) {
            var strings = [];

            console.log(data);

            data = JSON.parse(data);

            if (data == null)
                return;

            data.charitySearchResults.forEach(function (e, i) {
                strings[i] = e.charityDisplayName;
            });

            console.log(strings);

            element.data('typeahead').source = strings;
        });
    });
}
