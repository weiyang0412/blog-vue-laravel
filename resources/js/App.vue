<template>
    <div id="app">
        <TopNavbar />
        <br><br>
        <router-view v-slot="{ Component, route }">
            <div :key="route.name">
                <Component :is="Component" />
            </div>
        </router-view>
    </div>
</template>

<script>
import TopNavbar from './components/TopNavbar.vue';

export default {
    name: 'App',
    components: {
        TopNavbar
    }
}
</script>