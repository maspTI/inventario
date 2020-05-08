/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

window.events = new Vue();

window.flash = function(message, level = "success") {
    window.events.$emit("flash", { message, level });
};

window.swal = require("sweetalert2");

window.moment = require("moment");

window.Chart = require("chart.js");

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Brands
Vue.component(
    "modal-create-brand-component",
    require("./components/Brands/CreateModal.vue").default
);

// Categories
Vue.component(
    "modal-create-category-component",
    require("./components/Categories/CreateModal.vue").default
);

// Devices
Vue.component(
    "create-update-device-component",
    require("./components/Devices/CreateUpdate.vue").default
);
Vue.component(
    "index-device-component",
    require("./components/Devices/Index.vue").default
);
Vue.component(
    "modal-device-component",
    require("./components/Devices/Modal.vue").default
);

// Licences
Vue.component(
    "create-update-licence-component",
    require("./components/Licences/CreateUpdate.vue").default
);
Vue.component(
    "index-licence-component",
    require("./components/Licences/Index.vue").default
);
Vue.component(
    "modal-licence-component",
    require("./components/Licences/Modal.vue").default
);

// Patterns
Vue.component(
    "modal-create-pattern-component",
    require("./components/Patterns/CreateModal.vue").default
);

// Sellers
Vue.component(
    "modal-create-seller-component",
    require("./components/Sellers/CreateModal.vue").default
);

// Utilities
Vue.component("flash", require("./components/Utilities/Flash.vue").default);
Vue.component(
    "chart-pie",
    require("./components/Utilities/ChartPie.vue").default
);
Vue.component(
    "submit-button",
    require("./components/Utilities/SubmitButton.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
});
