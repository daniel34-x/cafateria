


<x-layouts.app :title="'Inicio - El Juanitas'">
  <section class="grid md:grid-cols-2 gap-6 items-center">
    <div>
      <h1 class="text-3xl md:text-4xl font-bold">Bienvenidos a la Cafetería “El Juanitas”</h1>
      <p class="mt-3 text-cafe/80">
        El Juanitas es la cafetería de la universidad ITA, ahora también en línea.
        Ordena rápido, paga seguro y recoge sin filas.
      </p>
      <a href="{{ route('menu') }}" class="inline-block mt-5 bg-verdeMarron text-white px-5 py-3 rounded shadow-suave hover:opacity-90">
        Pedir ahora
      </a>
    </div>
    <div class="rounded shadow-suave h-48 md:h-64 bg-[url('/images/banner.jpg')] bg-cover bg-center"></div>
  </section>
</x-layouts.app>