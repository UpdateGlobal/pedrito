  <div class="modal-wrapper" id="popup">
     <div class="popup-contenedor1">
     <h2 class="fontcolorlogi">Registro de Clientes</h2>
     <img src="blog/logo/logo.png">


   <form method="POST" action="formulario.php">

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
      <input type="pass" name="pass" required>
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
   <input type="submit" name="submit" style="width: 70px; background:#4bb093; color: white;" value="Enviar" />
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
      <label style="color: #ffffff;">Name</label>
    </div>
    <div class="group">      
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label style="color: #ffffff;">Email</label>
    </div>
    <input type="submit" name="submit" style="width: 70px; background:#4bb093; color: white;" value="Enviar" />
</form>
   <!--test-->
        <a class="popup-cerrar" href="#">X</a>
     </div>
  </div>




<!--

<div class="modal-wrapper" id="popup1" s>
     <div class="popup-contenedor1" align="center">
       <h2 class="fontcolorlogi">Inicio de Usuario</h2>
       <img src="blog/logo/logo.png">
   <form method="POST" action="formulario.php">
    <p class="fontcolorlogi">Email:</p>
   <input type="text" name="email" size="50" />
   <p>

    <p class="fontcolorlogi">Contraseña:</p>
   <input type="password" name="pass" size="50" />
   <p>
   <input type="submit" name="submit" class="boton verde"  value="INGRESAR" />
   </form>
        <a class="popup-cerrar" href="#">X</a>
     </div>
  </div>





<form>
    
    <div class="group">      
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Name</label>
    </div>
      
    <div class="group">      
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Email</label>
    </div>
    
  </form>

  
  
      
-->






<style type="text/css">

.fontcolorlogi{
   color: #e0f2f1 ;
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
    width: 300px;
    border: none;
    border-bottom: 1px solid #fffefe;
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