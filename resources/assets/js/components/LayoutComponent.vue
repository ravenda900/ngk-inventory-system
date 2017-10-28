<template v-if="isAuthenticated">

</template>
<template v-else>
    <guest :app-name="appName" :is-authenticated="isAuthenticated"></guest>
</template>
<script>
    import Guest from './layouts/GuestComponent';
    export default {
        components: {
            guest: Guest
        },
        props: {
            isAuthenticated: {
                type: Boolean,
                required: true
            },
            appName: {
                type: String,
                required: true
            }
        }
    }
</script>