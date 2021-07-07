<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

      

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel</title>

        <link rel="stylesheet" href={{ asset('css/custom.css') }}>
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css.map') }}>
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>


      
  <!-- Content here -->
          
       

    

        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        -->


        <!-- Styles
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        -->

        

          <!-- 
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        -->


    </head>

   
    <body data-bs-spy="scroll" data-bs-target="#navbar-example2">

    <div class="container">
        
    


<nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
  <a class="navbar-brand" href="#">Navbar</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading1">First</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading2">Second</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
        <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
      </ul>
    </li>
  </ul>
</nav>
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
  <h4 id="scrollspyHeading1">First heading</h4>
  <p>...</p>

                    <div class="row">
                            
                            <!-- grids -->

                                <div class="col">
                                    <div class="card" style="width: 18rem;">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">1</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">2</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">3</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">4</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                    </div>
                                </div>
                            
                            </div>

                        </div>
  

  <h4 id="scrollspyHeading2">Second heading</h4>
  <p>...</p>

       

  <div class="container">
  <div class="row">
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
  </div>
</div>
  <h4 id="scrollspyHeading3">Third heading</h4>
  <p>...</p>

                    <div class ="wrapper"> 


                    <div>

                        Information
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, incidunt.

                    </div>


                    <div> 

                        Information 2
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa libero earum debitis maiores 
                        cupiditate rem excepturi neque mollitia illo iure. Nesciunt doloribus aperiam ea reprehenderit 
                        commodi quasi expedita pariatur? Repellat.

                    </div>


                        
                    <div>
                    Information 3    
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, tenetur.
                    </div>

                    <div>
                    Information 4    
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, tenetur.
                    </div>

                    <div>
                    Information 5    
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, tenetur.
                    </div>


                    </div> 

  <h4 id="scrollspyHeading4">Fourth heading</h4>
  <p>...</p>
            <div class ="wrapper"> 

            <div class="box1"> 
            Box 1
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, perferendis.
            </div>

            <div class="box2"> 
            Box 2
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, vitae.
            </div>

            <div class="box3"> 
            Box 3
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, autem? 
            </div>

            <div class="box4"> 
            Box 4
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, cumque. 
            </div>

             

  <h4 id="scrollspyHeading5">Fifth heading</h4>
  <p>...</p>
</div>




           






                                <div id="main" class="row">

                                @yield('content') 

                                </div>




                                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                    @endif
                                @endauth
                                </div>
                                @endif



                                </div>

                  


       
        

                                <footer class="row">
                                    @include('includes.footer')

                                </footer>

        

                                
                   









</div>


<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script> 



<script> 

    
    
    


   

var scrollSpy = new bootstrap.ScrollSpy(document.body, {
  target: '#navbar-example2'
})




var firstScrollSpyEl = document.querySelector('[data-bs-spy="scroll"]')
firstScrollSpyEl.addEventListener('activate.bs.scrollspy', function () {
  // do something...
})


var scrollSpy = new bootstrap.ScrollSpy(document.body, {
  target: '#navbar-example2'
})

var scrollSpyContentEl = document.getElementById('content')
var scrollSpy = bootstrap.ScrollSpy.getInstance(scrollSpyContentEl) // Returns a Bootstrap scrollspy instanc

</script> 




</body>




</html>



