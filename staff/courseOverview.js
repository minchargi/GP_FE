$(document).ready(function(){
    // Click event for Save Changes button
    $("#saveChangesBtn").click(function(){
      // Get the edited content from the textarea
      var editedContent = $("#editedContent").val();
      
      // You can now use 'editedContent' to update your page content or send it to the server.
      // For example, you can update the header_text with the edited content:
      $(".course-detail").text(editedContent);
  
      // Close the modal
      $("#editModal").modal('hide');
    });
  });
  var gradesData = {
    labels: ['Lab 01', 'Lab 02', 'Lab 03', 'Lab 04', 'Lab 05'],
    datasets: [{
        label: 'Student Grades',
        data: [15, 18, 12, 19, 14],
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
    }]
  };
  // Get the canvas element
  var ctx = document.getElementById('gradesChart').getContext('2d');
  
  // Create a bar chart
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: gradesData,
    options: {
        scales: {
            y: {
                beginAtZero: true,
                max: 20
            }
        }
    }
  });
  
  // Function to simulate attendance check
  function checkAttendance() {
    alert('Attendance checked!');
  }