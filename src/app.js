// import { Chart } from '!babel-loader!frappe-charts/dist/frappe-charts.esm.js';
import ApexCharts from '!babel-loader!apexcharts'
// import css
// import 'frappe-charts/dist/frappe-charts.min.css'

/**
 * Initialize all Apex charts found in DOM
 */
(function() {

	// Select all charts in a page
	const avidlyApexCharts = document.querySelectorAll( '.avidly-apex-chart' );
	const isAdmin = 'undefined' !== typeof avidlyApexSettings && avidlyApexSettings.isAdmin ? true : false;
	// Loop over charts
	for (let index = 0; index < avidlyApexCharts.length; index++) {

		const element = avidlyApexCharts[index];

		// Get the id
		const id = element.dataset.apexId ? element.dataset.apexId : 0;

		// Get the localized data
		const settings = window[ 'avidlyApexChart_' + id ] ? window[ 'avidlyApexChart_' + id ] : [];

		// Jump out if settings is empty
		if ( ! settings.data.length ) {
			continue;
		}

		/*
		// Initialize the chart
		const chart = new Chart( element, {
			data: JSON.parse( settings.data ),
			axisOptions: {
				xIsSeries: true,
				xAxisMode: 'tick',
			},
			lineOptions: {
				hideDots: 1,
			},
			title: settings.title,
			type: 'axis-mixed', // or 'bar', 'line', 'pie', 'percentage'
			height: 300,
			colors: ['#107737', '#F08627', '#4E96EF', '#874982', ],
		});
		*/
		const defaultOptions = {
			chart: {
				type: "line",
				toolbar: {
					show: true,
					tools: {
						download: isAdmin,
						selection: false,
						zoom: false,
						zoomin: false,
						zoomout: false,
						pan: false,
						reset: false,
					},
				},
			},
			colors: ['#107737', '#F08627', '#4E96EF', '#874982'],
		}
		const options = Object.assign( defaultOptions, JSON.parse( settings.data ))
		const chart = new ApexCharts( element, options );
		chart.render();
	}

})();