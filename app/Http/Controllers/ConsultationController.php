<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsultationRequest;

class ConsultationController extends Controller
{
    public function create()
    {
        return view('consultation.create');
    }

    public function store(Request $request)
    {
        // Валидация
        $data = $request->validate(
            [
                'name' => ['required','string','max:255'],
                'contact' => ['required','string','max:255'], // Телефон/Telegram/Viber/WhatsApp — одно поле
                'email' => ['nullable','email','max:255'],
                'has_apartment' => ['required','in:yes,no'],
                'involvement' => ['required','in:full,self,unsure'],
                'preferred' => ['nullable','string','max:1000'],
            ],
            [],
            [
                'name' => "Ім'я",
                'contact' => "Телефон /Telegram / Viber / WhatsApp",
                'email' => 'E-mail',
                'has_apartment' => 'Чи вже маєте квартиру',
                'involvement' => 'Рівень залученості',
                'preferred' => "Зручний спосіб зв'язку / час дзвінка",
            ]
        );

        // Сохранение
        ConsultationRequest::create([
            'name' => $data['name'],
            'contact' => $data['contact'],
            'email' => $data['email'] ?? null,
            'has_apartment' => $data['has_apartment'] === 'yes',
            'involvement' => $data['involvement'],
            'preferred' => $data['preferred'] ?? null,
        ]);

        // Редирект на страницу благодарности
        return redirect()->route('thankyou');
    }

    public function thankYou()
    {
        return view('consultation.thankyou');
    }
}
