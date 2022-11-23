<template>
<div>
    <router-link :to="{name:'person.index'}" class="btn btn-outline-primary">Список</router-link>
    <router-link :to="{name:'person.create'}" class="btn btn-outline-secondary">Добавить</router-link>
    <router-view></router-view>
</div>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
