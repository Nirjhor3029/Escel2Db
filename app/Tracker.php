<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'region', 'area', 'territory','w0_royals_volume','w0_placement','w1_royals_volume','w1_star_royals_volume','w1_bonus','w2_royals_volume','w2_star_royals_volume','w2_bonus','w3_royals_volume','w3_star_royals_volume','w3_bonus','w4_royals_volume','w4_star_royals_volume','w4_bonus','a_w0_royals_volume','a_w0_placement','a_w1_royals_volume','a_w1_star_royals_volume','a_w1_bonus','a_w2_royals_volume','a_w2_star_royals_volume','a_w2_bonus','a_w3_royals_volume','a_w3_star_royals_volume','a_w3_bonus','a_w4_royals_volume','a_w4_star_royals_volume','a_w4_bonus'
    ];

}
