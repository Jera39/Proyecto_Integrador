
import { createClient } from '@supabase/supabase-js';

var SUPABASE_URL = 'https://brieuupydnadfyfdbaes.supabase.co'
var SUPABASE_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImJyaWV1dXB5ZG5hZGZ5ZmRiYWVzIiwicm9sZSI6ImFub24iLCJpYXQiOjE2OTUxNjc4MTUsImV4cCI6MjAxMDc0MzgxNX0.nDm98NfA_U05qd7u0-n9JZoA4Z_PMOZlIvtsoVkIwtk'

var supabase = createClient(SUPABASE_URL, SUPABASE_KEY);

document.addEventListener('DOMContentLoaded', function (event) {
    async function actualizarContador() {
        const { data, error } = await supabase
            .from('Aforo')
            .select('Contador')
            .eq('ID_Contador', 1);

        if (error) {
            console.error('Error al obtener el contador:', error);
            return;
        }

        const contador = data[0]?.Contador || 'N/A';
        document.getElementById('contadorAforo').textContent = contador;
    }

    // Llama a la función para actualizar el contador cada X segundos
    setInterval(actualizarContador, 2000); // Actualiza cada 5 segundos (puedes ajustar el intervalo)

    // También, actualiza el contador inmediatamente cuando se carga la página
    actualizarContador();
});