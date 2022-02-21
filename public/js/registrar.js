function setOptions(asociaciones,idselect,name_value,name_text){
    selectAsoc=document.getElementById(idselect);
    itemSelect=selectAsoc.getElementsByTagName("option")[0];

    //vacio todo y solo dejo el elemento option 1
    selectAsoc.innerHTML="";
    selectAsoc.appendChild(itemSelect);

    for(var asociacion of asociaciones){
        option_asoc=itemSelect.cloneNode(true);
        option_asoc.setAttribute("value",asociacion[name_value]);
        option_asoc.innerHTML=asociacion[name_text];
        selectAsoc.appendChild(option_asoc);
    }
}
function vaciarClubs(){
    selectAsoc=document.getElementById("bpinsolicitudtemp-id_club");
    itemSelect=selectAsoc.getElementsByTagName("option")[0];
    //vacio todo y solo dejo el elemento option 1
    selectAsoc.innerHTML="";
    selectAsoc.appendChild(itemSelect);
}

function setClubs(id_asociacion){
    vaciarClubs();
    var obj={"id_asociacion":id_asociacion};
    var settings = {
        "url": url_apiGetClubsFromIdAsoc,
        "method": "POST",
        "timeout": 0,
        "headers": {
          "Content-Type": "application/json",
         /* "Cookie": "B1SESSION=auth620a90df287d9620a90df287dd1642395325086"*/
        },
        "data": JSON.stringify(obj),
      };
      $.ajax(settings).done(function (response) {
          //alert("club peticion terminada"+ response);
        setOptions(response,"bpinsolicitudtemp-id_club","id_club","nombre_club");
      });
}




/*
propio radio tab
cuando un check pasa a tru
oculto todas las tab de su padre, el atributo tab hace referencia al padre su class
luego el padre obtiene todas las tabs por tab tab_hidden esto es estatico y oculto

luego el input mediante el atributo container id, pone visible el tab que tenga ese id
*/
function cambiarDoc(inputcheck){
    hideTapRadio(inputcheck.getAttribute("tab"));//oculto todas las tabs
    //ocultar todos
   // alert(inputcheck.value);
    if(inputcheck.checked){
    cont=document.getElementById(inputcheck.getAttribute("container_id"));
    cont.style.display = "block";
    }
    /*if(inputcheck.getAttribute("value"))
    alert(inputcheck.getAttribute("value"));*/
}

function hideTapRadio(contarinertabradioclass){
    tabradios=document.getElementsByClassName(contarinertabradioclass)[0];
    tabs=tabradios.getElementsByClassName("tab_hidden");
    for(var tab of tabs){
        tab.style.display="none";
    }
}





var settings = {
    "url": url_apiGetAsociacion,
    "method": "GET",
    "timeout": 0
  };

  $.ajax(settings).done(function (response) {
    setOptions(response,"bpinsolicitudtemp-id_asociacion","id_asociacion","nombre_asociacion");
  });























  /*var myCar = [
    {
        "id_asociacion": 10,
        "nombre_asociacion": "INTERNACIONAL"
    },
    {
        "id_asociacion": 2,
        "nombre_asociacion": "ASOC. DE TENIS DE COCHABAMBA "
    },
    {
        "id_asociacion": 5,
        "nombre_asociacion": "ASOC. DEPTAL. DE TENIS TARIJA"
    }
];*/
//setAsociacions(myCar);
