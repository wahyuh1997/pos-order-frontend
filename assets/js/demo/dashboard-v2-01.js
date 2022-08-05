/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 5
Version: 5.1.4
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin/
*/

var getMonthName = function (number) {
  var month = [];
  month[0] = "JAN";
  month[1] = "FEB";
  month[2] = "MAR";
  month[3] = "APR";
  month[4] = "MAY";
  month[5] = "JUN";
  month[6] = "JUL";
  month[7] = "AUG";
  month[8] = "SEP";
  month[9] = "OCT";
  month[10] = "NOV";
  month[11] = "DEC";

  return month[number];
};

var getDate = function (date) {
  var currentDate = new Date(date);
  var dd = currentDate.getDate();
  var mm = currentDate.getMonth() + 1;
  var yyyy = currentDate.getFullYear();

  if (dd < 10) {
    dd = '0' + dd;
  }
  if (mm < 10) {
    mm = '0' + mm;
  }
  currentDate = yyyy + '-' + mm + '-' + dd;

  return currentDate;
};

// var handleVisitorsAreaChart = function () {
//   var handleGetDate = function (minusDate) {
//     var d = new Date();
//     d = d.setDate(d.getDate() - minusDate);
//     return d;
//   };

//   var color1 = ($('#visitors-line-chart').attr('data-color') == 'black') ? app.color.black : app.color.cyan;
//   var color2 = ($('#visitors-line-chart').attr('data-color') == 'black') ? 'rgba(' + app.color.blackRgb + ', .5)' : app.color.blue;

