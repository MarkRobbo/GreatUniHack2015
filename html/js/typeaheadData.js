function connectTypeahead (element, source) {
    element.typeahead();

    element.keypress(function (e) {
        $.get(source + element.val(), function(data) {
            var strings = [];

            console.log(data);

            data = JSON.parse(data);

            if (data == null)
                return;

            if (data.charitySearchResults !== undefined)
                data.charitySearchResults.forEach(function (e, i) {
                    strings[i] = e.charityDisplayName;
                });
            else
                strings = data.name;

            console.log(strings);

            element.data('typeahead').source = strings;
        });
    });
}
