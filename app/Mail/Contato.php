<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Contato extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;
    public $email;
    public $uf;
    public $cidade;
    public $telefone;
    public $mensagem;

    /**
     * Create a new message instance.
     */
    public function __construct(string $nome, string $email, string $telefone,  string $uf, string $cidade, string $mensagem)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->uf = $uf;
        $this->cidade = $cidade;
        $this->mensagem = $mensagem;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'E-mail - Contato',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {

        return new Content(
            view: 'mail.contato',
            with: [
                'name' => $this->nome,
                'email' => $this->email,
                'telefone' => $this->telefone,
                'uf' => $this->uf,
                'cidade' => $this->cidade,
                'mensagem' => $this->mensagem,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
