<template>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li @click="$emit('on-page-change', pagination.currentPage -1)" v-if="pagination.currentPage >1" class="page-item" role="button">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true" role="button">&laquo;</span>
                </a>
            </li>

            <li @click="$emit('on-page-change', n)" v-for="n in pagination.lastPage" :key="n" class="page-item" role="button">
                <span role="button" class="page-link" href="#">{{ n }}</span>
            </li>
            
            <li @click="$emit('on-page-change', pagination.currentPage +1)" v-if="pagination.currentPage != pagination.lastPage" class="page-item" role="button">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true" role="button">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</template>

<script>
export default{
    name: 'Pagination',
    props: ['pagination']
}
</script>
