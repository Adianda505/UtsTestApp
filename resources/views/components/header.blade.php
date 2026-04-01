<header class="h-15 w-289 mt-2.5">
  <div class="flex items-center justify-between h-full px-6 max-w-6xl mx-auto">
    
    <!-- Title -->
    <h1 class="text-black font-bold text-2xl font-lexend">
      {{ $title }}
    </h1>

    <!-- Search -->
    <form class="flex items-center border border-black rounded-full overflow-hidden h-8 w-72 absolute left-125">
      <input
        type="text"
        placeholder="Cari produk..."
        class="flex-1 px-4 text-sm focus:outline-none bg-transparent"
      />
      <button
        type="submit"
        class="px-4 h-full bg-green-900 text-white text-sm font-medium hover:bg-green-800 transition"
      >
        Search
      </button>
    </form>

    {{--Notification--}}
    
    <div class="flex items-center gap-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black mr-4" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M21 19v1H3v-1l2-2v-6c0-3.1 2.03-5.83 5-6.71V4a2 2 0 0 1 2-2a2 2 0 0 1 2 2v.29c2.97.88 5 3.61 5 6.71v6zm-7 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2"/>
      </svg>
      <span class="font-bold font-lexend">Admin</span>

      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"><title>Admin-users SVG Icon</title><path fill="currentColor" d="M10 9.25c-2.27 0-2.73-3.44-2.73-3.44C7 4.02 7.82 2 9.97 2c2.16 0 2.98 2.02 2.71 3.81c0 0-.41 3.44-2.68 3.44m0 2.57L12.72 10c2.39 0 4.52 2.33 4.52 4.53v2.49s-3.65 1.13-7.24 1.13c-3.65 0-7.24-1.13-7.24-1.13v-2.49c0-2.25 1.94-4.48 4.47-4.48z"/></svg>

    </div>

  </div>
</header>