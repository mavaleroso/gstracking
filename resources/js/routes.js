import VueRouter from 'vue-router';
import Dashboard from './components/Pages/Dashboard';
import RequestTravel from './components/Pages/RequestTravel';
import ListRequests from './components/Pages/ListRequests';
import ListTravels from './components/Pages/ListTravels';
import TransactionLogs from './components/Pages/TransactionLogs';
import Overview from './components/Pages/Transportation/Overview';
import Vehicle from './components/Pages/Transportation/Vehicle';
import Drivers from './components/Pages/Transportation/Driver';
import ServiceProvider from './components/Pages/Transportation/ServiceProvider';
import ListPo from './components/Pages/ListPo';

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
        component: Overview,
        name: 'listTransportation',
        meta: {
            title: 'List of Transportation'
        }   
    },
    {
        path: '/list_vehicle',
        component: Vehicle,
        name: 'listVehicle',
        meta: {
            title: 'List of Vehicles'
        }   
    },
    {
        path: '/list_drivers',
        component: Drivers,
        name: 'listDriver',
        meta: {
            title: 'List of Drivers'
        }   
    },
    {
        path: '/list_service_provider',
        component: ServiceProvider,
        name: 'listServiceProvider',
        meta: {
            title: 'List of Service Provider'
        }   
    },
    {
        path: '/transaction_logs',
        component: TransactionLogs,
        name: 'transactionLogs',
        meta: {
            title: 'List of Logs'
        }   
    },
    {
        path: '/list_po',
        component: ListPo,
        name: 'listPo',
        meta: {
            title: 'List of PO'
        }   
    },
]

const router = new VueRouter({
    routes,
    mode: 'history'
});

export default router;