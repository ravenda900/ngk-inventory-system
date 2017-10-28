<template>
    <div>
        <nav-header :app-name="appName"></nav-header>
        <div class="wrapper wrapper-full-page">
            <login></login>
        </div>
    </div>
</template>

<script>
    import Nav from '../guest/NavComponent';
    import Login from '../guest/auth/LoginComponent';

    export default {
        components: {
            navHeader: Nav,
            login: Login
        },
        props: {
            appName: {
                type: String,
                required: true
            }
        }
    }
</script>