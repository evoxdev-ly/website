<x-app>
  <x-slot name="title">Home</x-slot>

  <main class="relative">
    <img src="{{ asset('imgs/hero_wallpaper.png') }}"
      class="absolute bottom-0 left-0 w-full h-auto pointer-events-none z-0" alt="">

    <div class="relative z-10 container-box pt-4">
      <p class="text-sm sm:text-base text-black mb-2">{{ $home->hero_subtitle }}</p>

      <h1 class="text-5xl sm:text-6xl font-extrabold text-black leading-tight mb-6">
        Crafting your<br>
        fantasies with a<br>
        <span class="text-black">twist of creativity.</span>
      </h1>

      <p class="text-sm sm:text-base text-white max-w-md mt-60">
        {{ $home->hero_description }}
      </p>
    </div>
  </main>



  <section class="bg-black py-16">
    <div class="container-box">
      <h2 class="text-white text-lg font-medium mb-12">Nossa missão, visão e valor</h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <x-feature-card :title="$home->mission_title" active>
          {{ $home->mission_text }}
        </x-feature-card>

        <x-feature-card :title="$home->vision_title">
          {{ $home->vision_text }}
        </x-feature-card>

        <x-feature-card :title="$home->value_title">
          {{ $home->value_text }}
        </x-feature-card>
      </div>
    </div>
  </section>


  <section class="py-16">
    <div class="container-box">
      <h2 class="text-lg font-medium mb-12">Nossos serviços</h2>

      @foreach ($home->services as $service)
        <x-service-card :title="$service->title" :description="$service->description" :href="$service->link" />
      @endforeach
    </div>
  </section>

  <section class="relative overflow-hidden py-16 bg-white">
    <div class="container-box mb-10">
        <p class="text-sm text-gray-600">Projetos</p>
        <h2 class="text-4xl font-extrabold text-black leading-tight">
          Lorem ipsum dolor <br> sit amet, consectetur
        </h2>
    </div>

    <div class="relative overflow-hidden">
        <div class="flex w-max animate-marquee space-x-8">
          @foreach ($home->projects as $project)
            <x-project-card 
              :image="asset('storage/' . $project->image)" 
              :title="$project->title" 
              :description="$project->description" 
              :href="$project->link" 
            />
          @endforeach
        </div>
    </div>
</section>


  <livewire:contact-form />

</x-app>
