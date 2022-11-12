<template>
    <div>
        <div class="mb-3">
            <input type="text" class="form-control w-25" id="name" v-model="name" placeholder="Имя">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" id="age" v-model="age" placeholder="Возраст">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="job" v-model="job" placeholder="Работа">
        </div>
        <div class="mb-3">
            <input @click.prevent="addPerson" class="btn btn-primary" value="Добавить">
        </div>
        <SomeComponent :obj="obj"></SomeComponent>
    </div>

</template>

<script>
import SomeComponent from "./SomeComponent";

export default {
    name: "CreateComponent",
    components: {
        SomeComponent
    },
    data() {
        return {
            name: null,
            age: null,
            job: null,
            obj: {
                color: "black",
                number: 234,
                isPublished: true,
            }
        }
    },
    methods: {
        addPerson() {
            axios.post('/api/people', {'name': this.name, 'age': this.age, 'job': this.job})
                .then(res => {
                    this.$parent.$refs.index.getPeople();
                    this.name = null;
                    this.age = null;
                    this.job = null;
                })
        },
    }
}
</script>

<style scoped>

</style>
