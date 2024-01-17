''' HTML
<section> <!--Início do forms de login-->
          <form>
            <h1> Faça seu cadastro</h1>
          <div class="input-but"> <!--Digite seu usuário-->
            <input type="text" placeholder="Digite seu Usuário" id="username">
            <i class='bx bxs-user'></i>
          </div>
          <div class="input-but"> <!--Digite sua senha-->
            <input type="password" placeholder="Digite sua Senha" id="password">
            <i class='bx bxs-lock-alt'></i>
          </div>
            
            <button class="button_register">Registrar</button>

            <h2 class="texto_opcoes_ggfb">Entrar com Google ou Facebook</h2>
            <div class="social"> <!--O bloco com Google e Facebook-->

              <button class="google">
                <a class="googletext"><i class="fa fa-google" aria-hidden="true"></i> Google</a>
              </button>

              <button class="faceb">
                <a class="facetext"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>
              </button>
      
          </form>
        </section> 

--- CSS ---

form {
height: 350px;
width: 350px;
background-color: rgba(255, 255, 255, 0.205);
position: absolute;
transform: translate(-50%, -50%);
top: 47%;
left: 50%;
border-radius: 10px;
backdrop-filter: blur(10px);
border: 2px solid rgba(255, 255, 255, 0.1);
box-shadow: 0 0 25px rgba(8, 7, 16, 0.2);
padding: 50px 35px;
margin-top: 29vh;
align-items: center;
text-align: center;
}

form * {
font-family: 'Poppins', sans-serif;
letter-spacing: 0.5px;
outline: none;
border: none;
}

form h1 {
}


input {
position: relative;
height: 50px;
width: 300px;
background-color:  rgba(255, 255, 255, 0.311);
border-radius:40px;
border: none;
border: 1.3px solid white;
padding-left: 20px;
margin-top: 10px;
font-size: 14px;

}

.input-but i{
    transform: translate(-250%);
}

.button_register {
    align-items: center;
    margin-top: 20px;
    padding: 10px;
    border-radius: 5px;
}

.texto_opcoes_ggfb {
    align-items: center;
    margin-top: 30px;
    font-size: 12px;
    color: rgb(0, 0, 0);
}

.social {

    .google{
        border-radius: 3px;
        background-color: rgba(255, 255, 255, 0.507);
    }

    .faceb{
        border-radius: 3px;
        background-color: rgba(255, 255, 255, 0.507);
    }



.googletext{
    color: brown;
}
.facetext{
    color: blue;
}

}