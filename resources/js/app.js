import { createApp } from 'vue';

const app = createApp({});

const ui_components = [link, input, formsInputs];
ui_components.forEach(component => {
    app.component(component.name, component);
});

app.mount('#app');
