<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            max-width: 800px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .detail-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .detail-row {
            display: flex;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: bold;
            width: 150px;
        }

        .detail-value {
            flex: 1;
        }

        .btn {
            padding: 10px 20px;
            background-color: #6c757d;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #545b62;
        }
    </style>
</head>

<body>
    <h1>Product Detail - ID: {{ $id }}</h1>

    <div class="detail-card">
        <div class="detail-row">
            <div class="detail-label">Product ID:</div>
            <div class="detail-value">{{ $id }}</div>
        </div>
        <div class="detail-row">
            <div class="detail-label">Product Name:</div>
            <div class="detail-value">Laptop Dell XPS 13</div>
        </div>
        <div class="detail-row">
            <div class="detail-label">Price:</div>
            <div class="detail-value">$999.99</div>
        </div>
        <div class="detail-row">
            <div class="detail-label">Quantity:</div>
            <div class="detail-value">50</div>
        </div>
        <div class="detail-row">
            <div class="detail-label">Category:</div>
            <div class="detail-value">Electronics</div>
        </div>
    </div>

    <a href="{{ url('/product') }}" class="btn">Back to List</a>
</body>

</html>