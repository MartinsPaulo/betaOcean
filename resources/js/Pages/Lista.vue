<template>
    <app-layout>
        <div class="md:container md:mx-auto">
            <form @submit.prevent="handleForm">
                <Label>Ola esta é uma label</Label>
                <Input v-model="form.palavra"></Input>
                <Button>Cadastrar</Button>
            </form>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Label from '../Jetstream/Label'
    import Input from '../Jetstream/Input'
    import Button from '../Jetstream/Button'

    export default {
        components: {
            AppLayout,
            Label,
            Input,
            Button,
        },
        data: ()=>{
        return {
                form:{
                    palavra:null,
                }
            }
        },
        methods:{
            handleForm(){
                this.$inertia.post('/listaCad', this.form);
            },
        },
    }
</script>
