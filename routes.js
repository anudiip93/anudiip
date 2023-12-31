import { createWebHistory, createRouter } from "vue-router";
import HomePage from './components/HomePage.vue'
import Products from './components/ProductsPage.vue'
import ContactUs from './components/ContactUs.vue'

const routes = [

    {
        name: 'HomePage',
        path: '/',
        component: HomePage,
    },

    {
        name: 'ProductsPage',
        path: '/product',
        component: Products,
    },

    {
        name: 'ContactUs',
        path: '/contact',
        component: ContactUs,
    }
]

const router = createRouter({

    history: createWebHistory(),

    routes
})

export default router;