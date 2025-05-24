<script setup>
import { useForm, router } from "@inertiajs/vue3";

const logout = () => {
    console.log("EEEEEEEEEEEE");
    router.post("/logout");
    console.log(router);
};
</script>
<template>
    <div class="p-6 text-xl font-semibold text-gray-800">
        xD Witaj w TimeForge z Vue + Inertia!
        <button
            class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 disabled:opacity-50"
            @click="logout"
        >
            wyloguj
        </button>
    </div>
</template>
