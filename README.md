# Rankup

Let your players ascent through ranks in a maybe? Factions server? Or a prisons server, you never know!

 - This plugin uses EconomyAPI
 - Please report errors to the issues panel (if ur on poggit, this is in github)
 - If you would like anything added, you can find me at discord.gg/zprisons
 
 # API
 
 - First, import the API
 ```php
 use Taco\RU\API;
 ```
 
 - Second, get the api in a variable
 ```php 
 $rankup = new API();
 ```
 
 - Third, use the api!
```php
$nextRankPrice = $rankup->getNextRankPrice($player);
$currentrank = $rankup->getRank($player);
$rankup->setRank($player, "b");
$nextRank = $rankup->getNextRank($player);
```

- Enjoy, Made By Taco!
