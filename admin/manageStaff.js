// Clear the form when the modal is closed
$('#addStaffModalModal').on('hidden.bs.modal', function () {
    document.getElementById('addStaffForm').reset();
});

function addStaff() {
    // Handle updating grades (you can add your logic here)
    alert('Staff added!');
    $('#addStaffModal').modal('hide'); // Hide the modal after updating grades
}
function deleteStaff() {
    alert('Deleted!');
}