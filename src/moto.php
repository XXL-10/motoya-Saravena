<?php include '../include/header.php' ?>

<div class="container w-5/6 mx-auto bg-white rounded-lg shadow-lg p-8">
    <h1 class="text-4xl font-bold text-center text-orange-600 mb-6">CB 500 HONDA</h1>
    <div class="relative">
        <div class="w-full carrusel hidden">
            <img src="../img/VOGE 300AC__Fatbar_0.jpg.webp" alt="" class="w-full rounded-lg shadow-md object-cover" />
        </div>
        <div class="w-full carrusel hidden">
            <img src="../img/VOGE 300AC__Llantas_0.jpg.webp" alt="" class="w-full rounded-lg shadow-md object-cover" />
        </div>
        <div class="w-full carrusel hidden">
            <img src="../img/VOGE 300AC__Slipper.jpg.webp" alt="" class="w-full rounded-lg shadow-md object-cover" />
        </div>
        <div class="w-full carrusel hidden">
            <img src="../img/VOGE 300AC__Tanque.jpg.webp" alt="" class="w-full rounded-lg shadow-md object-cover" />
        </div>

        <button id="btnAnterior" class="absolute top-1/2 left-0 transform -translate-y-1/2 text-white bg-orange-600 rounded-r-lg p-2 hover:bg-opacity-100 transition duration-300">
            <svg class="hover:scale-125 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="40" height="40" stroke-width="3">
                <path d="M15 18l-6-6 6-6"></path>
            </svg>
        </button>
        <button id="btnSiguiente" class="absolute top-1/2 right-0 transform -translate-y-1/2 text-white bg-orange-600 rounded-l-lg p-2 hover:bg-opacity-100 transition duration-300">
            <svg class="hover:scale-125 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="40" height="40" stroke-width="3">
                <path d="M9 6l6 6-6 6"></path>
            </svg>
        </button>
    </div>

    <div class="mt-8">
        <h2 class="text-center font-bold text-3xl uppercase text-gray-700 mb-4">Características</h2>
        <ul class="list-disc list-inside space-y-2 text-gray-600">
            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente aliquam, magni aut commodi at, numquam, nam ea eaque perferendis consequatur ab aliquid sequi architecto doloremque laborum eligendi fugiat eius eos?</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nihil placeat delectus, perspiciatis tempora magni qui sunt laudantium dignissimos labore quis, accusantium possimus accusamus nobis! Deleniti similique harum vero. Quod.</li>
        </ul>
    </div>

    <div class="mt-8">
        <p class="text-xl font-bold text-gray-700">Precio</p>
        <p class="text-2xl font-bold text-orange-600">39,590,000</p>
    </div>

    <div class="mt-8">
        <h2 class="text-xl font-bold text-gray-700">Descripción</h2>
        <p class="text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum debitis pariatur provident officiis culpa, quia nulla nobis maiores sed, nisi autem eaque quam mollitia quo ipsa doloremque laudantium, aliquam voluptatibus.</p>
    </div>
</div>

<?php include '../include/footer.php' ?>
