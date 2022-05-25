const app = new Vue({
    el: '#app',
    data: {
      dischi:[],
    },
    methods: {
     getData(){
         axios.get('server.php').then((response) =>{
            this.dischi = response.data;
            console.log(this.dischi)
         })
     }
    },
    mounted(){
    this.getData()
    },
})