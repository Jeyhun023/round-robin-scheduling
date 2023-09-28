<?php

namespace App\Services;

class LeagueService
{
    public function createSchedule(): array
    {
        $teams = [
            'Barcelona',
            'Real Madrid',
            'Valencia',
            'Atlético de Madrid'
        ];

        //Randomize teams for each meetup
        shuffle($teams);

        $maxWeek = count($teams) * (count($teams) - 1);

        for ($round = 1; $round <= $maxWeek; $round += 2) {
            for ($i = 0; $i < count($teams) / 2; $i++) {
                $team1 = $teams[$i];
                $team2 = $teams[count($teams) - 1 - $i];
                // Skipping matches with null (bye)
                if ($team1 && $team2) {
                    $schedule[] = [
                        'home_team' => $team1,
                        'away_team' => $team2,
                        'week' => $round
                    ];
                    $schedule[] = [
                        'home_team' => $team2,
                        'away_team' => $team1,
                        'week' => $round + 1
                    ];
                }
            }
            // Rotating the teams
            array_splice($teams, 1, 0, array_splice($teams, -1));
        }
    
        return $schedule;
    }
}