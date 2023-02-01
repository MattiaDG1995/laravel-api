<template>
    <div>
        <WorkInProgress />
        
        <PostsList />
    </div>
</template>
<script>

import WorkInProgress from '../components/WorkInProgress.vue';
import PostsList from "../components/posts/PostsList.vue"
export default {
    name: "App",
    components: {
        WorkInProgress,
        PostsList
    },
   

    mounted(){
        
    },

    methods:{
        
    }
}

</script>
