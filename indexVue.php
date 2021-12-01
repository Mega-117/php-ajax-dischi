<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- My Css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar">
                <div class="logo-container">

                    <a href="#">
                        <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/7/75/Spotify_icon.png" alt="logo-spotyfy" />
                    </a>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row row-cols-5">


                    <div v-for="(item, i) in albumList" :key="i" class="col">
                        <div class="card text-center px-3 pt-3 mb-3 pb-0 my-card">
                            <img :src="item.poster" class=" card-img-top" alt="ciao" />
                            <div class="card-body px-3 pt-3 pb-0">
                                <h5 class="my-title card-title">{{item.title}}</h5>
                                <p class="my-text card-text mb-0">{{item.author}}</p>
                                <p class="my-text card-text">{{item.year}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/script.js"></script>
</body>

</html>