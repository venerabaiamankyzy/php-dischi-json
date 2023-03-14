<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>PHP Dischi JSON</title>

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <!-- Axios -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js"
      integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- Vue3 -->
    <script src="https://unpkg.com/vue@3"></script>

    <!-- JS -->
    <script src="main.js" defer></script>
    <!-- CSS -->
    <link rel="stylesheet" href="./style.css" />
  </head>

  <body>
    <div id="app">
      <header>
        <div class="container">
          <a href="#" class="pt-3">
            <img src="./img/spotify.png" class="logo" alt="logo" />
          </a>
        </div>
      </header>
      <main>
        <div class="container">
          <div class="row gap-5 pt-4 gx-5 justify-content-center bg-blue">
            <div
              v-for="(disk, index) in diskList"
              :key="index"
              class="col col-md-3 img-bg py-3 rounded-3"
            >
              <div class="card-disk">
                <img :src="disk.poster" alt="Poster" class="mt-3" />
                <h3 class="fs-5 fw-semibold mt-3">{{disk.title}}</h3>
                <small>{{disk.author }}</small>
                <p class="fs-6 fw-semibold mt-2">{{disk.year}}</p>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
