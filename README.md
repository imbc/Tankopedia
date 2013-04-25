Tank'O'pedia
========================

This is just a side project to better understand the use of [Symfony2] (http://symfony.com/).
The interface is using the default [twitter bootstrap] (http://twitter.github.com/bootstrap/)for now.

The data is from [World of Tanks] (http://wiki.worldoftanks.eu) (online video game around tank warfare)

installation:

1. create your virtual host
    - new file in ```/etc/apache2/sites-available/``` for the config of the virtual host
    - symlink to this file in ```/etc/apache2/site-enabled```
    - vhosts's url added to ```/etc/hosts``` on line reading ```127.0.0.1```
    - restart apache service
2. check the database setting and adjust accordingly
3. run composer to fetch all dependencies
4. run the following command to create the tables:
```
    php app/console doctrine:schema:update --force
```
    or update them
```
    php app/console doctrine:schema:update --dump-sql
```
5. run the following command to populate the tables:
```
    php app/console doctrine:fixtures:load --fixtures=src/Imbc/TankopediaBundle/DataFixtures/ORM --append
```

Access the dev environment through http://virtualhost/app_dev.php/tankopedia/tank/

The virtual host could be ```imbc.local``` or ```localost/imbc/``` if you have set this

TODO:

1. refactor the controller for ~~Engine~~, ~~Gun~~, ~~Nationality~~, ~~Tank~~, ~~TankClass~~, ~~Tier~~, ~~Track~~ and ~~Turret~~
     - ~~remove delete control~~ (not needed)
     - remove new/update
     - refactor edit
2. use [DataGridBundle](https://github.com/Abhoryo/APYDataGridBundle) for tank index template
3. use DataFixtures to allow to load all data regarding the tanks and modules (need to retrieve info for 8.4 tank update)
    - ~~tank~~: ~~usa~~, ~~ussr~~, ~~uk~~, ~~fr~~, ~~de~~, ~~cn~~
    - modules:
        * ~~engine~~: ~~usa~~, ~~ussr~~, ~~uk~~, ~~fr~~, ~~de~~, ~~cn~~
        * gun: usa, ussr, uk, fr, de, cn
        * ~~radio~~: ~~usa~~, ~~ussr~~, ~~uk~~, ~~fr~~, ~~de~~, ~~cn~~
        * track: ~~usa~~, ussr, uk, fr, de, cn
        * turret: usa, ussr, uk, fr, de, cn
4. create join entity TankModule to hold ManyToOne and OneToMany relatioship AND xp value
5. add additional tank related information
    - hull details on Tank with properties armor (front, side, rear) -> might need new Hull module entity
    - cammo value [see this post] (http://forum.worldoftanks.com/index.php?/topic/147120-083-tank-camouflage-tables/)
6. add battle range for tanks
    - create new branch
    - add to Tank/Tier entity
    - add ref to DataFixtures
    - display on indexes
7. ~~add Shell relationship to Gun, and refactor the latter~~ (info based on [worldoftanksguide.com] (http://www.worldoftanksguide.com/ref-gun-database.shtml))
8. display some chart for the different indexes using [d3] (http://d3js.org/)
    - ~~create new branch~~
    - add pie charts
    - pretty them
    - add dynamic values
9. refactor edit/new forms
     - use [chosen javascript library] (http://harvesthq.github.com/chosen/) for multiselect
     - use slider
10. add custom icons for tanks/tier/class/modules/equipment
     - use [LiipImagineBundle] (https://github.com/liip/LiipImagineBundle) for icon display (might be an overkill though)
     - investigate the possibility to use [Gaufrette] (https://github.com/KnpLabs/KnpGaufretteBundle) instead
11. add crew specialization
12. add consummables
13. customize bootstrap theme
    - use font awesome for icons (installed)
14. add way to compare 3-4 tanks as tables side by side
    - implement 3 way to compare tanks (see [tank-compare.com] (http://tank-compare.com) for example)
    - implement comparator by tier/class (see [wotatank.com] (http://wotatank.com/) for example)
    - calculate [tank performance] (http://www.worldoftanksguide.com/ref-tank-analyzer-explain.shtml) (see [worldoftanksguide.com] (http://www.worldoftanksguide.com/cgi-bin/tank_analyzer.cgi) for example)
15. investigate scrapping data directly from wot for player and save that to local db, (example: [wotdb] (https://github.com/imbc/wotdb) and [tanklab] (https://github.com/imbc/tanklab))
    - see https://github.com/thunder-spb/wot-api-description for api description 
16. add breadcrumb using white-october [BreadCrumbsBundle] (https://github.com/whiteoctober/BreadcrumbsBundle)
17. add [gedmo slug] (https://github.com/l3pp4rd/DoctrineExtensions) behaviour through [StofDoctrineExtensionsBundle] (https://github.com/stof/StofDoctrineExtensionsBundle)
    - ~~Tank~~, ~~TankClass~~, ~~Nationality~~, Tier, Modules
18. investigate use of Graph data structure for the 'tech tree' (parents-children on tank entity);
    - might have to use OrientDB
    - might be able to use [StofDoctrineExtensionsBundle] (https://github.com/stof/StofDoctrineExtensionsBundle) see Closure Table
19. add a user management
20. add an access level control
21. add an Admin interface for manual data maintenance
22. add version (game version that is) in order to track tank/modules properties
    - create a loading system for xml files based on [WoTModTools] (https://github.com/imbc/WoTModTools)
23. add 3d viewer (see [gamemodels3d.com/worldoftanks]  (http://gamemodels3d.com/worldoftanks/) for example)
