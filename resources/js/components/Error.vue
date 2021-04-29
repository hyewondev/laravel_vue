<template>
    <div class="modal-backdrop">
        <div class="error-modal">
            <header class="modal-header">
                <h3>Error</h3>
                <button
                    type="button"
                    class="btn-x"
                    @click="close"
                >
                    x
                </button>
            </header>
            <section class="modal-body">
                <p>
                    {{ message }}
                </p>
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
    name: 'Error',
    props: {
       message: {
           type: String,
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
