<!-- <template>
    <br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div>
                <div>
                    <h3>Signup</h3>
                    <hr />
                </div>
                <form>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" />
                    </div>
                    <div class="my-3">
                        <button type="submit" class="btn btn-primary">
                            Signup
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>    
    
</template>

<script>
export default {};
</script> -->

<template>

    <div class="card" align="left">
        <div class="card-header">Register Form</div>
        <div class="card-body">

            <form @submit.prevent="saveData">

                <label>First Name</label>
                <input type="text" v-model="user.name" name="name" id="name" class="form-control" />


                <label>Email</label>
                <input type="email" v-model="user.email" name="email" id="email" class="form-control" />

                <label>Password</label>
                <input type="password" v-model="user.password" name="password" id="password" class="form-control" />


                <input type="submit" value="Save" class="btn btn-success">


            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Register',
    data() {
        return {
            result: {},
            user: {
                name: '',
                email: '',
                password: ''
            }
        }
    },
    created() {
    },
    mounted() {
        console.log("mounted() called.......");
    },
    methods: {
        async saveData() {
            await axios.post("/api/register", this.user)
                .then(
                    ({ data }) => {
                        console.log(data);
                        try {
                            alert("saveddddd");
                            router.push('/login');

                        }
                        catch (err) {
                            alert("failed");
                        }
                    }
                )
        }
    }
}
</script>