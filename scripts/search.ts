/**
 * Created by T0astBread on 28.06.2017.
 */

let search = (text: string) =>
{
    $("#search-results-holder").load(window.host + "php/search.php?query=" + text);
};

let searchForInput = () => search($("#search-input").val());

$(document).ready(() =>
{
    let present = $("#search-results-presentation"),
    search = $("#search");

    present.hide();
    search.find("input[type='submit']").click(evt =>
    {
        showResultsPresentation();
        evt.preventDefault();
    });

    let showResultsPresentation = () =>
    {
        present.show();
        searchForInput();
    };

    $("#search-input").keyup(searchForInput).on("focus", showResultsPresentation);
    $(document).mousedown(evt =>
    {
        if($(evt.originalEvent.target).closest("#search, #search-results-presentation").length) return;
        present.hide();
    });

    present.css("top", search.offset().top + search.height() + 10);
});