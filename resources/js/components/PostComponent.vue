<template>
    <div>

        <CreateComponent ref="create"></CreateComponent>
        <IndexComponent ref="index"></IndexComponent>
    </div>
</template>

<script>
import CreateComponent from "./CreateComponent";
import IndexComponent from "./IndexComponent";


export default {
    name: "PostComponent",

    data(){
        return{
            persons: null

        }
    },
    mounted() {
        //console.log(this.$refs.index.indexLog());
    },

    methods:{
        getPersons(){
            axios.get('/persons')
                .then( res => {
                        this.persons = res.data
                    }
                )
        },

        parentLog() {
            console.log("this is post component");
        },
    },

    computed:{
    },

    components : {
        CreateComponent,
        IndexComponent,

    }
}
</script>

<style scoped>

</style>
