<template>
    <div class="card my-3">
        <div class="card-header">
            {{ post.title }}
        </div>
        <div class="card-body">
            <p>{{ post.content }}</p>
            <blockquote class="blockquote mb-0">
                <footer class="blockquote-footer d-flex justify-content-end">
                    <time
                        ><small>
                            Pubblicato il:
                            {{ getFormattedDate(post.created_at) }}
                        </small></time
                    >
                </footer>
            </blockquote>
        </div>
    </div>
</template>

<script>
export default {
    name: "PostCard",
    props: ["post"],
    methods: {
        getFormattedDate(date) {
            const postDate = new Date(date);
            let day = postDate.getDate();
            let month = postDate.getMonth();
            const year = postDate.getFullYear();

            if (day < 10) day = "0" + day;
            if (month < 10) month = "0" + month;

            return `${day}/${month}/${year}`;
        },
    },
};
</script>

<style></style>
