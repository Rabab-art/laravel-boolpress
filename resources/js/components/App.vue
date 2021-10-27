<template>
    <div class="container">
        <Header :title="title" />

        <main>
            <PostList />
        </main>
    </div>
</template>

<script>
import PostList from "./PostList.vue";
import Header from "./Header.vue";

export default {
    name: "App",
    data() {
        return { title: "Boolpress" };
    },
    components: {
        Header,
        PostList,
    }
};
</script>
