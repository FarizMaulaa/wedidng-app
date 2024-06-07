@vite('resources/css/app.css')
<div>
    @include('livewire.navbar')
    <div class="flex items-center justify-center mt-8">
        <div class="flex flex-row">
            <div class="mr-6 mt-7">
                <h2 class="text-2xl font-bold">Dinner Package</h2>
                <div  class="text-lg">
                <p>Ideal for an intimate and</p>
                <p>elegant experience in</p>
                <p>restaurants, bars, or cafes,</p>
                <p>suitable for up to 120 </p>
                <p> guests.</p>
                </div>
            </div>
            <div class="bg-black-200 w-64 h-80 rounded-lg shadow-2xl">
                    <a href="{{ url('/deskripsi') }}"><img class="rounded-t-lg" src="https://www.woke.id/wp-content/uploads/2019/12/HIS-Patrajasa-728x409.jpg" alt="Shoes" /></a>
                    <div class="ml-5">
                        <h2 class="font-bold text-lg mt-2">HIS Patrajasa Yudistira Grand Ballroom</h2>
                        <p class="text-sm"> Kuningan , Jakarta Selatan</p>
                        <p class="text-sm mt-1"> 800 PAX</p>
                        <p class="font-bold text-xl text-amber-300 mt-4">Rp338.800.000,00</p>            
                    </div>
                </div>
            </div>
            <div class="bg-black-200 w-64 h-80 rounded-lg shadow-2xl m-3">
                    <img class="rounded-t-lg" src="https://www.woke.id/wp-content/uploads/2019/12/Balai-Makarti-Muktitama-728x546.jpg" alt="Shoes" />
                    <div class="ml-5">
                        <h2 class="font-bold text-lg mt-2">Balai Makarti Muktitama</h2>
                         <p class="text-sm">Kuningan , Jakarta Selatan</p>
                        <p class="text-sm -mt-1"> 600 PAX</p>
                        <p class="font-bold text-xl text-amber-300 mt-4">Rp338.800.000,00</p>            
                    </div>
            </div>
    </div>
    @include('livewire.footer')
</div>
