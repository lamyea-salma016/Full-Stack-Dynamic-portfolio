<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
     <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="bg-black text-white font-mono">

  <!-- Navbar -->
  <nav class="flex justify-between items-center px-8 py-4 border-b border-gray-800">
    <div class="text-green-400 text-xl font-bold">&lt;&gt; Salma.Dev</div>
    <ul class="hidden md:flex gap-8 text-sm text-gray-300">
      <li><a href="#">About Me</a></li>
      <li><a href="#">Resume</a></li>
      <li><a href="#">Contacts</a></li>
    </ul>
    <div class="flex gap-4 text-white text-xl">
      <a href="#"><i class="fab fa-x-twitter"></i></a>
      <a href="#"><i class="fab fa-linkedin"></i></a>
      <a href="#"><i class="fab fa-github"></i></a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="flex flex-col md:flex-row items-center justify-center px-8 py-10 gap-10">
    <!-- Image -->
    <div class="bg-gray-900 p-2 rounded-lg clip-polygon">
      <img src="assets\images\Salma.1.jpg " alt="Profile" class="w-64 h-64 object-cover rounded-lg">
    </div>

    <!-- Text -->
    <div>
      <h2 class="text-lg text-gray-300 mb-2"><span class="text-pink-400">Hey, I'm Salma</span></h2>
      <h1 class="text-4xl font-bold leading-tight">Senior <span class="text-green-400">{Full Stack}</span><br>Web & App Developer<span class="text-green-500">_</span></h1>
      <p class="text-sm text-gray-400 mt-4 max-w-md">
        With expertise in cutting-edge technologies such as <span class="text-pink-400">NodeJS</span>, <span class="text-pink-400">React</span>, <span class="text-pink-400">Angular</span>, and <span class="text-pink-400">Laravel</span>... I deliver web solutions that are both innovative and robust.
      </p>
      <div class="flex gap-4 mt-5 text-3xl text-white">
        <i class="devicon-angularjs-plain colored"></i>
        <i class="devicon-nodejs-plain colored"></i>
        <i class="devicon-laravel-plain colored"></i>
        <i class="devicon-react-original colored"></i>
        <span class="text-gray-400 text-sm ml-2 mt-1">... and more</span>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center px-8 py-8 border-t border-gray-800">
    <div>
      <div class="text-3xl text-green-400">👨‍💻3+</div>
      <p class="text-sm text-gray-400">Years Experience</p>
    </div>
    <div>
      <div class="text-3xl text-green-400">📁15+</div>
      <p class="text-sm text-gray-400">Projects Completed</p>
    </div>
    <div>
      <div class="text-3xl text-green-400">⭐10+</div>
      <p class="text-sm text-gray-400">Satisfied Clients</p>
    </div>
    <div>
      <div class="text-3xl text-green-400">📞 24/7</div>
      <p class="text-sm text-gray-400">Support Provided</p>
    </div>
  </section>

</body>
</html>