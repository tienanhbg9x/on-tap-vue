<template>
    <div class="my-component">
        <div>Message type: {{ message.type }}</div>
        <div>Message text: {{ message.text }}</div>
        <button @click="changeType">Change type</button>
        <button @click="changeText">Change text</button>
    </div>
</template>

<script>
    export default {
        name: "MyComponent",
        data() {
            return {
                message: {
                    type: 'greeting',
                    text: 'How are you?'
                }
            }
        },

        computed: {
            getType() {
                return this.message.type
            },
            getText() {
                return this.message.text
            }
        },

        watch: {
            getType() {
                console.log('type changed')
            },
            getText() {
                console.log('text changed')
            }

        },

        methods: {
            changeText() {
                this.message.text = 'this is new message'
            },

            changeType() {
                this.message.type = 'this is new type'
            }
        }
    }
</script>

<style lang="scss" scoped>
    .my-component {
        color: blue;
        text-align: center;
    }
</style>