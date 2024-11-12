import './bootstrap';

import $ from 'jquery';
import 'bootstrap';
import axios from 'axios';
import 'datatables.net-bs5';
import 'datatables.net-responsive-bs5';

// Set Axios as a global object
window.axios = axios;
window.$ = window.jQuery = $;

// Optional: Set up Axios default configurations (like CSRF token)
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

$(document).ready(function() {
    console.log(1);
    $('.display').DataTable({
        ajax: {
            url: '/api/get_products', // The route to fetch products data
            dataSrc: '' // Adjust based on the format of the returned JSON
        },
        columns: [
            { data: 'product_name' },
            { data: 'width' },
            { data: 'height' },
            { data: 'price' }
        ]
    });
});