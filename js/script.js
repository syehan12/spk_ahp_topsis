// Function to preview the uploaded image for adding a new laptop
function previewImageAdd(event) {
   var reader = new FileReader();
   reader.onload = function () {
      var output = document.getElementById("image-preview-img");
      output.src = reader.result;
      document.getElementById("image-preview").style.display = "block";
   };
   reader.readAsDataURL(event.target.files[0]);
}

// Function to preview the uploaded image for editing an existing laptop
function previewImageEdit(event, laptop_id) {
   var reader = new FileReader();
   reader.onload = function () {
      var output = document.getElementById("image-preview-img" + laptop_id);
      output.src = reader.result;
      document.getElementById("image-preview" + laptop_id).style.display =
         "block";
   };
   reader.readAsDataURL(event.target.files[0]);
}

function validateInput(input) {
   if (input.value > 100) {
      input.value = 100;
   }
   if (input.value < 0) {
      input.value = 0;
   }
}
