<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/styles.css">
    <title>Cadastro </title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        

</head>

<body>


    <div id="logreg-forms">
        <label for="customRange1" class="form-label fw-bold textposition"></label>

        <form class="form-signin1" data-aos="zoom-in">
            <p style="text-align:center " class="fw-bold"></p>
            <h1 class="h3 mb-3 font-weight-normal fw-bold fs-1" style="text-align: center"> Cadastre sua conta</h1>




            <input type="text" id="user-name" class="form-control mt-3" placeholder="Nome completo" required=""
                autofocus="">

            <input type="range" class="form-range mt-3" id="customRange1">
            <p class="mb-1 mx-auto">Sua idade</p>
            <input type="email" id="user-email" class="form-control mt-3 " placeholder="Email" required autofocus="">
            <input type="password" id="user-pass" class="form-control mt-3 " placeholder="Senha" required autofocus="">
            <input type="password" id="user-repeatpass" class="form-control mt-3 mb-3 " placeholder="Repita a senha"
                required autofocus="">
    
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Aceito os termos de uso</label>
              </div>

            <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i>Criar</button>
            <a href="{{route('login')}}" id="cancel_signup"><i class="fas fa-angle-left"></i>Voltar</a>
            <hr>
            <form action="/signup/" class="form-signup">
                <h1 class="h3 mb-3 font-weight-normal fw-bold fs-1" style="text-align: center"> </h1>
                <div class="social-login">
                    <button class="btn facebook-btn social-btn fw-bold" type="button"><span><i
                                class="fab fa-facebook-f"></i> Entre com Facebook</span> </button>
                </div>
                <div class="social-login">
                    <button class="btn google-btn social-btn fw-bold " type="button"><span><i
                                class="fab fa-google-plus-g"></i> Entre com Google</span> </button>
            </form>
            <br>

    </div>
    <p style="text-align:center">
        <a href="http://bit.ly/2RjWFMfunction toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})g" target="_blank" style="color:black"></a>
    </p>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="/js/costumer.js"></script>
        
</body>

</html>