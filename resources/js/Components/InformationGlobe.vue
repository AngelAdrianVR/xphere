<template>
    <div>

    <div class="flex flex-col justify-center items-center w-[90%] sm:w-[50%] mx-auto shadow-lg shadow-gray-500">
        <div class="h-10 w-full bg-sky-900 flex justify-center items-center rounded-t-xl">
          <slot name="header" />
        </div>
        <div class="h-auto w-full bg-gray-300 flex flex-col justify-center items-center">
          <slot name="body" />
        </div>
        <footer class="h-auto w-full bg-gray-300 flex justify-center items-center rounded-b-xl">
          <slot name="footer" />
        </footer>
      </div>
        
    </div>
</template>
<script>
export default {
    
}
</script>