//   var visitorAreaChartData = [{
//     'key': 'Unique Visitors',
//     'color': color1,
//     'values': [
//       [handleGetDate(77), 13],
//       [handleGetDate(76), 13],
//       [handleGetDate(75), 6],
//       [handleGetDate(73), 6],
//       [handleGetDate(72), 6],
//       [handleGetDate(71), 5],
//       [handleGetDate(70), 5],
//       [handleGetDate(69), 5],
//       [handleGetDate(68), 6],
//       [handleGetDate(67), 7],
//       [handleGetDate(66), 6],
//       [handleGetDate(65), 9],
//       [handleGetDate(64), 9],
//       [handleGetDate(63), 8],
//       [handleGetDate(62), 10],
//       [handleGetDate(61), 10],
//       [handleGetDate(60), 10],
//       [handleGetDate(59), 10],
//       [handleGetDate(58), 9],
//       [handleGetDate(57), 9],
//       [handleGetDate(56), 10],
//       [handleGetDate(55), 9],
//       [handleGetDate(54), 9],
//       [handleGetDate(53), 8],
//       [handleGetDate(52), 8],
//       [handleGetDate(51), 8],
//       [handleGetDate(50), 8],
//       [handleGetDate(49), 8],
//       [handleGetDate(48), 7],
//       [handleGetDate(47), 7],
//       [handleGetDate(46), 6],
//       [handleGetDate(45), 6],
//       [handleGetDate(44), 6],
//       [handleGetDate(43), 6],
//       [handleGetDate(42), 5],
//       [handleGetDate(41), 5],
//       [handleGetDate(40), 4],
//       [handleGetDate(39), 4],
//       [handleGetDate(38), 5],
//       [handleGetDate(37), 5],
//       [handleGetDate(36), 5],
//       [handleGetDate(35), 7],
//       [handleGetDate(34), 7],
//       [handleGetDate(33), 7],
//       [handleGetDate(32), 10],
//       [handleGetDate(31), 9],
//       [handleGetDate(30), 9],
//       [handleGetDate(29), 10],
//       [handleGetDate(28), 11],
//       [handleGetDate(27), 11],
//       [handleGetDate(26), 8],
//       [handleGetDate(25), 8],
//       [handleGetDate(24), 7],
//       [handleGetDate(23), 8],
//       [handleGetDate(22), 9],
//       [handleGetDate(21), 8],
//       [handleGetDate(20), 9],
//       [handleGetDate(19), 10],
//       [handleGetDate(18), 9],
//       [handleGetDate(17), 10],
//       [handleGetDate(16), 16],
//       [handleGetDate(15), 17],
//       [handleGetDate(14), 16],
//       [handleGetDate(13), 17],
//       [handleGetDate(12), 16],
//       [handleGetDate(11), 15],
//       [handleGetDate(10), 14],
//       [handleGetDate(9), 24],
//       [handleGetDate(8), 18],
//       [handleGetDate(7), 15],
//       [handleGetDate(6), 14],
//       [handleGetDate(5), 16],
//       [handleGetDate(4), 16],
//       [handleGetDate(3), 17],
//       [handleGetDate(2), 7],
//       [handleGetDate(1), 7],
//       [handleGetDate(0), 7]
//     ]
//   }, {
//     'key': 'Page Views',
//     'color': color2,
//     'values': [
//       [handleGetDate(77), 14],
//       [handleGetDate(76), 13],
//       [handleGetDate(75), 15],
//       [handleGetDate(73), 14],
//       [handleGetDate(72), 13],
//       [handleGetDate(71), 15],
//       [handleGetDate(70), 16],
//       [handleGetDate(69), 16],
//       [handleGetDate(68), 14],
//       [handleGetDate(67), 14],
//       [handleGetDate(66), 13],
//       [handleGetDate(65), 12],
//       [handleGetDate(64), 13],
//       [handleGetDate(63), 13],
//       [handleGetDate(62), 15],
//       [handleGetDate(61), 16],
//       [handleGetDate(60), 16],
//       [handleGetDate(59), 17],
//       [handleGetDate(58), 17],
//       [handleGetDate(57), 18],
//       [handleGetDate(56), 15],
//       [handleGetDate(55), 15],
//       [handleGetDate(54), 15],
//       [handleGetDate(53), 19],
//       [handleGetDate(52), 19],
//       [handleGetDate(51), 18],
//       [handleGetDate(50), 18],
//       [handleGetDate(49), 17],
//       [handleGetDate(48), 16],
//       [handleGetDate(47), 18],
//       [handleGetDate(46), 18],
//       [handleGetDate(45), 18],
//       [handleGetDate(44), 16],
//       [handleGetDate(43), 14],
//       [handleGetDate(42), 14],
//       [handleGetDate(41), 13],
//       [handleGetDate(40), 14],
//       [handleGetDate(39), 13],
//       [handleGetDate(38), 10],
//       [handleGetDate(37), 9],
//       [handleGetDate(36), 10],
//       [handleGetDate(35), 11],
//       [handleGetDate(34), 11],
//       [handleGetDate(33), 11],
//       [handleGetDate(32), 10],
//       [handleGetDate(31), 9],
//       [handleGetDate(30), 10],
//       [handleGetDate(29), 13],
//       [handleGetDate(28), 14],
//       [handleGetDate(27), 14],
//       [handleGetDate(26), 13],
//       [handleGetDate(25), 12],
//       [handleGetDate(24), 11],
//       [handleGetDate(23), 13],
//       [handleGetDate(22), 13],
//       [handleGetDate(21), 13],
//       [handleGetDate(20), 13],
//       [handleGetDate(19), 14],
//       [handleGetDate(18), 13],
//       [handleGetDate(17), 13],
//       [handleGetDate(16), 19],
//       [handleGetDate(15), 21],
//       [handleGetDate(14), 22],
//       [handleGetDate(13), 25],
//       [handleGetDate(12), 24],
//       [handleGetDate(11), 24],
//       [handleGetDate(10), 22],
//       [handleGetDate(9), 16],
//       [handleGetDate(8), 15],
//       [handleGetDate(7), 12],
//       [handleGetDate(6), 12],
//       [handleGetDate(5), 15],
//       [handleGetDate(4), 15],
//       [handleGetDate(3), 15],
//       [handleGetDate(2), 18],
//       [handleGetDate(2), 18],
//       [handleGetDate(0), 17]
//     ]
//   }];

