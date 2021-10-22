<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <Header :title='title' />
                        <div class="carde-body">Sito in costruzione</div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Header from "./Header.vue";
export default {
    name: "App",
   data (){
       return {title: 'sul mio blog'}
   },
    components: {
        Header
    },
};
</script>
