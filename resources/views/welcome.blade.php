<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
     <script src="https://cdn.tailwindcss.com"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <style>
      .class{
    margin-left: 30px;

}

/* img {
  margin-left: 300px;
} */
     </style>
    
</head>


<body class="bg-black text-white font-mono">

  <!-- Navbar -->
  <nav class="flex justify-between items-center px-8 py-4 border-b border-gray-800">
    <div class="text-green-400 text-xl font-bold">&lt;&gt; Umme Salma Lamyea</div>
    <ul class="hidden md:flex gap-8 text-sm text-gray-300">
      <li><a href="#">About Me</a></li>
      <li><a href="#">Resume</a></li>
      <li><a href="#">Contacts</a></li>
    </ul>
    <div class="flex gap-4 text-white text-xl">
  <a href="https://twitter.com/nuyaaida45918" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-x-twitter"></i>
  </a>
  <a href="https://www.linkedin.com/in/lamyeasalma" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-linkedin"></i>
  </a>
  <a href="https://github.com/lamyea-salma016" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-github"></i>
  </a>
</div>
  </nav>

  <!-- Hero Section -->
  <section class="flex flex-col md:flex-row items-center justify-center px-8 py-10 gap-10">
    <!-- Image -->
    <div class="bg-gray-900 p-2 rounded-lg clip-polygon">
      <img src="assets\images\Salma2.jpg " alt="Profile" class="w-64 h-96 object-cover rounded-lg">
    </div>

    <!-- Text -->
    <div>
      <h2 class="text-lg text-gray-300 mb-2"><span class="text-pink-400">Hey, I'm Salma</span></h2>
      <h1 class="text-4xl font-bold leading-tight">Junior <span class="text-green-400">{UI/UX}</span><br>Designer<span class="text-green-500">_</span></h1>
      <p class="text-sm text-gray-400 mt-4 max-w-md">
      Innovative UI/UX designer proficient in  <span class="text-pink-400">Wireframing(e.g.., Figma, Adobe XD, Sketch)</span>, <span class="text-pink-400">Basic HTML & CSS(for developer handoff)</span>, <span class="text-pink-400"></span>, and <span class="text-pink-400">Laravel</span>... I create user experiences that are visually engaging and intuitively designed, ensuring seamless interaction and high user satisfaction across digital platforms.
      </p> <br> <br>
       <div class="icons">
       <i class="fa-brands fa-html5 text-2xl" style="color: #ff0000;"></i>
       <i class="fa-brands fa-figma text-2xl"  style="color: #ffffff;"></i>
       <i class="fa-brands fa-css text-2xl" style="color: #d057af;"></i>
       <i class="fa-brands fa-react text-2xl" style="color: #1db889;"></i>
       </div>

      <div class="flex gap-4 mt-5 text-3xl text-white">
        <i class="devicon-angularjs-plain colored"></i>
        <i class="devicon-nodejs-plain colored"></i>
        <i class="devicon-laravel-plain colored"></i>
        <i class="devicon-react-original colored"></i>
        
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









  <!-- About Me Section -->
  <section id="about" class="px-8 py-16 border-t border-gray-800">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-8">
        <span class="text-green-400">&lt;</span>About Me<span class="text-green-400">/&gt;</span>
      </h2>
      <div class="grid md:grid-cols-2 gap-8 items-center">
        <div>
          <p class="text-gray-300 mb-4">
            I'm a Professional UI/UX Designer with a strong background in computer science and web development. 
            My journey began with a undergrade Degree in  Computer Science, where I developed a deep understanding of 
            user-centered design principles.
          </p>
          <p class="text-gray-300 mb-4">
            I specialize in creating intuitive and visually appealing digital experiences that bridge the gap 
            between functionality and aesthetics. My technical background allows me to collaborate effectively 
            with development teams and ensure designs are both beautiful and feasible.
          </p>
          <p class="text-gray-300">
            When I'm not designing, you'll find me exploring new design trends, contributing to open-source 
            projects, or mentoring aspiring designers in the community.
          </p>
        </div>
        <div class="bg-gray-900 p-6 rounded-lg">
          <h3 class="text-xl font-bold text-pink-400 mb-4">Quick Facts</h3>
          <ul class="space-y-2 text-gray-300">
            <li><span class="text-green-400">▸</span>Cooking is one of my favorite ways to spend my free time.</li>
            <li><span class="text-green-400">▸</span>I enjoy singing whenever I get the chance.</li>
            <li><span class="text-green-400">▸</span> Crafting is another thing I love most ,I'm quite good at it.  </li>
            <li><span class="text-green-400">▸</span>I have a deep affection for children and love being around them.</li>
            <li><span class="text-green-400">▸</span> Poetry really speaks to me, I find it beautiful and inspiring.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
 













   <!-- Education Section -->
   <section id="education" class="px-8 py-16 border-t border-gray-800 bg-gray-900">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-12">
        <span class="text-green-400">&lt;</span>Education & Research<span class="text-green-400">/&gt;</span>
      </h2>
      <div class="grid md:grid-cols-2 gap-8">
        <!-- Education Column -->
        <div>
          <h3 class="text-2xl font-bold text-pink-400 mb-6 flex items-center">
            <i class="fas fa-graduation-cap mr-3"></i>Education
          </h3>
          <div class="space-y-6">
            <div class="bg-black p-6 rounded-lg border border-gray-700">
              <div class="flex justify-between items-start mb-2">
                <h4 class="text-lg font-bold text-green-400">Daffodil International University</h4>
                <span class="text-sm text-gray-400">2022-2025</span>
              </div>
              <p class="text-white font-semibold">Bachelor's Degree in Computer Science</p>
            </div>
            
            
            
            <div class="bg-black p-6 rounded-lg border border-gray-700">
              <div class="flex justify-between items-start mb-2">
                <h4 class="text-lg font-bold text-green-400">Safiuddin Sarkar Model Academy & College</h4>
                <span class="text-sm text-gray-400">2018-2020</span>
              </div>
              <p class="text-white font-semibold">Higer Secondary School Cerificate</p>
            </div>
            
            <div class="bg-black p-6 rounded-lg border border-gray-700">
              <div class="flex justify-between items-start mb-2">
                <h4 class="text-lg font-bold text-green-400">Shahajuddin Sarker Model school & College</h4>
                <span class="text-sm text-gray-400">2016-2018</span>
              </div>
              <p class="text-white font-semibold"> Secondary School Cerificate</p>
            </div>
          </div>
        </div>





        <!-- Research Column -->
        <div>
          <h3 class="text-2xl font-bold text-pink-400 mb-6 flex items-center">
            <i class="fas fa-microscope mr-3"></i>Research
          </h3>
          <div class="space-y-6">
            <div class="bg-black p-6 rounded-lg border border-gray-700">
              <div class="flex justify-between items-start mb-2">
                <h4 class="text-lg font-bold text-green-400">Advanced Data Analytics with Big Data Tools</h4>
                <span class="text-sm text-gray-400">2022-2023</span>
              </div>
              <p class="text-gray-300">Utilized big data tools for advanced analytics and insights.</p>
            </div>
            
            <div class="bg-black p-6 rounded-lg border border-gray-700">
              <div class="flex justify-between items-start mb-2">
                <h4 class="text-lg font-bold text-green-400">Cloud-Native Application Architectures</h4>
                <span class="text-sm text-gray-400">2023-2024</span>
              </div>
              <p class="text-gray-300">Studied best practices for designing cloud-native applications.</p>
            </div>
            
            <div class="bg-black p-6 rounded-lg border border-gray-700">
              <div class="flex justify-between items-start mb-2">
                <h4 class="text-lg font-bold text-green-400">AI-Driven User Experience Personalization</h4>
                <span class="text-sm text-gray-400">2023-2024</span>
              </div>
              <p class="text-gray-300">Leveraged AI to personalize user experiences based on behavior.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>












  <!-- Skills Section -->
  <section id="skills" class="px-8 py-16 border-t border-gray-800">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-12">
        <span class="text-green-400">&lt;</span>My Skills & Offerings<span class="text-green-400">/&gt;</span>
      </h2>
      <div class="grid md:grid-cols-3 gap-8">
        <!-- Design Skills -->
        <div class="bg-gray-900 p-6 rounded-lg">
          <div class="text-3xl text-pink-400 mb-4">
            <i class="fas fa-palette"></i>
          </div>
          <h3 class="text-xl font-bold text-white mb-4">UI/UX Design</h3>
          <ul class="space-y-2 text-gray-300">
            <li><span class="text-green-400">•</span> User Research & Analysis</li>
            <li><span class="text-green-400">•</span> Wireframing & Prototyping</li>
            <li><span class="text-green-400">•</span> Visual Design</li>
            <li><span class="text-green-400">•</span> Interaction Design</li>
            <li><span class="text-green-400">•</span> Usability Testing</li>
          </ul>
          <div class="flex gap-3 mt-4">
            <i class="fab fa-figma text-2xl text-white"></i>
            <i class="fas fa-pen-nib text-2xl text-purple-400"></i>
            <i class="fas fa-vector-square text-2xl text-blue-400"></i>
          </div>
        </div>

        <!-- Development Skills -->
        <div class="bg-gray-900 p-6 rounded-lg">
          <div class="text-3xl text-green-400 mb-4">
            <i class="fas fa-code"></i>
          </div>
          <h3 class="text-xl font-bold text-white mb-4">Frontend Development</h3>
          <ul class="space-y-2 text-gray-300">
            <li><span class="text-green-400">•</span> HTML5 & CSS3</li>
            <li><span class="text-green-400">•</span> JavaScript (ES6+)</li>
            <li><span class="text-green-400">•</span> React.js</li>
            <li><span class="text-green-400">•</span> Tailwind CSS</li>
            <li><span class="text-green-400">•</span> Responsive Design</li>
          </ul>
          <div class="flex gap-3 mt-4">
            <i class="fab fa-html5 text-2xl text-red-500"></i>
            <i class="fab fa-css3-alt text-2xl text-blue-500"></i>
            <i class="fab fa-react text-2xl text-cyan-400"></i>
            <i class="fab fa-js-square text-2xl text-yellow-400"></i>
          </div>
        </div>

       
      </div>
    </div>
  </section>




