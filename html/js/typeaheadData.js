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
            element.data('typeahead').updater = function (item) {
                if (data.charitySearchResults !== undefined)
                    var el = data.charitySearchResults.find(function (e) {
                        return e.charityDisplayName === item;
                    });
                else
                    var el = data.find(function (e) {
                        console.log(item);
                        console.log(e.name);
                        return e.name === item;
                    });

                console.log(el);
                console.log(el.charityId);

                if (next)
                    next(el);

                return item;
            }
        });
    });
}
