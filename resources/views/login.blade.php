<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - UTS Web</title>
    <style>
       
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0fdf4; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-card {
            background: #ffffff;
            padding: 2.5rem;
            border-radius: 1rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            width: 100%;
            max-width: 400px;
            text-align: center;
            border: 1px solid #d1fae5;
        }
        .badge-agro {
            background-color: #d1fae5;
            color: #065f46;
            font-size: 1.25rem;
            font-weight: 700;
            padding: 0.5rem 1.25rem;
            border-radius: 50px;
            display: inline-block;
            margin-bottom: 1.25rem;
        }
        .login-card h1 {
            color: #065f46;
            margin-bottom: 1.5rem;
            font-size: 1.75rem;
        }
        .form-group {
            margin-bottom: 1.25rem;
            text-align: left;
        }
        .form-group label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.5rem;
        }
        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            box-sizing: border-box;
            outline: none;
        }
        .form-group input:focus {
            border-color: #059669;
            box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.1);
        }
        .btn-submit {
            width: 100%;
            background-color: #059669;
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .btn-submit:hover {
            background-color: #047857;
        }
        .error-msg {
            color: #dc2626;
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <!-- Label Tema Agroteknologi -->
        <div>
            <span class="badge-agro">Agroteknologi</span>
        </div>

        <h1>Login</h1>

        @if ($errors->any())
            <div class="error-msg">
                Username minimal harus 3 karakter.
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required placeholder="Masukkan username...">
            </div>

            <button type="submit" class="btn-submit">Masuk</button>
        </form>
    </div>

</body>
</html>