<!-- Projects Section -->
<section id="projects" class="px-8 py-16 border-t border-gray-800 bg-gray-900">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center mb-12">
      <span class="text-green-400">&lt;</span>My Projects<span class="text-green-400">/&gt;</span>
    </h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Project 1 -->
      <div class="bg-black rounded-lg border border-gray-700 hover:border-green-400 transition-colors p-6">
        <div class="text-4xl text-pink-400 mb-4">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <h3 class="text-xl font-bold text-white mb-2">Online Store</h3>
        <p class="text-gray-400 mb-4">Simple e-commerce website with product listing and shopping cart functionality.</p>
        <div class="flex gap-2 mb-4">
          <span class="px-2 py-1 bg-blue-600 text-xs rounded">HTML</span>
          <span class="px-2 py-1 bg-green-600 text-xs rounded">CSS</span>
          <span class="px-2 py-1 bg-yellow-600 text-xs rounded">JavaScript</span>
        </div>
        <div class="flex gap-3">
          <a href="#" class="text-green-400 hover:text-green-300"><i class="fas fa-eye"></i> View</a>
          <a href="#" class="text-green-400 hover:text-green-300"><i class="fab fa-github"></i> Code</a>
        </div>
      </div>

      

      

     

      <!-- Project 5 -->
      <div class="bg-black rounded-lg border border-gray-700 hover:border-green-400 transition-colors p-6">
        <div class="text-4xl text-purple-400 mb-4">
          <i class="fas fa-image"></i>
        </div>
        <h3 class="text-xl font-bold text-white mb-2">Photo Gallery</h3>
        <p class="text-gray-400 mb-4">Responsive image gallery with lightbox effect and filtering options.</p>
        <div class="flex gap-2 mb-4">
          <span class="px-2 py-1 bg-pink-600 text-xs rounded">HTML</span>
          <span class="px-2 py-1 bg-indigo-600 text-xs rounded">CSS</span>
          <span class="px-2 py-1 bg-green-600 text-xs rounded">jQuery</span>
        </div>
        <div class="flex gap-3">
          <a href="#" class="text-green-400 hover:text-green-300"><i class="fas fa-eye"></i> View</a>
          <a href="#" class="text-green-400 hover:text-green-300"><i class="fab fa-github"></i> Code</a>
        </div>
      </div>

      <!-- Project 6 -->
      <div class="bg-black rounded-lg border border-gray-700 hover:border-green-400 transition-colors p-6">
        <div class="text-4xl text-red-400 mb-4">
          <i class="fas fa-heart"></i>
        </div>
        <h3 class="text-xl font-bold text-white mb-2">Recipe App</h3>
        <p class="text-gray-400 mb-4">Simple recipe sharing app with search and favorite features.</p>
        <div class="flex gap-2 mb-4">
          <span class="px-2 py-1 bg-cyan-600 text-xs rounded">React</span>
          <span class="px-2 py-1 bg-green-600 text-xs rounded">API</span>
        </div>
        <div class="flex gap-3">
          <a href="#" class="text-green-400 hover:text-green-300"><i class="fas fa-eye"></i> View</a>
          <a href="#" class="text-green-400 hover:text-green-300"><i class="fab fa-github"></i> Code</a>
        </div>
      </div>

    </div>
  </div>
