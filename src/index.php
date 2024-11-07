<?php include '../include/header.php' ?>


    <main>
        <h2 class="text-center font-black my-10 text-3xl md:text-4xl lg:text-5xl text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600 drop-shadow-lg">
            Más Sobre Nosotros
        </h2>

        <div class="flex flex-col justify-center md:grid md:grid-cols-3 gap-5 mx-3">
            <!-- Card 1 -->
            <div class="flex flex-col items-center p-5 rounded-2xl bg-white shadow-[15px_15px_30px_#ff5722,-15px_-15px_30px_#ffffff] transition-shadow duration-300 hover:shadow-[20px_20px_40px_#ff5722,-20px_-20px_40px_#ffffff]">
                <div class="p-3">
                    <img class="aspect-video w-72 object-contain bg-[#ffc8a88a] rounded-lg" src="../img/calidad.svg" alt="Icono de calidad">
                </div>
                <h4 class="text-center font-semibold">Calidad</h4>
                <p class="text-center text-gray-600">Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
            </div>

            <!-- Card 2 -->
            <div class="flex flex-col items-center p-5 rounded-2xl bg-white shadow-[15px_15px_30px_#ff5722,-15px_-15px_30px_#ffffff] transition-shadow duration-300 hover:shadow-[20px_20px_40px_#ff5722,-20px_-20px_40px_#ffffff]">
                <div class="p-3">
                    <img class="aspect-video w-72 object-contain bg-[#ffc8a88a] rounded-lg" src="../img/money.svg" alt="Icono Precio">
                </div>
                <h4 class="text-center font-semibold">Precio</h4>
                <p class="text-center text-gray-600">Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
            </div>

            <!-- Card 3 -->
            <div class="flex flex-col items-center p-5 rounded-2xl bg-white shadow-[15px_15px_30px_#ff5722,-15px_-15px_30px_#ffffff] transition-shadow duration-300 hover:shadow-[20px_20px_40px_#ff5722,-20px_-20px_40px_#ffffff]">
                <div class="p-3">
                    <img class="aspect-video w-72 object-contain bg-[#ffc8a88a] rounded-lg" src="../img/clock.svg" alt="Icono Tiempo">
                </div>
                <h4 class="text-center font-semibold">Rapidez</h4>
                <p class="text-center text-gray-600">Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
            </div>
        </div>
    </main>

    <section class="py-8 px-4 bg-gradient-to-b from-white to-[#ff9b73]">
        <h2 class="text-center font-black my-10 text-3xl md:text-4xl lg:text-5xl text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600 drop-shadow-lg">Motos en venta</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Anuncio 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-red-700">
                    <img class="w-full h-48 object-cover" src="../img/anuncio1.jpg" alt="anuncio">
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Yamaha XTZ 150</h3>
                    <p class="text-gray-600">Motor de buen rendimiento. Posee un motor de 149 cc, 4 tiempos, un cilindro, SOHC y refrigerado por aire, alimentado con inyección electrónica.</p>
                    <p class="text-lg font-bold text-red-600">$13,000,000</p>
                    <ul class="mt-4 flex flex-wrap justify-between">
                        <li class="flex items-center space-x-2 cursor-pointer">
                            <a href="#" class="flex items-center">
                                <img class="w-32 h-20 object-cover" src="../img/VOGE 300AC__Fatbar_0.jpg.webp" alt="Característica 1">
                                <p class="ml-2">Característica 1</p>
                            </a>
                        </li>
                        <li class="flex items-center space-x-2 cursor-pointer">
                            <a href="#" class="flex items-center">
                                <img class="w-32 h-20 object-cover" src="../img/VOGE 300AC__Llantas_0.jpg.webp" alt="Característica 2">
                                <p class="ml-2">Característica 2</p>
                            </a>
                        </li>
                        <li class="flex items-center space-x-2 cursor-pointer">
                            <a href="#" class="flex items-center">
                                <img class="w-32 h-20 object-cover" src="../img/VOGE 300AC__Slipper.jpg.webp" alt="Característica 3">
                                <p class="ml-2">Característica 3</p>
                            </a>
                        </li>
                    </ul>
                    <a href="./moto.php" class="block mt-4 text-center bg-orange-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-orange-600 transition">Ver moto</a>
                </div>
            </div>
    
            <!-- Anuncio 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div>
                    <img class="w-full h-48 object-cover" src="../img/anuncio1.jpg" alt="anuncio">
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Yamaha XTZ 150</h3>
                    <p class="text-gray-600">Motor de buen rendimiento. Posee un motor de 149 cc, 4 tiempos, un cilindro, SOHC y refrigerado por aire, alimentado con inyección electrónica.</p>
                    <p class="text-lg font-bold text-red-600">$13,000,000</p>
                    <ul class="mt-4 flex flex-wrap justify-between">
                        <li class="flex items-center space-x-2 cursor-pointer">
                            <a href="#" class="flex items-center">
                                <img class="w-32 h-20 object-cover" src="../img/VOGE 300AC__Fatbar_0.jpg.webp" alt="Característica 1">
                                <p class="ml-2">Característica 1</p>
                            </a>
                        </li>
                        <li class="flex items-center space-x-2 cursor-pointer">
                            <a href="#" class="flex items-center">
                                <img class="w-32 h-20 object-cover" src="../img/VOGE 300AC__Llantas_0.jpg.webp" alt="Característica 2">
                                <p class="ml-2">Característica 2</p>
                            </a>
                        </li>
                        <li class="flex items-center space-x-2 cursor-pointer">
                            <a href="#" class="flex items-center">
                                <img class="w-32 h-20 object-cover" src="../img/VOGE 300AC__Slipper.jpg.webp" alt="Característica 3">
                                <p class="ml-2">Característica 3</p>
                            </a>
                        </li>
                    </ul>
                    <a href="./moto.php" class="block mt-4 text-center bg-orange-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-orange-600 transition">Ver moto</a>
                </div>
            </div>
    
            <!-- Anuncio 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div>
                    <img class="w-full h-48 object-cover" src="../img/anuncio1.jpg" alt="anuncio">
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Yamaha FZ 150 3.0</h3>
                    <p class="text-gray-600">Descubre la potencia incomparable de la nueva y moderna FZ15 versión 3.0 con su motor refrigerado por aire, alimentado con inyección electrónica.</p>
                    <p class="text-lg font-bold text-red-600">$10,500,000</p>
                    <ul class="mt-4 flex flex-wrap justify-between">
                        <li class="flex items-center space-x-2 cursor-pointer">
                            <a href="#" class="flex items-center">
                                <img class="w-32 h-20 object-cover" src="../img/VOGE 300AC__Fatbar_0.jpg.webp" alt="Característica 1">
                                <p class="ml-2">Característica 1</p>
                            </a>
                        </li>
                        <li class="flex items-center space-x-2 cursor-pointer">
                            <a href="#" class="flex items-center">
                                <img class="w-32 h-20 object-cover" src="../img/VOGE 300AC__Llantas_0.jpg.webp" alt="Característica 2">
                                <p class="ml-2">Característica 2</p>
                            </a>
                        </li>
                        <li class="flex items-center space-x-2 cursor-pointer">
                            <a href="#" class="flex items-center">
                                <img class="w-32 h-20 object-cover" src="../img/VOGE 300AC__Slipper.jpg.webp" alt="Característica 3">
                                <p class="ml-2">Característica 3</p>
                            </a>
                        </li>
                    </ul>
                    <a href="./moto.php" class="block mt-4 text-center bg-orange-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-orange-600 transition">Ver moto</a>
                </div>
            </div>
        </div>
    
        <div class="mt-6 text-center">
            <a href="anuncios.html" class="bg-[#450805] text-white font-semibold py-2 px-6 rounded-lg shadow-md hover:bg-[#7f190f] transition duration-200">Ver Todas</a>
        </div>
        
        
    </section>
    
    
    
    
    <section class="py-8 px-4 bg-gray-50 text-center">
        <h2 class="text-2xl font-bold mb-2">Encuentra la moto de tus sueños</h2>
        <p class="mb-4">Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad.</p>
        <a href="./contacto.php" class="text-orange-600 underline">Contáctanos</a>
    </section>
    
    <section class="py-8 px-4">
        <h3 class="text-2xl font-bold mb-4">Nuestro Blog</h3>
    
        <article class="bg-white rounded-lg shadow-md p-4 mb-4">
            <div>
                <a href="#">
                    <h4 class="text-xl font-semibold">Lorem ipsum dolor sit, amet consectetur</h4>
                    <p class="text-gray-500">publicada el: <span>30/10/2024</span> por: <span>Admin</span></p>
                    <p class="text-gray-700">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis quisquam hic at neque fugiat! Vitae, expedita pariatur. Corporis exercitationem deleniti, dicta veniam aliquid quidem obcaecati voluptates omnis repudiandae odio distinctio.
                    </p>
                </a>
            </div>
        </article>
    
        <article class="bg-white rounded-lg shadow-md p-4">
            <div>
                <a href="#">
                    <h4 class="text-xl font-semibold">Lorem ipsum dolor sit amet consectetur</h4>
                    <p class="text-gray-500">publicado el: <span>30/10/2024</span> por: <span>Admin</span></p>
                    <p class="text-gray-700">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque eligendi beatae dolorum impedit ipsa! Molestias assumenda alias a quis expedita quos nisi iste ullam sit eos vitae quas, reprehenderit aliquam!
                    </p>
                </a>
            </div>
        </article>
    </section>
    
    <section class="py-8 px-4 bg-gray-100">
        <h3 class="text-2xl font-bold mb-4">Testimoniales</h3>
    
        <div class="bg-white rounded-lg shadow-md p-4">
            <blockquote class="italic mb-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ex id quos excepturi nemo dolorem laboriosam sapiente odio, earum omnis asperiores reprehenderit reiciendis impedit iure fugiat voluptas ea cupiditate placeat?
            </blockquote>
            <p class="text-right font-semibold">- Israel Acevedo</p>
        </div>
    </section>
    
<?php include '../include/footer.php' ?>
