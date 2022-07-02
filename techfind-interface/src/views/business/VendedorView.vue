<template >
    <v-container  >

        <v-layout  class="align-center justify-center text-center px-5 py-5 display-2 blue lighten-4" >
            <h1>
                SOMOS
            </h1>

        </v-layout>

        <v-layout wrap class="align-center justify-center text-center px-5 py-5  blue lighten-4 " >

            <v-flex clas="primary" xs3>
                <h1>
                    SOMOS
                </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat error provident dolorum eius sit architecto ad qui natus asperiores quod?
                </p>
            </v-flex>
            <v-flex clas="secondary" xs3>
                <h1>
                    Horario de atencion
                </h1>
                <p>
                    7 am / 8pm - Lunes a Viernes
                </p>
                <p>
                    7 am / 10pm - Sabado y Domingo
                </p>
            </v-flex >
            <v-flex clas="primary" xs3>
                <h1>
                    Ubicacion
                </h1>
                <v-img src= "https://imagenes.20minutos.es/files/og_thumbnail/uploads/imagenes/2021/06/18/semaforos-google-maps.png"
                       max-height="150"
                       max-width="500">
                </v-img>
            </v-flex>
            <v-flex clas="secondary" xs3>
                <h1>
                    Contactanos
                </h1>
                <v-icon large
                        color="black darken-2"
                >
                    mdi-whatsapp
                </v-icon>
                <v-icon large
                        color="black darken-2"
                >
                    mdi-facebook
                </v-icon>
                <v-icon large
                        color="black darken-2"
                >
                    mdi-instagram
                </v-icon>
                <v-icon large
                        color="black darken-2"
                >
                    mdi-twitter
                </v-icon>


            </v-flex >
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

        <v-carousel class="py-3" >
            <v-carousel-item
                v-for="(item,i) in items"
                :key="i"
                :src="item.src"
                reverse-transition="fade-transition"
                transition="fade-transition"
            ></v-carousel-item>
        </v-carousel>



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

                        <p class=" text-center display-2 ">
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



                        <v-card-text class="display-1" >
                            Phasellus magna. Quisque rutrum. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Aliquam lobortis. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna.

                            In turpis. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In turpis. Pellentesque dapibus hendrerit tortor. Ut varius tincidunt libero.
                        </v-card-text>

                        <p class=" text-center display-2">
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

                        <v-card-text class="display-1">
                            Phasellus magna. Quisque rutrum. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Aliquam lobortis. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna.

                            In turpis. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In turpis. Pellentesque dapibus hendrerit tortor. Ut varius tincidunt libero.
                        </v-card-text>
                        <p class=" text-center display-2 ">
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

                        <v-card-text class="display-1">
                            Phasellus magna. Quisque rutrum. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Aliquam lobortis. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna.

                            In turpis. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In turpis. Pellentesque dapibus hendrerit tortor. Ut varius tincidunt libero.
                        </v-card-text>
                        <p class=" text-center display-2">
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

                        <v-card-text class="display-1" >
                            Phasellus magna. Quisque rutrum. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Aliquam lobortis. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna.

                            In turpis. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In turpis. Pellentesque dapibus hendrerit tortor. Ut varius tincidunt libero.
                        </v-card-text>
                        <p class=" text-center display-2">
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

                        <v-card-text class="display-1" >
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
import mainView from "@/views/MainView";
export default {
    created() {
        console.log(mainView.data().viajero)
        console.log('este es mi id negocio '+this.id_negocio)
    },
    data () {
        return {
            icons: [
                'mdi-facebook',
                'mdi-twitter',
                'mdi-linkedin',
                'mdi-instagram',
            ],
            id_negocio:'',
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
