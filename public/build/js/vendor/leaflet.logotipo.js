L.Control.Logotipo = L.Control.extend({

    options: {
        position: 'topright',
    },
    initialize: function(options) {
        L.setOptions(this, options);
    },
    onAdd: function (map) {
        this._div = L.DomUtil.create('div', 'logotipo'); // create a div with a class "info"
        this.update();
        return this._div;
    },
    update: function (props) {
        this._div.innerHTML = '<img src="/build/js/misc/leaflet-logotipo/images/logo.png" border="0" />';
    }
});

L.control.Logotipo = function(options) {
    return new L.Control.Logotipo(options);
};
