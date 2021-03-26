@extends("layouts.app6")

@section("content")

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Laravel 8 Highcharts Demo</title>
</head>

<body>
    <h1>Estadisticas de la aplicacion</h1>
    <div class="borde" id="container1"></div>
	<div class="borde" id="container2"></div>
	<div class="borde" id="container3"></div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
    var clienteData = <?php echo json_encode($clientesData)?>;

    Highcharts.chart('container1', {
        title: {
            text: 'Crecimineto nuevos clientes, 2021'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre',	'Diciembre'
            ]
        },
        yAxis: {
            title: {
                text: 'Numero de nuevos Clientes'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Nuevos Clientes',
            data: clienteData
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
	
	var mascotaData = <?php echo json_encode($mascotasData)?>;

    Highcharts.chart('container2', {
        title: {
            text: 'Crecimiento de nuevas mascotas, 2021'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['Enero','Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre',	'Diciembre'
            ]
        },
        yAxis: {
            title: {
                text: 'Numero de nuevas Mascotas'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Nuevas Mascotas',
            data: mascotaData
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
	
	/*var reservaData = <?php echo json_encode($reservasData)?>;

    Highcharts.chart('container3', {
        title: {
            text: 'Crecimiento de nuevas reservas, 2021'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['Enero','Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre',	'Diciembre'
            ]
        },
        yAxis: {
            title: {
                text: 'Numero de nuevas Reservas'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Nuevas Reservas',
            data: reservaData
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });*/
	
	
	var reservaData = <?php echo json_encode($reservasData)?>;
	
	Highcharts.chart('container3', {
	  title: {
		text: 'Reservas por mes'
	  },
	  subtitle: {
		text: ''
	  },
	  xAxis: {
		categories: ['Ene','Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov','Dic']
	  },
	  series: [{
		type: 'column',
		colorByPoint: true,
		data: reservaData,
		showInLegend: false
	  }]
	});

	document.getElementById('plain').addEventListener('click', () => {
	  chart.update({
		chart: {
		  inverted: false,
		  polar: false
		},
		subtitle: {
		  text: 'Plain'
		}
	  });
	});

	document.getElementById('inverted').addEventListener('click', () => {
	  chart.update({
		chart: {
		  inverted: true,
		  polar: false
		},
		subtitle: {
		  text: 'Inverted'
		}
	  });
	});

	document.getElementById('polar').addEventListener('click', () => {
	  chart.update({
		chart: {
		  inverted: false,
		  polar: true
		},
		subtitle: {
		  text: 'Polar'
		}
	  });
	});
</script>
	
	
	
	
</html>
@endsection