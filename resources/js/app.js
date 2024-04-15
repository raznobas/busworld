import { createApp } from 'vue';
import link from './components/UI/MyLink.vue';
import input from './components/UI/MyInput.vue';
import ExampleComponent from './components/ExampleComponent.vue';
import MessageList from './components/MessageList.vue';
import Navbar from './components/Navbar.vue'
import formsInputs from "./components/UI/FormsInputs.vue";

const app = createApp({});

const ui_components = [link, input, formsInputs];
ui_components.forEach(component => {
    app.component(component.name, component);
});

app.component('example-component', ExampleComponent);
app.component('message-list', MessageList);
app.component('navbar', Navbar);
app.mount('#app');
