<template>
    <div>
        <h1>sono la pagina del singolo post: {{ post.title }}</h1>
        <p>{{ post.body }}</p>
    </div>
</template>

<script>
export default{
    name: 'PostCard',
    components:{

    },
    data(){
        return{
            post:null,
        }
    },
    mounted(){
        this.getPost();
    },
    methods:{
        getPost(){
            axios.get('http://localhost:8000/api/posts/' + this.$route.params.id)
                .then((res)=>{
                    console.log(res.data);
                    this.post=res.data;

                }).catch(err=>{
                console.log(err)
            })
        }
    }
}
</script>