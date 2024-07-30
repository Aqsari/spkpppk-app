<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Import file</title>
</head>
<body>
    <div class="container">
        <h2>Upload a File</h2>
        <form action="" method="post" enctype="multipart/form-data">
    {{ csrf_field()  }}
        <div class="form-group">
            <label for="file">File</label>
            <input type="file" class="form-control-file" name="excel_file" id="File">
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
    </div>
</body>
</html>