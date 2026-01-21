<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 3px solid #007bff;
        }

        h1 {
            color: #333;
            font-size: 32px;
            font-weight: 600;
        }

        .btn {
            padding: 12px 24px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            box-shadow: 0 4px 15px rgba(245, 87, 108, 0.4);
            margin-top: 20px;
        }

        .btn-secondary:hover {
            box-shadow: 0 6px 20px rgba(245, 87, 108, 0.6);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            overflow: hidden;
            border-radius: 8px;
        }

        thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        th {
            padding: 15px;
            text-align: left;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #e9ecef;
            color: #495057;
        }

        tbody tr {
            transition: all 0.3s ease;
        }

        tbody tr:hover {
            background-color: #f8f9fa;
            transform: scale(1.01);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .action-link {
            padding: 6px 12px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            font-size: 13px;
            transition: all 0.3s ease;
        }

        .edit-link {
            color: #007bff;
            margin-right: 10px;
        }

        .edit-link:hover {
            background-color: #e7f3ff;
        }

        .delete-link {
            color: #dc3545;
        }

        .delete-link:hover {
            background-color: #ffe6e6;
        }

        .price {
            color: #28a745;
            font-weight: 600;
        }

        .category-badge {
            display: inline-block;
            padding: 4px 12px;
            background-color: #e9ecef;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Product List</h1>
            <a href="{{ route('add') }}" class="btn">+ Add Product</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Laptop Dell XPS 13</td>
                    <td class="price">$999.99</td>
                    <td>50</td>
                    <td><span class="category-badge">Electronics</span></td>
                    <td>
                        <a href="#" class="action-link edit-link">Edit</a>
                        <a href="#" class="action-link delete-link">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>iPhone 15 Pro</td>
                    <td class="price">$1,199.00</td>
                    <td>30</td>
                    <td><span class="category-badge">Electronics</span></td>
                    <td>
                        <a href="#" class="action-link edit-link">Edit</a>
                        <a href="#" class="action-link delete-link">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Samsung Smart TV</td>
                    <td class="price">$799.00</td>
                    <td>20</td>
                    <td><span class="category-badge">Electronics</span></td>
                    <td>
                        <a href="#" class="action-link edit-link">Edit</a>
                        <a href="#" class="action-link delete-link">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Nike Air Max</td>
                    <td class="price">$129.99</td>
                    <td>100</td>
                    <td><span class="category-badge">Shoes</span></td>
                    <td>
                        <a href="#" class="action-link edit-link">Edit</a>
                        <a href="#" class="action-link delete-link">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Coffee Maker</td>
                    <td class="price">$49.99</td>
                    <td>75</td>
                    <td><span class="category-badge">Home Appliances</span></td>
                    <td>
                        <a href="#" class="action-link edit-link">Edit</a>
                        <a href="#" class="action-link delete-link">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('detail', ['id' => '123']) }}" class="btn btn-secondary">View Product Details</a>
    </div>
</body>

</html>