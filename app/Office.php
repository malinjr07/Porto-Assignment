<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Office as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Office extends Authenticatable
{
    use Notifiable;
}
