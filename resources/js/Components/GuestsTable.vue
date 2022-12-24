<template>
    <div>
        <!-- component -->

<section class="relative py-5 bg-blueGray-50">
<div class="w-full mb-12 px-4">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded 
  bg-cyan-900 text-white">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1 ">
          <h3 class="font-semibold text-lg text-white">Bitácora de Visitas</h3>
        </div>
      </div>
    </div>
    <div class="block w-full overflow-x-auto ">
      <table class="items-center w-full bg-transparent border-collapse">
        <thead>
          <tr>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700">Nombre</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700">Tipo</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700">Notas</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700">Placas</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700">Status</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700">Fecha </th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700">Hr llegada </th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700"></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
              <span class="ml-3 font-bold text-white"> Melina </span></th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">Familia</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">Viene acompañada de una niña</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"></td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-circle text-orange-500 mr-2"></i>pending</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div>
                <span>12-Dic-2022</span>
              </div>
            </td>
            <td class="border-t-0  align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div class="flex items-center justify-center">
                <span class="">14:25</span>
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
              <a href="#pablo" class="text-blueGray-500 block py-1 px-3" onclick="openDropdown(event,'table-dark-1-dropdown')">
                <i class="fas fa-ellipsis-v"></i></a>
              <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-dark-1-dropdown">
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something else here</a>
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated link</a>
              </div>
            </td>
          </tr>





          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
              <span class="ml-3 font-bold text-white"> Hugp </span></th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">Familia</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">Viene en coche Versa Azul</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">AJK-450</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-circle text-green-500 mr-2"></i>Ingresado</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div>
                <span>10-Dic-2022</span>
              </div>
            </td>
            <td class="border-t-0  align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div class="flex items-center justify-center">
                <span class="">18:23</span>
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
              <a href="#pablo" class="text-blueGray-500 block py-1 px-3" onclick="openDropdown(event,'table-dark-1-dropdown')">
                <i class="fas fa-ellipsis-v"></i></a>
              <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-dark-1-dropdown">
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something else here</a>
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated link</a>
              </div>
            </td>
          </tr>





          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
              <span class="ml-3 font-bold text-white"> Gas </span></th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">Proveedor</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">Gas rosa</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"></td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-circle text-red-600 mr-2"></i>Expirado</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div>
                <span>5-Dic-2022</span>
              </div>
            </td>
            <td class="border-t-0  align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div class="flex items-center justify-center">
                <span class=""></span>
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
              <a href="#pablo" class="text-blueGray-500 block py-1 px-3" onclick="openDropdown(event,'table-dark-1-dropdown')">
                <i class="fas fa-ellipsis-v"></i></a>
              <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-dark-1-dropdown">
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something else here</a>
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated link</a>
              </div>
            </td>
          </tr>

          
          
        </tbody>
      </table>
    </div>
  </div>
</div>
    <footer class="relative pt-8 pb-6 mt-8">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center md:justify-between justify-center">
          <div class="w-full md:w-6/12 px-4 mx-auto text-center">
           
          </div>
        </div>
      </div>
    </footer>
</section>
    </div>
</template>