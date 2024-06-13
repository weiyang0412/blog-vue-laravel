import { createRouter, createWebHistory } from "vue-router";
import BlogList from "../components/BlogList.vue";
import BlogForm from "../components/BlogForm.vue";
import BlogDetails from "../components/BlogDetails.vue";
import HomePage from "../components/Home.vue";
import BlogShow from "../components/BlogShow.vue";
import Register from "../components/Register.vue";
import Login from "../components/Login.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: HomePage,
    },
    {
        path: '/register',
        name: "Register",
        component: Register,
    },
    {
        path: '/login',
        name: "Login",
        component: Login,
    },
    {  
        path: "/view",
        name: "View",
        component: BlogShow,
    },
    {
        path: "/blogs/list",
        name: "BlogList",
        component: BlogList,
    },
    {
        path: "/blogs/create",
        name: "BlogCreate",
        component: BlogForm,
    },
    {
        path: "/blogs/edit/:id",
        name: "BlogEdit",
        component: BlogForm,
    },
    {
        path: "/blogs/:id",
        name: "BlogDetails",
        component: BlogDetails,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
