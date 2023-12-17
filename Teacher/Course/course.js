// Clear the form when the modal is closed
$('#createClassModal').on('hidden.bs.modal', function () {
    document.getElementById('createClassForm').reset();
});

function createClass() {
    // Handle creating a new class (you can add your logic here)
    alert('Class created!');
    $('#createClassModal').modal('hide'); // Hide the modal after class creation
}
