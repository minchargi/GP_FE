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