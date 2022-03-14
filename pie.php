<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500&display=swap" rel="stylesheet">


</body>
<footer class='pie'>
    <section class="pietext">
    <div class='grupo1'>
        <div class="box">
            <figure>
                <a href="https://zongolica.tecnm.mx/TecNM/">
                    <img src="istzlogo.png" alt="logo del instituto tecnologico superior de zongolica">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>DATOS DE ALUMNO</h2>
            <p>Ingenieria en Sistemas Computacionales</p>
            <p>803-A Escolarizado</p>
            <p>Extension Nogales</p>
        </div>
        <div class="box">
            <h2>CONTACTOS</h2>
            <div class="redsocial">
                <p>Miguel Angel Lechuga Martinez</p>
                <a href="https://github.com/milechs" target ="_blank" class="fa fa-github"></a>
                <a href="mailto:186w0297@zongolica.tecnm.mx" target ="_blank" class="fas fa-envelope-square"></a>
                <a href="https://www.facebook.com/miguel.lechuga.mtnz.omg" target ="_blank" class='fa fa-facebook'></a>
                <a href="https://www.instagram.com/milechs_/" target ="_blank" class="fa fa-instagram"></a>
               
            </div>
        </div>
    </div>
    <div class="grupo2">
        <small>&copy; 2022 <b>Miguel Angel Lechuga Martinez</b> - Todos los Derechos Reservados </small>
    </div>
    </section>
</footer>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500&display=swap');
    .pie{
        width: 100%;
        
        background-color:#1F2643;
color: white;
    }
    .pie .grupo1{
        width: 100%;
        max-width: 1200px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap:50px;
        padding: 45px 0px;
    }
    
    .pie .grupo1 .box figure{
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .pie .grupo1 .box figure img{
        width: 250px;
    }
    .pie .grupo1 .box h2{
        color: #fff;
        margin-bottom: 25px;
        font-size: 20px;
    }
    .pie .grupo1 .box p{
        color: #efefef;
        margin-bottom: 10px;
    }
    .pie .grupo1 .box .redsocial a{
        display: inline-block;
        text-decoration: none;
        width: 45px;
        height: 45px;
        line-height: 45px;
        color: #fff;
        margin-right: 10px;
        background-color: #243371;
        text-align: center;
        transition: all 300ms ease;
    }
    .pie .grupo1 .box .redsocial a:hover{
        color: #3592E0;
    }
    .pie .grupo2{
        background-color: #243371;
        padding: 15px 0px;
        text-align: center;
        color: #fff;
    }
   
    
</style>
</html>