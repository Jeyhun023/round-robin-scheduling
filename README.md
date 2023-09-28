# Round-Robin Tournament Scheduling in Laravel

This product contains an implementation of the Round-Robin Scheduling algorithm in Laravel as a service. The LeagueService class included helps in creating a schedule for a league where each team plays with every other team in home and away matches. The teams involved in this example are Barcelona, Real Madrid, Valencia, and Atlético de Madrid, but it can easily be modified to work with any set of teams. The schedule is created such that each team plays once per week, facing each opponent twice over the course of the tournament - once as the home team and once as the away team.

### How to Use:
Include the LeagueService.php in your Laravel project under the App\Services namespace. To create a schedule, simply instantiate the LeagueService class and call the createSchedule() method. This method returns an array of matches with home team, away team, and week details.
> 
> $leagueService = new LeagueService();
> 
> $schedule = $leagueService->createSchedule();
> 
#laravel, #php, #scheduling, #round-robin
