import Main from "./components/Main";
import VueRouter from "vue-router";

const routes = [
    {
        path: "/",
        component: Main,
        name: "main"
    }
];

const router = new VueRouter({
    mode: 'history',
    routes,
});

export default router;