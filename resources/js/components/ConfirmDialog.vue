<template>
    <modal name="dialog">
        {{ params.message }}

        <template v-slot:footer>
            <button
                class="bg-gray-500 hover:bg-gray-600 py-2 px-4 text-white rounded-lg mr-2"
                @click.prevent="handleClick(false)"
                v-if="params.cancelButton"
                v-text="params.cancelButton"
            >
            </button>

            <button
                class="bg-blue-500 hover:bg-blue-600 py-2 px-4 text-white rounded-lg"
                @click.prevent="handleClick(true)"
                v-if="params.confirmButton"
                v-text="params.confirmButton"
            >
            </button>
        </template>
    </modal>
</template>

<script>
    import Modal from '../plugins/modal/ModalPlugin';

    export default {
        data() {
            return {
                params: {
                    message: 'Are you sure?',
                    confirmButton: 'Continue',
                    cancelButton: 'Cancel'
                }
            };
        },

        beforeMount() {
            Modal.events.$on('show', params => {
                Object.assign(this.params, params);
            });
        },

        methods: {
            handleClick(confirmed) {
                Modal.events.$emit('clicked', confirmed);

                this.$modal.hide();
            }
        }
    }
</script>
