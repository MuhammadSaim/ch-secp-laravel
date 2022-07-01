import './bootstrap';

import Alpine from 'alpinejs';

import moment from "moment";

import $ from 'jquery';

window.Alpine = Alpine;

Alpine.start();



// set the default date format
$("input[type=date]").on("change", function() {
    this.setAttribute(
        "value",
        moment(this.value, "YYYY-MM-DD")
            .format( this.getAttribute("data-date-format") )
    )
});
