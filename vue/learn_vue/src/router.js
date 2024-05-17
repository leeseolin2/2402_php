import { createWebHistory, createRouter } from "vue-router";
import LoginComponent from "./components/LoginComponent.vue";
import BoardComponent from "./components/BoardComponent.vue";

const routes = [
    {
        path: '/',
        redirect: '/login',
    },
		// 라우터 정의 영역
    {
        path: '/login',
        component: LoginComponent,
    },
    {
        path: '/board',
        component: BoardComponent
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;