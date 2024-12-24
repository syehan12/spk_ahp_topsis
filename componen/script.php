<!-- partial -->
<!-- <script>
    function previewImage_add(event) {
        const image = document.getElementById('image').files[0];
        const preview = document.getElementById('image-preview');

        const reader = new FileReader();
        reader.onload = function() {
            preview.src = reader.result;
            preview.style.display = 'block';
        }

        if (image) {
            reader.readAsDataURL(image);
        }
    }
</script>

<script>
    function previewImage_edit(event) {
        const [file] = event.target.files;
        if (file) {
            const previewId = 'image-preview<?php echo $data['laptop_id']; ?>';
            const preview = document.getElementById(previewId);
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        }
    }
</script> -->

<script src="../js/script.js"></script>
</body>

</html>