<template>
    <header class="bg-indigo-600">
        <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" aria-label="Top">
        <div class="flex w-full items-center justify-between border-b border-indigo-500 py-6 lg:border-none">
            <div class="flex items-center">
                <a href="#">
                    <span class="sr-only">Your Company</span>
                    <img class="h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="" />
                </a>
                <div class="ml-10 hidden space-x-8 lg:block">
                    <router-link v-for="link in navigation" :key="link.name" :to="{ name: link.to }" 
                        class="text-base font-medium text-white hover:text-indigo-50" active-class="border-b-2 border-indigo-400">
                        {{ link.name }}
                    </router-link>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center space-x-6 py-4 lg:hidden">
            <router-link v-for="link in navigation" :key="link.name" :to="{ name: link.to }" 
            class="text-base font-medium text-white hover:text-indigo-50">{{ link.name }}</router-link>
        </div>
        </nav>
    </header>
    <div class="min-h-screen bg-gray-100">
        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Company Staff Manager
                </h2>
            </div>
        </header>

        <!-- Page Content -->
        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <router-view></router-view>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<script setup>
const navigation = [
  { name: 'Companies', to: 'company.index'},
  { name: 'Employees', to: 'employee.index'},
  { name: 'Create Employee', to: 'employee.create'},
]
</script>