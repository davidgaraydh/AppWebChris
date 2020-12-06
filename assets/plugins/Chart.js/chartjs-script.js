


function round(num, decimales = 2) {
    var signo = (num >= 0 ? 1 : -1);
    num = num * signo;
    if (decimales === 0) //con 0 decimales
        return signo * Math.round(num);
    // round(x * 10 ^ decimales)
    num = num.toString().split('e');
    num = Math.round(+(num[0] + 'e' + (num[1] ? (+num[1] + decimales) : decimales)));
    // x * 10 ^ (-decimales)
    num = num.toString().split('e');
    return signo * (num[0] + 'e' + (num[1] ? (+num[1] - decimales) : -decimales));
}

(function(window, document, $, undefined) {
	  "use strict";
	$(function() {
    

$( "#dateInicio" ).change(function() {

if($("#dateFin").val()!=""){
crearBarChart($("#dateInicio").val(),$("#dateFin").val());
}

});

$( "#dateFin" ).change(function() {

if($("#dateInicio").val()!=""){
crearBarChart($("#dateInicio").val(),$("#dateFin").val());
}

});


$( "#dateInicioA" ).change(function() {

if($("#dateFinA").val()!=""){
crearBarChartAcciones($("#dateInicioA").val(),$("#dateFinA").val());
}

});

$( "#dateFinA" ).change(function() {

if($("#dateInicioA").val()!=""){
crearBarChartAcciones($("#dateInicioA").val(),$("#dateFinA").val());
}

});


$( "#dateInicioF" ).change(function() {

if($("#dateFinF").val()!=""){
crearBarChartFuturos($("#dateInicioF").val(),$("#dateFinF").val());
}

});

$( "#dateFinF" ).change(function() {

if($("#dateInicioF").val()!=""){
crearBarChartFuturos($("#dateInicioF").val(),$("#dateFinF").val());
}

});


function addData(chart, label, data) {
    chart.data.labels.push(label);
    chart.data.datasets.forEach((dataset) => {
        dataset.data.push(data);
    });
    chart.update();
}


		if ($('#lineChart').length) {
			
			var ctx = document.getElementById('lineChart').getContext('2d');

var jsonObj=[];
		                    $.ajax({  
                url: "Core/graficas/graficas.php",
                type: "POST",  
                dataType: 'json',
                data: {Accion:"GraficaPrincipal"},
                error:function(xhr, status, error){
                console.log(error);
                },
                success: function(data) {
           	
$("#AccountBalance").text("$ "+data[data.length-1].suma);
$("#ChangePercent").text(data[data.length-1].porcentaje+" %");
for (const prop in data) {
addData(myChart,data[prop].dias,data[prop].porcentaje);     
            }
           	

  }      

            });



			var myChart = new Chart(ctx, {
				type: 'line',
				data: {
					datasets: [{
						label: 'Performance',
						backgroundColor: "transparent",
						borderColor: "white",
						pointRadius :"0",
						borderWidth: 1,
						fontColor:"white"
					}]
				},
			options: {
				legend: {
				  display: true,
				  labels: {
					fontColor: 'white',  
					boxWidth:40
				  }
				},
				tooltips: {
				  enabled:false
				},
							  scales: {
				  xAxes: [{
					  barPercentage: .5,
					ticks: {
						beginAtZero:false,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:false,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }]
				 }


			 }
			});
			
		}



function crearBarChart(inicio,fin){

		                    $.ajax({  
                url: "Core/graficas/graficas.php",
                type: "POST",  
                dataType: 'json',
                data: {Accion:"GraficarOpciones",Inicio:inicio,Fin:fin},
                error:function(xhr, status, error){
                console.log(error);
                },
                success: function(data) {

var conta=0;
var areglo=[];
var areglodata=[];
var areglodataRenta=[];
var trader=0;
var profit=0;
var winrate=0;
var onlyNegative=0;
var onlyPositive=0;
for (const prop in data) {
areglo[conta]=data[prop].Fecha;
areglodata[conta]=data[prop].dinero;
if(data[prop].dinero<0) {
onlyNegative=Number(onlyNegative)+Number(data[prop].dinero);
}else {
	onlyPositive=Number(onlyPositive)+Number(data[prop].dinero);
}
areglodataRenta[conta]=data[prop].rentabilidad;
trader=Number(trader)+Number(data[prop].dinero);
conta++;
}

winrate=Number(onlyPositive)/(Number(onlyPositive)+Number(onlyNegative));
profit=Number(onlyPositive)/Number(onlyNegative);
$("#WinRateO").text(round(winrate),2);
$("#ProfitFactorO").text(round(profit),2);
$("#traderO").text(trader);



				var myChart = new Chart(ctx, {

    type: 'bar',
    				data: {
					labels: areglo,
					datasets: [{
						label: 'Dinero',
						data: areglodata,
						backgroundColor: "rgb(255, 255, 255)",
						borderColor: "transparent",
						pointRadius :"0",
						borderWidth: 1
					}, {
						label: 'Rentabilidad',
						data: areglodataRenta,
						backgroundColor: "rgba(255, 255, 255, 0.25)",
						borderColor: "transparent",
						pointRadius :"0",
						borderWidth: 1
					}]
				},
			options: {

				legend: {
				  display: true,
				  labels: {
					fontColor: '#ddd',  
					boxWidth:40
				  }
				},
				tooltips: {
				  enabled:false
				},	
			  scales: {
				  xAxes: [{
					  barPercentage: .5,
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }]
				 }

			 }
			});


                }
            });


}




function crearBarChartAcciones(inicio,fin){

		                    $.ajax({  
                url: "Core/graficas/graficas.php",
                type: "POST",  
                dataType: 'json',
                data: {Accion:"GraficarAcciones",Inicio:inicio,Fin:fin},
                error:function(xhr, status, error){
                console.log(error);
                },
                success: function(data) {


var conta=0;
var areglo=[];
var areglodata=[];
var areglodataRenta=[];
var trader=0;
var profit=0;
var winrate=0;
var onlyNegative=0;
var onlyPositive=0;
for (const prop in data) {
areglo[conta]=data[prop].Fecha;
areglodata[conta]=data[prop].utilidad;
if(data[prop].utilidad<0) {
onlyNegative=Number(onlyNegative)+Number(data[prop].utilidad);
}else {
	onlyPositive=Number(onlyPositive)+Number(data[prop].utilidad);
}
areglodataRenta[conta]=data[prop].inversion;
trader=Number(trader)+Number(data[prop].utilidad);
conta++;
}

winrate=Number(onlyPositive)/(Number(onlyPositive)+Number(onlyNegative));
profit=Number(onlyPositive)/Number(onlyNegative);
$("#WinRateA").text(round(winrate),2);
$("#ProfitFactorA").text(round(profit),2);
$("#traderA").text(trader);



				var myChartAcciones = new Chart(ctxAcciones, {

    type: 'bar',
    				data: {
					labels: areglo,
					datasets: [{
						label: 'Utilidad',
						data: areglodata,
						backgroundColor: "rgb(255, 255, 255)",
						borderColor: "transparent",
						pointRadius :"0",
						borderWidth: 1
					}, {
						label: 'Inversion',
						data: areglodataRenta,
						backgroundColor: "rgba(255, 255, 255, 0.25)",
						borderColor: "transparent",
						pointRadius :"0",
						borderWidth: 1
					}]
				},
			options: {
				legend: {
				  display: true,
				  labels: {
					fontColor: '#ddd',  
					boxWidth:40
				  }
				},
				tooltips: {
				  enabled:false
				},	
			  scales: {
				  xAxes: [{
					  barPercentage: .5,
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }]
				 }

			 }
			});


                }
            });


}


function crearBarChartFuturos(inicio,fin){

		                    $.ajax({  
                url: "Core/graficas/graficas.php",
                type: "POST",  
                dataType: 'json',
                data: {Accion:"GraficarFuturos",Inicio:inicio,Fin:fin},
                error:function(xhr, status, error){
                console.log(error);
                },
                success: function(data) {

var conta=0;
var areglo=[];
var areglodata=[];
var areglodataRenta=[];
var trader=0;
var profit=0;
var winrate=0;
var onlyNegative=0;
var onlyPositive=0;
for (const prop in data) {
areglo[conta]=data[prop].Fecha;
areglodata[conta]=data[prop].utilidad;
if(data[prop].utilidad<0) {
onlyNegative=Number(onlyNegative)+Number(data[prop].utilidad);
}else {
	onlyPositive=Number(onlyPositive)+Number(data[prop].utilidad);
}
areglodataRenta[conta]=data[prop].puntos;
trader=Number(trader)+Number(data[prop].utilidad);
conta++;
}

winrate=Number(onlyPositive)/(Number(onlyPositive)+Number(onlyNegative));
profit=Number(onlyPositive)/Number(onlyNegative);
$("#WinRate").text(round(winrate),2);
$("#ProfitFactor").text(round(profit),2);
$("#trader").text(trader);


				var myChartFuturos = new Chart(ctxFuturos, {

    type: 'bar',
    				data: {
					labels: areglo,
					datasets: [{
						label: 'Utilidad',
						data: areglodata,
						backgroundColor: "rgb(255, 255, 255)",
						borderColor: "transparent",
						pointRadius :"0",
						borderWidth: 1
					}, {
						label: 'Inversion',
						data: areglodataRenta,
						backgroundColor: "rgba(255, 255, 255, 0.25)",
						borderColor: "transparent",
						pointRadius :"0",
						borderWidth: 1
					}]
				},
			options: {
				legend: {
				  display: true,
				  labels: {
					fontColor: '#ddd',  
					boxWidth:40
				  }
				},
				tooltips: {
				  enabled:false
				},	
			  scales: {
				  xAxes: [{
					  barPercentage: .5,
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }]
				 }

			 }
			});


                }
            });


}



		if ($('#barChart').length) {
			var ctx = document.getElementById("barChart").getContext('2d');

			crearBarChart(0,0);

		}


				if ($('#barChartAcciones').length) {
			var ctxAcciones = document.getElementById("barChartAcciones").getContext('2d');

			crearBarChartAcciones(0,0);

		}


						if ($('#barChartFuturos').length) {
			var ctxFuturos = document.getElementById("barChartFuturos").getContext('2d');

			crearBarChartFuturos(0,0);

		}




if ($('#scatChartOpciones').length) {

			var ctxScatOpciones = document.getElementById("scatChartOpciones").getContext('2d');

		                    $.ajax({  
                url: "Core/graficas/graficas.php",
                type: "POST",  
                dataType: 'json',
                data: {Accion:"GraficarScatOpciones"},
                error:function(xhr, status, error){
                console.log(error);
                },
                success: function(data) {
console.log(data);
var jsonObj = [];
for (const prop in data) {

var item = {};
        item ["x"] = data[prop].HorizontalX;
        item ["y"] = data[prop].VerticalY;

        jsonObj.push(item);

}


var scatterChart = new Chart(ctxScatOpciones, {
    type: 'scatter',
    data: {
        datasets: [{
            label: 'Scatter Dataset',
            backgroundColor: "rgba(255, 255, 255, 0.25)",
            data: jsonObj
        }]
    },
    options: {
							  scales: {
				  xAxes: [{
					  barPercentage: .5,
					ticks: {
						beginAtZero:false,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:false,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }]
				 }
    }
});

                }

            });





}



if ($('#scatChartAcciones').length) {

			var ctxScatAcciones = document.getElementById("scatChartAcciones").getContext('2d');

		                    $.ajax({  
                url: "Core/graficas/graficas.php",
                type: "POST",  
                dataType: 'json',
                data: {Accion:"GraficarScatAcciones"},
                error:function(xhr, status, error){
                console.log(error);
                },
                success: function(data) {
var jsonObj = [];
for (const prop in data) {

var item = {};
        item ["x"] = data[prop].HorizontalX;
        item ["y"] = data[prop].VerticalY;

        jsonObj.push(item);

}


var scatterChart = new Chart(ctxScatAcciones, {
    type: 'scatter',
    data: {
        datasets: [{
            label: 'Scatter Dataset',
            backgroundColor: "rgba(255, 255, 255, 0.25)",
            data: jsonObj
        }]
    },
    options: {
							  scales: {
				  xAxes: [{
					  barPercentage: .5,
					ticks: {
						beginAtZero:false,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:false,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }]
				 }
    }
});

                }

            });





}






if ($('#scatChartFuturos').length) {

			var ctxScatFuturos = document.getElementById("scatChartFuturos").getContext('2d');

		                    $.ajax({  
                url: "Core/graficas/graficas.php",
                type: "POST",  
                dataType: 'json',
                data: {Accion:"GraficarScatFuturos"},
                error:function(xhr, status, error){
                console.log(error);
                },
                success: function(data) {
console.log(data);
var jsonObj = [];
for (const prop in data) {

var item = {};
        item ["x"] = data[prop].HorizontalX;
        item ["y"] = data[prop].VerticalY;

        jsonObj.push(item);

}

var scatterChart = new Chart(ctxScatFuturos, {
    type: 'scatter',
    data: {
        datasets: [{
            label: 'Scatter Dataset',
            backgroundColor: "rgba(255, 255, 255, 0.25)",
            data: jsonObj
        }]
    },
    options: {
							  scales: {
				  xAxes: [{
					  barPercentage: .5,
					ticks: {
						beginAtZero:false,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:false,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }]
				 }
    }
});

                }

            });





}





		if ($('#polarChart').length) {
			var ctx = document.getElementById("polarChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'polarArea',
				data: {
					labels: ["Lable1", "Lable2", "Lable3", "Lable4"],
					datasets: [{
						backgroundColor: [
							"rgba(255, 255, 255, 0.35)",
							"#ffffff",
							"rgba(255, 255, 255, 0.12)",
							"rgba(255, 255, 255, 0.71)"
						],
						data: [13, 20, 11, 18],
						borderWidth: [0, 0, 0, 0]
					}]
				},
			options: {
			   legend: {
				 position :"right",	
				 display: true,
				    labels: {
					  fontColor: '#ddd',  
					  boxWidth:15
				   }
				},
			scale: {
				  gridLines: {
					   color: "rgba(221, 221, 221, 0.12)" 
					 }, 
				}
			   }
			});
		}


		if ($('#pieChart').length) {
			var ctx = document.getElementById("pieChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'pie',
				data: {
					labels: ["Lable1", "Lable2", "Lable3", "Lable4"],
					datasets: [{
						backgroundColor: [
							"rgba(255, 255, 255, 0.35)",
							"#ffffff",
							"rgba(255, 255, 255, 0.12)",
							"rgba(255, 255, 255, 0.71)"
						],
						data: [13, 120, 11, 20],
						borderWidth: [0, 0, 0, 0]
					}]
				},
			options: {
			   legend: {
				 position :"right",	
				 display: true,
				    labels: {
					  fontColor: '#ddd',  
					  boxWidth:15
				   }
				}
			   }
			});
		}


		if ($('#doughnutChart').length) {
			var ctx = document.getElementById("doughnutChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'doughnut',
				data: {
					labels: ["Lable1", "Lable2", "Lable3", "Lable4"],
					datasets: [{
						backgroundColor: [
							"rgba(255, 255, 255, 0.35)",
							"#ffffff",
							"rgba(255, 255, 255, 0.12)",
							"rgba(255, 255, 255, 0.71)"
						],
						data: [13, 120, 11, 20],
						borderWidth: [0, 0, 0, 0]
					}]
				},
			options: {
			   legend: {
				 position :"right",	
				 display: true,
				    labels: {
					  fontColor: '#ddd',  
					  boxWidth:15
				   }
				}
			   }
			});
		}






	});




})(window, document, window.jQuery);


