<template>
    <div>
        <div>Color:{{ obj.color }}</div>
        <div>Number:{{ obj.number }}</div>
        <div>Is published:{{ obj.isPublished }}</div>
    </div>

</template>

<script>

export default {
    name: "SomeComponent",
    props:["obj"],
}
</script>

<style scoped>

</style>
