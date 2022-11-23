<template>
    <div class="w-25">
        <div>
            <input type="text" v-model="name" placeholder="name" class="form-control mb-3">
        </div>
        <div>
            <input type="text" v-model="age" placeholder="age" class="form-control mb-3">
        </div>
        <div>
            <input type="text" v-model="job" placeholder="job" class="form-control mb-3">
        </div>
        <div>
            <input :disabled="!isDisabled" @click.prevent="$store.dispatch('storePerson',{name, age, job})" type="submit" value="Add" class="btn btn-success">
        </div>
    </div>
</template>

<script>
export default {
    name: "Create",
    data(){
        return {
            name: null,
            age: null,
            job: null
        }
    },
    methods:{
        store(){
            axios.post('/api/people', {name:this.name, age:this.age, job:this.job,})
                .then(res => {
                    this.$store.dispatch('getPeople')
                    // this.$router.push({name:'person.index'})
                })
        }
    },
    computed:{
        isDisabled(){
            return this.name && this.age && this.job;
        },

    }
}
</script>

<style scoped>

</style>
