<template>
    <div class="container">
        <din class="row justify-content-center">
           <div class="col-md-8">
               <div class="card">
                   <Header :title="title"/>
                   <div class="card-body">
                       Sito in costruzione
                   </div>
               </div>
           </div>
        </din>
    </div>
</template>

<script>
import Header from "./Header.vue";

export default {
    name:'App',
    data() {
      return { title:"Il mio Blog!"}  ;
    },
    componets:{
        Header,
    },
};
</script>
