<template>
    <div class="user-dashboard">
        <div class="list-user-comp">
            <h4>List User</h4>
            <ListUser @userSelected="childrenSelectUser(...arguments, '123')"></ListUser>
        </div>
        <hr>
        <div class="user-detail-comp">
            <h4>User Detail</h4>
            <UserDetail :userDetailInfo="userSelectedFromChild"></UserDetail>
            <!--        prop userDetailInfo-->
        </div>
        <form
                id="app"
                @submit="checkForm"
                action="https://vuejs.org/"
                method="post"
        >

            <p v-if="errors.length">
                <b>Please correct the following error(s):</b>
                <ul>
                    <li v-for="error in errors">{{ error }}</li>
                </ul>
            </p>

            <p>
                <label for="name">Name</label>
                <input
                        id="name"
                        v-model="name"
                        type="text"
                        name="name"
                >
            </p>

            <p>
                <label for="age">Age</label>
                <input
                        id="age"
                        v-model="age"
                        type="number"
                        name="age"
                        min="0">
            </p>

            <p>
                <input
                        type="submit"
                        value="Submit"
                >
            </p>

        </form>
    </div>
</template>

<script>
    import ListUser from "./ListUser";
    import UserDetail from "./UserDetail";

    export default {
        name: "UserDashboard",
        components: {
            ListUser,
            UserDetail
        },
        data() {
            return {
                userSelectedFromChild: {},
                errors: [],
                name: null,
                age: null
            }
        },
        methods: {
            childrenSelectUser(user, number, string) {
                console.log(user);
                console.log(number);
                console.log(string);
                this.userSelectedFromChild = user
            },
            checkForm: function (e) {
                if (this.name && this.age) {
                    return true;
                }

                this.errors = [];

                if (!this.name) {
                    this.errors.push('Name required.');
                }
                if (!this.age) {
                    this.errors.push('Age required.');
                }

                e.preventDefault();
            }
        }
    }
</script>

<style scoped>
    .user-dashboard {
        margin: 0 20px;
    }
</style>