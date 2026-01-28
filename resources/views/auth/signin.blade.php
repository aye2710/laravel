<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
</head>
<body>
    <h2>ĐĂNG KÝ TÀI KHOẢN</h2>

    <form action="{{ url('/auth/check-signin') }}" method="POST">
        @csrf

        <p>
            Username:
            <input type="text" name="username">
        </p>

        <p>
            Password:
            <input type="password" name="password">
        </p>

        <p>
            Re-Password:
            <input type="password" name="repass">
        </p>

        <p>
            MSSV:
            <input type="text" name="mssv">
        </p>

        <p>
            Lớp môn học:
            <input type="text" name="lopmonhoc">
        </p>

        <p>
            Giới tính:
            <select name="gioitinh">
                <option value="nam">Nam</option>
                <option value="nu">Nữ</option>
            </select>
        </p>

        <button type="submit">Sign In</button>
    </form>
</body>
</html>