</section>



  









  <!-- Footer -->
  <footer id="contact" class="px-8 py-16 border-t border-gray-800 bg-black">
    <div class="max-w-6xl mx-auto">
      <div class="grid md:grid-cols-3 gap-8 mb-8">
        <!-- Contact Info -->
        <div>
          <h3 class="text-2xl font-bold text-green-400 mb-4">
            <span class="text-green-400">&lt;</span>Get In Touch<span class="text-green-400">/&gt;</span>
          </h3>
          <p class="text-gray-300 mb-4">
            Let's collaborate on your next project! I'm always excited to work on innovative designs and challenging problems.
          </p>
          <div class="space-y-2">
            <div class="flex items-center text-gray-300">
              <i class="fas fa-envelope text-pink-400 mr-3"></i>
              <span>salma.lamyea@email.com</span>
            </div>
            <div class="flex items-center text-gray-300">
              <i class="fas fa-phone text-pink-400 mr-3"></i>
              <span>+880 123 456 789</span>
            </div>
            <div class="flex items-center text-gray-300">
              <i class="fas fa-map-marker-alt text-pink-400 mr-3"></i>
              <span>Dhaka, Bangladesh</span>
            </div>
          </div>
        </div>

        <!-- Quick Links -->
        <div>
          <h3 class="text-xl font-bold text-white mb-4">Quick Links</h3>
          <ul class="space-y-2">
            <li><a href="#about" class="text-gray-300 hover:text-green-400 transition-colors">About Me</a></li>
            <li><a href="#education" class="text-gray-300 hover:text-green-400 transition-colors">Education</a></li>
            <li><a href="#skills" class="text-gray-300 hover:text-green-400 transition-colors">Skills</a></li>
            <li><a href="#projects" class="text-gray-300 hover:text-green-400 transition-colors">Projects</a></li>
            <li><a href="#contact" class="text-gray-300 hover:text-green-400 transition-colors">Contact</a></li>
          </ul>
        </div>

        <!-- Services -->
        <div>
          <h3 class="text-xl font-bold text-white mb-4">Services</h3>
          <ul class="space-y-2 text-gray-300">
            <li><span class="text-green-400">▸</span> UI/UX Design</li>
            
            <li><span class="text-green-400">▸</span> Mobile App Design</li>
            <li><span class="text-green-400">▸</span> User Research</li>
            <li><span class="text-green-400">▸</span> Prototyping</li>
          </ul>
        </div>
      </div>
</div>
</footer>



</body>
</html>