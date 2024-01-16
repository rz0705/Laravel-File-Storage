<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form id="uploadForm" action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="">File</label>
                <input type="file" name="file" id="file" class="form-control" placeholder="Upload File">
            </div>
            <button id="uploadBtn" class="btn btn-outline-dark" onclick="uploadFile()">Upload</button>
        </div>
    </form>

    <!-- Your custom script -->
    {{-- <script>
        function uploadFile() {
            // Disable the button during upload
            document.getElementById('uploadBtn').setAttribute('disabled', 'disabled');

            // Show loading animation on the button
            document.getElementById('uploadBtn').innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Uploading...';

            // Submit the form asynchronously using AJAX
            var formData = new FormData(document.getElementById('uploadForm'));

            fetch("{{ route('file.upload.post') }}", {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    // Enable the button after upload
                    document.getElementById('uploadBtn').removeAttribute('disabled');

                    // Show success message
                    document.getElementById('uploadBtn').innerHTML = 'Upload Successful';

                    // Reset the button text after a delay (e.g., 3 seconds)
                    setTimeout(() => {
                        document.getElementById('uploadBtn').innerHTML = 'Upload';
                    }, 3000);
                })
                .catch(error => {
                    console.error('Error:', error);

                    // Enable the button after upload
                    document.getElementById('uploadBtn').removeAttribute('disabled');

                    // Show error message
                    document.getElementById('uploadBtn').innerHTML = 'Upload Failed';

                    // Reset the button text after a delay (e.g., 3 seconds)
                    setTimeout(() => {
                        document.getElementById('uploadBtn').innerHTML = 'Upload';
                    }, 3000);
                });
        }
    </script> --}}
</body>

</html>
