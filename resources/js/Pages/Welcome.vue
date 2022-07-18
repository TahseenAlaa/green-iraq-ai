<template>
    <div class="flex inline-block flex-wrap justify-center">
        <div class="max-w-md my-8 mx-8 px-8 py-4 mx-auto mt-16 bg-white rounded-lg shadow-2xl">
            <p class="mt-2 py-4 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
            <div class="flex justify-between mt-4">
                <div class="justify-center flex-row flex cursor-pointer">
                    <p class="text-md font-medium bg-gray-50 rounded-md p-1 mx-1 flex flex-row">
                        <span class="text-red-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                            </svg></span>
                        <span class="px-2 text-black">214</span>
                    </p>
                    <p class="text-md font-medium bg-gray-50 rounded-md p-1 mx-1 flex flex-row">
                        <span class="text-black"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg></span>
                        <span class="px-2 text-black">23</span>
                    </p>
                </div>
                <p class="text-xs font-medium text-green-800 bg-gray-50 rounded-md p-1">1 Hour</p>
            </div>
        </div>
    </div>
</template>

<script>
import Layout from "@/Pages/shared/Layout.vue";

export default {
    layout: Layout
}
</script>

<style scoped>

</style>
