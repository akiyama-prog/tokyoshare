<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Model\Property;
use Illuminate\Http\Request;

class ContactProperty extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * 物件インスタン
     * @var Property
     */
    private $property;

    /**
     * 問い合わせ内容インスタンス
     * @var Request
     */
    private $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Property $property, Request $request)
    {
        $this->property = $property;
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com')
            ->view('mail.conatact_property')
            ->subject('物件問い合わせ[' . $this->property->property_name . ']')
            ->with([
                'property_name'  => $this->property->property_name,
                'customer_name'  => $this->request->name,
                'customer_email' => $this->request->email,
                'content'        => $this->request->content,
            ]);
    }
}
