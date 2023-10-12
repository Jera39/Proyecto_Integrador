fetch('obtenerAforo.php')
    .then(response => response.json())
    .then(data => {
        // Accede al valor de "contador" en los datos recibidos.
        console.log(data.contador);

        // Haz lo que necesites con el valor en JavaScript.
        // Por ejemplo, mostrarlo en el documento.
        document.getElementById('resultado').innerHTML = "El valor de contador es: " + data.contador;
    })
    .catch(error => {
        console.error('Hubo un error en la solicitud AJAX: ' + error);
    });