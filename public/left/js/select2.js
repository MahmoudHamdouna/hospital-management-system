$(document).ready((function () {
    function e(e) {
        return e.id ? $('<span><img src="../assets/plugins/flag-icon-css/flags/4x3/' + e.element.value.toLowerCase() + '.svg" class="img-flag" /> ' + e.text + "</span>") : e.text
    }
    $(".select2").select2({
        placeholder: "Choose one",
        searchInputPlaceholder: "Search",
        width: "100%"
    }), $(".select2-no-search").select2({
        minimumResultsForSearch: 1 / 0,
        placeholder: "Choose one",
        width: "100%"
    }), $(".select2-flag-search").select2({
        templateResult: e,
        templateSelection: e,
        escapeMarkup: function (e) {
            return e
        }
    })
}));
