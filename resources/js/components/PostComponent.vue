<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <CreateComponent></CreateComponent>
<!--        <table class="table">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th scope="col">#</th>-->
<!--                <th scope="col">Имя</th>-->
<!--                <th scope="col">Возраст</th>-->
<!--                <th scope="col">Работа</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            <tr v-for="person in persons">-->
<!--                <th scope="row">{{ person.id }}</th>-->
<!--                <td>{{ person.name }}</td>-->
<!--                <td>{{ person.age }}</td>-->
<!--                <td>{{ person.job }}</td>-->
<!--            </tr>-->

<!--            </tbody>-->
<!--        </table>-->
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent";
import CreateComponent from "./CreateComponent";
export default {
    name: "PostComponent",

    data(){
        return{
            persons: null

        }
    },
    mounted() {
        this.getPersons();
    },

    methods:{
        getPersons(){
            axios.get('/persons')
                .then( res => {
                        this.persons = res.data
                    }
                )
        }
    },

    computed:{
    },

    components : {
        SinglePostComponent,
        CreateComponent,
    }
}
</script>

<style scoped>

</style>
