
import { createClient } from '@supabase/supabase-js'

const SUPABASE_URL = 'https://brieuupydnadfyfdbaes.supabase.co'
const SUPABASE_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImJyaWV1dXB5ZG5hZGZ5ZmRiYWVzIiwicm9sZSI6ImFub24iLCJpYXQiOjE2OTUxNjc4MTUsImV4cCI6MjAxMDc0MzgxNX0.nDm98NfA_U05qd7u0-n9JZoA4Z_PMOZlIvtsoVkIwtk'

const supabase = createClient(SUPABASE_URL, SUPABASE_KEY)

supabase.auth
    .signIn({
        email: 'a@a', // Reemplaza con tu email
        password: 'pass', // Reemplaza con tu contraseña
    })
    .then((user) => {
        const mensajeElement = document.getElementById('mensaje');
        if (user) {
            mensajeElement.textContent = 'Conexión exitosa a Supabase';
            // Puedes realizar acciones adicionales aquí una vez que te hayas conectado.
        } else {
            mensajeElement.textContent = 'No se pudo conectar a Supabase';
        }
    })
    .catch((error) => {
        const mensajeElement = document.getElementById('mensaje');
        mensajeElement.textContent = 'Error al conectar a Supabase: ' + error.message;
    });