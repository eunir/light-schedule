<?php

namespace App\Traits;

trait CompanyScope
{
    /**
     * Inicialização do modelo.
     *
     * @return void
     */
    protected static function boot(): void
    {
        parent::boot();

        // Eventos de criação, atualização e remoção
        static::creating(function ($model) {
            $model->company_id = session('company_id');
        });

        static::updating(function ($model) {
            $model->company_id = session('company_id');
        });

        static::deleting(function ($model) {
            // Verificação de permissão ou lógica de negócios antes da exclusão
            if ($model->company_id !== session('company_id')) {
                abort(403, 'Permissão de acesso negada');
            }
        });

        // Scoping to get only the records of the current company
//        static::addGlobalScope('company', function ($builder) {
//            $builder->where('company_id', session('company_id'));
//        });
    }
}
