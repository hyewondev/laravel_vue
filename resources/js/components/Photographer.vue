<template>
    <div>
        <div class="info-card mb-25">
            <div class="info-card-body inline-flex">
                <div class="inline-block box-picture">
                    <img class="profile-img" src="img/profile.jpeg" alt="">
                </div>
                <div class="inline-block box-info">
                    <h1>Nick Reynolds</h1>
                    <div class="inline-flex text-sm leading-3">
                        <div class="inline-block box-bio">
                            <label class="text-gray-500 font-semibold">
                                Bio
                            </label>
                            <div class="text-gray-400 font-light-3">
                                Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the
                            </div>
                        </div>

                        <div class="inline-block box-contact">
                            <label class="text-gray-500 font-semibold">
                                Phone
                            </label>
                            <div class="text-pink font-light-2">
                                555-555-5555
                            </div>
                            <label class="text-gray-500 font-semibold">
                                Email
                            </label>
                            <div class="text-pink font-light-2">
                                nick.reynolds@domain.co
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <Gallery></Gallery>

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
                console.log(response);
                this.event = response.data
            })
            .catch(error => {
                this.message = error.response.data.message;
                this.isErrorVisible = true
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
