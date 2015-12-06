function connectTypeahead (element, source) {
    element.typeahead();

    element.keypress(function (e) {
        $.get(source + element.val(), function(data) {
            var strings = [];

            data = JSON.parse(data);

            if (data.charitySearchResults == null)
                return;

            data.charitySearchResults.forEach(function (e, i) {
                strings[i] = e.charityDisplayName;
            });

            console.log(strings);
            console.log(element);
            console.log(source);

            element.data('typeahead').source = strings;
        });
    });
}
