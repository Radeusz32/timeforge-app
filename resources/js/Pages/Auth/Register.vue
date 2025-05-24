<script setup>
import { useForm, router } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post("/register");
};

const errors = form.errors;
</script>

<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        <div class="w-full max-w-md bg-white shadow-md rounded-lg p-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                Rejestracja
            </h1>
            <form @submit.prevent="submit" class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1"
                        >Imię</label
                    >
                    <input
                        v-model="form.name"
                        type="text"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                    <p v-if="errors.name" class="text-sm text-red-600 mt-1">
                        {{ errors.name }}
                    </p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1"
                        >Email</label
                    >
                    <input
                        v-model="form.email"
                        type="email"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                    <p v-if="errors.email" class="text-sm text-red-600 mt-1">
                        {{ errors.email }}
                    </p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1"
                        >Hasło</label
                    >
                    <input
                        v-model="form.password"
                        type="password"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                    <p v-if="errors.password" class="text-sm text-red-600 mt-1">
                        {{ errors.password }}
                    </p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1"
                        >Powtórz hasło</label
                    >
                    <input
                        v-model="form.password_confirmation"
                        type="password"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                </div>

                <button
                    type="submit"
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 disabled:opacity-50"
                    :disabled="form.processing"
                >
                    <span v-if="form.processing">⏳ Rejestracja...</span>
                    <span v-else>Zarejestruj</span>
                </button>
            </form>
        </div>
    </div>
</template>
