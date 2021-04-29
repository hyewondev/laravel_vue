<template>
    <div>
        <div class="info-card mb-25">
            <div class="info-card-body inline-flex" v-if="photographer">
                <div class="inline-block box-picture">
                    <img class="profile-img" :src="photographer.profile_picture">
                </div>
                <div class="inline-block box-info">
                    <h1>{{ photographer.name }}</h1>
                    <div class="inline-flex text-sm leading-3">
                        <div class="inline-block box-bio">
                            <label class="text-gray-600 font-semibold">
                                Bio
                            </label>
                            <div class="text-gray-500 font-light-4">
                                {{ photographer.bio }}
                            </div>
                        </div>

                        <div class="inline-block box-contact">
                            <label class="text-gray-600 font-semibold">
                                Phone
                            </label>
                            <div class="text-pink font-light-2">
                                {{ photographer.phone }}
                            </div>
                            <label class="text-gray-600 font-semibold">
                                Email
                            </label>
                            <div class="text-pink font-light-2">
                                {{ photographer.email }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <Gallery v-if="photographer" :albums="photographer.albums"></Gallery>

        <Error
            v-if="isErrorVisible"
            @close="closeError"
            :message="message">
        </Error>

    </div>
</template>

<script>
import Service from '../services/Service';
import Gallery from './Gallery';
import Error from './Error';
export default {
    components: { Gallery, Error },
    data() {
        return {
            photographer: null,
            isErrorVisible: false,
            message: ''
        }
    },
    created() {
        Service.getPhotographer(1)
            .then(response => {
                this.photographer = response.data;
            })
            .catch(error => {
                this.message = error.response.data.message;
                this.isErrorVisible = true;
            })
    },
    methods: {
        showError() {
            this.isErrorVisible = true;
        },
        closeError() {
            this.isErrorVisible = false;
        }
    }
}
</script>
