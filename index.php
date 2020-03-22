<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>  

<div class="container">
    <a href="upload.php"><button type="button">Upload Document</button></a>
    <h2>Document    </h2>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Download</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
           
                    <td></td>
                    <td></td>
                    <td><a href="download.php"><button type="button">Download</button></a></td>
                    <td></td>              
                    <td><a href="remove.php"><button type="button">Remove</button></a></td>
                </tr>

        
            </tbody>
        </table>
    </div>

</div>

</body>
</html>