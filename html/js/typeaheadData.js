function connectTypeahead (element, source, next) {
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
                data.forEach(function (e, i) {
                    strings[i] = e.name;
                });

            console.log(strings);

            element.data('typeahead').source = strings;

            next(data);
        });
    });
}