//   nv.addGraph(function () {
//     var stackedAreaChart = nv.models.stackedAreaChart()
//       .useInteractiveGuideline(true)
//       .x(function (d) {
//         return d[0]
//       })
//       .y(function (d) {
//         return d[1]
//       })
//       .pointSize(0.5)
//       .margin({
//         'left': 35,
//         'right': 25,
//         'top': 20,
//         'bottom': 20
//       })
//       .controlLabels({
//         stacked: 'Stacked'
//       })
//       .showControls(false)
//       .duration(300);

//     stackedAreaChart.xAxis.tickFormat(function (d) {
//       var monthsName = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
//       d = new Date(d);
//       d = monthsName[d.getMonth()] + ' ' + d.getDate();
//       return d;
//     });
//     stackedAreaChart.yAxis.tickFormat(d3.format(',.0f'));

//     d3.select('#visitors-line-chart')
//       .append('svg')
//       .datum(visitorAreaChartData)
//       .transition().duration(1000)
//       .call(stackedAreaChart)
//       .each('start', function () {
//         setTimeout(function () {
//           d3.selectAll('#visitors-line-chart *').each(function () {
//             if (this.__transition__)
//               this.__transition__.duration = 1;
//           })
//         }, 0)
//       });

//     nv.utils.windowResize(stackedAreaChart.update);
//     return stackedAreaChart;
//   });
// };

// var handleVisitorsDonutChart = function () {
//   var color1 = ($('#visitors-donut-chart').attr('data-color') == 'black') ? app.color.black : app.color.blue;
//   var color2 = ($('#visitors-donut-chart').attr('data-color') == 'black') ? 'rgba(' + app.color.blackRgb + ', .5)' : app.color.teal;

//   var visitorDonutChartData = [{
//       'label': 'Return Visitors',
//       'value': 784466,
//       'color': color1
//     },
//     {
//       'label': 'New Visitors',
//       'value': 416747,
//       'color': color2
//     }
//   ];
//   var arcRadius = [{
//       inner: 0.65,
//       outer: 0.93
//     },
//     {
//       inner: 0.6,
//       outer: 1
//     }
//   ];

//   nv.addGraph(function () {
//     var donutChart = nv.models.pieChart()
//       .x(function (d) {
//         return d.label
//       })
//       .y(function (d) {
//         return d.value
//       })
//       .margin({
//         'left': 10,
//         'right': 10,
//         'top': 10,
//         'bottom': 10
//       })
//       .showLegend(false)
//       .donut(true)
//       .growOnHover(false)
//       .arcsRadius(arcRadius)
//       .donutRatio(0.5);

//     donutChart.labelFormat(d3.format(',.0f'));

//     d3.select('#visitors-donut-chart').append('svg')
//       .datum(visitorDonutChartData)
//       .transition().duration(3000)
//       .call(donutChart);

//     return donutChart;
//   });
// };

// var handleVisitorsVectorMap = function () {
//   if ($('#visitors-map').length !== 0) {
//     var color1 = ($('#visitors-map').attr('data-color') == 'black') ? app.color.black : app.color.blue;
//     var color2 = ($('#visitors-map').attr('data-color') == 'black') ? 'rgba(' + app.color.blackRgb + ', .5)' : app.color.teal;
//     var scaleColor = ($('#visitors-map').attr('data-color')) ? ['rgba(' + app.color.blackRgb + ', .5)', 'rgba(' + app.color.blackRgb + ', .75)'] : [app.color.gray600, app.color.dark];
//     var fillColor = ($('#visitors-map').attr('data-color') == 'black') ? 'rgba(' + app.color.blackRgb + ', .25)' : app.color.gray600;
//     fillColor = ($('#visitors-map').attr('data-color') == 'white') ? 'rgba(' + app.color.whiteRgb + ', .25)' : fillColor;
//     $('#visitors-map').vectorMap({
//       map: 'world_mill',
//       scaleColors: scaleColor,
//       container: $('#visitors-map'),
//       normalizeFunction: 'linear',
//       hoverOpacity: 0.5,
//       hoverColor: false,
//       zoomOnScroll: false,
//       markerStyle: {
//         initial: {
//           fill: app.color.dark,
//           stroke: 'transparent',
//           r: 3
//         }
//       },
//       regions: [{
//         attribute: 'fill'
//       }],
//       regionStyle: {
//         initial: {
//           fill: fillColor,
//           "fill-opacity": 1,
//           stroke: 'none',
//           "stroke-width": 0.4,
//           "stroke-opacity": 1
//         },
//         hover: {
//           "fill-opacity": 0.8
//         },
//         selected: {
//           fill: 'yellow'
//         }
//       },
//       series: {
//         regions: [{
//           values: {
//             IN: color1,
//             US: color2,
//             MN: app.color.dark
//           }
//         }]
//       },
//       focusOn: {
//         x: 0.5,
//         y: 0.5,
//         scale: 1
//       },
//       backgroundColor: 'transparent'
//     });
//   }
// };

