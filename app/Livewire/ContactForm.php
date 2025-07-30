<?php

namespace App\Livewire;

use App\Filament\Pages\Settings;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $subject = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:3|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|min:10|max:1000',
    ];

    protected $messages = [
        'name.required' => 'O nome é obrigatório.',
        'name.min' => 'O nome precisa ter pelo menos 3 caracteres.',
        'email.required' => 'O e-mail é obrigatório.',
        'email.email' => 'Informe um e-mail válido.',
        'subject.required' => 'O assuto é obrigatório.',
        'message.required' => 'A mensagem é obrigatória.',
        'message.min' => 'A mensagem deve ter no mínimo 10 caracteres.',
        'message.max' => 'A mensagem deve ter no máximo 1000 caracteres.',
    ];

    public function submit()
    {
        $data = $this->validate();

        // $receiver = Settings::value('email_receiver');

        $data['url'] = url()->previous();


        Contact::create($data);

        // try {
        //     if($receiver) {
        //         Mail::to($receiver)->send(new ContactMail(
        //             $data['name'],
        //             $data['email'],
        //             $data['phone'],
        //                 $data['role'],
        //             $data['message']
        //         ));
        //     }
        // }
        // catch (\Exception $e) {
        //     Log::error($e->getMessage());
        // }

        session()->flash('success', 'Mensagem enviada com sucesso!');

        $this->reset(['name', 'email', 'subject', 'message']);
    }
    
    public function render()
    {
        return view('livewire.contact-form');
    }
}
