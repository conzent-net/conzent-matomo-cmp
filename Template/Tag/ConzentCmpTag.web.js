(function () {
    return function (parameters, TagManager) {
        this.fire = function () {
            var websiteKey = parameters.get('websiteKey');
            var serverUrl = parameters.get('serverUrl', 'https://app.getconzent.com');

            if (!websiteKey) {
                return;
            }

            // Remove trailing slash
            serverUrl = serverUrl.replace(/\/+$/, '');

            var src = serverUrl + '/sites_data/' + websiteKey + '/script.js';

            (function (d, s) {
                var t = d.getElementsByTagName(s)[0];
                var e = d.createElement(s);
                e.id = 'conzent-cmp';
                e.type = 'text/javascript';
                e.async = true;
                e.src = src;
                t.parentNode.insertBefore(e, t);
            })(parameters.document, 'script');
        };
    };
})();
