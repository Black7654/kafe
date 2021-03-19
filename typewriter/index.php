<html>

<head>
    <title>Membuat Efek Mengetik Pada Tulisan Menggunakan Javascipt</title>
</head>
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Lato);

    html {
        height: 100%;
    }

    body {
        background-color: #131313;
        font-family: 'Lato', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        margin: 0;
    }

    h1 {
        color: #ffffff;
        font-size: 4em;
    }

    .typed {
        border-bottom: 2px solid #ffffff;
    }

    .typed-cursor {
        opacity: 1;
        animation: blink 0.7s infinite;
    }

    @keyframes blink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }
</style>

<body>
    <div class="container">
        <h1>LEARN <span id="typed" class="typed"></span></h1>
    </div>
</body>
<script>
    new Typed('#typed', {
        strings: ['HTML', 'CSS', 'BOOTSTRAP', 'JAVASCRIPT'],
        typeSpeed: 100,
        delaySpeed: 100,
        loop: true
    });
</script>

</html>