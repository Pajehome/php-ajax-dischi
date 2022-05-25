const app = new Vue({
    el: '#app',
    data: {
      dischi:[],
      categories:[],
      selectedCategory: '',
      apiPath: './server.php'
    },
    methods: {
     getData(category = null){
         let path = this.apiPath;
         if(category){
             path = `${this.apiPath}?category=${category}`;
         }
         axios.get(path).then((response) =>{
            this.dischi = response.data;
                this.dischi.forEach((disco) =>{
                    if(!this.categories.includes(disco.genre)){
                        this.categories.push(disco.genre);
                    }
                })  
         })
     },

     search(){
      this.getData(this.selectedCategory)
     }


    },
    mounted(){
    this.getData()
    },
})