<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Нова заявка на консультацію</title>
    <style>
        body { font-family: Arial, sans-serif; color: #1f2937; background: #f9fafb; margin: 0; padding: 24px; }
        .wrapper { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 12px; padding: 24px 28px; box-shadow: 0 8px 24px rgba(15, 23, 42, 0.08); }
        h1 { font-size: 22px; color: #0f172a; margin-bottom: 16px; }
        p { margin: 8px 0; line-height: 1.5; }
        .label { font-weight: 600; color: #0f172a; }
        .footer { margin-top: 24px; font-size: 12px; color: #6b7280; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Нова заявка на консультацію</h1>
        <p><span class="label">Ім'я:</span> {{ $requestData->name }}</p>
        <p><span class="label">Контакт:</span> {{ $requestData->contact }}</p>
        @if ($requestData->email)
            <p><span class="label">E-mail:</span> {{ $requestData->email }}</p>
        @endif
        <p><span class="label">Квартира:</span> {{ $requestData->has_apartment ? 'Є готова квартира' : 'Потрібна допомога з пошуком' }}</p>
        <p><span class="label">Рівень залученості:</span>
            @switch($requestData->involvement)
                @case('full') Повне ведення під ключ (з куратором) @break
                @case('self') Самостійно, з перевіреними стандартами @break
                @case('unsure') Хочу порадитись @break
                @default Не вказано
            @endswitch
        </p>
        @if ($requestData->preferred)
            <p><span class="label">Зручний спосіб зв'язку / час:</span> {{ $requestData->preferred }}</p>
        @endif
        <p class="footer">Лист згенеровано автоматично сайтом MYFREEDOM.</p>
    </div>
</body>
</html>
