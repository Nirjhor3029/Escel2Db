<?php

namespace App\Imports;

use App\Tracker;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportUsers implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        /*$name = "null";
        $email = "null";
        $password = "null";
        if($row[0] != null){
            $name = $row[0];
        }if($row[1] != null){
            $email = $row[1];
        }

        return new User([
            //
            'name'     => $name,
            'email'    => $email,
            'password'    => "Cool",
        ]);*/

        return new Tracker([
            'region'    => $row[0],
            'area'    => $row[1],
            'territory'    => $row[2],

            'w0_royals_volume'    => $row[3],
            'w0_placement'    => $row[4],

            'w1_royals_volume'    => $row[5],
            'w1_star_royals_volume'    => $row[6],
            'w1_bonus'    => $row[7],

            'w2_royals_volume'    => $row[8],
            'w2_star_royals_volume'    => $row[9],
            'w2_bonus'    => $row[10],

            'w3_royals_volume'    => $row[11],
            'w3_star_royals_volume'    => $row[12],
            'w3_bonus'    => $row[13],

            'w4_royals_volume'    => $row[14],
            'w4_star_royals_volume'    => $row[15],
            /*'w4_bonus'    => $row[16],


            'a_w0_royals_volume'    => $row[17],
            'a_w0_placement'    => $row[18],

            'a_w1_royals_volume'    => $row[19],
            'a_w1_star_royals_volume'    => $row[20],
            'a_w1_bonus'    => $row[21],

            'a_w2_royals_volume'    => $row[22],
            'a_w2_star_royals_volume'    => $row[23],
            'a_w2_bonus'    => $row[24],

            'a_w3_royals_volume'    => $row[25],
            'a_w3_star_royals_volume'    => $row[26],
            'a_w3_bonus'    => $row[27],

            'a_w4_royals_volume'    => $row[28],
            'a_w4_star_royals_volume'    => $row[29],
            'a_w4_bonus'    => $row[30],*/



        ]);
    }
}
