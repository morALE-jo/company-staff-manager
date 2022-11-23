import { ref } from 'vue'

export default function useCompanies() {
    const companies = ref([])

    const getCompanies = async () => {
        axios.get('/companies')
            .then(response => companies.value = response.data)
            .catch(error => console.log(error))
    }

    return { companies, getCompanies }
}