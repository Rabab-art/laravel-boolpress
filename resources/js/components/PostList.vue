<template>
    <section id="post-list">
        <h2>I mie post</h2>
        <Loader v-if="isLoading" />
        <div v-else>
            <PostCard v-for="post in posts" :key="post.id" :post="post" />
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li
                        class="page-item"
                        v-if="pagination.currentPage > 1"
                        @click="getPosts(pagination.currentPage - 1)"
                    >
                        <a class="page-link">Precedente</a>
                    </li>
                    <li
                        v-for="i in pagination.lastPage"
                        :key="i"
                        class="page-item" 
                        :class="{active: pagination.currentPage === i}"
                        @click="getPosts(i)"
                    >
                        <a class="page-link">{{ i }}</a>
                    </li>
                    <li
                        class="page-item"
                        v-if="pagination.lastPage > pagination.currentPage"
                        @click="getPosts(pagination.currentPage + 1)"
                    >
                        <a class="page-link">Successivo</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</template>

<script>
import PostCard from "./Posts/PostCard.vue";
import Loader from "./Loader.vue";
export default {
    name: "PostList",
    components: {
        PostCard,
        Loader
    },
    data() {
        return {
            baseUri: "http://localhost:8000",
            posts: [],
            isLoading: false,
            pagination: {}
        };
    },
    methods: {
        getPosts(page) {
            this.isLoading = true;
            axios
                .get(`${this.baseUri}/api/posts?page=${page}`)
                .then(res => {
                    console.log(res.data);
                    //DISTRUCTURING
                    const { data, current_page, last_page } = res.data;

                    this.posts = data;
                    this.pagination = {
                        currentPage: current_page,
                        lastPage: last_page
                    };
                })
                .catch(err => {
                    console.error(err);
                })
                .then(() => {
                    this.isLoading = false;
                });
        }
    },
    created() {
        this.getPosts();
    }
};
</script>

<style scoped>
.page-item {
    cursor: pointer;
}
</style>
