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
            <input :disabled="!isDisabled" @click.prevent="$store.dispatch('updatePerson',{name:person.name, age:person.age, job:person.job,id:person.id})" type="submit" value="Update" class="btn btn-success">
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
        },
        isDisabled(){
            return this.person.age && this.person.job && this.person.name
        }
    },

}
</script>

<style scoped>

</style>
