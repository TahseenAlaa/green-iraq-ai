<template>
    <Navbar />
    <div class="bg-gray-50 pb-12">
        <hr>
        <slot />
    </div>
    <Footer />
</template>

<script>
import Navbar from "@/Pages/shared/Navbar.vue";
import Footer from "@/Pages/shared/Footer.vue";

export default {
    components: {
        Navbar,
        Footer
    }
}
</script>

<style scoped>

</style>
