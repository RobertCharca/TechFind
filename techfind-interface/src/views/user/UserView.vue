<template>
    <v-container fluid  >
        <v-layout row >
            <v-flex xs4 order-md1 order-xs1>
                <v-card dark tile flat color="white ">
                    <v-card-text></v-card-text>
                    <v-responsive
                        height="123vh"
                        class="text-center "
                    >
                        <v-responsive ></v-responsive>
                        <v-card
                            class="mx-auto"
                            max-width="900"
                        >
                            <v-card-title></v-card-title>
                            <v-avatar>
                                <img
                                    src="https://cdn.vuetifyjs.com/images/john.jpg"
                                    alt="John"
                                >
                            </v-avatar>

                            <v-card-text class="title">
                                Phasellus magna. Quisque rutrum. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Aliquam lobortis. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna.
                                In turpis. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In turpis. Pellentesque dapibus hendrerit tortor. Ut varius tincidunt libero.
                            </v-card-text>
                            <v-card-text class="title" >
                                Phasellus magna. Quisque rutrum. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Aliquam lobortis. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna.
                                In turpis. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In turpis. Pellentesque dapibus hendrerit tortor. Ut varius tincidunt libero.
                            </v-card-text>                            </v-card>

                    </v-responsive>

                </v-card>
            </v-flex>
            <v-flex xs8 order-md2 order-xs3>
                <v-card white tile flat color="white ">
                    <v-card-text></v-card-text>
                    <v-responsive
                        class="overflow-y-auto"
                        max-height="1200"
                    >
                        <div class="pa-4 text-center display-4">
                            Scroll down
                        </div>
                        <v-card-text class="pa-4 text-center title " >
                            Phasellus magna. Quisque rutrum. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Aliquam lobortis. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna.

                            In turpis. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In turpis. Pellentesque dapibus hendrerit tortor. Ut varius tincidunt libero.
                        </v-card-text>

                        <v-responsive
                            height="200vh"
                            class="text-center "
                        >

                            <v-responsive min-height="0vh"></v-responsive>
                            <div class="text-center display-2">
                                Comentarios
                            </div>

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

                                    <p class=" text-center">
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

                                    <p class=" text-center ">
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
                                    <p class=" text-center ">
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
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>
<script>
export default {
    data: () => ({
        rating: 4,
    }),
}
</script>
