<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased">
        @yield('body')
        <footer class=" py-10 mt-3 px-12 lg:py-16 lg:px-32 bg-gradient-to-r from-[#36394b] to-[#212e57] text-white/90" aria-label="Footer">
            <article class="mx-auto">
        
                <section class="mx-auto text-center">
                    <h4 class="text-3xl font-bold mb-8 text-center mx-auto">Contacto</h4>
                   
                    <div class="flex flex-col">
                            <span class="icon-location mr-2 text-center text-xl">👤 Alexis Dubschek Saavedra Rivera
                            </span>
                      
                            <span class="icon-phone mr-2 text-center text-xl" >📞 8182723990</span>
        
                        
                            <span class="icon-envelope mr-2 text-center text-xl" >✉ dubschek02@outlook.com</span>
        
                            <div class="flex  items-center mx-auto" >
                                <img src="https://static-00.iconduck.com/assets.00/brand-github-icon-512x499-0g9lxyvj.png" alt="gitlogo" class="  w-6 " >  
                             <a target="_blank" href="https://github.com/Dusbchek" class="text-xl ml-2 mt-1 hover:underline">GitHub</a>
                            </div>
                          
                            <div class="flex  items-center mx-auto" >
                                <img src="https://static.vecteezy.com/system/resources/previews/023/986/970/non_2x/linkedin-logo-linkedin-logo-transparent-linkedin-icon-transparent-free-free-png.png" alt="gitlogo" class="  w-8 " >  
                             <a target="_blank" href="https://linkedin.com/in/alexis-dubschek-saavedra-rivera-4b676a276" class="text-xl ml-2 mt-1 hover:underline">Linkedin</a>
                            </div>
                            <span class="icon-envelope mr-2 text-center text-xl mt-4" >Monterrey, Nuevo León.</span>
        
                        </div>
                </section>
        
               
        
            </article>
        </footer>
    </body>
    
</html>
