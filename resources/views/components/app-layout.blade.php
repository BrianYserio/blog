<!doctype html>
<html class="h-full bg-white">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body class="h-full">
    <header class="relative bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
  </body>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelectorAll(".collapsible-toggle").forEach((toggle) => {
        toggle.addEventListener("click", function () {
          let menu = this.nextElementSibling; // The submenu <ul>
          let arrowIcon = this.querySelector(".arrow");

          if (menu.offsetHeight !== 0) {
            menu.style.maxHeight = '0px';
            arrowIcon.classList.remove("rotate-90");
          } else {
            menu.style.maxHeight = menu.scrollHeight + "px";
            arrowIcon.classList.add("rotate-90");
          }
        });
      });
    });
  </script>
</html>
