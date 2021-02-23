import VueRouter from 'vue-router';
import Dashboard from './components/Pages/Dashboard';
import RequestTravel from './components/Pages/RequestTravel';
import ListRequests from './components/Pages/ListRequests';
import ListTravels from './components/Pages/ListTravels';
import ListTransportation from './components/Pages/ListTransportation';

const routes = [
    {
        path: '/dashboard',
        component: Dashboard,
        name: 'dashboard',
        meta: {
            title: 'Dashboard'
        }
    },
    {
        path: '/request_travel',
        component: RequestTravel,
        name: 'requestTravel',
        meta: {
            title: 'Request Travel'
        }
    },
    {
        path: '/list_requests',
        component: ListRequests,
        name: 'listRequests',
        meta: {
            title: 'List of Requests'
        }
    },
    {
        path: '/list_travels',
        component: ListTravels,
        name: 'listTravels',
        meta: {
            title: 'List of Travels'
        }
    },
    {
        path: '/list_transportation',
        component: ListTransportation,
        name: 'listTransportation',
        meta: {
            title: 'List of Transportation'
        }   
    },
]

const router = new VueRouter({
    routes,
    mode: 'history'
});

export default router;