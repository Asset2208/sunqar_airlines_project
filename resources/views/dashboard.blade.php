<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="/">Главная</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="py-5">
            <main class="h-full overflow-y-auto">
                <div class="container  mx-auto grid">
               
                
                  <!-- Cards -->
                  <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    <!-- Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                      <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                        </svg>
                      </div>
                      <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                          Друзья
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                          10
                        </p>
                      </div>
                    </div>
                    <!-- Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                      <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                      </div>
                      <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Авиаперелеты
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                         24
                        </p>
                      </div>
                    </div>
                    <!-- Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                        <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
                            </svg>
                          </div>
                      <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                          Отзывы
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                          376
                        </p>
                      </div>
                    </div>
                    <!-- Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                     
                      <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                        </svg>
                      </div>
                      <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                         Покупки
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                          35
                        </p>
                      </div>
                    </div>
                  </div>
      
                </div>
            </main>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <section class="text-gray-200 bg-gray-900">
                    <div class="max-w-6xl mx-auto px-5 py-24 ">
                      <div class="text-center mb-20">
                        <h1 class=" title-font  mb-4 text-4xl font-extrabold leading-10 tracking-tight sm:text-5xl sm:leading-none md:text-6xl">Sunqar avialines</h1>
                        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">Добро пожаловать в учетную запись</p>
                        <div class="flex mt-6 justify-center">
                          <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                        </div>
                      </div>
                      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 ">
                        <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
                          <div class="pattern-dots-md gray-light">
                            <div class="rounded bg-gray-800 p-4 transform translate-x-6 -translate-y-6  "  >
                              <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-5 flex-shrink-0 p-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>                </div>
                              <div class="flex-grow ">
                                <h2 class=" text-xl title-font font-medium mb-3"><a href="/user/profile">Настойка</a></h2>
                                <p class="leading-relaxed text-sm text-justify">Настойка профиля</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
                          <div class="pattern-dots-md gray-light">
                            <div class="rounded bg-gray-800 p-4 transform translate-x-6 -translate-y-6 ">
                              <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-500 mb-5 flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                              </div>
                              <div class="flex-grow">
                                <h2 class=" text-xl title-font font-medium mb-3"><a href="/teams/create">Создать команду</a></h2>
                                <p class="leading-relaxed text-sm text-justify">
                                Создать группу 
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
                          <div class="pattern-dots-md gray-light">
                            <div class="rounded bg-gray-800 p-4 transform translate-x-6 -translate-y-6 ">
                              <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 mb-5 flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                              </div>
                              <div class="flex-grow">
                                <h2 class=" text-xl title-font font-medium mb-3"><a href="/user/api-tokens">API Tokens</a></h2>
                                <p class="leading-relaxed text-sm text-justify">
                                    Настройка API токенов
                                </p>
                              </div>
                            </div>
                    </div>
                </section>
            </div>
        
        </div>
    </div>
</x-app-layout>
