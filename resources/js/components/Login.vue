<!-- <template>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div>
                <div>
                    <h3>Login</h3>
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
                            Login
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

    <div class="row">

        <div class="col-sm-4">
            <p class="text-danger" v-if="error">{{ error }}</p>
            <h2 align="center"> Login</h2>

            <form @submit.prevent="login">
                <div class="form-group" align="left">
                    <label>Email</label>
                    <input type="email" v-model="form.email" class="form-control" placeholder="Email">
                </div>


                <div class="form-group" align="left">
                    <label>Password</label>
                    <input type="password" v-model="form.password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

</template>

<script setup>
import axios from 'axios';
import { reactive, ref } from 'vue';
import { useRouter } from 'vue-router';

const router = useRouter();

let form = reactive({
    email: '',
    password: '',
})

let error = ref('')

const login = async() => {
    await axios.post("/api/login", form)
                .then(response =>{
                    if(response.data.message) {
                        console.log('success')
                        router.push('/blogs/list');
                    } else {
                        console.log('unsuccess')
                        error.value = response.data.message
                    }
                })
}
</script>

<style>
    .text-danger {
        color: red;
    }
</style>