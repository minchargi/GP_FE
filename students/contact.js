function receiveMessage(teacherEmail, contactMethod, message) {
    const messagesList = document.getElementById("receivedMessages");
    const listItem = document.createElement("li");
    listItem.className = "list-group-item";
    listItem.innerHTML = `(${teacherEmail}) - ${contactMethod}: ${message}`;
    messagesList.appendChild(listItem);
}

// Event listener for form submission
document.getElementById("messageForm").addEventListener("submit", function (event) {
    event.preventDefault();

    // Get form values
    const teacherEmail = document.getElementById("teacherEmail").value;
    const contactMethod = document.getElementById("contactMethod").value;
    const message = document.getElementById("message").value;

    // Dummy logic: Simulate sending a message and then receiving it
    alert(`Message sent to (${teacherEmail}) via ${contactMethod}:\n${message}`);
    receiveMessage(teacherEmail, contactMethod, message);

    // Clear form fields
    document.getElementById("messageForm").reset();
});