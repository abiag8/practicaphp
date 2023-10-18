function validar() {

    var nombre = document.getElementById("nombre").value;
    var edad = document.getElementById("edad").value;
    var apellido = document.getElementById("apellido").value;
    var carrera = document.getElementById("carrera").value;
    var formulario = document.getElementById("formulario");
    
  
    if (edad >= 18) {
        document.getElementById("formulario").submit()
    } else {
        alert("Debes ser mayor de 18 años para enviar el formulario")
      }
  }
  
  
  