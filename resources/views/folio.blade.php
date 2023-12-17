<!DOCTYPE html>
<html lang="en"class="">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>portofolio</title>
   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
<style type="text/tailwindcss">
 @layer utilities {
  *{
     borer:1px solid red;
  }
  body{
     font-family:arial,Comic Sans MS,Monospace;
  }
  .navbar-fixed{
    @apply fixed z-[9999] bg-white bg-opacity-30;
    backdrop-filter:blur(5px);
    box-shadow:inset 0 -1px 0 0 rgba(0,0,0,0.1);
  }
  .hamburger-line{
    @apply w-[28px] h-[2px] my-2 block bg-dark rounded-full;
  }
  .hamburger-active > span:nth-child(1){
    @apply rotate-45;
  }
  .hamburger-active > span:nth-child(2){
    @apply scale-0;
  }
  .hamburger-active > span:nth-child(3){
    @apply origin-bottom-left -rotate-45;
  }
 }
</style>
   
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#3B82F6',
            dark:'#0F172A',
         }
       }
    }
  }
  </script>
</head>
<body>
 {{--  header start --}}
 <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
   <div class="container mx-auto ">
     <div class="flex items-center justify-between relative">
       <div class="px-4">
         <a href="#home" class="font-bold text-lg text-primary block py-4 text-red-600">
           <svg role="img" width="30" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Laravel</title><path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z"/></svg>
         </a>
       </div>
       <div class="flex items-center px-4">
         <button id="hamburger"name="hamburger"type="button" class="block absolute right-4 md:hidden">
           <span class="hamburger-line transition duration-500 ease-in-out origin-top-left "></span>
           <span class="hamburger-line transition duration-500"></span>
           <span class="hamburger-line transition duration-500 ease-in-out  origin-bottom-left"></span>
         </button>
           {{-- nav menu --}}
           <nav id="nav-menu"class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[200px] w-full right-4 md:right-0 top-full md:block md:static md:bg-transparent md:max-w-full md:shadow-none md:rounded-none">
             <ul class="block md:flex">
               <li class="group">
                 <a href="#beranda"class="text-base  text-slate-400 hover:text-primary py-2 mx-8 md:mx-5 md:text-xl flex">beranda</a>
               </li>
               <li class="group">
                 <a href="#portofolio"class="text-base  text-slate-400 hover:text-primary py-2 mx-8 md:mx-5 md:text-xl flex">portofolio</a>
               </li>
               <li class="group">
                 <a href="#about"class="text-base text-slate-400 hover:text-primary py-2 mx-8 md:mx-0  md:text-xl flex">about</a>
               </li>

             </ul>
           </nav>
       </div>
     </div>
   </div>
 </header>
 {{--  header end --}}
 
 {{--  hero section start --}}
  <section id="home"class="pt-20">
    <div class="container mx-auto">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-4 md:w-1/2 ">
          <h1 class="text-primary text-base font-semibold md:text-xl">Hallo Semua, Saya  
          <span class="block font-semibold text-3xl text-dark md:text-4xl">Triyono</span>
          </h1>
          <h2 class="mt-2 mb-3 md:text-2xl">Web Developer | <span class="text-dark text-primary  ">Backend Developer</span></h2>
          <p class="text-slate-400 leading-relaxed mb-10 md:text-xl">Saya membuat website menggunakan laravel framework untuk backend dan tailwindcss untuk frontend.</p>
  
        <a href="https://www.instagram.com/tri_code00?igshid=YTQwZjQ0NmI0OA=="class="bg-primary text-white font-semibold rounded-full px-4 py-2 hover:shadow-lg hover:bg-teal-400 transition-duration-300 ease-in-out">Hubungi saya</a>
        </div>
        
        <div class="w-full self-end px-4 md:w-1/2">
          <div class="relative -mt-1 md:mt-0 md:right-0">
            <img src="/images/profile.png"class="brightness-150 w-full mx-auto" alt="">
            <span class="absolute bottom-0 -z-10">
              <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
  <path fill="#3B82F6" d="M40.6,-49C56.3,-44.5,75.3,-37.6,77.8,-26.2C80.3,-14.8,66.3,1.1,60.4,19.7C54.5,38.3,56.6,59.6,47.9,70.2C39.2,80.8,19.6,80.8,3.6,75.8C-12.3,70.8,-24.7,60.9,-38.1,51.8C-51.5,42.7,-66,34.4,-71.8,22C-77.7,9.6,-75,-6.9,-67.1,-18.8C-59.1,-30.7,-46,-38,-34,-43.7C-21.9,-49.4,-11,-53.6,0.7,-54.6C12.4,-55.6,24.9,-53.5,40.6,-49Z" transform="translate(100 100)" />
