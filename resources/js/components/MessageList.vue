<template>
        <div class="row align-items-end border mb-2 rounded-3 border-dark p-3" v-for="message in messages" :key="message.id">
            <div class="col">
                <div class="fw-bold">#{{ message.id }}</div><h4>{{ message.subject }}</h4>
                <p>{{ message.email }}</p>
                <p><small class="text-secondary">{{ message.created_at }}</small></p>
            </div>
            <div class="col-3 ms-auto">
                <MyLink :href="`/data/${message.id}`" class="w-100">Открыть</MyLink>
            </div>
        </div>
</template>

<script>
import MyLink from "./UI/MyLink.vue";

export default {
    name: "message-list",
    components: {MyLink},
    props: {
        openRoute: String,
    },
    data() {
        return {
            messages: []
        };
    },
    mounted() {
        this.fetchMessages();
    },

    methods: {
        fetchMessages() {
            axios.get('/api/data')
                .then(response => {
                    this.messages = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
};

</script>
