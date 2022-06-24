<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="app">
    <v-app app>
        <!--<Login></Login>-->
        <!--<example-component></example-component>-->
        <example-component></example-component>
    </v-app>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
<script>
    import Login from "../js/components/Login";
    export default {
        components: {Login}
    }
</script>
