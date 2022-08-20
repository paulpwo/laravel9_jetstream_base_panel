<template>
    <AppLayout title="Dashboard">
        <template #header>
            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <h2 class="text-xl font-semibold leading-tight">
                    Dashboard
                </h2>
            </div>
        </template>

        <div class="p-6 flex flex-col gap-6 overflow-hidden bg-white rounded-md shadow-md lg:flex-row md:justify-between dark:bg-dark-eval-1">
            <div>You're logged in! {{$page.props.user.name}} {{$page.props.appName}}</div>
        </div>

        <!-- // NOTE - Example for using form in composition api
            <div class="flex flex-col gap-6 overflow-hidden bg-white rounded-md shadow-md lg:flex-row md:justify-between dark:bg-dark-eval-1">
                <p>
                </p>
                <form @submit.prevent="submit">
                <label for="first_name">First name:</label>
                <input id="first_name" v-model="form.first_name" />
                <label for="last_name">Last name:</label>
                <input id="last_name" v-model="form.last_name" />
                <label for="email">Email:</label>
                <input id="email" v-model="form.email" />
                <button type="submit">Submit</button>
            </form>
        </div> -->
        
    </AppLayout>
</template>


<script setup>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import AppLayout from '@/Layouts/AppLayout.vue'
import Button from "@/Components/Button.vue"
import { GithubIcon } from "@/Components/Icons/Brands"

// NOTE - Example for using form in composition api
//  const form = Inertia.form({
//       first_name: null,
//       last_name: null,
//       email: null,
//     })

//     function submit () {
//         // alert(JSON.stringify(form))
//         Inertia.get(route("dashboard"), form);

//     }

</script>
