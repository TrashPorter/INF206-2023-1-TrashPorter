<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Order</title>
    <script src="order.js"></script>
</head>

<body>
    <nav class="h-18 w-full p-4 flex justify-between border-b shadow-sm">
        <div class="flex px-5">
            <img src="assets/img/logo.PNG" class="h-auto w-36">
        </div>
        <div class="mr-8">
            <h2 class="font-semibold pt-4">Pesan Antar</h2>
        </div>
    </nav>

    <form action="" method="post">
        <section class="">
            <div class="relative w-10/12 overflow-hidden m-auto mt-8 drop-shadow-lg">
                <input type="checkbox" class="peer absolute top-0 insert-x-0 w-full h-12 opacity-0 z-10 cursor-pointer">

                <div class="bg-blue-200 p-4 ">
                    <div class="text-black">
                        <h2 class="font-medium text-xl mx-5">Pilih Jenis Sampah</h2>
                        <p class="font-extralight mx-5">Minimal 5 kg / jenis</p>
                    </div>

                    <div
                        class="absolute top-3 right-3 text-black transition-transform duration-500 rotate-0 peer-checked:bg-sky-700 mt-2">

                        <p class="bg-sky-500 p-2 my-auto rounded-md font-semibold text-white">Click
                            Here</p>
                    </div>
                </div>

                <div class="bg-white overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-screen">
                    <div class="shadow-sm border-1 border-black ">
                        <div class=" border-2 shadow-md mx-auto rounded-sm">
                            {{-- <form action="" method="post"> --}}
                            <div class="border-b-2 shadow-sm">
                                <div class="w-11/12 ml-4 py-5  border-1 rounded-3xl">
                                    <h4 class=" text-md">Botol Plastik</h4>
                                </div>
                                <div class="flex justify-end">
                                    <p class="my-3">Jumlah</p>
                                    <label for="jmlh">
                                        <input type="number"
                                            class="border-2 bg-gray-200 shadow-sm rounded-md mx-2 my-2 w-32 p-1"
                                            id="jmlh" name="jmlh">
                                    </label>
                                    <p class="my-3 mr-4">Kg</p>
                                </div>
                            </div>

                            <div class="border-b-2 shadow-sm">
                                <div class="w-11/12 ml-4 py-5  border-1 rounded-3xl ">
                                    <h4 class="text-md">Kaleng</h4>
                                </div>
                                <div class="flex justify-end">
                                    <p class="my-3">Jumlah</p>
                                    <label for="jmlh">
                                        <input type="number"
                                            class="border-2 bg-gray-200 shadow-sm rounded-md mx-2 my-2 w-32 p-1"
                                            id="jmlh" name="jmlh">
                                    </label>
                                    <p class="my-3 mr-4">Kg</p>
                                </div>
                            </div>

                            <div class="border-b-2 shadow-sm">
                                <div class="w-11/12 ml-4 py-5  border-1 rounded-3xl ">
                                    <h4 class="text-md">Kardus</h4>
                                </div>
                                <div class="flex justify-end">
                                    <p class="my-3">Jumlah</p>
                                    <label for="jmlh">
                                        <input type="number"
                                            class="border-2 bg-gray-200 shadow-sm rounded-md mx-2 my-2 w-32 p-1"
                                            id="jmlh" name="jmlh">
                                    </label>
                                    <p class="my-3 mr-4">Kg</p>
                                </div>
                            </div>

                            <div class="">
                                <div class="w-11/12 ml-4 py-5  border-1 rounded-3xl ">
                                    <h4 class="text-md">Sampah Organik</h4>
                                </div>
                                <div class="flex justify-end">
                                    <p class="my-3">Jumlah</p>
                                    <label for="jmlh">
                                        <input type="number"
                                            class="border-2 bg-gray-200 shadow-sm rounded-md mx-2 my-2 w-32 p-1"
                                            id="jmlh" name="jmlh">
                                    </label>
                                    <p class="my-3 mr-4">Kg</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="relative w-10/12 m-auto mt-12 ">
                <div class=" p-4 ">
                    <div class="flex text-black my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>

                        <h2 class="font-medium text-xl mx-1">Alamat Penjemputan</h2>
                        <div
                            class="absolute top-3 right-3 text-black transition-transform duration-500 rotate-0 peer-checked:bg-sky-700 mt-2">

                            <button
                                class="bg-sky-200 p-2 my-auto rounded-md font-medium text-black hover:drop-shadow-md">Ganti
                                Alamat
                            </button>
                        </div>
                    </div>
        </section>
    </form>

</body>

</html>
