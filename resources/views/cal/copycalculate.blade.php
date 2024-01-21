<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eaQdsfPD5SN86BRNp6U1osC6Hl0lU7k3JUn8U8H1r41zBC6sAzSmBmGspwoBY3dJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css">
  <style>
    body {
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #fafafa;
    }

    .remote {
      background-color: #495057;
      border-radius: 15px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
      padding: 20px;
      width: 400px;
      height: 600px;
      display: flex;
      flex-direction: column;
      align-items: center;
      color: #fff;
    }

    .screen {
      width: 100%;
      height: 80px;
      background-color: #212529;
      border-radius: 10px;
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .btn-group {
      margin-bottom: 15px;
    }

    .btn {
      width: 60px;
      height: 40px;
      font-size: 14px;
      margin: 5px;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-secondary {
      background-color: #6c757d;
      border-color: #6c757d;
    }

    .btn-success {
      background-color: #28a745;
      border-color: #28a745;
    }

    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .btn-warning {
      background-color: #ffc107;
      border-color: #ffc107;
    }

    .controls {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
    }
  </style>
  <title>Remote Control</title>
</head>

<body>
  <div class="remote">
    <div class="screen">
      <p>Description</p>
    </div>

    <div class="btn-group">
      <button type="button" class="btn btn-primary"><i class="bi bi-power"></i></button>
      <button type="button" class="btn btn-secondary"><i class="bi bi-volume-up"></i></button>
      <button type="button" class="btn btn-secondary"><i class="bi bi-volume-down"></i></button>
    </div>

    <div class="btn-group">
      <button type="button" class="btn btn-secondary"><i class="bi bi-arrow-up"></i></button>
      <button type="button" class="btn btn-secondary"><i class="bi bi-arrow-down"></i></button>
      <button type="button" class="btn btn-secondary"><i class="bi bi-volume-mute"></i></button>
    </div>

    <div class="controls">
      <button type="button" class="btn btn-success"><i class="bi bi-play"></i></button>
      <button type="button" class="btn btn-warning"><i class="bi bi-pause"></i></button>
      <button type="button" class="btn btn-danger"><i class="bi bi-stop"></i></button>
      <button type="button" class="btn btn-secondary"><i class="bi bi-arrow-left"></i></button>
      <button type="button" class="btn btn-secondary"><i class="bi bi-arrow-right"></i></button>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-eaQdsfPD5SN86BRNp6U1osC6Hl0lU7k3JUn8U8H1r41zBC6sAzSmBmGspwoBY3dJ" crossorigin="anonymous"></script>
</body>

</html>
