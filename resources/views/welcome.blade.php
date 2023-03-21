<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
  @laravelPWA
</head>
<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
   {{-- nav here --}}
   <nav class="bg-gray-300 flex items-center justify-between p-4">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center">
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline">
              <a href="/" class="px-3 py-2 rounded-md text-sm font-medium leading-5 text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Go To Home</a>
              <a href="/feed/create" class=" ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Add engredient</a>
              <a href="/req/create" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Add requirements</a>
              <a href="/tray" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">
                Feed tray has {{ count((array) session('tray')) }} ingredients
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><path fill="currentColor" d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/></svg>
              </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    @if(session('status'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
  <span class="block sm:inline">{{ session('status') }}</span>
  <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
      <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <title>Close</title>
          <path d="M14.348 5.652a.999.999 0 1 0-1.414-1.414L10 8.586 6.066 4.652a.999.999 0 1 0-1.414 1.414L8.586 10l-3.934 3.934a.999.999 0 1 0 1.414 1.414L10 11.414l3.934 3.934a.999.999 0 1 0 1.414-1.414L11.414 10l3.934-3.934z"/>
      </svg>
  </span>
</div>
@endif
  <!-- component -->
<div class="relative py-16 bg-gradient-to-br from-sky-50 to-gray-200">  
  <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
      <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
          <div class="rounded-xl bg-white shadow-xl">
              <div class="p-6 sm:p-16">
                  <div class="space-y-4">
                      
                      <h2 class="mb-8 text-2xl text-cyan-900 font-bold">Feed Formulating App <br>
                      MENU</h2>
                  </div>
                  <div class="mt-16 grid space-y-4">
                      <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                          <div class="relative flex items-center space-x-4 justify-center">
                              <a href="{{ route('feed.index') }}">
                              <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">INGREDIENTS</span>
                          </a>
                          </div>
                      </button>
                      <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                          <div class="relative flex items-center space-x-4 justify-center">
                              
                              <a href="{{ route('req.index') }}">
                              <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">NUTRITIONAL REQUIREMENTS</span>
                          </a></div>
                      </button>
                      <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
                                   hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                          <div class="relative flex items-center space-x-4 justify-center">
                               
                              <a href="{{ route('formulate.index') }}">
                              <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">FORMULATE</span>
                          </a></div>
                      </button>
                      <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
                                   hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                          <div class="relative flex items-center space-x-4 justify-center">
                               
                            <a href="{{ route('formulate.create') }}">
                              <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">PREVIOUS FEED FORMULA</span>
                          </a></div>
                      </button>
                      <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
                      hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
             <div class="relative flex items-center space-x-4 justify-center">
                  
               <a href="{{ route('animal.index') }}">
                 <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Add animal category</span>
             </a></div>
         </button>
         <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
         hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
<div class="relative flex items-center space-x-4 justify-center">
     
  <a href="{{ route('categories.index') }}">
    <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Add animal sub-category</span>
</a></div>
</button>
                      <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
                                   hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                          <div class="relative flex items-center space-x-4 justify-center">
                               
                              <a href="">
                              <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">DONATE</span>
                          </a></div>
                      </button>
                  </div>

                  <div class="mt-32 space-y-4 text-gray-600 text-center sm:-mb-8">
                      <p class="text-xs">By proceeding, you agree to our <a href="" class="underline">Disclaimer</a> and confirm you have read our <a href="" class="underline">Privacy and Cookie Statement</a>.</p>
                      </div>
              </div>
          </div>
      </div>
  </div>
</div>
  <script src="{{ asset('/sw.js') }}">

<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        }
    }
</script>
</body>
</html>
