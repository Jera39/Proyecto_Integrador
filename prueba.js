document.addEventListener('DOMContentLoaded', function (event) {
  async function actualizarContador() {
      const { data, error } = await supabase
          .from('Aforo')
          .select('Contador');

      if (error) {
          console.error('Error al obtener el contador:', error);
          return;
      }

      const contador = data[0]?.Contador || 'N/A';
      const total = 20; // El valor total deseado

      // Actualiza el elemento HTML con el valor del contador en el formato "contador/total"
      document.getElementById('contadorAforo').textContent = contador + '/' + total;
  }

  // Llama a la función para actualizar el contador cada X segundos
  setInterval(actualizarContador, 2000); // Actualiza cada 2 segundos (puedes ajustar el intervalo)

  // También, actualiza el contador inmediatamente cuando se carga la página
  actualizarContador();
});