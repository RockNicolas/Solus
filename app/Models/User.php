<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Define a tabela usada pelo modelo.
     */
    protected $table = 'nome_da_sua_tabela';

    /**
     * Define a chave primária da tabela.
     */
    protected $primaryKey = 'id';

    /**
     * Define os atributos que podem ser preenchidos em massa.
     */
    protected $fillable = [
        'nome_coluna_usuario',
        'email',
        'senha', // Se o campo no banco for 'senha' ao invés de 'password'
    ];

    /**
     * Define os atributos que devem ser ocultos para serialização.
     */
    protected $hidden = [
        'senha', // Se a coluna da senha no banco for 'senha'
        'remember_token',
    ];

    /**
     * Define os atributos que devem ser convertidos para outros tipos.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Mutator para garantir que a senha seja sempre armazenada com hash.
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['senha'] = bcrypt($value);
    }
}
