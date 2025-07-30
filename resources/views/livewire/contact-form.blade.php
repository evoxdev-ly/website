<section class="bg-white border-t border-gray-600 py-6">
  <div class="container-box">
    <div>
      <h2 class="text-3xl font-bold text-black mb-4">Fale com a gente</h2>
      <p class="text-gray-600 mb-4">Preencha o formulário abaixo e retornaremos o mais rápido possível.</p>

      <form wire:submit.prevent="submit" class="space-y-4">
        @csrf

        <div>
          <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
          <x-input 
            wire:model="name" 
            id="nome" 
            :class="$errors->has('name') ? 'border-red-400 focus:ring-red-50' : ''"
          />
          <x-input-error name="name" />
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
          <x-input 
            type="email" 
            wire:model="email" 
            id="email" 
            :class="$errors->has('email') ? 'border-red-400 focus:ring-red-50' : ''"
          />
          <x-input-error name="email" />
        </div>

        <div>
          <label for="assunto" class="block text-sm font-medium text-gray-700 mb-1">Assunto</label>
          <x-input 
            wire:model="subject" 
            id="assunto" 
            :class="$errors->has('subject') ? 'border-red-400 focus:ring-red-50' : ''"
          />
          <x-input-error name="subject" />
        </div>

        <div>
          <label for="mensagem" class="block text-sm font-medium text-gray-700 mb-1">Mensagem</label>
          <textarea 
            wire:model="message" 
            id="mensagem" 
            rows="6"
            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-black focus:border-black transition {{ $errors->has('message') ? 'border-red-400 focus:ring-red-50' : ''}}"
          ></textarea>
          <x-input-error name="message" />
        </div>

        <div class="flex gap-2 items-center">
          <x-button type="submit">
            Enviar mensagem
          </x-button>
          <div wire:loading>
            <x-spinner />
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
