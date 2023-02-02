<template>
    <div>
        <h1>lista post</h1>
        <PostsList />
    </div>
   
</template>

<script>
import PostsList from "../../../components/posts/PostsList.vue"

export default{
    name: 'posts',
    components:{
        PostsList
    },
}
</script>