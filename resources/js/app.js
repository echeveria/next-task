import './bootstrap';

import $ from 'jquery';
import 'bootstrap';
import axios from 'axios';
import 'datatables.net-bs5';
import 'datatables.net-responsive-bs5';

window.$ = window.jQuery = $;


$(document).ready(function() {
    const minEl = document.querySelector('#min');
    const maxEl = document.querySelector('#max');

    const table = $('#productTable').DataTable({
        ajax: {
            url: '/api/get_products', 
            dataSrc: '' // Adjust based on the format of the returned JSON
        },
        columns: [
            { data: 'product_name' },
            { data: 'width' },
            { data: 'height' },
            { data: 'price' }
        ]
    });
    // Custom range filtering function
table.search.fixed('range', function (searchStr, data, index) {
    var min = parseInt(minEl.value, 10);
    var max = parseInt(maxEl.value, 10);
    var age = parseFloat(data.price) || 0; // use data for the age column
    console.log(data.price);
    if (
        (isNaN(min) && isNaN(max)) ||
        (isNaN(min) && age <= max) ||
        (min <= age && isNaN(max)) ||
        (min <= age && age <= max)
    ) {
        return true;
    }
 
    return false;
});
 
// Changes to the inputs will trigger a redraw to update the table
minEl.addEventListener('input', function () {
    table.draw();
});
maxEl.addEventListener('input', function () {
    table.draw();
});
});