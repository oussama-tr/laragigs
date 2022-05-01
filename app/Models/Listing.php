<?php

namespace App\Models;


class Listing
{
    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }

    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'listing one',
                'description' => 'lorem ipsum'
            ],
            [
                'id' => 2,
                'title' => 'listing two',
                'description' => 'lorem ipsum'
            ],
            [
                'id' => 3,
                'title' => 'listing three',
                'description' => 'lorem ipsum'
            ]
        ];
    }
}
