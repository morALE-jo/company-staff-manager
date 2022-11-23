<template>
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Create a new Employee profile</h3>
        </div>
      </div>
      <div class="mt-5 md:col-span-2 md:mt-0">
        <form @submit.prevent="storeEmployee(employee)">
          <div class="overflow-hidden shadow sm:rounded-md">
            <div class="bg-white px-4 py-5 sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                  <input v-model="employee.first_name" type="text" name="first_name" id="first_name" autocomplete="given-name" 
                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                  <div class="text-red-600 mt-1">
                    <div :key="message" v-for="message in validationErrors?.first_name">
                        {{ message }}
                    </div>
                  </div>
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                  <input v-model="employee.last_name" type="text" name="last_name" id="last_name" autocomplete="family-name"
                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                  <div class="text-red-600 mt-1">
                    <div :key="message" v-for="message in validationErrors?.last_name">
                        {{ message }}
                    </div>
                  </div>
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                  <input v-model="employee.email" type="text" name="email" id="email" autocomplete="email"
                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                  <div class="text-red-600 mt-1">
                    <div :key="message" v-for="message in validationErrors?.email">
                        {{ message }}
                    </div>
                  </div>
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label id="employee-company" for="country" class="block text-sm font-medium text-gray-700">Company</label>
                  <select v-model="employee.company_id" id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    <option :key="company" v-for="(company) in companies" :value="company.id">
                        {{ company.company_name }}
                    </option>
                  </select>
                  <div class="text-red-600 mt-1">
                    <div :key="message" v-for="message in validationErrors?.company_id">
                        {{ message }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
  import { onMounted, reactive } from "vue";
  import useCompanies from "../../composables/companies";
  import useEmployees from "../../composables/employees";

  export default {
    setup() {
        const employee = reactive({
            first_name: '',
            last_name: '',
            email: '',
            company_id: ''
        })

        const { companies, getCompanies } = useCompanies()
        const { storeEmployee, validationErrors } = useEmployees()
        onMounted(getCompanies)
        return { companies, employee, storeEmployee, validationErrors }
    },
    methods: {
      test() {
          console.log('Submitted')
      }
    } 
  }
</script>
