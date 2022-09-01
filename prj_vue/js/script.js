Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data:{
        discs: [],
    },
    mounted(){
        axios.get('http://localhost:8888/php-ajax-dischi/discs').then(res => {
            this.discs = res.data;
        })
    }

})