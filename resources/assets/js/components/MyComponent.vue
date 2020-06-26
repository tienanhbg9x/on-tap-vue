<template>
    <div class="my-component">
        <div>{{ sayHi(message) }}</div>
        <div>{{ reverseMessage }}</div>
    </div>
</template>

<script>
    export default {
        name: "MyComponent",
        data() {
            return {
                message: 'this is text'
            }
        },
        computed: {
            reverseMessage() {
                return this.message.split('').reverse().join('')
            }
        },
        methods: {
            sayHi(text) {
                return text.toUpperCase();
            }
        }
    }
</script>

<style lang="scss" scoped>
    .my-component {
        color: red;
        text-align: center;
    }
</style>