<?php include '../include/header.php' ?>
<main>
<div class="flex m-5 flex-wrap mx-auto content-center p-8 gap-10 flex-col md:flex-row min-h-screen bg-gray-100 py-8">
  <form class="bg-white p-8 rounded-lg shadow-lg ring-2 ring-orange-300 w-full max-w-lg" method="POST" action="">
    <fieldset>
      <legend class="text-2xl font-semibold text-gray-700 mb-6 text-center">Digite todos sus datos</legend>
      <div class=" space-y-6">
        <div>
          <label for="nombre" class="block text-gray-600 font-medium mb-2">Nombre</label>
          <input type="text" id="nombre" name="nombre" placeholder="Digite nombre completo"
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500" required autofocus />
        </div>
        <div>
          <label for="telefono" class="block text-gray-600 font-medium mb-2">Teléfono</label>
          <input type="number" id="telefono" name="telefono" placeholder="+573#########"
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500" required />
        </div>
        <div>
          <label for="email" class="block text-gray-600 font-medium mb-2">Email</label>
          <input type="email" id="email" name="email" placeholder="correo@correo.com"
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500" required />
        </div>
        <div>
          <label for="men" class="block text-gray-600 font-medium mb-2">Mensaje</label>
          <textarea name="mensaje" id="men" rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500"
                    placeholder="Escribe tu mensaje aquí..."></textarea>
        </div>
        <input type="submit" value="Enviar" class="w-full bg-orange-600 text-white py-2 rounded-lg font-semibold hover:bg-orange-700 transition duration-200" />
      </div>
    </fieldset>
  </form>
  <div class="gap-10 w-auto">
  <div id="map" class="h-[500px] md:w-[690px] w-full mx-auto"></div>
  <div class="mt-10 flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                      </svg>Distrito de Les Corts, 08028 Barcelona, España</div>
  </div>
</div>
</main>

<?php
require '../conexion/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO contactos (nombre, telefono, email, mensaje) VALUES ('$nombre', '$telefono', '$email', '$mensaje')";
    $result_check = mysqli_query($conexion, $sql);

    if ($result_check) {
        echo "<script>alert('Usuario registrado exitosamente.'); window.location.href = 'contacto.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
include '../include/footer.php';
?>

<script>
       
        var map = L.map('map').setView([41.380833333333, 2.1227777777778], 17);  
        


        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([41.380833333333, 2.1227777777778]).addTo(map)
            .bindPopup('Templo')
            .openPopup();
    </script>