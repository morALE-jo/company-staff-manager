import { createRouter, createWebHistory} from 'vue-router'
import CompaniesIndex from '../components/Companies/Index.vue'
import EmployeesIndex from '../components/Employees/Index.vue'
import EmployeesCreate from '../components/Employees/Create.vue'

const routes = [
    {
        path: '/',
        name:'company.index', 
        component: CompaniesIndex
    },
    {
        path: '/employee/list', 
        name:'employee.index', 
        component: EmployeesIndex
    },
    {
        path: '/employee/create', 
        name:'employee.create', 
        component: EmployeesCreate
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;