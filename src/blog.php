<?php include '../include/header.php'; ?>

<main class="container mx-auto px-4 py-8">
  <!-- Encabezado del Blog -->
  <header class="text-center mb-12">
    <h1 class="text-4xl font-bold text-gray-800">Nuestro Blog</h1>
    <p class="text-lg text-gray-600 mt-4">Últimos artículos y novedades sobre motos, consejos, y más</p>
  </header>

  <!-- Sección de Artículos -->
  <section class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
    <!-- Ejemplo de un artículo -->
    <article class="bg-white shadow-lg rounded-lg overflow-hidden">
      <img src="../img/moto_articulo.jpg" alt="Imagen del artículo" class="w-full h-48 object-cover">
      <div class="p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-2">Título del Artículo</h2>
        <p class="text-gray-600 mb-4">Resumen breve del artículo que capte la atención del lector y le anime a seguir leyendo...</p>
        <a href="articulo.php?id=1" class="text-orange-600 hover:text-orange-800 font-medium">Leer más &rarr;</a>
      </div>
    </article>

    <!-- Repite el bloque <article> para cada artículo en la página -->
    <!-- Ejemplo adicional -->
    <article class="bg-white shadow-lg rounded-lg overflow-hidden" id="my-popover" popover>
      <img src="../img/moto_articulo2.jpg" alt="Imagen del artículo" class="w-full h-48 object-cover">
      <div class="p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-2">Otro Título del Artículo</h2>
        <p class="text-gray-600 mb-4">Otro resumen que invita al lector a explorar el contenido del artículo...</p>
        <a href="articulo.php?id=2" class="text-orange-600 hover:text-orange-800 font-medium">Leer más &rarr;</a>
      </div>
    </article>

    <button popovertarget="my-popover">leer mas</button>

    <!-- Continúa agregando más artículos según sea necesario -->
  </section>

  <!-- Paginación -->
  <div class="mt-12 flex justify-center space-x-4">
    <a href="?page=1" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700">Anterior</a>
    <a href="?page=3" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700">Siguiente</a>
  </div>
</main>

<?php include '../include/footer.php'; ?>
