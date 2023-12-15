function confirmDeleteAnnouncement(id) {
    if (confirm("Are you sure you want to delete this announcement?")) {
        deleteAnnouncement(id);
    }
}
function deleteAnnouncement(id) {
    // Handle deletion of the announcement (you can replace this with your logic)
    const announcement = document.querySelector(`.announcement input[type="checkbox"]#checkbox${id}`).closest('.announcement');
    announcement.remove();
}
