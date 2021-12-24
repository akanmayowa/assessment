import AllBook from './components/AllBook.vue';
import CreateBook from './components/CreateBook.vue';
import EditBook from './components/EditBook.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllBook
    },
    {
        name: 'create',
        path: '/create',
        component: CreateBook
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditBook
    }
];