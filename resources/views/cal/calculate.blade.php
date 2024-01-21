<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <form action="/marks" method="POST" class="mt-5">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <tr>
                            <td class="font-weight-bold text-center">
                                <label for="HCI"> HCI </label>
                            </td>
                            <td>
                                <input type="text" name="HCI" class="form-control" value="{{ old('HCI') }}" pattern="\d*" inputmode="numeric">
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center">
                                <label for="Mobile"> M / ICM </label>
                            </td>
                            <td>
                                <input type="text" name="Mobile" class="form-control" value="{{ old('Mobile') }}" pattern="\d*" inputmode="numeric">
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center">
                                <label for="EWSD"> EWSD </label>
                            </td>
                            <td>
                                <input type="text" name="EWSD" class="form-control" value="{{ old('EWSD') }}" pattern="\d*" inputmode="numeric">
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center">
                                <label for="RM"> RM </label>
                            </td>
                            <td>
                                <input type="text" name="RM" class="form-control" value="{{ old('RM') }}" pattern="\d*" inputmode="numeric">
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center">
                                <label for="Project">Project</label>
                            </td>
                            <td>
                                <input type="text" name="Project" class="form-control" value="{{ old('Project') }}" pattern="\d*" inputmode="numeric">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" class="btn btn-primary">Calculate</button>
                            </td>
                        </tr>
                    </table>
                    @if (session()->has('result'))
                    <div class="alert alert-success" role="alert">
                        {{ session('result') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </form>

    <!-- Bootstrap JS and Popper.js (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
