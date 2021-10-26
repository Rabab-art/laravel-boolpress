<template>
    <section id="post-list">
        <h2>I mie post</h2>
    </section>
</template>

<script>
export default {
name:'Postlist',
data(){
    return{
        baseUri:'http:://localhost:8000/api/posts',
        posts:[]
        }
},
methods:{
getPosts(){
    axios
    .get(`${this.baseUri}/api/posts`)
    .then((res)=>{
        console.log(res);
    })
    .catch((err)=> {
        console.error(err);
    });
},
},
created (){
    this.getPosts();
},
};
</script>

<style></style>
