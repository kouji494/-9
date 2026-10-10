<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
        }

        .container {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background-color: #3490dc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        .link {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>ログイン</h1>

        <form action="{{ route('login') }}" method="POST">

            @csrf

            <label>メールアドレス</label>
            <input type="email" name="email" value="{{ old('email') }}" required>

            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror

            <label>パスワード</label>
            <input type="password" name="password" required>

            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror

            <button type="submit">
                ログイン
            </button>

        </form>

        <div class="link">
            <a href="{{ route('register') }}">
                アカウントをお持ちでない方はこちら
            </a>
        </div>

    </div>

</body>

</html>