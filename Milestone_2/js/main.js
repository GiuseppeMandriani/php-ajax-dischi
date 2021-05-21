/**
    Data from API
 */

const app = new Vue({
    el: '#app',
    data: {
        albums: [],

    },

    created() {
        // Get Data

        console.log(window.location.href);

        // http://localhost/php-ajax-dischi/Milestone_2/scripts/get_info.php

        // Se cambio con href non funziona

        const dataURL = window.location.href + 'scripts/get_info.php';

        axios.get(dataURL)
            .then((res) => {
                console.log(res.data);
                this.albums = res.data;
            })
            .catch((err) => {
                console.log(err);
            })

    }
})