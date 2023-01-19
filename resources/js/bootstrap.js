import _ from 'lodash';
window._ = _;
import $ from 'jquery';
window.$ = $;
import 'bootstrap/dist/js/bootstrap.js'
import 'bootstrap/dist/css/bootstrap.css'
import 'datatables.net-bs5'
// import 'datatables.net-dt/css/jquery.datatables.min.css'
import 'datatables.net-bs5/css/dataTables.bootstrap5.min.css'
import Swal from 'sweetalert2'
window.Swal = Swal;



window.sweetAlertAjaxToken = function(message, access_token, post_data, method, url, success_callback, error_callback, submitStatus)
{
    new Swal({
        title: "Confirm Action",
        text: message,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33'
    })
    .then((willSave) => {
        if (willSave) {
            $.ajax({
                type: method,
                url: url,
                data: post_data,
                cache: false,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    "Content-Type": "application/x-www-form-urlencoded"
                    // "Authorization": "Bearer "+access_token
                },
                success: function (response) {
                    success_callback(response);
                },
                error: function (response) {
                    console.log('SHIT ERROR');
                    error_callback(response);
                },
                complete : function() {
                    // $('.loader').hide();
                    // $('form :input').removeAttr('disabled', 'disabled');
                }
            });
        } else {
            new Swal("Aborted!");
        }
    });
}

window.sweetAlertAjaxGet  = function(method, url, success_callback, error_callback){
    $.ajax({
        type: method,
        url: url,
        cache: false,
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            "Content-Type": "application/x-www-form-urlencoded"
            // "Authorization": "Bearer "+access_token
        },
        success: function (response) {
            console.log('SUCCESS');
            success_callback(response);
        },
        error: function (response) {
            console.log('SHIT ERROR');
            error_callback(response);
        },
    });
}





/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
