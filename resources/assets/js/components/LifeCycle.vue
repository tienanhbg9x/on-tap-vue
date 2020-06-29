<template>
    <!--    <div id="my-text">-->
    <!--        {{ counter }}-->
    <!--    </div>-->
    <!--    <p ref="dom-element">{{counter}}</p>-->
    <div>
        <div>
            Name: {{ person.name }}
        </div>
        <div>
            Nick name: {{ person.nickname }}
        </div>
        <div>
            <button @click="changeName">Change Name</button>
        </div>
        <div>
            <button @click="changeNickname">Change Nick Name</button>
        </div>
        <div>
            <button @click="changeNicknameProperly">Change Nick name properly</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "LifeCycle",
        data() {
            return {
                message: 'Hello',
                counter: 0,
                person: {
                    name: 'ABC'
                }
            }
        },
        // beforeCreate() {
        //     console.log(this.message)
        // },
        // created() {
        //     console.log(this.message);
        //     console.log(document.getElementById('my-text').innerHTML)
        // },
        // mounted() {
        //     console.log(this.$el)
        //     console.log(document.getElementById('my-text').innerHTML)
        // }
        // beforeUpdate() {
        //     console.log(this.counter) // Logs the counter value every second, before the DOM updates.
        // },
        // updated() {
        //     // Fired every second, should always be true
        //     console.log(+this.$refs['dom-element'].textContent === this.counter)
        // },
        // created() {
        //     setInterval(() => {
        //         this.counter++
        //     }, 1000)
        // },
        methods: {
            changeName() {
                this.person.name = 'Tiến Anh'
            },
            changeNickname() {
                this.person.nickname = Math.random().toString(36).substring(7);
            },
            changeNicknameProperly() {
                Vue.set(this.person, 'nickname', 'Louis');
            }
        }
    }
</script>

<style scoped>

</style>