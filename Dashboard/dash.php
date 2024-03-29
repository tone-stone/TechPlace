<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechPlace</title>
      <!-- Favicon -->
  <link href="./images/LogoTech.png" rel="icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Asegúrate de agregar jQuery antes de Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



</head>

<body>


    <div class="container">
        <div class="row" >
            <button id="openModalButton" type="button" class="rounded-pill btn-rounded border-primary">
                Mostrar
            </button>
        </div>
    


    
        <div id="miModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="cerrarModal()">&times;</span>
                <p>En tech place bla bla bla......</p>
            </div>
        </div>
     
    </div>





    <script src="assets/vendors/js/glightbox.min.js"></script>

    
    <script src="assets/js/bootstrap.bundle.min.js"></script>


    <script>
        // Obtén el botón y el modal
        var openModalButton = document.getElementById('openModalButton');
        var modal = document.getElementById('miModal');

        // Asigna la función para abrir el modal al hacer clic en el botón
        openModalButton.addEventListener('click', function () {
            modal.style.display = 'block';
        });

        // Asigna la función para cerrar el modal al hacer clic en la 'x'
        function cerrarModal() {
            modal.style.display = 'none';
        }

        // Cierra el modal si se hace clic fuera de él
        window.addEventListener('click', function (event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });

    </script>

</body>

</html>