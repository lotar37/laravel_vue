<template>
    <div v-if="person">
        <div class="m-lg-2">Name:{{ this.person.name }}</div>
        <div class="m-lg-2">Age:{{ this.person.age }} </div>
        <div class="m-lg-2">Job:{{ this.person.job }}</div>
        <td>
            <router-link :to="{name:'person.edit', params:{id:person.id}}" class="btn btn-primary">Edit</router-link>
        </td>


    </div>
</template>

<script>

export default {
    name: "Show",
    data(){
        return {
            person: null
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
                    }
                )
        },
    }

}
</script>

<style scoped>

</style>
