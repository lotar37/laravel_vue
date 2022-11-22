<template>
    <div v-if="person">
        <div class="m-lg-2">Name:{{ person.name }}</div>
        <div class="m-lg-2">Age:{{ person.age }} </div>
        <div class="m-lg-2">Job:{{ person.job }}</div>
        <td>
            <router-link :to="{name:'person.edit', params:{id:person.id}}" class="btn btn-primary">Edit</router-link>
        </td>


    </div>
</template>

<script>

export default {
    name: "Show",
    computed:{
        person() {
            return this.$store.getters.person
        }
    },

    mounted() {
        this.$store.dispatch('getPerson',this.$route.params.id)

    },

}
</script>

<style scoped>

</style>
