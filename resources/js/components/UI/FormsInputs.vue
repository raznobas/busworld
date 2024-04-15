<template>
    <div class="form-group">
        <label for="name">Введите имя</label>
        <my-input type="text" name="name" id="name" placeholder="Alexander"></my-input>
    </div>
    <div class="form-group">
        <label for="email">Введите email</label>
        <my-input type="text" name="email" id="email" placeholder="something@mail.ru"></my-input>
    </div>
    <div class="form-group">
        <label for="subject">Тема сообщения</label>
        <my-input type="text" name="subject" id="subject" placeholder="I wanna work for you"></my-input>
    </div>
    <div class="form-group">
        <label for="message">Текст сообщения</label>
        <textarea name="message" id="message" class="form-control"></textarea>
    </div>
</template>

<script>

export default {
    name: "forms-inputs",
}
</script>

<style scoped>

</style>
