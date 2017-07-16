"use strict";
/**
 * Created by T0astBread on 28.06.2017.
 */
var search = function (text) {
    $("#search-results-holder").load(window.host + "php/search.php?query=" + text);
};
var searchForInput = function () { return search($("#search-input").val()); };
$(document).ready(function () {
    var present = $("#search-results-presentation"), search = $("#search");
    present.hide();
    search.find("input[type='submit']").click(function (evt) {
        showResultsPresentation();
        evt.preventDefault();
    });
    var showResultsPresentation = function () {
        present.show();
        searchForInput();
    };
    $("#search-input").keyup(searchForInput).on("focus", showResultsPresentation);
    $(document).mousedown(function (evt) {
        if ($(evt.originalEvent.target).closest("#search, #search-results-presentation").length)
            return;
        present.hide();
    });
    present.css("top", search.offset().top + search.height() + 10);
});
