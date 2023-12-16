function dashboard_chart() {
    Highcharts.chart('dashboard-chart', {
        chart: {
            type: 'area',
            backgroundColor: 'transparent',
            style: {
                fontFamily: 'Roboto Bold',
                fontSize: '12px'
            }

        },

        title: {
            style: {
                display: 'none'
            }
        },
        credits: {
            style: {
                display: 'none'
            }
        },

        tooltip: {
            style: {
                fontFamily: 'Roboto Regular',
                fontSize: '12px',
            }
        },

        legend: {
            itemDistance: 10
        },

        xAxis: {
            categories: ['AUG', 'SEPT', 'OCT', 'NOV', 'DEC']
        },

        yAxis: {
            title: {
                text: null
            },
            gridLineColor: "#707070"
        },
        series: [{
            name: 'SALARIES',
            data: [29.9, 71.5, 106.4, 100, 518.8],
            color: '#80FFB6'
        }, {
            name: 'LEAVES',
            data: [40, 200, 195, 500, 180],
            color: 'rgba(7,112,118,0.78)'
        }
            , {
                name: 'ABSENCES',
                data: [144.0, 176.0, 135.6, 148.5, 216.4],
                color: '#FF6969'
            }

        ]
    });
}

function department_chart() {
    Highcharts.chart('department-donut-chart', {
        chart: {
            type: 'variablepie',
            backgroundColor: 'transparent',
            style: {
                fontFamily: 'Roboto Bold',
                fontSize: '12px'
            }

        },
        plotOptions: {
            variablepie: {
                allowPointSelect: true,
                cursor: 'pointer',

                dataLabels: {
                    enabled: false
                },

                showInLegend: true
            }
        },
        legend: {
            enabled: true,
            align: 'right',
            layout: 'proximate',
            itemDistance: 10

        },
        title: {
            style: {
                display: 'none'
            }
        },
        credits: {
            style: {
                display: 'none'
            }
        },

        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
                'Total Employees: <strong>{point.y}</strong><br/>' +
                'Percentage: <strong>{point.z:.1f}%</strong>'
            ,
            style: {
                fontFamily: 'Roboto Regular',
                fontSize: '12px',
            }
        },
            series: [{
                minPointSize: 10,
                innerSize: '20%',
                zMin: 0,
                zMax: 100,
                name: 'countries',
                borderRadius: 5,
                data: [{
                    name: 'SOE',
                    y: 505992,
                    z: 92
                }, {
                    name: 'SET',
                    y: 551695,
                    z: 75
                }, {
                    name: 'SHT',
                    y: 312679,
                    z: 83
                }, {
                    name: 'SOB',
                    y: 78865,
                    z: 55
                }, {
                    name: 'IBE',
                    y: 301336,
                    z: 20
                }, {
                    name: 'SOC',
                    y: 41284,
                    z: 42
                }, {
                    name: 'STAFF',
                    y: 357114,
                    z: 45
                }],
                colors: [
                    '#4caefe',
                    '#3dc3e8',
                    '#2dd9db',
                    '#1feeaf',
                    '#0ff3a0',
                    '#00e887',
                    '#23e274'
                ]
            }]

    });
}

function salary_chart() {
    Highcharts.chart('salary-distribution-chart', {
        chart: {
            backgroundColor: 'transparent',
            type: 'column',
            style: {
                fontFamily: 'Roboto Bold',
                fontSize: '12px'
            }
        },
        title: {
            text: 'SALARY DISTRIBUTION',
            align: 'center',
        },
        credits: {
            style: {
                display: 'none'
            }
        },
        xAxis: {
            categories: ['AUG', 'SEPT', 'OCT', 'NOV', 'DEC']
        },
        yAxis: {
            title: {
                text: "Semester's distribution",
            },
            min: 0,
            max: 100,
            tickInterval: 25,

            labels: {
                format: '{value}%',
            }

        },
        tooltip: {
            style: {
                fontFamily: 'Roboto Regular',
                fontSize: '12px',
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
            {
                name: 'Working Hrs',
                data: [10, 2, 50, 50, 20]
            },
            {
                name: 'Gross Salaries',
                data: [50, 25, 52, 78, 30]
            }, {
                name: 'Total Salaries',
                data: [50, 25, 52, 78, 30]
            }, {
                name: 'Net Salaries',
                data: [50, 25, 52, 78, 30]
            }, {
                name: 'Total Deductions',
                data: [50, 25, 52, 78, 30]
            },
        ]
    });

}

function attendance_timesheet_chart() {
    Highcharts.chart('attendance-timesheet', {
        chart: {
            type: 'pie',
            backgroundColor: 'transparent',
            style: {
                fontFamily: 'Roboto Bold',
                fontSize: '12px'
            }
        },
        credits: {
            style: {
                display: 'none'
            }
        },
        title: {
            text: 'TIMESHEET',
            align: 'center'
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
                'Percentage: <b>{point.y}</b><br/>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    color: '#4E4E4E',
                    style: {
                        textOutline: 'none',
                        fontFamily: 'Roboto Bold',
                        fontSize: '10px'
                    }
                }
            }
        },
        series: [{
            minPointSize: 10,
            innerSize: '20%',
            borderRadius: 5,
            data: [{
                name: 'Absences',
                y: 505992
            }, {
                name: 'On Time',
                y: 551695,
                z: 119
            }, {
                name: 'Late',
                y: 312679,
                z: 121
            }, {
                name: 'On Leave',
                y: 78865,
                z: 136
            }, {
                name: 'Early',
                y: 301336,
                z: 200
            }
            ],
            colors: [
                '#4caefe',
                '#3dc3e8',
                '#2dd9db',
                '#1feeaf',
                '#0ff3a0'
            ]
        }]
    });
}


