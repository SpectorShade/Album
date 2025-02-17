<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>RAAAAAAAH</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Death Metal</h1>
        <br>
        <div class="row" id="Items"></div>
    </div>

    <template id="template-card">
        <div class="col-12 col-md-4">
            <div class="card">
                <img src="" alt="" class="card-img-top" style="width: 100px; height: 100px;">
                <div class="card-body">
                    <h3 class="card-title">Album</h3>
                    <p class="card-text">Details</p>
                </div>
            </div> 
        </div>
    </template>

    <script src="api.json"></script>
    <script src="script.js"></script>
</body>
</html>
