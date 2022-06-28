<template>
    <v-container>

        <v-layout  class="align-center justify-center text-center px-5 py-5 display-2  " >
            <h3>
                Catálogo de Productos
            </h3>

        </v-layout>

        <v-carousel>
            <v-carousel-item
                v-for="(item,i) in items"
                :key="i"
                :src="item.src"
                reverse-transition="fade-transition"
                transition="fade-transition"
            ></v-carousel-item>
        </v-carousel>

    </v-container>
</template>

<script>
export default {
    data () {
        return {
            icons: [
                'mdi-facebook',
                'mdi-twitter',
                'mdi-linkedin',
                'mdi-instagram',
            ],
            rating: 4,
            items: [
                {
                    src: 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg',
                },
                {
                    src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg',
                },
                {
                    src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg',
                },
                {
                    src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg',
                },
            ],
        }
    },
}
</script>
