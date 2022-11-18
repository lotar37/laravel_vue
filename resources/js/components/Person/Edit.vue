<template>
    <div class="w-25">
        <div>
            <input type="text" v-model="person.name" placeholder="name" class="form-control mb-3">
        </div>
        <div>
            <input type="text" v-model="person.age" placeholder="age" class="form-control mb-3">
        </div>
        <div>
            <input type="text" v-model="person.job" placeholder="job" class="form-control mb-3">
        </div>
        <div>
            <input @click.prevent="updatePerson" type="submit" value="Update" class="btn btn-success">
        </div>
    </div>

</template>

<script>
export default {
    name: "Edit",
    data(){
        return {
            person:null,
            name: null,
            age: null,
            job: null
        }
    },
    mounted() {
        this.getPerson()
    },
    methods:{
        getPerson(){
            axios.get(`/api/people/${this.$route.params.id}`)
                .then(
                    res => {
                        this.person = res.data.data
                        // this.name = res.data.name;
                        // this.age = res.data.age;
                        // this.job = res.data.job;
                    }
                )
        },
        updatePerson(){
            axios.patch(`/api/people/${this.$route.params.id}`, {name:this.name, age:this.age, job:this.job,})
                .then(
                    this.$router.push({name: 'person.show', params:{id:this.$route.params.id}})
                )

        }
    }
}
</script>

<style scoped>

</style>
