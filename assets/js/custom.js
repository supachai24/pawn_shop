/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

var api = "http://localhost:8080/";

function getUrlParameter(param) {
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get(param);
}

function goBack() {
    window.history.back();
}

function handleCommaThousand(currency) {
    var currency = parseFloat(currency);
    return currency.toLocaleString('thai', { minimumFractionDigits: 2});
}