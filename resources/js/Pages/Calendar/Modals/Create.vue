<template>
    <b-modal v-model="showModal" @ok="create($event)"  size="xl" title="Create Employee" no-close-on-backdrop centered>
        <b-form class="customform">
            
        </b-form>
    </b-modal>
</template>
<script>
export default {
    data(){
        return {
            showModal: false
        }
    },

    methods : {
        set(){
            this.showModal = true;
        },

        create(){

        },

        hide(){

        }
    }
}
</script>