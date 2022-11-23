import { ref } from 'vue'
import { useRouter } from 'vue-router'

export default function useEmployees() {
    const employees = ref([])
    const router = useRouter()

    const getEmployees = async () => {
        axios.get('/api/employees')
            .then(response => employees.value = response.data.data)
            .catch(error => console.log(error))
    }

    const storeEmployee = async (employee) => {
        axios.post('/api/employees', employee)
            .then(response => {
                router.push({ name: 'employee.index' })
            })
    }

    return { employees, getEmployees, storeEmployee }
}