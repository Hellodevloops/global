<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;
use Orchid\Screen\AsSource;

class Contact extends Model
{
    use AsSource;
    protected $table = 'contact';
    protected $fillable = ['name', 'email', 'phone', 'subject', 'message'];
}
