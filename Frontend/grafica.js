let url= 'https://www.datos.gov.co/resource/53fe-iy2w.json';
fetch(url)
//then necesita una promesa, y esa promesa se resuelve
.then(respuesta=>respuesta.json())
// data es el resultado de la promesa respuesta, la cual fue con
.then(data=>{console.log(data);})

