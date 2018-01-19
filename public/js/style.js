/**
 * Created by CASIC on 2018/1/18.
 */
$(function () {
    $("table tr").each(function () {
        $(this).children("td:first").css("font-weight","bold")
    })
})