class TableController{
    constructor(table) {
        this.table = table;
        this.line=this.table.getElementsByTagName('tr')[1];
        this.vaciarTabla();
      }

      vaciarTabla(){
        this.table.getElementsByTagName('tbody')[0].innerHTML = '';
      }
      agregarDatos(torneos){
         // alert(this.table.innerHtml);
          //var line=this.table.getElementsByTagName('tr')[1];
            //line=line.cloneNode(true);

          let index=1;
          for(var torneo of torneos){
            var line=this.line.cloneNode(true);
             // alert(line.outerHTML);//muestra elemento como string

             try {line.querySelectorAll("[name=index]")[0].innerHTML=index;}catch(error){}
             try {line.querySelectorAll("[name=nombre_torneo]")[0].innerHTML=torneo.nombre_torneo;}catch(error){}
             try {line.querySelectorAll("[name=estado]")[0].innerHTML=torneo.estado;}catch(error){}
             try {line.querySelectorAll("[name=fecha_inicio]")[0].innerHTML=torneo.fecha_inicio;}catch(error){}
             try {line.querySelectorAll("[name=fecha_fin]")[0].innerHTML=torneo.fecha_fin;}catch(error){}
             try {line.querySelectorAll("[name=director]")[0].innerHTML=torneo.nombre_director;}catch(error){}

          this.table.getElementsByTagName('tbody')[0].appendChild(line);
          index+=1;
        }
          //document.innerHtml
      }
}


table_concluidos=new TableController(document.getElementById('table_concluido'));
table_edicion=new TableController(document.getElementById('table_edicion'));

var settings = {
    "url": url_apiTorneo,
    "method": "POST",
    "timeout": 0,
    "headers": {
      "Content-Type": "application/json"
    },
    "data": JSON.stringify({
      "state": "CONCLUIDO",
      "count": 10
    }),
  };
  $.ajax(settings).done(function (response) {
    console.log(response);
    //t=new TableController(document.getElementById('table_concluido'));
    table_concluidos.agregarDatos(response);
    //t.agregarDatos(response);
  });
  var settings = {
    "url": url_apiTorneo,
    "method": "POST",
    "timeout": 0,
    "headers": {
      "Content-Type": "application/json"
    },
    "data": JSON.stringify({
      "state": "EDICION",
      "count": 10
    }),
  };
  $.ajax(settings).done(function (response) {
    console.log(response);
       table_edicion.agregarDatos(response);

  });


  console.log("landing hello");





  //carousel multi code
  $('#myCarousel').carousel({
    interval: 1000
})

$('.carousel .carousel-item').each(function() {
    var minPerSlide = 4;
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < minPerSlide; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});
