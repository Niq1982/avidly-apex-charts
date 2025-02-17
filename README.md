# Apex Charts for WordPress

This plugin makes possible to use interactive [Apex Charts](https://frappe.io/charts) in WordPress.

![Screenshot of Apex Charts in Dashboard](screenshot.png?raw=true)

## Usage

1. Install & activate plugin

2. Add a new Chart from your WordPress dashboard. Only way to input the chart data is by entering it as JSON for now. 
There's an example chart for a starting point to fiddle with. Be careful when inputting the values (only int values allowed) and fix errors that the code editor points out.
For more information / options, see [Apex Charts Documentation](https://frappe.io/charts/docs)

3. Copy the provided shortcode and paste it in your post content. You can also use Gutenberg Shortcode Block to do this.

4. Profit

*Apex Charts does not work in IE11. You can supply the chart as an image using Featured Image for fallback.*

## Future improvements

- Add build process for JS to compile the code to one file
- Make more chart settings editable from dashboard, like axis options, line options and colors
- Import from CSV
- Build Gutenberg block
- Allow only validated JSON to be submitted
