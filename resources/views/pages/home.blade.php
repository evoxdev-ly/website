<x-app>
  <x-slot name="title">Home</x-slot>

  <!-- Hero -->
  <main class="relative">
    <!-- Imagem de fundo fixada embaixo -->
    <img src="{{ asset('imgs/hero_wallpaper.png') }}"
      class="absolute bottom-0 left-0 w-full h-auto pointer-events-none z-0" alt="">

    <!-- Container do conteúdo -->
    <div class="relative z-10 container-box pt-4">
      <p class="text-sm sm:text-base text-black mb-2">Generation your vision</p>

      <h1 class="text-5xl sm:text-6xl font-extrabold text-black leading-tight mb-6">
        Crafting your<br>
        fantasies with a<br>
        <span class="text-black">twist of creativity.</span>
      </h1>

      <p class="text-sm sm:text-base text-white max-w-md mt-60">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis consequat lorem a erat pharetra dignissim. In
        efficitur, diam non.
      </p>
    </div>
  </main>



  <section class="bg-black py-16">
    <div class="container-box">
      <h2 class="text-white text-lg mb-12">Nossa visão</h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <x-feature-card title="Entrega rápida de projetos" active>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis quam ullamcorper, rutrum dolor eu,
        </x-feature-card>

        <x-feature-card title="Entrega rápida de projetos">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis quam ullamcorper, rutrum dolor eu,
        </x-feature-card>

        <x-feature-card title="Entrega rápida de projetos">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis quam ullamcorper, rutrum dolor eu,
        </x-feature-card>
      </div>
    </div>
  </section>


  <section class="py-16">
    <div class="container-box">
      <h2 class="text-lg font-medium mb-8">Nossos serviços</h2>

      <div class="flex items-center justify-between border-t border-b py-6 group relative">
        <div class="flex flex-col md:flex-row md:items-center gap-2 md:gap-6">
          <h3 class="text-xl font-semibold">UI/UX Design</h3>
          <p class="text-sm text-gray-600 max-w-md">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis consequat lorem a erat.com ipsum dolor
          </p>
        </div>

        <div class="ml-auto">
          <button class="bg-black text-white rounded-full w-8 h-8 flex items-center justify-center">
            →
          </button>
        </div>
      </div>

      <!-- Outros itens -->
      @foreach (['Blogs', 'Landing pages', 'UI/UX Design'] as $service)
        <div class="flex items-center justify-between border-b py-6 group">
          <div class="flex flex-col md:flex-row md:items-center gap-2 md:gap-6">
            <h3 class="text-xl font-semibold">{{ $service }}</h3>
            <p class="text-sm text-gray-600 max-w-md">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis consequat lorem a erat
            </p>
          </div>

          <div class="ml-auto">
            <button
              class="border border-black rounded-full w-8 h-8 flex items-center justify-center group-hover:bg-black group-hover:text-white transition">
              →
            </button>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <x-contact-form />

</x-app>
