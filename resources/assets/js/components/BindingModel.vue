<template>
    <div class="form-input-binding">
        <div class="text">
            {{ message }}
        </div>
        <div class="input-form">
            <select v-model="message">
                <option disabled="">Choose one</option>
                <option :value="value.one">1</option>
                <option :value="value.two">2</option>
            </select>
        </div>
        <div class="event-handling">
            <form>
                <button type="submit" @click.prevent="alert">Submit</button>
            </form>
        </div>
        <div class="event-handling">
            <div @click.self="alertHello">
                <button @click="alertWelcome">CLick</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "BindingModel",
        data() {
            return {
                message: '',
                value: {
                    one: 'this one',
                    two: 'this two'
                }
            }
        },
        methods: {
            alert() {
                alert(123)
            },
            alertHello() {
                alert('Hello')
            },
            alertWelcome() {
                alert('Welcome')
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>