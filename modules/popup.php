  <style>
@media (max-width: 600px) {
  .facet_sidebar {
    display: none;
  }
}


.popup-contenedor1{

      padding: 10px 28px;
      margin-top: 5px;

}
</style>



  <div class="modal-wrapper" id="popup">
     <div class="popup-contenedor1">
     <h2 class="fontcolorlogi facet_sidebar">Registro de Clientes</h2>
     <img src="blog/logo/logo.png" class="facet_sidebar">
   <form method="POST" action="formulario.php">
<br/>
    <div class="group">      
      <input type="text" name="nombre" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label style="color: #ffffff;">Nombre</label>
    </div>
    <div class="group">      
      <input type="text" name="email" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label style="color: #ffffff;">Email</label>
    </div>
    <div class="group">      
      <input type="password" name="pass" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label style="color: #ffffff;">Contraseña</label>
    </div>
    <div class="group">      
      <input type="text" name="direccion" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label style="color: #ffffff;">Direccion</label>
    </div>
    <div class="group">      
      <input type="number" name="edad"  required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label style="color: #ffffff;">Edad</label>
    </div>
    <div class="group">      
      <input type="text" name="nombre" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label style="color: #ffffff;">Telefono</label>
    </div>
   <input type="submit" name="submit" style="width: 70px; background:#00695c; color: white; font-size: 16px;" value="Registrar" />
   </form>
         <a class="popup-cerrar" href="#">X</a>
     </div>
  </div>


  <!-- LOGIN -->
  <div class="modal-wrapper" id="popup1" s>
     <div class="popup-contenedor1">
       <h2 class="fontcolorlogi">Inicio de Usuario</h2>
       <img src="blog/logo/logo.png">
   
 <br/> <br/> <br/> <br/>
<!--test-->
<form method="post" action="#">
    <div class="group">      
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label style="color: #ffffff;">Usuario</label>
    </div>
    <div class="group">      
      <input type="password" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label style="color: #ffffff;">Password</label>
    </div>
    <input type="submit"  name="submit" style="width: 70px; background:#00695c; color: white;" value=" Iniciar" />
</form>
   <!--test-->
        <a class="popup-cerrar" href="#">X</a>
     </div>
  </div>




<style type="text/css">

.fontcolorlogi{


   color: #ffffff ;
}


/* form starting stylings ------------------------------- */
.group        { 
  position:relative; 
  margin-bottom:45px; 
}
input         {
    font-size: 18px;
    padding: 10px 10px 10px 5px;
    display: block;
    width: 100;
    border: none;
}
input:focus     { outline:none; }

/* LABEL ======================================= */
label          {
  color:#ffffff; 
  font-size:18px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  top:10px;
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}

/* active state */
input:focus ~ label, input:valid ~ label    {
  top:-20px;
  font-size:14px;
  color:#5264AE;
}

/* BOTTOM BARS ================================= */
.bar  { position:relative; display:block; width:300px; }
.bar:before, .bar:after   {
  content:'';
  height:2px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background:#ffffff; 
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}
.bar:before {
  left:50%;
}
.bar:after {
  right:50%; 
}

/* active state */
input:focus ~ .bar:before, input:focus ~ .bar:after {
  width:50%;
}

/* HIGHLIGHTER ================================== */
.highlight {
  position:absolute;
  height:60%; 
  width:100px; 
  top:25%; 
  left:0;
  pointer-events:none;
  opacity:0.5;
}
/* active state */
input:focus ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease;
}
/* ANIMATIONS ================ */
@-webkit-keyframes inputHighlighter {
  from { background:#ffffff; }
  to  { width:0; background:transparent; }
}
@-moz-keyframes inputHighlighter {
  from { background:#ffffff; }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlighter {
  from { background:#ffffff; }
  to  { width:0; background:transparent; }
}
</style>