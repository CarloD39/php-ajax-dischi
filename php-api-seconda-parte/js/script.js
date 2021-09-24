Vue.config.devtools = true; 

new Vue(
    {
        el: '#app',
        data: {

        },
        created() {

            axios.get('http://localhost:81/php-ajax-dischi/php-api-seconda-parte/api/api.php')
            .then((response)) => {
                console.log(response);
            }
        }
    }
)

