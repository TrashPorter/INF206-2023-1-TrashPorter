@extends('layouts.main')

@section('container')
    <div class="fixed z-50 top-0">
        @include('layouts.partials.header')
    </div>


    <!-- Invoice -->
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
        <div class="sm:w-11/12 lg:w-3/4 mx-auto mt-28">
            <!-- Card -->
            <div class="flex flex-col p-4 sm:p-10 bg-white shadow-md rounded-xl dark:bg-gray-800">
                <!-- Grid -->
                <div class="flex justify-between">
                    <div class="flex mb-8">
                        <div class="w-16">
                            <img src="assets/img/logo_aja.png" class=" mr-3" alt="TrashPorter Logo" />
                        </div>
                        <div class="my-auto">
                            <h1 class="mt-2 ml-2 text-lg md:text-xl font-semibold text-blackdark:text-white">TrashPorter
                        </div>
                        </h1>
                    </div>
                    <!-- Col -->

                    {{-- <div class="text-right">
                        <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 dark:text-gray-200">Invoice #</h2>
                        <span class="mt-1 block text-gray-500">3682303</span>

                        <address class="mt-4 not-italic text-gray-800 dark:text-gray-200">
                            45 Roker Terrace<br>
                            Latheronwheel<br>
                            KW5 8NW, London<br>
                            United Kingdom<br>
                        </address>
                    </div> --}}
                    <!-- Col -->
                </div>
                <!-- End Grid -->

                <!-- Grid -->
                <div class="mt-8 grid sm:grid-cols-2 gap-3">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Bill to:</h3>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $pesanan->nama }}</h3>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $pesanan->nomor }}</h3>
                        <address class="mt-2 not-italic text-gray-500">
                            {{ $provinsi }}, {{ $kota }}<br>
                            {{ $kecamatan }}, {{ $desa }}, {{ $pesanan->pos }}<br>
                            {{ $pesanan->message }}<br>
                        </address>
                    </div>
                    <!-- Col -->

                    <div class="sm:text-right space-y-2">
                        <!-- Grid -->
                        <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Order date:</dt>
                                <dd class="col-span-2 text-gray-500">{{ $pesanan->datetime }}</dd>
                            </dl>

                        </div>
                        <!-- End Grid -->
                    </div>
                    <!-- Col -->
                </div>
                <!-- End Grid -->

                <!-- Table -->
                <div class="mt-6">
                    <div class="border border-gray-200 p-4 rounded-lg space-y-4 dark:border-gray-700">
                        <div class="hidden sm:grid sm:grid-cols-5">
                            <div class="sm:col-span-2 text-xs font-medium text-gray-500 uppercase">Item</div>
                            <div class="text-left text-xs font-medium text-gray-500 uppercase">kg</div>
                            <div class="text-left text-xs font-medium text-gray-500 uppercase">Harga</div>
                            <div class="text-right text-xs font-medium text-gray-500 uppercase">Amount</div>
                        </div>

                        <div class="hidden sm:block border-b border-gray-200 dark:border-gray-700"></div>
                        @if ($pesanan->botol == 1)
                            <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                <div class="col-span-full sm:col-span-2">
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Item</h5>
                                    <p class="font-medium text-gray-800 dark:text-gray-200">Botol Plastik</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Qty</h5>
                                    <p class="text-gray-800 dark:text-gray-200">{{ $pesanan->jumlah_botol }}</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Rate</h5>
                                    <p class="text-gray-800 dark:text-gray-200">Rp.
                                        {{ number_format($pesanan->harga_botol) }}</p>
                                </div>
                                @php
                                    $botol = $pesanan->harga_botol * $pesanan->jumlah_botol;
                                @endphp
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                                    <p class="sm:text-right text-gray-800 dark:text-gray-200">Rp.
                                        {{ number_format($botol) }}</p>
                                </div>
                            </div>
                        @endif


                        <div class="sm:hidden border-b border-gray-200 dark:border-gray-700"></div>
                        @if ($pesanan->kaleng == 1)
                            <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                <div class="col-span-full sm:col-span-2">
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Item</h5>
                                    <p class="font-medium text-gray-800 dark:text-gray-200">Kaleng</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Qty</h5>
                                    <p class="text-gray-800 dark:text-gray-200">{{ $pesanan->jumlah_kaleng }}</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Rate</h5>
                                    <p class="text-gray-800 dark:text-gray-200">Rp.
                                        {{ number_format($pesanan->harga_kaleng) }}</p>
                                </div>
                                @php
                                    $kaleng = $pesanan->harga_kaleng * $pesanan->jumlah_kaleng;
                                @endphp
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                                    <p class="sm:text-right text-gray-800 dark:text-gray-200">Rp.
                                        {{ number_format($kaleng) }}</p>
                                </div>
                            </div>
                        @endif


                        <div class="sm:hidden border-b border-gray-200 dark:border-gray-700"></div>
                        @if ($pesanan->kardus == 1)
                            <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                <div class="col-span-full sm:col-span-2">
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Item</h5>
                                    <p class="font-medium text-gray-800 dark:text-gray-200">Kardus</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Qty</h5>
                                    <p class="text-gray-800 dark:text-gray-200">{{ $pesanan->jumlah_kardus }}</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Rate</h5>
                                    <p class="text-gray-800 dark:text-gray-200">Rp.
                                        {{ number_format($pesanan->harga_kardus) }}</p>
                                </div>
                                @php
                                    $kardus = $pesanan->harga_kardus * $pesanan->jumlah_kardus;
                                @endphp
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                                    <p class="sm:text-right text-gray-800 dark:text-gray-200">Rp.
                                        {{ number_format($kardus) }}</p>
                                </div>
                            </div>
                        @endif

                        <div class="sm:hidden border-b border-gray-200 dark:border-gray-700"></div>
                        @if ($pesanan->organik == 1)
                            <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                <div class="col-span-full sm:col-span-2">
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Item</h5>
                                    <p class="font-medium text-gray-800 dark:text-gray-200">Baja</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Qty</h5>
                                    <p class="text-gray-800 dark:text-gray-200">{{ $pesanan->jumlah_so }}</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Rate</h5>
                                    <p class="text-gray-800 dark:text-gray-200">Rp.
                                        {{ number_format($pesanan->harga_so) }}</p>
                                </div>
                                @php
                                    $organik = $pesanan->harga_so * $pesanan->jumlah_so;
                                @endphp
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                                    <p class="sm:text-right text-gray-800 dark:text-gray-200">Rp.
                                        {{ number_format($organik) }}</p>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
                <!-- End Table -->

                <!-- Flex -->
                <div class="mt-8 flex sm:justify-end">
                    <div class="w-full max-w-2xl sm:text-right space-y-2">
                        <!-- Grid -->
                        <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Subtotal:</dt>
                                <dd class="col-span-2 text-gray-500">Rp. {{ number_format($pesanan->harga_total) }}</dd>
                            </dl>

                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Total Income:</dt>
                                <dd class="col-span-2 text-gray-500">Rp. {{ number_format($pesanan->harga_total) }}</dd>
                            </dl>

                            <div class="flex justify-end">
                                <hr class="w-2/3  ">
                            </div>
                            <dl class="grid sm:grid-cols-5 gap-x-3 ">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200 ">Amount
                                    paid:</dt>
                                <dd class="col-span-2 text-gray-500">Rp. 10,000</dd>
                            </dl>


                        </div>
                        <!-- End Grid -->
                    </div>
                </div>
                <!-- End Flex -->

                <div class="mt-8 sm:mt-12">
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Thank you!</h4>
                    <p class="text-gray-500">If you have any questions concerning this invoice, use the following
                        contact information:</p>
                    <div class="mt-2">
                        <p class="block text-sm font-medium text-gray-800 dark:text-gray-200">trashporterid@gmail.com</p>
                        <p class="block text-sm font-medium text-gray-800 dark:text-gray-200">+623141867670</p>
                    </div>
                </div>

                <p class="mt-5 text-sm text-gray-500">© 2023 TrashPorter.</p>
            </div>
            <!-- End Card -->

            <!-- Buttons -->
            <div class="mt-6 flex justify-end gap-x-3">
                <form action="{{ route('remove.order', $pesanan->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                        onclick="return confirm('yakin?')">Cancel
                        Order</button>
                </form>

                <button id="pay-button"
                    class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800 w-20"
                    href="#">
                    {{-- <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                        <path
                            d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                    </svg> --}}
                    Pay
                </button>
            </div>
            <!-- End Buttons -->
        </div>
    </div>
    <!-- End Invoice -->

    {{-- <form action="" id="submit_form" method="POST">
        @csrf
        <input type="hidden" name="json" id="json_callback">
    </form>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snap_token }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    
                    console.log(result);
                    send_response_to_form(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                   
                    console.log(result);
                    send_response_to_form(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    
                    console.log(result);
                    send_response_to_form(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });

        function send_response_to_form(result) {
            document.getElementById('json_callback').value = JSON.stringify(result);
            $('#submit_form').submit();
        }
    </script> --}}

    @include('layouts.partials.footer')
@endsection
