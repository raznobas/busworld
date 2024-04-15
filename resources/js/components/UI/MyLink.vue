<template>
    <a class="btn">
        <slot></slot>
    </a>
</template>

<script>
export default {
    name: 'my-link'
}
</script>

<style scoped>
.btn {
    cursor: pointer;
    align-self: flex-end;
    padding: 10px 15px;
    background: none;
    color: teal;
    border: 1px solid teal;
}
</style>
