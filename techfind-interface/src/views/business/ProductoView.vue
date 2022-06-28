

<template>
    <v-container>

        <v-layout  class="align-center justify-center text-center px-2 py-2 display-2  " >
            <h6>
                Skytech Chronos Mini PC De Escritorio Para Juegos
            </h6>

        </v-layout>

        <v-layout wrap class="align-center justify-center text-center px-5 py-5 " >

            <v-flex clas="primary" >
                <h3>
                    Descripción
                </h3>
                <v-flex clas="primary" lg5 >

                    <v-img src= "https://m.media-amazon.com/images/I/91rIiWcvS7L._AC_SS450_.jpg"
                           max-height="500"
                           max-width="500"
                           text-align=right;

                    >
                    </v-img>

                </v-flex>
                <p clas="secondary" xs3>
                    ✔ Procesador de CPU INTEL Core i3 10100F 3.6GHz (4.3GHz Max Boost) | SSD de 500 GB – Hasta 30 veces más rápido que el disco duro tradicional
                    ✔ Tarjeta gráfica GTX 1650 de 4 GB GDDR6 (la marca puede variar) | Memoria para juegos DDR4 3200 de 16G con difusor de calor | Windows 10 Home de 64 bits
                    ✔ 802.11AC | Sin bloatware | Las opciones de salida gráfica incluyen 1 x HDMI, y 1 x puerto de pantalla garantizado, los puertos adicionales pueden variar. Puertos USB incluyendo puertos 2.0, 3.0 y 3.2 Gen1 | Audio y micrófono HD | Teclado y ratón para juegos gratuitos
                    ✔ 4 ventiladores RGB para un máximo rendimiento de refrigeración | Skytech Chronos Mini Gaming Case con malla frontal - Edición negra | 1 año de garantía en piezas y mano de obra | Soporte técnico gratuito de por vida | Montado en los Estados Unidos
                    Este potente PC para juegos es capaz de ejecutar todos tus juegos favoritos como Call of Duty Warzone, Fornite, Escape from Tarkov, Grand Theft Auto V, Valorant, World of Warcraft, League of Legends, Apex Legends, Roblox, PLAYERUNKNOWN's Battlegrounds, Overwatch, Counter-Strike: Global Offensive, Battlefield V, New World, Minecraft, Elden Ring, Rocket Liga, La División, La DivIisión 2, y más en la configuración Ultra, resolución Full HD detallada de 1080p y un juego fluido de 60+ FPS.
                </p>

            </v-flex >
        </v-layout>

        <v-responsive
            class="overflow-y-auto "
            max-height="400"
        >

            <v-responsive
                height="200vh"
                class="text-center pa-2"
            >


                <v-lazy
                    v-model="isActive"
                    :options="{
          threshold: .5
        }"
                    min-height="200"
                    transition="fade-transition"
                >
                    <v-card
                        class="mx-auto py-5 "
                        max-width="900"
                    >

                        <p class=" text-center display-1 ">
                            Agnostic RTL Alignment
                        </p>
                        <v-avatar>
                            <img
                                src="https://cdn.vuetifyjs.com/images/john.jpg"
                                alt="John"
                            >
                        </v-avatar>
                        <v-rating
                            v-model="rating"
                            background-color="orange lighten-3"
                            color="orange"
                            large
                        ></v-rating>



                        <v-card-text>
                            Phasellus magna. Quisque rutrum. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Aliquam lobortis. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna.

                            In turpis. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In turpis. Pellentesque dapibus hendrerit tortor. Ut varius tincidunt libero.
                        </v-card-text>

                        <p class=" text-center display-1">
                            Agnostic RTL Alignment
                        </p>
                        <v-avatar>
                            <img
                                src="https://cdn.vuetifyjs.com/images/john.jpg"
                                alt="John"
                            >
                        </v-avatar>

                        <v-rating
                            v-model="rating"
                            background-color="orange lighten-3"
                            color="orange"
                            large
                        ></v-rating>

                        <v-card-text>
                            Phasellus magna. Quisque rutrum. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Aliquam lobortis. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna.

                            In turpis. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In turpis. Pellentesque dapibus hendrerit tortor. Ut varius tincidunt libero.
                        </v-card-text>
                        <p class=" text-center display-1 ">
                            Agnostic RTL Alignment
                        </p>
                        <v-avatar>
                            <img
                                src="https://cdn.vuetifyjs.com/images/john.jpg"
                                alt="John"
                            >
                        </v-avatar>

                        <v-rating
                            v-model="rating"
                            background-color="orange lighten-3"
                            color="orange"
                            large
                        ></v-rating>

                        <v-card-text>
                            Phasellus magna. Quisque rutrum. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Aliquam lobortis. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna.

                            In turpis. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In turpis. Pellentesque dapibus hendrerit tortor. Ut varius tincidunt libero.
                        </v-card-text>
                        <p class=" text-center display-1">
                            Agnostic RTL Alignment
                        </p>
                        <v-avatar>
                            <img
                                src="https://cdn.vuetifyjs.com/images/john.jpg"
                                alt="John"
                            >
                        </v-avatar>

                        <v-rating
                            v-model="rating"
                            background-color="orange lighten-3"
                            color="orange"
                            large
                        ></v-rating>

                        <v-card-text>
                            Phasellus magna. Quisque rutrum. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Aliquam lobortis. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna.

                            In turpis. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In turpis. Pellentesque dapibus hendrerit tortor. Ut varius tincidunt libero.
                        </v-card-text>
                        <p class=" text-center display-1">
                            Agnostic RTL Alignment
                        </p>
                        <v-avatar>
                            <img
                                src="https://cdn.vuetifyjs.com/images/john.jpg"
                                alt="John"
                            >
                        </v-avatar>

                        <v-rating
                            v-model="rating"
                            background-color="orange lighten-3"
                            color="orange"
                            large
                        ></v-rating>

                        <v-card-text>
                            Phasellus magna. Quisque rutrum. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Aliquam lobortis. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna.

                            In turpis. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In turpis. Pellentesque dapibus hendrerit tortor. Ut varius tincidunt libero.
                        </v-card-text>


                    </v-card>


                </v-lazy>
            </v-responsive>
        </v-responsive>
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
