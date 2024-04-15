<template>
    <div class="navbar">
        <a class="fw-bold" :href="homeRoute"><img class="head_logo" src="/img/logo_text.png" alt=""></a>
        <div class="navbar_btns">
            <my-link :href="messagesRoute">Сообщения</my-link>
            <my-link :href="contactRoute">Написать письмо</my-link>
            <my-link :href="aboutRoute">О нас</my-link>
        </div>
    </div>
</template>

<script>

export default {
    props: {
        homeRoute: String,
        aboutRoute: String,
        messagesRoute: String,
        contactRoute: String,
    }
};
</script>


<style scoped>
a {
    text-decoration: none;
    color: unset;
}
.navbar {
    height: 50px;
    background-color: lightgreen;
    box-shadow: 2px 2px 4px gray;
    display: flex;
    align-items: center;
    padding: 0 60px;
}
.navbar_btns {
    margin-left: auto;
}
.navbar_btns a:not(:last-of-type) {
    margin-right: 10px;
}
</style>
