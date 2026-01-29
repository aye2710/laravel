<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Nhập tuổi</title>
</head>
<body>
    <h2>NHẬP TUỔI</h2>

    <form action="{{ url('/check-age') }}" method="POST">
        @csrf
        Tuổi:
        <input type="text" name="age">
        <br><br>
        <button type="submit">Gửi</button>
    </form>
</body>
</html>
