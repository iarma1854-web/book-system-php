<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Управление Авторами</title>
    <style>
        body { font-family: sans-serif; margin: 40px; background: #f4f4f4; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        input { padding: 8px; margin: 5px 0; display: block; width: 200px; }
        button { padding: 10px 15px; background: #2ecc71; color: white; border: none; cursor: pointer; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #f8f9fa; }
        .alert { color: green; font-weight: bold; }
    </style>
</head>
<body>

<div class="container">
    <h1>Система управления авторами</h1>

    {{-- Вывод сообщения об успехе --}}
    @if(session('status'))
        <p class="alert">{{ session('status') }}</p>
    @endif

    {{-- Форма создания --}}
    <h3>Добавить нового автора</h3>
    <form action="/authors" method="POST">
        @csrf {{-- КРИТИЧЕСКИ ВАЖНО: защита от CSRF атак --}}
        <input type="text" name="name" placeholder="Имя" required>
        <input type="text" name="surname" placeholder="Фамилия" required>
        <input type="date" name="birthdate" required>
        <button type="submit">Сохранить автора</button>
    </form>

    <hr>

    {{-- Таблица со списком --}}
    <h3>Список авторов</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Полное имя</th>
                <th>Дата рождения</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->fullName() }}</td> {{-- Используем наш метод из модели! --}}
                    <td>{{ $author->birthdate }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>