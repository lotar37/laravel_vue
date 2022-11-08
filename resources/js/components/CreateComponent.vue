<template>
    <div>
        <div class="mb-3">
            <input type="text" class="form-control w-25" id="name" placeholder="Имя">
         </div>
        <div class="mb-3">
            <input type="number" class="form-control" id="age" placeholder="Возраст">
         </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="job" placeholder="Работа">
         </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Добавить">
         </div>
     </div>
</template>

<script>
export default {
    name: "CreateComponent",
}
</script>

<style scoped>

</style>
