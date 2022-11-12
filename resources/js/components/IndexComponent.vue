<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Возраст</th>
                <th scope="col">Работа</th>
                <th scope="col">Редактировать</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in people">
            <ShowComponent :person="person"></ShowComponent>
            <EditComponent :person="person" :ref="`edit_${person.id}`"></EditComponent>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>
import EditComponent from "./EditComponent";
import ShowComponent from "./ShowComponent";

export default {
    name: "IndexComponent",
    data(){
        return{
            people:null,
            editPersonId:null,
            name:'',
            age:null,
            job:'',
        }
    },
    components:{
        EditComponent,
        ShowComponent,
    },
    mounted() {
        this.getPeople();
        this.$parent.parentLog();
    },
    methods:{
        getPeople(){
            axios.get('/api/people')
                .then(res => {
                    this.people = res.data;
                })
        },
        updatePeople(id){
            this.editPersonId = null;
            axios.patch(`/api/people/${id}`,{name:this.name, age:this.age, job:this.job})
                .then(res => {
                    this.getPeople()
                })
        },
        deletePeople(id){
            this.editPersonId = null;
            axios.delete(`/api/people/${id}`)
                .then(res => {
                    this.getPeople()
                })
        },
        changeEditPersonId(id, name,age,job){
            this.editPersonId = id;
            console.log(this.$refs);
            let editName = `edit_${id}`;
            let fullEditName = this.$refs[`edit_${id}`][0];
            fullEditName.name = name;
            fullEditName.age = age;
            fullEditName.job = job;

        },

        isEdit(id){
            return this.editPersonId === id;
        },
        indexLog(){
            console.log("this is index component");
        },
    }
 }
</script>

<style scoped>

</style>
