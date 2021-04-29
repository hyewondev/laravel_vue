<template>
    <div class="modal-backdrop">
        <div class="modal">
            <header class="modal-header">
                <h2 class="header text-gray-700">
                    {{ photo.title }}
                </h2>
                <button
                    type="button"
                    class="btn-x"
                    @click="close"
                >
                    x
                </button>
            </header>

            <section class="modal-body">
                <img :src="photo.img" :alt="photo.title">
                <div class="inline-flex">
                    <div class="inline-block box-icon">
                        <font-awesome-icon icon="heart" class="text-red" v-show="photo.featured" />
                    </div>
                    <div class="inline-block text-gray-900 box-date text-right text-sm font-light-2">
                        {{ photo.date }}
                    </div>
                </div>
                <div class="body-text text-sm scroll text-gray-700 font-light-3">
                    {{ photo.description }}
                </div>

            </section>

            <footer class="modal-footer">
                <button
                    type="button"
                    class="btn-close"
                    @click="close"
                >
                    Close
                </button>
            </footer>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Photo',
    props: {
        photo: {
            type: Object,
            required: true
        }
    },
    methods: {
        close() {
            this.$emit('close');
        }
    }
}
</script>
