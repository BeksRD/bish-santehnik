import './bootstrap';
import { createApp } from "vue";
import Toast, { PluginOptions } from "vue-toastification";
import { createPinia } from "pinia";
import "vue-toastification/dist/index.css";

import App from "./App.vue";
const app = createApp(App);
const options: PluginOptions = {
    transition: "Vue-Toastification__bounce",
    maxToasts: 20,
    newestOnTop: true
};
app.use(Toast, options);
app.use(createPinia());

app.mount("#app");
