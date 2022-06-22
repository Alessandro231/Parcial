//API
var paises = [];
var poblacion = [];
var idioma = [];
var capital = [];

//Consumo de la api
fetch('')

//then necesita una promesa
.then(datos_obtenidos => datos_obtenidos.json())

//datos_obtenidos es el resultado de la promesa responsable
.then(function transformar (datos_obtenidos){

    //iteramos sobre   cada dato
    datos_obtenidos.forEach(function agregar (datos_obtenidos)
    {
        //si los datos son diferentes de vacio
        if(datos_obtenidos.a_o != undefined && datos_obtenidos.total != undefined){
            total.push(datos_obtenidos.total);
            fecha.push(datos_obtenidos.a_o);
        }
     });

//Variables para las graficas
var graf1 =
{
    y: poblacion,
    x: paises,
    mode: 'markers',
    type: 'scatter',
    font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
};

var datosGraficas = [grafica];

//Estilos de la grafica
var layout =
{
    title: 'Paises - Capitales - Idioma - Poblacion',
    colorway : ['#f3cec9','#182844'],
    xaxis:
    {
        title: 'Paises'
    },
    yaxis:
    {
        title: 'Cantidad de paises'
    }
    
};
Plotly.newPlot('myDiv', datosGraficas, layout);
});