<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    /**
     * Nom de la table associée au modèle.
     *
     * @var string
     */
    protected $table = 'produits';

    /**
     * Les champs remplissables (fillable) pour une protection de masse.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
    ];

    /**
     * Accesseur pour formater le prix avec un symbole euro (€).
     *
     * @return string
     */
    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 2) . ' €';
    }

    /**
     * Mutateur pour s'assurer que le nom du produit est toujours en majuscule.
     *
     * @param string $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }

    /**
     * Méthode pour vérifier si le produit est en stock.
     *
     * @return bool
     */
    public function isInStock()
    {
        return $this->quantity > 0;
    }
}
