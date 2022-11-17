<template>
    <div v-if="person">
        Name:{{ this.person.name }} Age:{{ this.person.age }} Job:{{ this.person.job }}
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
            axios.get('/api/people/' + this.$route.params.id)
                .then(
                    res => {
                        this.person = res.data
                    }
                )
        },
    }

}
</script>

<style scoped>

</style>
