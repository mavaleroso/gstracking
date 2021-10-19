import VueRouter from "vue-router";
import Dashboard from "./components/Pages/Dashboard";
import RequestTravel from "./components/Pages/RequestTravel";
import ListLocalRequest from "./components/Pages/ListLocalRequests";
import ListRitoRequest from "./components/Pages/ListRitoRequests";
import VehicleTravels from "./components/Pages/VehicleTravels";
import Log from "./components/Pages/Logs";
import Vehicle from "./components/Pages/Transportation/Vehicle";
import Driver from "./components/Pages/Transportation/Driver";
import ListPo from "./components/Pages/ListPo";
import ListUsers from "./components/Pages/ListUsers";
import travelCalendar from "./components/Pages/TravelCalendar";
import printRequest from "./components/Pages/PrintRequest";
import printTripTicket from "./components/Pages/PrintTripTicket";
import TravelsStatus from "./components/Pages/TravelsStatus";
import FuelCharges from "./components/Pages/FuelCharges";
import printFuelRequestSlip from "./components/Pages/PrintFuelRequestSlip.vue";

const routes = [
    {
        path: "/dashboard",
        component: Dashboard,
        name: "dashboard",
        meta: {
            title: "Dashboard"
        }
    },
    {
        path: "/request_travel",
        component: RequestTravel,
        name: "requestTravel",
        meta: {
            title: "Request Travel"
        }
    },
    {
        path: "/local_requests",
        component: ListLocalRequest,
        name: "listLocalRequests",
        meta: {
            title: "Local Requests"
        }
    },
    {
        path: "/rito_requests",
        component: ListRitoRequest,
        name: "listRitoRequests",
        meta: {
            title: "RITO Requests"
        }
    },
    {
        path: "/travels_status",
        component: TravelsStatus,
        name: "travelsStatus",
        meta: {
            title: "List of Travels Status"
        }
    },
    {
        path: "/vehicle_travels",
        component: VehicleTravels,
        name: "vehicleTravels",
        meta: {
            title: "List of Vehicle Travels"
        }
    },
    {
        path: "/list_vehicle",
        component: Vehicle,
        name: "listVehicle",
        meta: {
            title: "List of Vehicles"
        }
    },
    {
        path: "/list_drivers",
        component: Driver,
        name: "listDriver",
        meta: {
            title: "List of Drivers"
        }
    },
    {
        path: "/transaction_logs",
        component: Log,
        name: "Logs",
        meta: {
            title: "List of Logs"
        }
    },
    {
        path: "/fuel_charges",
        component: FuelCharges,
        name: "fuelCharges",
        meta: {
            title: "List of Fuel Charges"
        }
    },
    {
        path: "/list_po",
        component: ListPo,
        name: "listPo",
        meta: {
            title: "List of PO"
        }
    },
    {
        path: "/list_users",
        component: ListUsers,
        name: "listUsers",
        meta: {
            title: "List of Users"
        }
    },
    {
        path: "/travel_calendar",
        component: travelCalendar,
        name: "travelCalendar",
        meta: {
            title: "Travel Calendar"
        }
    },
    {
        path: "/print_request",
        component: printRequest,
        name: "printRequest"
    },
    {
        path: "/print_trip_ticket",
        component: printTripTicket,
        name: "printTripTicket"
    },
    {
        path: "/print_fuel_request_slip",
        component: printFuelRequestSlip,
        name: "printFuelRequestSlip"
    }
];

const router = new VueRouter({
    routes,
    mode: "history"
});

export default router;
