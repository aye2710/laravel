<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bàn cờ vua</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 40px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 600;
        }

        .chessboard {
            display: inline-block;
            border: 5px solid #333;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .row {
            display: flex;
        }

        .square {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            transition: transform 0.2s;
        }

        .square:hover {
            transform: scale(1.05);
            z-index: 1;
        }

        .white {
            background-color: #f0d9b5;
        }

        .black {
            background-color: #b58863;
        }

        @media (max-width: 768px) {
            .square {
                width: 60px;
                height: 60px;
                font-size: 30px;
            }

            h1 {
                font-size: 24px;
            }

            .container {
                padding: 30px 20px;
            }
        }

        @media (max-width: 480px) {
            .square {
                width: 50px;
                height: 50px;
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>♟️ Bàn cờ vua kích thước {{ $n }}x{{ $n }}</h1>

        <div class="chessboard">
            @for ($i = 0; $i < $n; $i++)
                <div class="row">
                    @for ($j = 0; $j < $n; $j++)
                        @php
                            $isWhite = ($i + $j) % 2 == 0;
                        @endphp
                        <div class="square {{ $isWhite ? 'white' : 'black' }}"></div>
                    @endfor
                </div>
            @endfor
        </div>
    </div>
</body>

</html>