anychart.onDocumentReady(function () {

    // create data   
    var data = [
      {x: "Java", value: 90},
      {x: "Postman", value: 70},
      {x: "Jenkins", value: 60},
      {x: "Kubernetes", value: 36},
      {x: "Cucumber", value: 50},
      {x: "PostgreSQL", value: 34},
      {x: "Git", value: 44},
      {x: "Bitbucket", value: 42},
      {x: "Jira", value: 46}
    ];

    // create a chart and set the data
    var chart = anychart.tagCloud(data);

    chart.mode("spiral");

    var state = chart.normal();

    // Set font style.
    state.fontVariant('small-caps');

    // set the container id
    chart.container("grafico");

    // initiate drawing the chart
    chart.draw();
});