<header x-data="{ open: false }" class="relative bg-white overflow-hidden w-full h-20 z-50">
  <div class="container-box">
    <div class="flex items-center justify-between py-4 border-b border-gray-600">
      <!-- Logo -->
      <div class="text-2xl font-bold tracking-tight">
        <img src="{{ asset('storage/' . $settings->logo_header) }}" alt="Evoxdev Logo" class="h-6">
      </div>

      <!-- Desktop Navigation -->
      <nav class="space-x-6 uppercase text-sm text-gray-700 hidden lg:flex">
        <a href="#" class="border-b-2 border-black pb-1">Home</a>
        <a href="#" class="hover:text-black">Sobre</a>
        <a href="#" class="hover:text-black">Nossos Serviços</a>
        <a href="#" class="hover:text-black">Contato</a>
      </nav>

      <!-- Mobile Hamburger -->
      <button @click="open = true" class="lg:hidden text-gray-800 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu Overlay -->
  <div
    x-show="open"
    @click.away="open = false"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 -translate-x-full"
    x-transition:enter-end="opacity-100 translate-x-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 translate-x-0"
    x-transition:leave-end="opacity-0 -translate-x-full"
    class="fixed inset-0 bg-white z-50 flex flex-col items-start justify-start p-6 space-y-6 uppercase text-lg font-medium"
    style="display: none;"
  >
    <!-- Close button -->
    <button @click="open = false" class="self-end text-gray-800">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
           viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    <!-- Mobile Navigation -->
    <nav class="flex flex-col w-full text-gray-800 space-y-4 mt-4">
      <a href="#" class="hover:text-black border-b-2 border-black pb-1">Home</a>
      <a href="#" class="hover:text-black">Sobre</a>
      <a href="#" class="hover:text-black">Nossos Serviços</a>
      <a href="#" class="hover:text-black">Contato</a>
    </nav>
  </div>
</header>