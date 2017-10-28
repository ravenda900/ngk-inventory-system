<template>
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../dashboard.html"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="/login">
                            <i class="material-icons">fingerprint</i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
<script>
    export default {
        props: {
            appName: {
                type: String,
                required: true
            }
        }
    }
</script>