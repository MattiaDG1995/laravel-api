<template>
    <div>
        <!-- <h1>sono la pag del post</h1> -->
        <PostCard />
    </div>
</template>


<script>

import PostCard from '../../../components/posts/PostCard.vue'
export default{
    name: 'PostShow',
    components:{
        PostCard
    }
}

</script>