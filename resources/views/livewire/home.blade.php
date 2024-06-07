@vite('resources/css/app.css')

<div>
    <div class="bg-cover h-screen w-screen" style="background-image: url('https://kanaanglobal.net/wp-content/uploads/2021/02/bali-wedding-reception.jpg');">
        <div>
        <div class="hero-overlay bg-opacity-60"></div>
        @include('livewire.navbar')
        <div class="hero-content text-center text-amber-300 text-shadow-xl text-shadow-blue-500 text-shadow-offset-2 mt-18">
            <div class="max-w-md">
              <h1 class="mb-5 text-5xl font-bold">Mari Wujudkan Pernikahan Impianmu</h1>
              <p class="mb-5">Bersama HOUSE OF GENDHIS</p>
                <a href="{{ url('listgedung') }}">
                    <button class="px-1.5 py-3 rounded-lg bg-amber-300 text-black font-semibold">Pilih Gedung</button>
                </a>
            </div>
          </div>
        </div>
    </div>
</div>