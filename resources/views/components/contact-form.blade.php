<section class="bg-white border-t border-gray-600 py-6">
  <div class="container-box">
    <div class="">
      {{-- <div>
        <img src="{{ asset('imgs/logo_evox.png') }}" alt="Evoxdev Logo" class="h-12 mb-4">
      </div> --}}
      <h2 class="text-3xl font-bold text-black mb-4">Fale com a gente</h2>
      <p class="text-gray-600 mb-4">Preencha o formulário abaixo e retornaremos o mais rápido possível.</p>
  
      <form method="POST" action="" class="space-y-3">
        @csrf
  
        <div>
          <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
          <x-input />
        </div>
  
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
          <x-input type="email" />
        </div>
  
        <div>
          <label for="assunto" class="block text-sm font-medium text-gray-700 mb-1">Assunto</label>
          <x-input />
        </div>
  
        <div>
          <label for="mensagem" class="block text-sm font-medium text-gray-700 mb-1">Mensagem</label>
          <textarea name="mensagem" id="mensagem" rows="6" required
            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-black focus:border-black transition"></textarea>
        </div>
  
        <div>
          <button type="submit"
            class="inline-block bg-black text-white px-6 py-3 rounded-lg uppercase tracking-wide font-medium hover:bg-gray-900 transition">
            Enviar Mensagem
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
