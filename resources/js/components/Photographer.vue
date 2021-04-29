<template>
    <div>
        Photographer

        <Error
            v-if="isErrorVisible"
            @close="closeError"
            :message="message">
        </Error>


    </div>
</template>

<script>
import Service from '../services/Service';
import Error from './Error';
export default {
    components: { Error },
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
