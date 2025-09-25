<?php

namespace App\Models;
use Illuminate\Support\Arr;
class Herb{
    public static function allHerbs(): array {
        return [
            [
                'id'=> '1',
                'name' => 'Basil',
                'usage' => 'Culinary',
                'description' => 'Basil is a culinary herb known for its aromatic leaves, commonly used in Italian and Mediterranean cuisines. It has a sweet, peppery flavor and is often used fresh in dishes like pesto, salads, and pasta sauces.',],
            [
                'id'=> '2',
                'name' => 'Mint',
                'usage' => 'Medicinal',
                'description' => 'Mint is a versatile herb recognized for its refreshing aroma and cooling sensation. It is widely used in culinary applications, teas, and traditional medicine to aid digestion and relieve headaches.',
            ],
            [
                'id'=> '3',
                'name' => 'Rosemary',
                'usage' => 'Culinary/Medicinal',
                'description' => 'Rosemary is a fragrant evergreen herb native to the Mediterranean region. It is commonly used in cooking to flavor meats, soups, and stews, and is also valued for its potential health benefits, including improved digestion and memory enhancement.',
            ]
        ];
    }

    public static function findHerb(int $id): array{
        $herb = Arr::first(static::allHerbs(), fn($job) => $job['id'] == $id);
        if(! $herb) {
            abort(404);
        }
        else{
            return $herb;
        }
    }
}
