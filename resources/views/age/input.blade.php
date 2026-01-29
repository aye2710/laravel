<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Nhập tuổi</title>
</head>
<body>
    <h2>NHẬP TUỔI</h2>

    <form action="{{ url('/age/store') }}" method="POST">
        @csrf
        <p>
            Tuổi:
            <input type="text" name="age">
        </p>
        <button type="submit">Gửi</button>
    </form>
</body>
</html>
