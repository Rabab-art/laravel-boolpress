<template>
    <section id="post-list">
        <h2>I mie post</h2>
        <Loader v-if="isLoading" />
        <div v-else>
            <Pagination
                :lastPage="pagination.lastPage"
                :currentPage="pagination.currentPage"
                @onPageChange="changePage"
            />
            <PostCard v-for="post in posts" :key="post.id" :post="post" />
            <Pagination
                :lastPage="pagination.lastPage"
                :currentPage="pagination.currentPage"
                 @onPageChange="changePage"
            />
        </div>
    </section>
</template>

<script>
import PostCard from "./Posts/PostCard.vue";
import Pagination from "./Posts/Pagination.vue";
import Loader from "./Loader.vue";
export default {
    name: "PostList",
    components: {
        PostCard,
        Loader,
        Pagination
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
                    // console.log(res.data);
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
        },
        changePage(page){
            this.getPosts(page);
        }
    },
    created() {
        this.getPosts();
    },
    
};
</script>

