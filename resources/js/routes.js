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
import error403 from "./components/Error/403.vue";

// Spatie Permissions
import RolesAndPermissions from "./mixins/spatie.vue";
import Config from "./mixins/config.vue";

const routes = [
    {
        path: "/gstracking/dashboard",
        component: Dashboard,
        name: "dashboard",
        meta: {
            title: "Dashboard"
        }
    },
    {
        path: "/gstracking/request_travel",
        name: "requestTravel",
        component: async () => {
            return Config.methods.$delay(1000).then(() => {
                if (
                    RolesAndPermissions.methods.$role([
                        "admin",
                        "head",
                        "staff"
                    ])
                ) {
                    return RequestTravel;
                } else {
                    return error403;
                }
            });
        },
        meta: {
            title: "Request Travel"
        }
    },
    {
        path: "/gstracking/local_requests",
        component: ListLocalRequest,
        name: "listLocalRequests",
        meta: {
            title: "Local Requests"
        }
    },
    {
        path: "/gstracking/rito_requests",
        component: ListRitoRequest,
        name: "listRitoRequests",
        meta: {
            title: "RITO Requests"
        }
    },
    {
        path: "/gstracking/travels_status",
        component: TravelsStatus,
        name: "travelsStatus",
        meta: {
            title: "List of Travels Status"
        }
    },
    {
        path: "/gstracking/vehicle_travels",
        component: VehicleTravels,
        name: "vehicleTravels",
        meta: {
            title: "List of Vehicle Travels"
        }
    },
    {
        path: "/gstracking/list_vehicle",
        component: Vehicle,
        name: "listVehicle",
        meta: {
            title: "List of Vehicles"
        }
    },
    {
        path: "/gstracking/list_drivers",
        component: Driver,
        name: "listDriver",
        meta: {
            title: "List of Drivers"
        }
    },
    {
        path: "/gstracking/transaction_logs",
        component: Log,
        name: "Logs",
        meta: {
            title: "List of Logs"
        }
    },
    {
        path: "/gstracking/fuel_charges",
        component: FuelCharges,
        name: "fuelCharges",
        meta: {
            title: "List of Fuel Charges"
        }
    },
    {
        path: "/gstracking/list_po",
        component: ListPo,
        name: "listPo",
        meta: {
            title: "List of PO"
        }
    },
    {
        path: "/gstracking/list_users",
        component: ListUsers,
        name: "listUsers",
        meta: {
            title: "List of Users"
        }
    },
    {
        path: "/gstracking/travel_calendar",
        component: travelCalendar,
        name: "travelCalendar",
        meta: {
            title: "Travel Calendar"
        }
    },
    {
        path: "/gstracking/print_request",
        component: printRequest,
        name: "printRequest"
    },
    {
        path: "/gstracking/print_trip_ticket",
        component: printTripTicket,
        name: "printTripTicket"
    },
    {
        path: "/gstracking/print_fuel_request_slip",
        component: printFuelRequestSlip,
        name: "printFuelRequestSlip"
    }
];

const router = new VueRouter({
    routes,
    mode: "history"
});

export default router;
