// Clear the form when the modal is closed
$('#updateGradesModal').on('hidden.bs.modal', function () {
    document.getElementById('updateGradesForm').reset();
});

function updateGrades() {
    // Handle updating grades (you can add your logic here)
    alert('Grades updated!');
    $('#updateGradesModal').modal('hide'); // Hide the modal after updating grades
}