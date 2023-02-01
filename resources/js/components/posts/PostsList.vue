<template>
    <div>
        <Loader v-if="isLoading"/>

        <ul v-else-if="posts.length">
            <li v-for="elem in posts" :key="elem.id">
                {{ elem.title }}
                <span v-if="elem.category">{{ elem.category.name }}</span>
                <ol>
                    <li v-for="tag in elem.tags" :key="tag.id">{{ tag.name }}</li>
                </ol>
            </li>
        </ul>
        <p v-else>Nessun Post</p>

        <Pagination @on-page-change="getPosts" :pagination="pagination"/>
    </div>
</template>

<script>
import Loader from '../Loader.vue'
import Pagination from '../Pagination.vue'
export default{
    name: 'PostsList',
    /* props:['posts', 'isLoading', 'pagination'], */
    components:{
        Loader,
        Pagination
    },
    data(){
        return{
            posts: [],
            isLoading: false,
            pagination: {}
        }
    },
    mounted(){
        this.getPosts();
    },
    methods:{
        getPosts(page = 1){
            this.isLoading = true
            axios.get('http://localhost:8000/api/posts?page=' + page)
            .then((res) => {
                console.log(res.data);
                const{data, current_page, last_page} = res.data;
                this.posts = data;
                this.pagination = {
                    lastPage: last_page,
                    currentPage: current_page
                }
            }).catch(err=>{
                console.log(err)
            }).then(()=>{
                this.isLoading = false
            })
        }
    }
}
</script>