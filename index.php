<!DOCTYPE html>
<html>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 33%; /* IE10 */
  flex: 33%;
  max-width: 33%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script>
    function agrandarImagen(element){
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
    }
</script>
<body>

<!-- Header -->
<div class="header">
  <h1>Galeria Responsive</h1>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="imagenes/arranques.jpg" style="width:100%;cursor:pointer;" onclick="agrandarImagen(this);">
    <img src="imagenes/culatas.jpg" style="width:100%;cursor:pointer;"  onclick="agrandarImagen(this);">
    <img src="imagenes/farolas.jpg" style="width:100%;cursor:pointer;" onclick="agrandarImagen(this);">
  </div>
  <div class="column">
    <img src="imagenes/frenos.jpg" style="width:100%;cursor:pointer;" onclick="agrandarImagen(this);">
    <img src="imagenes/frenosdemano.jpg" style="width:100%;cursor:pointer;" onclick="agrandarImagen(this);">
    <img src="imagenes/pedaleras.jpg" style="width:100%;cursor:pointer;" onclick="agrandarImagen(this);">
  </div>  
  <div class="column">
    <img src="imagenes/puertas.jpg" style="width:100%;cursor:pointer;" onclick="agrandarImagen(this);">
    <img src="imagenes/switches.jpg" style="width:100%;cursor:pointer;" onclick="agrandarImagen(this);">
    <img src="imagenes/transmisiones.jpg" style="width:100%;cursor:pointer;" onclick="agrandarImagen(this);">
  </div>
  <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%;cursor:pointer;">
  </div>
</div>

<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%;cursor:pointer;">
  </div>
</div>

</body>
</html>
