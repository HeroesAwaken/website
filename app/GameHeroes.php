<?php

namespace App;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class GameHeroes extends Model
{
    protected $fillable = ['user_id', 'heroName', 'online', 'ip_address'];

    public function stats()
    {
        $stats = new Collection();
        foreach (GameStats::where('user_id', $this->user_id)->where('heroID', $this->id)->get() as $stat)
            $stats->push($stat);

        return $stats;
    }

    public function getStat($statKey)
    {
        $stats = $this->stats();
        foreach($stats as $stat)
        {
            if($stat['statsKey'] == $statKey) {
                return $stat['statsValue'];
            }
        }
        return null;
    }

    public function getTeam()
    {
        $stats = $this->stats();
        foreach($stats as $stat)
        {
            if($stat['statsKey'] == 'c_team'){
                switch($stat['statsValue']){
                    // Return lower team name
                    case "1":
                        return "national";
                    case "2":
                        return "royal";
                }
            }
        }
        return null;
    }

    public function getClass()
    {
        $stats = $this->stats();
        foreach($stats as $stat)
        {
            if($stat['statsKey'] == 'c_kit'){
                switch($stat['statsValue']){
                    // Return lower team name
                    case "0":
                        return "commando";
                    case "1":
                        return "soldier";
                    case "2":
                        return "gunner";
                }
            }
        }

    }
}