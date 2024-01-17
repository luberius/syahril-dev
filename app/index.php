<html>
  <head>
    <title>Welcome to my space!</title>
    <link rel="stylesheet" href="/css/main.bin.css" />
    <link rel="icon" href="/assets/icon/favicon.png"/>
    <script src="/assets/htmx.min.js"></script>
    <script src="/assets/particles.min.js"></script>
    <script>
      particlesJS.load('particles-js', '/assets/particles.json', function() {
        console.log('callback - particles.js config loaded');
      });
    </script>
  </head>
  <body>
    <div id="particles-js" class="particle h-screen w-full"></div>
    <nav class="sticky w-full flex justify-between items-center text-gray-500 px-24 py-6">
      <span class="nav-item">
        <a hx-post="/pages/development.php" hx-target="main">Development</a>
      </span>
      <span class="nav-item">
        <a hx-post="/pages/experiment.php" hx-target="main">Experiment</a>
      </span>
      <a hx-post="/pages/home.php" hx-target="main">
        <img class="cursor-pointer" src="/assets/icon/icon.svg" width="36px"/>
      </a>
      <span class="nav-item">
        <a hx-post="/pages/my-works.php" hx-target="main">My works</a>
      </span>
      <div class="border border-white px-3 hover:bg-white text-gray-400 hover:text-black">
        <span class="uppercase text-sm tracking-widest cursor-pointer">
          <a hx-post="/pages/home.php" hx-target="main">Contact</a>
        </span>
      </div>
    </nav>
    <main>
    </main>
  </body>
</html>
