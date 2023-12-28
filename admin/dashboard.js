$(document).ready(function () {
    // Sample data for the pie chart
    var data = {
        labels: ["Graduated", "Not Graduated"],
        datasets: [{
            data: [70, 30], 
            backgroundColor: ["#C3E2C2", "#CD8D7A"]
        }]
    };

    // Get the context of the canvas element
    var ctx = document.getElementById("graduationChart").getContext("2d");

    // Create the pie chart
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: data
    });
});