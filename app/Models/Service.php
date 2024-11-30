<?php

namespace App\Models;

use App\Models\Scopes\CompanyGlobalScope;
use App\Traits\CompanyScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\HigherOrderCollectionProxy;

#[ScopedBy([CompanyGlobalScope::class])]
class Service extends Model
{
    use HasFactory, CompanyScope;

    protected  $fillable = [
        'name',
        'company_id',
        'duration',
        'price'
    ];

}
