window.addEventListener('load', function() {
  fetch('/api/obtenerAforo.php')
      .then(response => response.json())
      .then(data => {
          // Manipula los datos obtenidos en JavaScript.
          console.log(data);

          // Accede al valor de "aforo" y muestra en el HTML.
          var resultadoDiv = document.getElementById('resultado');
          resultadoDiv.innerHTML = `Aforo: ${data.aforo}`;
      })
      .catch(error => {
          console.error('Hubo un error en la solicitud AJAX: ' + error);
      });
});