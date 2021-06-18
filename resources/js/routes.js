import VueRouter from 'vue-router';
import Dashboard from './components/Pages/Dashboard';
import RequestTravel from './components/Pages/RequestTravel';
import ListLocalRequest from './components/Pages/ListLocalRequests';
import ListRitoRequest from './components/Pages/ListRitoRequests';
import ListTravel from './components/Pages/ListTravels';
import Log from './components/Pages/Logs';
import Vehicle from './components/Pages/Transportation/Vehicle';
import Driver from './components/Pages/Transportation/Driver';
import ListPo from './components/Pages/ListPo';
import ListUsers from './components/Pages/ListUsers';
import travelCalendar from './components/Pages/TravelCalendar';
import printRequest from './components/Pages/PrintRequest';
import printTripTicket from './components/Pages/PrintTripTicket';
import ListPendingTravels from './components/Pages/ListPendingTravels';

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
        path: '/local_requests',
        component: ListLocalRequest,
        name: 'listLocalRequests',
        meta: {
            title: 'Local Requests'
        }
    },
    {
        path: '/rito_requests',
        component: ListRitoRequest,
        name: 'listRitoRequests',
        meta: {
            title: 'RITO Requests'
        }
    },
    {
        path: '/pending_travels',
        component: ListPendingTravels,
        name: 'ListPendingTravels',
        meta: {
            title: 'List of Pending Travels'
        }  
    },
    {
        path: '/approved_travels',
        component: ListTravel,
        name: 'listTravels',
        meta: {
            title: 'List of Approved Travels'
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
        component: Driver,
        name: 'listDriver',
        meta: {
            title: 'List of Drivers'
        }   
    },
    {
        path: '/transaction_logs',
        component: Log,
        name: 'Logs',
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
    {
        path: '/list_users',
        component: ListUsers,
        name: 'listUsers',
        meta: {
            title: 'List of Users'
        }   
    },
    {
        path: '/travel_calendar',
        component: travelCalendar,
        name: 'travelCalendar',
        meta: {
            title: 'Travel Calendar'
        }   
    },
    {
        path: '/print_request',
        component: printRequest,
        name: 'printRequest'
    },
    {
        path: '/print_trip_ticket',
        component: printTripTicket,
        name: 'printTripTicket'
    }
]

const router = new VueRouter({
    routes,
    mode: 'history'
});

export default router;