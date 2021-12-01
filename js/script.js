Vue.config.devtools = true;

window.addEventListener("DOMContentLoaded", function () {
    const vueApp = new Vue({
        el: "#app",
        data: {
            albumList: [],


        },
        mounted() {
            axios.get("http://localhost/esercizi/Dicembre/01-12-2021/php-ajax-dischi/API/apiAlbums.php").then((respose) => {
                this.albumList = respose.data;

            });
        },
    });
});
