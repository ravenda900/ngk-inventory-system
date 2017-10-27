<template>
    <div class="full-page login-page" filter-color="black" :data-image="'/assets/img/login.jpeg'">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="post" role="form">
                            <div class="card card-login card-hidden">
                                <div class="card-header text-center" data-background-color="blue">
                                    <h4 class="card-title">Login</h4>
                                </div>
                                <div class="card-content">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Username</label>
                                            <input type="text" class="form-control" name="username" v-model="loginData.username">
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="password" class="form-control" name="password" v-model="loginData.password">
                                        </div>
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" @click.prevent="login" class="btn btn-info btn-simple btn-wd btn-lg">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <!-- <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="login.html#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="login.html#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="login.html#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="login.html#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav> -->
                <p class="copyright pull-right">
                    &copy; 2017
                    <a href="https://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                loginData: {
                    username: '',
                    password: ''
                },
                errors: {
                    username: {
                        status: false,
                        message: null
                    },
                    password: {
                        status: false,
                        message: null
                    }
                }
            }
        },
        methods: {
            login() {
                let vm = this;
                axios.post('/login', vm.loginData)
                    .then(function(response) {
                        console.log(response);
                    })
                    .catch(function(error) {
                        var errors = error.response;

                        console.log(errors);

                        if (errors.statusText === 'Unprocessable Entity' || errors.status === 422) {
                            if (errors.data) {
                                if (errors.data.username) {
                                    vm.errors.usernames.status = true;
                                    vm.errors.username.message = _.isArray(errors.data.username) ? errors.data.username[0] : errors.data.username;
                                }
                                if (errors.data.passoword) {
                                    vm.errors.password.status = true;
                                    vm.errors.password.message = _.isArray(errors.data.password) ? errors.data.password[0] : errors.data.password;
                                }
                            }
                        }
                    });
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>