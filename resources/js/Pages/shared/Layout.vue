<template>
    <Navbar />
    <slot />
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
