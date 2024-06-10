<template><main>
    <table class="table">
        <caption>Lista de Estudiantes</caption>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Fecha de Creación</td>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(est,index) in estudiantes" :key="index">
                <td>{{ index+1 }}</td>
                <td>{{ est.nombre }}</td>
                <td>{{ est.nombre }}</td>
                <td>{{ est.created_at }}</td>
            </tr>
        </tbody>
    </table>
</main>
</template>

<script setup lang="ts">
import axios from 'axios';
import {ref, onMounted} from "vue";

const estudiantes=ref([])
async function getEstudiantes(){
    const estudiantesResponse= await axios.get('api/estudiantes')
    estudiantes.value = estudiantesResponse.data
}

onMounted(async () => {
    await getEstudiantes()
 })
</script>