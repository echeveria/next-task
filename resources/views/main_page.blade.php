<!DOCTYPE html>
<html>

<head>
    <title>Example View</title>
    @vite(['resources/css/app.css', 'resources/sass/app.sass', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <h1>Product List</h1>
        <table class="inputs">
            <tbody>
                <tr>
                    <td>Minimum price:</td>
                    <td><input type="text" id="min" name="min" class="form-control form-control-sm"></td>
                </tr>
                <tr>
                    <td>Maximum price:</td>
                    <td><input type="text" id="max" name="max" class="form-control form-control-sm"></td>
                </tr>
            </tbody>
        </table>
        <table id="productTable" class="display table table-striped">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Width</th>
                    <th>Height</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</body>

</html>