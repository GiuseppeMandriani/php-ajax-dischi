/**
    Data from API
 */

const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        artists: [],
        filterArtist: 'all',
        apiUrl: window.location.href + 'scripts/get_info.php',



    },

    created() {
        // Get Data

        console.log(window.location.href);

        // http://localhost/php-ajax-dischi/Milestone_2/scripts/get_info.php

        // const dataURL = window.location.href + 'scripts/get_info.php';

        // Get API Data

        axios.get(this.apiUrl)
            .then((res) => {
                console.log(res.data)
                this.albums = res.data.albums;
                this.artists = res.data.artists;
            })
            .catch((err) => {
                console.log(err)
            })

    },
    methods: {
        getFiltered() {
            // const dataURL = window.location.href + 'scripts/get_info.php';
            axios.get(this.apiUrl, {
                    params: {
                        artist: this.filterArtist,
                    }
                })
                .then((res) => {
                    console.log(res.data.albums)
                    this.albums = res.data.albums;

                })
                .catch((err) => {
                    console.log(err)
                })
        }
    }







})