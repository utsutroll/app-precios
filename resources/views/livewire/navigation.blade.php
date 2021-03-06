<div class="relative bg-gray-800 shadow-sm" x-data="{ open:false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="{{route('dashboard')}}">
                    <img class="h-8 w-auto sm:h-10" src="{{asset('img/logo-text-ligth.svg')}}" alt="InversionesDonaNeriaC.A">
                </a>
            </div>
            <div class="-mr-2 -my-2 sm:hidden">
                <button x-on:click=" open = true " type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
                <nav class="hidden md:flex space-x-10" x-data="{ open:false }">
                    <div class="relative">
                        <button x-on:click=" open = true " type="button" class="text-white p-2 group hover:bg-white hover:text-gray-900 rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" aria-expanded="false">
                            <span>Registros</span>
                        
                            <svg class="text-white ml-2 h-5 w-5 group-hover:text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
            
                        <div x-show="open" x-on:click.away=" open = false " x-description="Profile dropdown panel, show/hide based on dropdown state."
                                                                        x-transition:enter="transition ease-out duration-200"
                                                                        x-transition:enter-start="opacity-0 translate-y-1"
                                                                        x-transition:enter-end="opacity-0 translate-y-0"
                                                                        x-transition:leave="transition ease-in duration-150"
                                                                        x-transition:leave-start="opacity-100 translate-y-0"
                                                                        x-transition:leave-end="opacity-0 translate-y-1" 
                                                                        class="absolute z-10 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">

                                    <a href="{{ route('admin.categories.index') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        
                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                            <path d="M10 3H4C3.447 3 3 3.447 3 4v6c0 .553.447 1 1 1h6c.553 0 1-.447 1-1V4C11 3.447 10.553 3 10 3zM9 9H5V5h4V9zM20 13h-6c-.553 0-1 .447-1 1v6c0 .553.447 1 1 1h6c.553 0 1-.447 1-1v-6C21 13.447 20.553 13 20 13zM19 19h-4v-4h4V19zM17 3c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4S19.206 3 17 3zM17 9c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2S18.103 9 17 9zM7 13c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4S9.206 13 7 13zM7 19c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2S8.103 19 7 19z"></path>
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Categor??a
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Modulo para registar la categor??a del producto.
                                            </p>
                                        </div>
                                    </a>
                                    <a href="{{ route('admin.brands.index') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        
                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                            <path d="M22,7.999c0-0.363-0.197-0.697-0.516-0.874l-9.022-5c-0.301-0.166-0.667-0.166-0.968,0l-8.978,4.96 C2.198,7.261,2.001,7.595,2,7.958C1.999,8.32,2.195,8.656,2.513,8.833l9.022,5.04C11.687,13.958,11.854,14,12.022,14 s0.335-0.042,0.486-0.126l8.978-5C21.804,8.697,22,8.362,22,7.999z M12.023,11.854L5.06,7.965l6.917-3.822l6.964,3.859 L12.023,11.854z"></path><path d="M20.515,11.126L12,15.856l-8.515-4.73l-0.971,1.748l9,5C11.665,17.958,11.833,18,12,18s0.335-0.042,0.485-0.126l9-5 L20.515,11.126z"></path><path d="M20.515,15.126L12,19.856l-8.515-4.73l-0.971,1.748l9,5C11.665,21.958,11.833,22,12,22s0.335-0.042,0.485-0.126l9-5 L20.515,15.126z"></path>
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Marca
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Modulo para registar la Marca del producto.
                                            </p>
                                        </div>
                                    </a>
                                    <a href="{{ route('admin.presentations.index') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        
                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                            <path d="M20,3H4C2.897,3,2,3.897,2,5v14c0,1.103,0.897,2,2,2h16c1.103,0,2-0.897,2-2V5C22,3.897,21.103,3,20,3z M4,19V5h16 l0.002,14H4z"></path><path d="M6 7H18V9H6zM6 11H18V13H6zM6 15H12V17H6z"></path>
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Presentaci??n
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Modulo para registar la Presentaci??n del producto.
                                            </p>
                                        </div>
                                    </a>
                                    <a href="{{ route('admin.products.index') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        
                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                            <path d="M21.406,6.086l-9-4c-0.26-0.115-0.553-0.115-0.813,0l-9,4C2.573,6.095,2.559,6.11,2.539,6.121 c-0.028,0.014-0.058,0.023-0.084,0.04c-0.022,0.015-0.039,0.034-0.06,0.05c-0.028,0.021-0.055,0.044-0.08,0.068 C2.274,6.318,2.238,6.36,2.205,6.405C2.185,6.433,2.164,6.458,2.146,6.486C2.115,6.539,2.092,6.594,2.07,6.651 C2.061,6.678,2.047,6.703,2.039,6.73C2.015,6.817,2,6.907,2,7v10c0,0.396,0.232,0.753,0.594,0.914l9,4 C11.724,21.972,11.862,22,12,22c0.139,0,0.273-0.039,0.402-0.096l0.004,0.01l9-4C21.768,17.753,22,17.396,22,17V7 C22,6.604,21.768,6.247,21.406,6.086z M12,4.095L18.538,7L12,9.905l-1.308-0.581L5.463,7L12,4.095z M4,16.351V8.539l7,3.111v7.811 L4,16.351z M13,19.461V11.65l7-3.111v7.812L13,19.461z"></path>
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Producto
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Modulo para registrar los Productos.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>  
                <nav class="hidden md:flex space-x-10" x-data="{ open:false }">  
                    <div class="relative">
                        <button x-on:click=" open = true " type="button" class="text-white p-2 group hover:bg-white hover:text-gray-900 rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" aria-expanded="false">
                            <span>Control de Precios</span>
                        
                            <svg class="text-white ml-2 h-5 w-5 group-hover:text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
            
                        <div x-show="open" x-on:click.away=" open = false " x-description="Profile dropdown panel, show/hide based on dropdown state."
                                                                        x-transition:enter="transition ease-out duration-200"
                                                                        x-transition:enter-start="opacity-0 translate-y-1"
                                                                        x-transition:enter-end="opacity-0 translate-y-0"
                                                                        x-transition:leave="transition ease-in duration-150"
                                                                        x-transition:leave-start="opacity-100 translate-y-0"
                                                                        x-transition:leave-end="opacity-0 translate-y-1" 
                                                                        class="absolute z-10 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">

                                    <a href="{{ route('margin-category') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        
                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                            <path d="M10 11H7.101c0-.003 0-.006.001-.009.065-.319.163-.634.291-.937.126-.297.281-.583.461-.85.178-.264.384-.513.61-.74C8.691 8.238 8.94 8.032 9.206 7.853c.266-.18.551-.334.848-.46.302-.128.617-.226.938-.291.658-.135 1.357-.135 2.018 0 .318.065.634.163.937.291.296.125.581.281.85.461.266.179.514.384.738.609l1.416-1.412c-.314-.316-.664-.604-1.036-.855-.373-.252-.773-.47-1.188-.646-.425-.18-.868-.317-1.315-.408-.923-.189-1.899-.189-2.819 0-.449.092-.892.229-1.316.409C8.858 5.727 8.458 5.944 8.086 6.196 7.716 6.445 7.368 6.733 7.05 7.05S6.445 7.716 6.197 8.085c-.252.373-.47.773-.646 1.19-.18.424-.317.867-.408 1.315C5.115 10.725 5.1 10.863 5.08 11H2l4 4L10 11zM14 13h2.899c-.001.003 0 .006-.001.008-.066.324-.164.639-.292.938-.123.293-.278.579-.459.848-.179.264-.385.514-.613.742-.225.225-.473.43-.739.61-.268.18-.553.335-.849.461-.303.128-.618.226-.938.291-.657.135-1.357.135-2.017 0-.319-.065-.634-.163-.937-.291-.297-.126-.583-.281-.85-.461-.264-.178-.513-.384-.74-.61L7.05 16.95c.317.317.666.605 1.035.854.373.252.773.47 1.19.646.424.18.867.317 1.315.408C11.051 18.952 11.525 19 12 19s.949-.048 1.408-.142c.449-.091.893-.229 1.317-.409.415-.176.815-.393 1.188-.645.372-.251.722-.54 1.035-.854.317-.317.605-.666.855-1.037.254-.377.472-.777.645-1.187.178-.42.315-.863.408-1.316.027-.135.043-.273.063-.41H22l-4-4L14 13z"></path>
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Margen de ganancia por Categor??a
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Modulo para actualizar el margen de ganancia seg??n la categor??a del producto.
                                            </p>
                                        </div>
                                    </a>
                                    <a href="{{ route('margin-brand') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        
                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                            <path d="M10 11H7.101c0-.003 0-.006.001-.009.065-.319.163-.634.291-.937.126-.297.281-.583.461-.85.178-.264.384-.513.61-.74C8.691 8.238 8.94 8.032 9.206 7.853c.266-.18.551-.334.848-.46.302-.128.617-.226.938-.291.658-.135 1.357-.135 2.018 0 .318.065.634.163.937.291.296.125.581.281.85.461.266.179.514.384.738.609l1.416-1.412c-.314-.316-.664-.604-1.036-.855-.373-.252-.773-.47-1.188-.646-.425-.18-.868-.317-1.315-.408-.923-.189-1.899-.189-2.819 0-.449.092-.892.229-1.316.409C8.858 5.727 8.458 5.944 8.086 6.196 7.716 6.445 7.368 6.733 7.05 7.05S6.445 7.716 6.197 8.085c-.252.373-.47.773-.646 1.19-.18.424-.317.867-.408 1.315C5.115 10.725 5.1 10.863 5.08 11H2l4 4L10 11zM14 13h2.899c-.001.003 0 .006-.001.008-.066.324-.164.639-.292.938-.123.293-.278.579-.459.848-.179.264-.385.514-.613.742-.225.225-.473.43-.739.61-.268.18-.553.335-.849.461-.303.128-.618.226-.938.291-.657.135-1.357.135-2.017 0-.319-.065-.634-.163-.937-.291-.297-.126-.583-.281-.85-.461-.264-.178-.513-.384-.74-.61L7.05 16.95c.317.317.666.605 1.035.854.373.252.773.47 1.19.646.424.18.867.317 1.315.408C11.051 18.952 11.525 19 12 19s.949-.048 1.408-.142c.449-.091.893-.229 1.317-.409.415-.176.815-.393 1.188-.645.372-.251.722-.54 1.035-.854.317-.317.605-.666.855-1.037.254-.377.472-.777.645-1.187.178-.42.315-.863.408-1.316.027-.135.043-.273.063-.41H22l-4-4L14 13z"></path>
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Margen de ganancia por Marca
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Modulo para actualizar el margen de ganancia seg??n la Marca del producto.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>    
                <a href="{{ route('products-price') }}" class="hidden md-block lg:block text-base font-medium text-white p-2 hover:bg-white hover:text-gray-900 rounded-md">
                    Productos
                </a>
                <a href="#" class="hidden md-block lg:block text-base font-medium text-white p-2 hover:bg-white hover:text-gray-900 rounded-md">
                    Reportes
                </a>
  
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                <!-- Profile dropdown -->
                @auth
                <div class="ml-3 relative" x-data="{ open: false }">
                    <div>
                        <button x-on:click=" open = true " type="button" class="flex text-md text-white rounded-full" id="user-menu" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Abrir men?? de usuario</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(247, 247, 247, 1);transform:;-ms-filter:"><path d="M12,2C6.579,2,2,6.579,2,12s4.579,10,10,10s10-4.579,10-10S17.421,2,12,2z M12,7c1.727,0,3,1.272,3,3s-1.273,3-3,3 c-1.726,0-3-1.272-3-3S10.274,7,12,7z M6.894,16.772c0.897-1.32,2.393-2.2,4.106-2.2h2c1.714,0,3.209,0.88,4.106,2.2 C15.828,18.14,14.015,19,12,19S8.172,18.14,6.894,16.772z"></path></svg>
                            {{ auth()->user()->name }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="mt-1" width="15" height="15" viewBox="0 0 24 24" style="fill:rgba(255, 255, 255, 1);transform:;-ms-filter:"><path d="M11.998 17L18.998 9 4.998 9z"></path></svg>
                        </button>
                    </div>

                    <div x-show="open" x-on:click.away=" open = false " class="z-40 origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                    {{--<a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Tu Perfil</a> --}}
                
                
                    {{-- <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Panel Administrativo</a> --}}  
                

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" onclick="event.preventDefault();
                        this.closest('form').submit();">Cerrar Sesi??n</a>
                    </form>
                
                </div>
                @else
                <a href="{{ route('login') }}" class="text-gray-800 hover:bg-red-600 hover:text-white hidden sm:block px-3 py-2 rounded-md text-base font-medium">Iniciar Sesi??n</a>
                {{-- <a href="{{ route('register') }}" class="text-gray-800 hover:bg-red-600 hover:text-white hidden sm:block px-3 py-2 rounded-md text-base font-medium">Registrase</a> --}}    
                @endauth
            </div>
        </div>
    </div>

    <div x-transition:enter="duration-200 ease-out"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="duration-100 ease-in"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" id="mobile-menu" x-show="open">

        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-gray-800 divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <a href="{{route('dashboard')}}">
                            <img class="h-8 w-auto" src="{{asset('img/logo-text-ligth.svg')}}" alt="InversionesDonaNeriaC.A">
                        </a>
                    </div>
                <div class="-mr-2">
                    <button type="button" x-on:click=" open = false " class="hover:bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-700 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Cerrar menu</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mt-6">
                <nav class="grid gap-y-8">
                    <a href="{{ route('admin.categories.index') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(255, 255, 255, 1);transform:;-ms-filter:">
                            <path d="M10 3H4C3.447 3 3 3.447 3 4v6c0 .553.447 1 1 1h6c.553 0 1-.447 1-1V4C11 3.447 10.553 3 10 3zM9 9H5V5h4V9zM20 13h-6c-.553 0-1 .447-1 1v6c0 .553.447 1 1 1h6c.553 0 1-.447 1-1v-6C21 13.447 20.553 13 20 13zM19 19h-4v-4h4V19zM17 3c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4S19.206 3 17 3zM17 9c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2S18.103 9 17 9zM7 13c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4S9.206 13 7 13zM7 19c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2S8.103 19 7 19z"></path>
                        </svg>
                        <div class="ml-4">
                            <p class="text-base font-medium text-white hover:text-gray-800">
                                Categor??a
                            </p>
                            <p class="mt-1 text-sm text-gray-500">
                                Modulo para registar la categor??a del producto.
                            </p>
                        </div>
                    </a>
                    <a href="{{ route('admin.brands.index') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                        
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill:rgba(255, 255, 255, 1);transform:;-ms-filter:">
                            <path d="M22,7.999c0-0.363-0.197-0.697-0.516-0.874l-9.022-5c-0.301-0.166-0.667-0.166-0.968,0l-8.978,4.96 C2.198,7.261,2.001,7.595,2,7.958C1.999,8.32,2.195,8.656,2.513,8.833l9.022,5.04C11.687,13.958,11.854,14,12.022,14 s0.335-0.042,0.486-0.126l8.978-5C21.804,8.697,22,8.362,22,7.999z M12.023,11.854L5.06,7.965l6.917-3.822l6.964,3.859 L12.023,11.854z"></path><path d="M20.515,11.126L12,15.856l-8.515-4.73l-0.971,1.748l9,5C11.665,17.958,11.833,18,12,18s0.335-0.042,0.485-0.126l9-5 L20.515,11.126z"></path><path d="M20.515,15.126L12,19.856l-8.515-4.73l-0.971,1.748l9,5C11.665,21.958,11.833,22,12,22s0.335-0.042,0.485-0.126l9-5 L20.515,15.126z"></path>
                        </svg>
                        <div class="ml-4">
                            <p class="text-base font-medium text-white hover:text-gray-800">
                                Marca
                            </p>
                            <p class="mt-1 text-sm text-gray-500">
                                Modulo para registar la Marca del producto.
                            </p>
                        </div>
                    </a>
                    <a href="{{ route('admin.presentations.index') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                        
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill:rgba(255, 255, 255, 1);transform:;-ms-filter:">
                            <path d="M20,3H4C2.897,3,2,3.897,2,5v14c0,1.103,0.897,2,2,2h16c1.103,0,2-0.897,2-2V5C22,3.897,21.103,3,20,3z M4,19V5h16 l0.002,14H4z"></path><path d="M6 7H18V9H6zM6 11H18V13H6zM6 15H12V17H6z"></path>
                        </svg>
                        <div class="ml-4">
                            <p class="text-base font-medium text-white hover:text-gray-800">
                                Presentaci??n
                            </p>
                            <p class="mt-1 text-sm text-gray-500">
                                Modulo para registar la Presentaci??n del producto.
                            </p>
                        </div>
                    </a>
                    <a href="{{ route('admin.products.index') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                        
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill:rgba(255, 255, 255, 1);transform:;-ms-filter:">
                            <path d="M21.406,6.086l-9-4c-0.26-0.115-0.553-0.115-0.813,0l-9,4C2.573,6.095,2.559,6.11,2.539,6.121 c-0.028,0.014-0.058,0.023-0.084,0.04c-0.022,0.015-0.039,0.034-0.06,0.05c-0.028,0.021-0.055,0.044-0.08,0.068 C2.274,6.318,2.238,6.36,2.205,6.405C2.185,6.433,2.164,6.458,2.146,6.486C2.115,6.539,2.092,6.594,2.07,6.651 C2.061,6.678,2.047,6.703,2.039,6.73C2.015,6.817,2,6.907,2,7v10c0,0.396,0.232,0.753,0.594,0.914l9,4 C11.724,21.972,11.862,22,12,22c0.139,0,0.273-0.039,0.402-0.096l0.004,0.01l9-4C21.768,17.753,22,17.396,22,17V7 C22,6.604,21.768,6.247,21.406,6.086z M12,4.095L18.538,7L12,9.905l-1.308-0.581L5.463,7L12,4.095z M4,16.351V8.539l7,3.111v7.811 L4,16.351z M13,19.461V11.65l7-3.111v7.812L13,19.461z"></path>
                        </svg>
                        <div class="ml-4">
                            <p class="text-base font-medium text-white hover:text-gray-800">
                                Producto
                            </p>
                            <p class="mt-1 text-sm text-gray-500">
                                Modulo para registrar los Productos.
                            </p>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
        <div class="py-6 px-5 space-y-6">
            
            <a href="{{ route('margin-category') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50 ">
                                            
                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill:rgba(255, 255, 255, 1);transform:;-ms-filter:">
                    <path d="M10 11H7.101c0-.003 0-.006.001-.009.065-.319.163-.634.291-.937.126-.297.281-.583.461-.85.178-.264.384-.513.61-.74C8.691 8.238 8.94 8.032 9.206 7.853c.266-.18.551-.334.848-.46.302-.128.617-.226.938-.291.658-.135 1.357-.135 2.018 0 .318.065.634.163.937.291.296.125.581.281.85.461.266.179.514.384.738.609l1.416-1.412c-.314-.316-.664-.604-1.036-.855-.373-.252-.773-.47-1.188-.646-.425-.18-.868-.317-1.315-.408-.923-.189-1.899-.189-2.819 0-.449.092-.892.229-1.316.409C8.858 5.727 8.458 5.944 8.086 6.196 7.716 6.445 7.368 6.733 7.05 7.05S6.445 7.716 6.197 8.085c-.252.373-.47.773-.646 1.19-.18.424-.317.867-.408 1.315C5.115 10.725 5.1 10.863 5.08 11H2l4 4L10 11zM14 13h2.899c-.001.003 0 .006-.001.008-.066.324-.164.639-.292.938-.123.293-.278.579-.459.848-.179.264-.385.514-.613.742-.225.225-.473.43-.739.61-.268.18-.553.335-.849.461-.303.128-.618.226-.938.291-.657.135-1.357.135-2.017 0-.319-.065-.634-.163-.937-.291-.297-.126-.583-.281-.85-.461-.264-.178-.513-.384-.74-.61L7.05 16.95c.317.317.666.605 1.035.854.373.252.773.47 1.19.646.424.18.867.317 1.315.408C11.051 18.952 11.525 19 12 19s.949-.048 1.408-.142c.449-.091.893-.229 1.317-.409.415-.176.815-.393 1.188-.645.372-.251.722-.54 1.035-.854.317-.317.605-.666.855-1.037.254-.377.472-.777.645-1.187.178-.42.315-.863.408-1.316.027-.135.043-.273.063-.41H22l-4-4L14 13z"></path>
                </svg>
                <div class="ml-4">
                    <p class="text-base font-medium text-white hover:text-gray-800">
                        Margen de ganancia por Categor??a
                    </p>
                    <p class="mt-1 text-sm text-gray-500">
                        Modulo para actualizar el margen de ganancia seg??n la categor??a del producto.
                    </p>
                </div>
            </a>
            <a href="{{ route('margin-brand') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                    
                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill:rgba(255, 255, 255, 1);transform:;-ms-filter:">
                    <path d="M10 11H7.101c0-.003 0-.006.001-.009.065-.319.163-.634.291-.937.126-.297.281-.583.461-.85.178-.264.384-.513.61-.74C8.691 8.238 8.94 8.032 9.206 7.853c.266-.18.551-.334.848-.46.302-.128.617-.226.938-.291.658-.135 1.357-.135 2.018 0 .318.065.634.163.937.291.296.125.581.281.85.461.266.179.514.384.738.609l1.416-1.412c-.314-.316-.664-.604-1.036-.855-.373-.252-.773-.47-1.188-.646-.425-.18-.868-.317-1.315-.408-.923-.189-1.899-.189-2.819 0-.449.092-.892.229-1.316.409C8.858 5.727 8.458 5.944 8.086 6.196 7.716 6.445 7.368 6.733 7.05 7.05S6.445 7.716 6.197 8.085c-.252.373-.47.773-.646 1.19-.18.424-.317.867-.408 1.315C5.115 10.725 5.1 10.863 5.08 11H2l4 4L10 11zM14 13h2.899c-.001.003 0 .006-.001.008-.066.324-.164.639-.292.938-.123.293-.278.579-.459.848-.179.264-.385.514-.613.742-.225.225-.473.43-.739.61-.268.18-.553.335-.849.461-.303.128-.618.226-.938.291-.657.135-1.357.135-2.017 0-.319-.065-.634-.163-.937-.291-.297-.126-.583-.281-.85-.461-.264-.178-.513-.384-.74-.61L7.05 16.95c.317.317.666.605 1.035.854.373.252.773.47 1.19.646.424.18.867.317 1.315.408C11.051 18.952 11.525 19 12 19s.949-.048 1.408-.142c.449-.091.893-.229 1.317-.409.415-.176.815-.393 1.188-.645.372-.251.722-.54 1.035-.854.317-.317.605-.666.855-1.037.254-.377.472-.777.645-1.187.178-.42.315-.863.408-1.316.027-.135.043-.273.063-.41H22l-4-4L14 13z"></path>
                </svg>
                <div class="ml-4">
                    <p class="text-base font-medium text-white hover:text-gray-800">
                        Margen de ganancia por Marca
                    </p>
                    <p class="mt-1 text-sm text-gray-500">
                        Modulo para actualizar el margen de ganancia seg??n la Marca del producto.
                    </p>
                </div>
            </a>
            
            <a href="{{ route('products-price') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(255, 255, 255, 1);transform:;-ms-filter:">
                    <path d="M5.282 12.064c-.428.328-.72.609-.875.851-.155.24-.249.498-.279.768h2.679v-.748H5.413c.081-.081.152-.151.212-.201.062-.05.182-.142.361-.27.303-.218.511-.42.626-.604.116-.186.173-.375.173-.578 0-.189-.05-.363-.151-.512-.1-.153-.237-.268-.412-.341-.174-.076-.419-.111-.733-.111-.3 0-.537.038-.706.114-.172.078-.302.19-.396.338-.094.143-.159.346-.194.604l.894.076c.025-.188.074-.317.147-.394.072-.073.166-.108.279-.108.11 0 .2.035.272.108.073.071.108.156.108.258 0 .091-.037.19-.108.297C5.711 11.713 5.544 11.865 5.282 12.064zM5.337 18.45c-.114 0-.208-.036-.282-.105-.074-.07-.128-.195-.162-.378L4 18.085c.059.204.142.372.251.506.109.133.248.235.417.306C4.836 18.966 5.067 19 5.36 19c.3 0 .541-.047.725-.14.185-.096.325-.228.424-.403.098-.175.146-.354.146-.544 0-.152-.029-.282-.088-.393-.06-.107-.142-.195-.249-.261-.066-.042-.161-.078-.286-.11.155-.085.268-.183.345-.299.076-.115.113-.24.113-.383 0-.239-.093-.437-.281-.596-.187-.159-.49-.238-.909-.238-.365 0-.648.072-.847.219-.2.143-.334.353-.404.626l.844.151c.023-.162.067-.274.133-.338s.151-.098.257-.098c.103 0 .183.032.241.089.059.06.087.139.087.238 0 .104-.038.193-.117.27s-.177.112-.293.112c-.028 0-.066-.004-.116-.011L5.04 17.54c.123-.036.22-.056.289-.056.132 0 .237.041.313.126.077.082.115.199.115.352 0 .146-.04.266-.119.354C5.558 18.403 5.458 18.45 5.337 18.45zM6.285 8.367V5H5.546C5.451 5.208 5.319 5.383 5.152 5.523 4.984 5.665 4.748 5.785 4.444 5.888v.754C4.65 6.577 4.821 6.509 4.958 6.438c.137-.069.277-.162.423-.276v2.206H6.285zM9 6H20V8H9zM9 11H20V13H9zM9 16H20V18H9z"></path>
                </svg>
                <div class="ml-4">
                    <p class="text-base font-medium text-white hover:text-gray-800">
                        Listado de Precios de Productos
                    </p>
                    <p class="mt-1 text-sm text-gray-500">
                        Ver el precio del producto ya calculado.
                    </p>
                </div>
            </a>
            <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(255, 255, 255, 1);transform:;-ms-filter:">
                    <path d="M20,8l-6-6H6C4.896,2,4,2.896,4,4v16c0,1.104,0.896,2,2,2h12c1.104,0,2-0.896,2-2V8z M9,19H7v-9h2V19z M13,19h-2v-6h2V19z M17,19h-2v-3h2V19z M14,9c-0.553,0-1,0-1,0V4l5,5H14z"></path>
                </svg>
                <div class="ml-4">
                    <p class="text-base font-medium text-white hover:text-gray-800">
                        Reportes
                    </p>
                    <p class="mt-1 text-sm text-gray-500">
                        Generar un archivo PDF ?? EXCEL con el listado de todos los Productos.
                    </p>
                </div>
            </a>
            <div class="pt-4 pb-3 border-t border-gray-700">
                @auth
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ auth()->user()->name }}">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-white">{{ auth()->user()->name }}</div>
                        <div class="text-sm font-medium leading-none text-gray-400">{{ auth()->user()->email }}</div>
                    </div>
                </div>
                <div class="mt-3 px-2 space-y-1">
                    {{--<a href="{{ route('profile.show') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700" role="menuitem">Tu Perfil</a> --}}
            
            
                    {{-- <a href="{{ route('admin.home') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700" role="menuitem">Panel Administrativo</a> --}}  
            

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700" role="menuitem" onclick="event.preventDefault();
                        this.closest('form').submit();">Cerrar Sesi??n</a>
                    </form>
            
                </div>
                
                @endauth
            </div>
        </div>
    </div>
    </div>
</div>
</div>

