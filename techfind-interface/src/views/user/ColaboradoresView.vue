<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3">
            <v-container>
                <v-row>
                    <v-col cols="2">
                        <v-sheet rounded="lg">

                        </v-sheet>
                    </v-col>

                    <v-col>
                        <v-sheet
                            min-height="70vh"
                            rounded="lg"
                        >
                            <div class="text-center d-flex align-center justify-space-around">
                                <v-layout >

                                    <v-flex xs12 sm6>
                                        <v-card>
                                            <v-img
                                                class="align-center justify-center "
                                                lazy-src="https://picsum.photos/id/11/10/6"
                                                max-height="350"
                                                max-width="456"
                                                src="https://picsum.photos/id/11/500/300"
                                            ></v-img>
                                            <p></p>
                                            <v-card-text>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt vero corporis incidunt saepe qui commodi quasi neque veniam quam, aspernatur est beatae maxime animi sed reiciendis mollitia ducimus veritatis repellendus</v-card-text>
                                            <v-btn color="info" flat>editar</v-btn>
                                            <p></p>
                                            <v-btn color="info" flat>eliminar</v-btn>
                                            <p></p>
                                            <v-btn   color="info" flat>Mensaje</v-btn>
                                        </v-card>
                                    </v-flex>
                                    <v-flex xs12 sm6>
                                        <v-card>
                                            <v-img

                                                lazy-src="https://picsum.photos/id/11/10/6"
                                                max-height="350"
                                                max-width="455"
                                                src="https://picsum.photos/id/11/500/300"
                                            ></v-img>
                                            <p></p>
                                            <v-card-text>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt vero corporis incidunt saepe qui commodi quasi neque veniam quam, aspernatur est beatae maxime animi sed reiciendis mollitia ducimus veritatis repellendus</v-card-text>
                                            <v-btn color="info" flat>editar</v-btn>
                                            <p></p>
                                            <v-btn color="info" flat>eliminar</v-btn>
                                            <p></p>
                                            <v-btn   color="info" flat>Mensaje</v-btn>
                                        </v-card>
                                    </v-flex>
                                    <v-flex xs12 sm6>
                                        <v-card>
                                            <v-img
                                                class="align-center justify-center "
                                                lazy-src="https://picsum.photos/id/11/10/6"
                                                max-height="350"
                                                max-width="455"
                                                src="https://picsum.photos/id/11/500/300"
                                            ></v-img>
                                            <p></p>
                                            <v-card-text>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt vero corporis incidunt saepe qui commodi quasi neque veniam quam, aspernatur est beatae maxime animi sed reiciendis mollitia ducimus veritatis repellendus</v-card-text>
                                            <v-btn color="info" flat>editar</v-btn>
                                            <p></p>
                                            <v-btn color="info" flat>eliminar</v-btn>
                                            <p></p>
                                            <v-btn   color="info" flat>Mensaje</v-btn>
                                        </v-card>
                                    </v-flex>


                                </v-layout>
                            </div>

                        </v-sheet>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
export default {
    data: () => ({
        links: [
            'Home',
            'About',
            'Features',
            'Pricing',
        ],
    }),
}
</script>
