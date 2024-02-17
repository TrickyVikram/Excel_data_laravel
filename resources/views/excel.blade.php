<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>excel_import</title>

    <style>
        .container {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            /* Adjust the width as needed */
        }
    </style>
</head>

<body>

    <div class="container mt-3  card  pd-1 pb-2 ">

        <h1 class="pt-4"
        >Excel Data </h1>
        <hr class="btn-primary"  >
        <br>
        <form action="/excel_export" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="file">
                
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <div class="pl-6">
                <button type="submit" class="btn btn-primary mt-3 ">Import File</button>
            </div>



        </form>
        <div class="pl-0">
            <a href="/excel_export" class="btn btn-primary mt-3  ">Export File</a>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
