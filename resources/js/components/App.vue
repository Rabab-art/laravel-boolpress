<template>
    <div class="container">
        <Header :title="title" />

        <main><Postlist /></main>
    </div>
</template>

<script>
import Header from "./Header.vue";
import Postlist from "./Posts/Postlist.vue";
export default {
    name: "App",
    data() {
        return { title: "Boolpress" };
    },
    components: {
        Header,
        Postlist
    }
};
</script>
