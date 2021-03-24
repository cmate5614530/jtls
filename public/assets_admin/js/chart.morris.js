$(function(){

	/* Morris Area Chart */
    const monthNames = ["", "Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];

	window.mA = Morris.Area({
	    element: 'morrisArea',
	    data: [
	        { y: 1, a: customer_1},
	        { y: 2, a: customer_2},
	        { y: 3, a: customer_3},
	        { y: 4, a: customer_4},
	        { y: 5, a: customer_5},
	        { y: 6, a: customer_6},
	        { y: 7, a: customer_7},
	        { y: 8, a: customer_8},
	        { y: 9, a: customer_9},
	        { y: 10, a: customer_10},
	        { y: 11, a: customer_11},
	        { y: 12, a: customer_12},
	    ],
	    xkey: 'y',
	    ykeys: ['a'],
        parseTime: false,
	    labels: ['customers'],
        xLabelFormat: function (x) {
            var index = parseInt(x.src.y);
            return monthNames[index];
        },
        xLabels: "month",
	    lineColors: ['#1b5a90'],
	    lineWidth: 2,

     	fillOpacity: 0.5,
	    gridTextSize: 10,
	    hideHover: 'auto',
	    resize: true,
		redraw: true
	});

	/* Morris Line Chart */

    window.mL = Morris.Area({
        element: 'morrisLine',
        data: [
            { y: 1, a: earning_1},
            { y: 2, a: earning_2},
            { y: 3, a: earning_3},
            { y: 4, a: earning_4},
            { y: 5, a: earning_5},
            { y: 6, a: earning_6},
            { y: 7, a: earning_7},
            { y: 8, a: earning_8},
            { y: 9, a: earning_9},
            { y: 10, a: earning_10},
            { y: 11, a: earning_11},
            { y: 12, a: earning_12},
        ],
        xkey: 'y',
        ykeys: ['a'],
        parseTime: false,
        labels: ['Earnings($)'],
        xLabelFormat: function (x) {
            var index = parseInt(x.src.y);
            return monthNames[index];
        },
        xLabels: "month",
        lineColors: ['#1b5a90'],
        lineWidth: 2,

        fillOpacity: 0.5,
        gridTextSize: 10,
        hideHover: 'auto',
        resize: true,
        redraw: true
    });
	$(window).on("resize", function(){
		mA.redraw();
		mL.redraw();
	});

});
