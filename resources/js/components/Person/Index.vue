<template>
<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Возраст</th>
            <th scope="col">Работа</th>
            <th scope="col"> </th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="person in people">
            <th scope="row"></th>
            <td>{{ person.name }}</td>
            <td>{{ person.age }}</td>
            <td>{{ person.job }}</td>
            <td>
            <router-link :to="{name:'person.edit', params:{id:person.id}}" class="btn btn-outline-success">Edit</router-link>
            </td>
           <td>
               <a href="#" @click.prevent="deletePerson(person.id)" class="btn btn-outline-danger">Delete</a>

            </td>

        </tr>
        </tbody>
    </table>
</div>
</template>

<script>
export default {
    name: "Index",
    data(){
        return {
            people: null
        }


    },
    mounted() {
        this.getPeople()
    },
    methods:{
        getPeople(){
            axios.get('/api/people')
                .then(res => {
                    this.people = res.data.data;
                })
                .catch(
                    error => console.log(error)
                )
        },
        deletePerson(id){
            axios.delete(`/api/people/${id}`)
                .then(
                    res => {
                        this.getPeople()
                    }
                )
        }
    }
}
</script>

<style scoped>

</style>
