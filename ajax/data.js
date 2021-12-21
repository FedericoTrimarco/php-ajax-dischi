const app = new Vue({
    el: '#app',
    data: {
        albums: null,
        apiUrl: 'http://localhost/php-ajax-dischi/ajax/database.php',
    },
    created() {
        this.getAlbums();
    },
    methods: {
        getAlbums() {
            axios
            .get(this.apiUrl)
            .then(response => {
                this.albums = response.data;
            })
            .catch(error => {
                console.log(error);
            })
        },
    }
});