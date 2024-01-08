<header class="bg-white">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="/" class="-m-1.5 p-1.5">
        <span class="sr-only">Notes</span>
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <?php if ($_SESSION['user'] ?? false) : ?>
        <a href="/notes" class="text-sm font-semibold leading-6 <?= urlIs('/notes') ? 'text-gray-900' : 'text-gray-400' ?>">Notes</a>
      <?php endif; ?>
      <a href="/about" class="text-sm font-semibold leading-6 <?= urlIs('/about') ? 'text-gray-900' : 'text-gray-400' ?>">About</a>
      <a href="/contact" class="text-sm font-semibold leading-6 <?= urlIs('/contact') ? 'text-gray-900' : 'text-gray-400' ?>">Contact</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <?php if ($_SESSION['user'] ?? false) : ?>
        <form action="/logout" method="POST">
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="text-sm font-semibold leading-6 text-gray-900">Logout</button>
        </form>
      <?php else : ?>
        <a href="/register" class="text-sm font-semibold leading-6 text-gray-900">Register <span aria-hidden="true">&rarr;</span></a>
      <?php endif; ?>
    </div>
  </nav>
</header>