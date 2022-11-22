<template>
    <div class="w-25" v-if="person">
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
    mounted() {
        this.$store.dispatch('getPerson',this.$route.params.id)
    },
    computed:{
        person(){
            return this.$store.getters.person
        }
    },
    methods:{
        getPerson(){
            axios.get(`/api/people/${this.$route.params.id}`)
                .then(
                    res => {
                        this.person = res.data.data
                     }
                )
        },
        updatePerson(){
            axios.patch(`/api/people/${this.$route.params.id}`, {name:this.person.name, age:this.person.age, job:this.person.job,})
                .then(
                    this.$router.push({name: 'person.show', params:{id:this.$route.params.id}})
                )

        }
    }
}
</script>

<style scoped>

</style>
