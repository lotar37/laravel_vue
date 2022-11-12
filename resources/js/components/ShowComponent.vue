<template>
    <tr :class="this.$parent.isEdit(person.id) ? 'd-none' : ''">
        <th scope="row">{{ person.id }}</th>
        <td>{{ person.name }}</td>
        <td>{{ person.age }}</td>
        <td>{{ person.job }}</td>
        <td><a href="" @click.prevent="changeEditPersonId(person.id,person.name,person.age,person.job)"
               class="btn btn-success">Edit</a>
            <a href="" @click.prevent="deletePeople(person.id)" class="btn btn-danger">Delete</a></td>
    </tr>
</template>

<script>

export default {
    name: "ShowComponent",
    props: [
        "person"
    ],
    data() {
        return {
            // people:null,
            // editPersonId:null,
            // name:'',
            // age:null,
            // job:'',
        }
    },
    mounted() {
    },
    methods: {
        deletePeople(id) {
            this.$parent.editPersonId = null;
            axios.delete(`/api/people/${id}`)
                .then(res => {
                    this.$parent.getPeople()
                })
        },
        changeEditPersonId(id, name, age, job) {
            this.$parent.editPersonId = id;
            console.log(this.$refs);
            let fullEditName = this.$parent.$refs[`edit_${id}`][0];
            fullEditName.name = name;
            fullEditName.age = age;
            fullEditName.job = job;
        },
    }
}
</script>

<style scoped>

</style>
