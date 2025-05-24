<template>
    <div class="max-w-md mx-auto mt-20">
        <h1 class="text-2xl font-bold mb-6">Logowanie</h1>
        <form @submit.prevent="submit" class="space-y-4">
            <div>
                <label>Email</label>
                <input v-model="form.email" type="email" class="input" />
                <p v-if="errors.email" class="text-red-600">
                    {{ errors.email }}
                </p>
            </div>
            <div>
                <label>Hasło</label>
                <input v-model="form.password" type="password" class="input" />
                <p v-if="errors.password" class="text-red-600">
                    {{ errors.password }}
                </p>
            </div>
            <button type="submit" class="btn">Zaloguj</button>
        </form>
    </div>
</template>

<script setup>
import { reactive } from "vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    email: "",
    password: "",
});

const submit = () => {
    form.post("/login");
};

const errors = form.errors;
</script>
