function receiveMessage(studentName, studentEmail, contactMethod, message) {
    const messagesList = document.getElementById("receivedMessages");
    const listItem = document.createElement("li");
    listItem.className = "list-group-item";
    listItem.innerHTML = `<strong>${studentName}</strong> (${studentEmail}) - ${contactMethod}: ${message}`;
    messagesList.appendChild(listItem);
}

// Event listener for form submission
document.getElementById("messageForm").addEventListener("submit", function (event) {
    event.preventDefault();

    // Get form values
    const studentName = document.getElementById("studentName").value;
    const studentEmail = document.getElementById("studentEmail").value;
    const contactMethod = document.getElementById("contactMethod").value;
    const message = document.getElementById("message").value;

    // Dummy logic: Simulate sending a message and then receiving it
    alert(`Message sent to ${studentName} (${studentEmail}) via ${contactMethod}:\n${message}`);
    receiveMessage(studentName, studentEmail, contactMethod, message);

    // Clear form fields
    document.getElementById("messageForm").reset();
});