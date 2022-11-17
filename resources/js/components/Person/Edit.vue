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
            <input @click.prevent="updatePerson" type="submit" value="Update" class="btn btn-success">
        </div>
    </div>

</template>

<script>
import router from "../../router";
export default {
    name: "Edit",
    data(){
        return {
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
            axios.get('/api/people/' + this.$route.params.id)
                .then(
                    res => {
                        this.name = res.data.name;
                        this.age = res.data.age;
                        this.job = res.data.job;
                    }
                )
        },
        updatePerson(){
            axios.patch('/api/people/' + this.$route.params.id, {name:this.name, age:this.age, job:this.job,})
                .then(
                    router.push({name: 'person.show', params:{id:this.$route.params.id}})
                )

        }
    }
}
</script>

<style scoped>

</style>