// var handleScheduleCalendar = function () {
//   $("#schedule-calendar").simpleCalendar({
//     fixedStartDay: false,
//     disableEmptyDetails: true,
//     events: [{
//       startDate: new Date(new Date().setHours(new Date().getHours() + 24)).toDateString(),
//       endDate: new Date(new Date().setHours(new Date().getHours() + 25)).toISOString(),
//       summary: 'Visit of the Eiffel Tower'
//     }, {
//       startDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 12, 0)).toISOString(),
//       endDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 11)).getTime(),
//       summary: 'Restaurant'
//     }, {
//       startDate: new Date(new Date().setHours(new Date().getHours() - 48)).toISOString(),
//       endDate: new Date(new Date().setHours(new Date().getHours() - 24)).getTime(),
//       summary: 'Visit of the Louvre'
//     }]
//   });
// };

var handleDashboardGritterNotification = function () {
  setTimeout(function () {
    $.gritter.add({
      title: 'Welcome back, Admin!',
      text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus lacus ut lectus rutrum placerat.',
      image: '../assets/img/user/user-12.jpg',
      sticky: true,
      time: '',
      class_name: 'my-sticky-class'
    });
  }, 1000);
};

var handleInteractiveChart = function () {
  "use strict";
  $('#interactive-chart').empty();

  function showTooltip(x, y, contents) {
    $('<div id="tooltip" class="flot-tooltip">' + contents + '</div>').css({
      top: y - 45,
      left: x - 55
    }).appendTo("body").fadeIn(200);
  }
  if ($('#interactive-chart').length !== 0) {

    var data1 = [
      [1, 40],
      [2, 50],
      [3, 60],
      [4, 60],
      [5, 60],
      [6, 65],
      [7, 75],
      [8, 90],
      [9, 100],
      [10, 105],
      [11, 110],
      [12, 110],
      [13, 120],
      [14, 130],
      [15, 135],
      [16, 145],
      [17, 132],
      [18, 123],
      [19, 135],
      [20, 150]
    ];
    var data2 = [
      [1, 10],
      [2, 6],
      [3, 10],
      [4, 12],
      [5, 18],
      [6, 20],
      [7, 25],
      [8, 23],
      [9, 24],
      [10, 25],
      [11, 18],
      [12, 30],
      [13, 25],
      [14, 25],
      [15, 30],
      [16, 27],
      [17, 20],
      [18, 18],
      [19, 31],
      [20, 23]
    ];
    var data3 = [
      [1, 50],
      [2, 45],
      [3, 60],
      [4, 65],
      [5, 70],
      [6, 77],
      [7, 68],
      [8, 65],
      [9, 80],
      [10, 40],
      [11, 45],
      [12, 49],
      [13, 48],
      [14, 39],
      [15, 40],
      [16, 45],
      [17, 46],
      [18, 48],
      [19, 55],
      [20, 58]
    ];
    var data4 = [
      [1, 20],
      [2, 22],
      [3, 25],
      [4, 29],
      [5, 35],
      [6, 40],
      [7, 48],
      [8, 52],
      [9, 50],
      [10, 55],
      [11, 59],
      [12, 57],
      [13, 62],
      [14, 58],
      [15, 55],
      [16, 57],
      [17, 66],
      [18, 72],
      [19, 80],
      [20, 90]
    ];
    var xLabel = [
      [1, ''],
      [2, ''],
      [3, 'May 15'],
      [4, ''],
      [5, ''],
      [6, 'May 19'],
      [7, ''],
      [8, ''],
      [9, 'May 22'],
      [10, ''],
      [11, ''],
      [12, 'May 25'],
      [13, ''],
      [14, ''],
      [15, 'May 28'],
      [16, ''],
      [17, ''],
      [18, 'May 31'],
      [19, ''],
      [20, '']
    ];

    $.plot($("#interactive-chart"), [{
      data: data1,
      label: "Revenue",
      color: app.color.blue,
      lines: {
        show: true,
        fill: false,
        lineWidth: 2
      },
      points: {
        show: true,
        radius: 3,
        fillColor: app.color.componentBg
      },
      shadowSize: 0
    }, {
      data: data2,
      label: 'Visitors',
      color: app.color.green,
      lines: {
        show: true,
        fill: false,
        lineWidth: 2
      },
      points: {
        show: true,
        radius: 3,
        fillColor: app.color.componentBg
      },
      shadowSize: 0
    }, {
      data: data3,
      label: 'Dishes Selled',
      color: app.color.purple,
      lines: {
        show: true,
        fill: false,
        lineWidth: 2
      },
      points: {
        show: true,
        radius: 3,
        fillColor: app.color.componentBg
      },
      shadowSize: 0
    }, {
      data: data4,
      label: 'Table Used',
      color: app.color.black,
      lines: {
        show: true,
        fill: false,
        lineWidth: 2
      },
      points: {
        show: true,
        radius: 3,
        fillColor: app.color.componentBg
      },
      shadowSize: 0
    }], {
      xaxis: {
        ticks: xLabel,
        tickDecimals: 0,
        tickColor: 'rgba(' + app.color.darkRgb + ', .2)'
      },
      yaxis: {
        ticks: 10,
        tickColor: 'rgba(' + app.color.darkRgb + ', .2)',
        min: 0,
        max: 200
      },
      grid: {
        hoverable: true,
        clickable: true,
        tickColor: 'rgba(' + app.color.darkRgb + ', .2)',
        borderWidth: 1,
        backgroundColor: 'transparent',
        borderColor: 'rgba(' + app.color.darkRgb + ', .2)'
      },
      legend: {
        labelBoxBorderColor: 'rgba(' + app.color.darkRgb + ', .2)',
        margin: 10,
        noColumns: 1,
        show: true
      }
    });
    var previousPoint = null;
    $("#interactive-chart").bind("plothover", function (event, pos, item) {
      $("#x").text(pos.x.toFixed(2));
      $("#y").text(pos.y.toFixed(2));
      if (item) {
        if (previousPoint !== item.dataIndex) {
          previousPoint = item.dataIndex;
          $("#tooltip").remove();
          var y = item.datapoint[1].toFixed(2);

          var content = item.series.label + " " + y;
          showTooltip(item.pageX, item.pageY, content);
        }
      } else {
        $("#tooltip").remove();
        previousPoint = null;
      }
      event.preventDefault();
    });
  }
};

var DashboardV2 = function () {
  "use strict";
  return {
    //main function
    init: function () {
      // handleVisitorsAreaChart();
      // handleVisitorsDonutChart();
      // handleVisitorsVectorMap();
      // handleScheduleCalendar();
      // handleDashboardGritterNotification();
      handleInteractiveChart();

      $(document).on('theme-change', function () {
        handleInteractiveChart();
      });
    }
  };
}();

$(document).ready(function () {
  DashboardV2.init();
});