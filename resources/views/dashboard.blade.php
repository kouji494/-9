<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ダッシュボード</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: 60px auto;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        button {
            margin-top: 20px;
            padding: 12px 20px;
            background: #e3342f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>ダッシュボード</h1>

        <div class="card">
            <h2>ようこそ、{{ auth()->user()->name }}さん！</h2>

            <p>メールアドレス：{{ auth()->user()->email }}</p>

            <p>登録日：{{ auth()->user()->created_at->format('Y年m月d日') }}</p>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="" submit"
                style="background-color: #e3342f; color: white; padding: 12px 20px; border: none; border-radius: 5px; margin-top: 20px; cursor: pointer;">
                ログアウト
            </button>
        </form>