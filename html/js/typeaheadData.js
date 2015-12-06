function connectTypeahead (element, source, next) {
    element.keypress(function (e) {
        $.get(source + element.val(), function(data) {
            var strings = [];

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

            element.data('typeahead').source = strings;

            if (next)
                next(data);
        });
    });
}
