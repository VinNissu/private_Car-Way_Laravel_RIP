<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <title>Car-Way</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- conexões  -->
    <!-- 1º conexões externas  -->

    <!-- FONTES GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;0,800;1,300;1,700&display=swap"
        rel="stylesheet">


    <!-- (conexão com o google api) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- biblioteca de icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Fontes do google -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;0,800;1,300;1,700&display=swap"
        rel="stylesheet">
    <!-- Fonta Raleway -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">

    <!-- Recursos do bootstrap   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Conexao com css internto   -->
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<!-- __________________FIM DAS CONEXOES E PARTE  INICIAL _______________________ -->








<!-- __________________COMECANDO O BODY_______________________ -->

<body>
    <!-- dentro do body criar um header com uma class  -->
    <header class="d-flex justify-content-between p-2 fixed-top barra-nav" data-aos="fade-left"
        data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">

        <div id="menuHamb" class="menu-hamb col-1">
            <a href="{{ '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                </svg>


            </a>
        </div>

        <h4 class="fw-bold"><span id="sualocali"><a href="gps.html">Sua localização</a></span></h4>

        <div id="localizacaoIcon" class="localizacaoicon col-1"><a href="grupo.html"><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>

            </a></div>
    </header>









    <section class="hero mb-4">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 offset-lg-3 mb-4 border border-0"data-aos="fade-up" data-aos-duration="2000">

                    <section class="hero mt-3" data-aos="fade-up">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 offset-lg-3 mt-2  border border-0">


                                    <div class="cardbox shadow-lg bg-white mt-4 bordaredondacard">

                                        <div class="cardbox-heading">


                                            <!-- START dropdown-->
                                            <div class="dropdown float-right">
                                                <div id="localizacao"><a href="gps.html" id="localizacaovoce"> <span
                                                            class="fw-bold ">SP-BRASIL_MG_TPTPT</span>
                                                    </a></div>
                                                <div>

                                                    {{-- <button class="btn btn-flat btn-flat-icon reportar border-0 "
                                        type="button" data-toggle="dropdown" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5" />
                                        </svg>

                                    </button> --}}
                                                </div>

                                                <div class="dropdown-menu dropdown-scale dropdown-menu-right"
                                                    role="menu"
                                                    style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                </div>



                                            </div>
                                            <!--/ dropdown -->
                                            <div class="media mb-1">
                                                <div class="d-flex mr-3">
                                                    <a href="#"><img id="imagem" class="imagen ms-3"
                                                            src="./imagens/mystery.jpg" alt=""></a>
                                                </div>
                                                <div id="fonte-1" class="media-body">
                                                    <p class="m-1 ms-4">Vini</p>
                                                    <p class="ms-3">Grupo</p>
                                                </div>
                                            </div>


                                            <!--/ media -->
                                        </div>









                                        <!--/ cardbox-heading -->

                                        <div class="cardbox-item ">
                                            <div class="col-12">
                                                <button data-bs-toggle="modal" data-bs-target="#modalNovoPost" class="btn btn-link">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <div><img class=" mb-2  img-fluid" src="./imagens/caminhao2.jpg"
                                                    alt="Image"></div>

                                        </div>








                                        <!--/ cardbox-item -->
                                        <div class="cardbox-base ms-1 radiusborder mt-5">
                                            <ul
                                                class="float-right list-group list-group-horizontal ml-4  mt-4 radiusborder bg-black">
                                                <li
                                                    class="list-group-item radiusborder border border-white bg-black colorwhite">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z" />
                                                    </svg>

                                                </li>
                                                <div class="tamicon colorwhite">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="ms-2 mt-2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                                    </svg>
                                                </div>
                                                </li>
                                            </ul>
                                            <br>
                                            <br>
                    </section>




<div class="modal fade" id="modalNovoPost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form> 

      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>

      </form>
      </div>
    </div>
  </div>
</div>

</body>
















<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="/js/costumer.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</html>
