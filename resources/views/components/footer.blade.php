<footer class="bg-black text-white py-12 mt-16 border-t border-gray-800">
  <div class="container-box grid grid-cols-1 md:grid-cols-3 gap-8">
    <div>
      <img src="{{ asset('imgs/logo_branca_evox.webp') }}" alt="Evoxdev Logo" class="h-8 mb-4">
      <p class="text-sm text-gray-400">
        Desenvolvimento web focado em performance, visual moderno e soluções personalizadas.
      </p>
    </div>

    <div class="space-y-2">
      <h3 class="text-lg font-semibold uppercase text-white mb-2">Links</h3>
      <ul class="space-y-1 text-sm text-gray-400">
        <li><a href="#" class="hover:text-white transition">Home</a></li>
        <li><a href="#" class="hover:text-white transition">Sobre</a></li>
        <li><a href="#" class="hover:text-white transition">Nossos Serviços</a></li>
        <li><a href="#" class="hover:text-white transition">Contato</a></li>
      </ul>
    </div>

    <div class="space-y-2">
      <h3 class="text-lg font-semibold uppercase text-white mb-2">Contato</h3>
      <p class="text-sm text-gray-400">contato@evoxdev.com.br</p>
      <p class="text-sm text-gray-400">+55 (11) 91234-5678</p>
      <div class="flex space-x-4 mt-3">
        <a href="#" class="hover:text-white transition">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M22 4.01c-.77.35-1.6.58-2.47.69a4.3 4.3 0 0 0 1.89-2.37 8.42 8.42 0 0 1-2.7 1.03A4.21 4.21 0 0 0 16.3 2c-2.33 0-4.21 1.9-4.21 4.25 0 .33.03.65.1.96-3.5-.18-6.6-1.86-8.67-4.42a4.31 4.31 0 0 0-.57 2.14 4.23 4.23 0 0 0 1.87 3.53 4.18 4.18 0 0 1-1.9-.52v.05c0 2.1 1.48 3.85 3.43 4.24a4.2 4.2 0 0 1-1.89.07 4.24 4.24 0 0 0 3.95 2.95 8.46 8.46 0 0 1-6.24 1.77A11.92 11.92 0 0 0 8.29 21c7.55 0 11.68-6.31 11.68-11.79 0-.18-.01-.36-.02-.54a8.45 8.45 0 0 0 2.05-2.13z" />
          </svg>
        </a>
        <a href="#" class="hover:text-white transition">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M12 2.04c-5.5 0-10 4.48-10 10.02 0 4.41 2.86 8.16 6.84 9.49.5.09.68-.22.68-.49 0-.24-.01-.86-.01-1.69-2.78.6-3.37-1.34-3.37-1.34-.46-1.17-1.12-1.48-1.12-1.48-.91-.63.07-.62.07-.62 1 .07 1.52 1.03 1.52 1.03.89 1.52 2.34 1.08 2.9.83.09-.65.35-1.08.64-1.33-2.22-.25-4.56-1.11-4.56-4.94 0-1.09.39-1.98 1.02-2.68-.1-.25-.44-1.27.1-2.65 0 0 .83-.27 2.72 1.02a9.34 9.34 0 0 1 2.48-.34c.84 0 1.68.11 2.48.34 1.89-1.29 2.72-1.02 2.72-1.02.54 1.38.2 2.4.1 2.65.63.7 1.02 1.59 1.02 2.68 0 3.84-2.35 4.68-4.58 4.92.36.31.68.92.68 1.86 0 1.35-.01 2.44-.01 2.78 0 .27.18.59.69.49A10.02 10.02 0 0 0 22 12.06c0-5.54-4.5-10.02-10-10.02z" />
          </svg>
        </a>
      </div>
    </div>
  </div>

  <div class="text-center text-xs text-gray-500 mt-10 border-t border-gray-700 pt-6">
    &copy; {{ date('Y') }} Evoxdev. Todos os direitos reservados.
  </div>
</footer>
