import { createRouter, createWebHistory } from 'vue-router'
import Estudiantes from './components/estudiantes/HomeView.vue'
//router instance is calling the function createRouter()
// dynamic segments start with a colon   { path: '/users/:id', component: User },
const routes = [
    {path: '/estudiantes', component:Estudiantes}
]
const router = createRouter({
    history : createWebHistory(),
    routes,
})

export default router
