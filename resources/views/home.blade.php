<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Texto para Audio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        .container {
            background: #fff;
            margin-top: 50px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            max-width: 600px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
        }

        input[type="text"] {
            flex: 1;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            background: #4f46e5;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #4338ca;
        }

        h2 {
            color: #444;
            margin-bottom: 10px;
        }

        audio {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Conversor de Texto em Voz</h1>

        <form action="{{ route('text.to.speech') }}" method="POST">
            @csrf
            <input type="text" name="text" placeholder="Digite algo..." required>
            <button type="submit">Converter</button>
        </form>

        @if(isset($audioBase64))
            <h2>Texto convertido em áudio:</h2>
            <audio controls>
                <source src="data:audio/mpeg;base64,{{ $audioBase64 }}" type="audio/mpeg">
                Seu navegador não suporta áudio.
            </audio>
        @endif
    </div>
</body>
</html>