</svg>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
 {{--  hero section end --}}
 
 {{--  about section start --}}
 <section class="pt-10 pb-10  w-full">
   <div class="container mx-auto">
     <div class="flex flex-wrap">
       <div class="w-full px-4 mt-10 md:w-1/2">
         <h4 class="font-bold uppercase text-primary text-lg ">Tentang Saya</h4>
         <h2 class="text-dark font-bold">Otodidak Developer | <span class="text-primary">Laravel</span> </h2>
         <p class="text-slate-400">Seorang yang mempelajari Programming web development secara otodidak dari youtube,artikel dan lainnya, framework  <span class="text-primary">Laravel</span>  adalah alat tempur yang saya sukai dan paling sering digunakan.</p>
       </div>
       
       <div class="w-full px-4 mt-10 md:w-1/2">
         <h3 class="font-bold text-primary text-lg">Minat Collab Projects</h3>
         <p class="text-slate-400 mb-5">Terbuka untuk pertemanan,diskusi,berbagi ilmu dan deeptalk silahkan hubungi saya</p>
         <div class="flex items-center">
           {{-- Instagram --}} 
          <a href="https://www.instagram.com/tri_code00?igshid=YTQwZjQ0NmI0OA=="target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary transition-duration-300 ease-in-out text-slate-400 hover:text-white">
           <svg role="img" width="20" class="fill-current"viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
           </a>
           {{-- linkdin --}}
          <a href="#"target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary transition-duration-300 ease-in-out text-slate-400 hover:text-white">
           <svg role="img"  width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
           </a>
          {{-- github --}}
          <a href="#"target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary transition-duration-300 ease-in-out text-slate-400 hover:text-white">
           <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
           </a>
         </div>
       </div>
     </div>
   </div>
 </section>
 {{--  about section end --}}
 
 {{--  portofoliosection start --}}
 <section id="portofolio" class="pt-36 pb-16 bg-slate-100">
   <div class="container mx-auto">
     <div class="w-full px-4 flex flex-wrap">
       <div class="max-w-xl mx-auto text-center mb-16">
         <h4 class="font-semibold text-primary text-lg mb-2 uppercase">portofolio</h4>

         <p class="font-medium text-md text-slate-400">Menampilkan beberapa hasil project yang pernah saya buat, meliputi website company profile,landing page, website artikel dan portofolio...
         </p>
       </div>
     </div>
     
 {{--  portofolio view start --}}
     <div class="w-full px-4 flex flex-wrap justify-center">
       <div class="mb-12 p-4 md:w-1/2">
         <div class="rounded-lg shadow-lg overflow-hidden  hover:scale-95 transition-all duration-500">
           <img src="{{asset('images/goodbrief-minivan.jpg')}}" alt=""width="w-full"class="group-hover:scale-125 transition-all duration-500">
         </div>
         <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Goodbrief Project</h3>
         <p class="font-medium text-base text-dark text-slate-400">Harpun adalah perusahaan yang bergerak di bidang penjualan minivan berkualitas, minimalis,dan dengan harga yang bersahabat!</p>
       </div>
 {{--  portofolio view end --}}
 {{--  portofolio view start --}}
       <div class="mb-12 p-4 md:w-1/2">
         <div class="rounded-lg shadow-lg overflow-hidden  hover:scale-95 transition-all duration-500">
           <img src="{{asset('images/img.jpeg')}}" alt=""width="w-full"class="group-hover:scale-125 transition-all duration-500">
         </div>
         <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing page website</h3>
         <p class="font-medium text-base text-dark text-slate-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, iure in aliquid illo dicta adipisci perferendis deserunt itaque totam! Ratione!</p>
       </div>
 {{--  portofolio view end --}}
 {{--  portofolio view start --}}
       <div class="mb-12 p-4 md:w-1/2">
         <div class="rounded-lg shadow-lg overflow-hidden  hover:scale-95 transition-all duration-500">
           <img src="{{asset('images/img.jpeg')}}" alt=""width="w-full"class="group-hover:scale-125 transition-all duration-500">
         </div>
         <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing page website</h3>
         <p class="font-medium text-base text-dark text-slate-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, iure in aliquid illo dicta adipisci perferendis deserunt itaque totam! Ratione!</p>
       </div>
 {{--  portofolio view end --}}
 {{--  portofolio view start --}}
       <div class="mb-12 p-4 md:w-1/2">
         <div class="rounded-lg shadow-lg overflow-hidden  hover:scale-95 transition-all duration-500">
           <img src="{{asset('images/img.jpeg')}}" alt=""width="w-full"class="group-hover:scale-125 transition-all duration-500">
         </div>
         <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing page website</h3>
         <p class="font-medium text-base text-dark text-slate-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, iure in aliquid illo dicta adipisci perferendis deserunt itaque totam! Ratione!</p>
       </div>
 {{--  portofolio view end --}}
     </div>
     </div> {{-- container --}}
   
 </section>
 {{--  portofolio section end --}}
 
 <script src="{{asset('js/script.js')}}"></script>
</body>
</html>