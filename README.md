Tank'O'pedia
========================

This is just a side project to better understand the use of Symfony2 http://symfony.com/.
The interface is using the default twitter bootstrap for now. http://twitter.github.com/bootstrap/

The data is from http://wiki.worldoftanks.eu (online video game around tank warfare)

installation:

1. create your virtual host
    - new file in ```/etc/apache2/sites-available/``` for the config of the virtual host
    - symlink to this file in ```/etc/apache2/site-enabled```
    - vhosts's url added to /etc/hosts
    - restart apache service
2. check the database setting and adjust accordingly
3. run composer to fetch all dependencies
4. run the following command to create the tables:
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
2. use DataGridBundle for tank index template https://github.com/Abhoryo/APYDataGridBundle
3. use DataFixtures to allow to load all data regarding the tanks and modules
    - ~~tank~~: ~~usa~~, ~~ussr~~, ~~uk~~, ~~fr~~, ~~de~~, ~~cn~~
    - modules:
        * engine: usa, ussr, uk, fr, de, cn
        * gun: usa, ussr, uk, fr, de, cn
        * radio: ~~usa~~, ~~ussr~~, uk, fr, de, cn
        * track: usa, ussr, uk, fr, de, cn
        * turret: usa, ussr, uk, fr, de, cn
4. create join entity TankModule to hold ManyToOne and OneToMany relatioship AND xp value
5. add hull details on Tank with properties armor (front, side, rear)
6. add battle range for tanks
    - create new branch
    - add to Tank/Tier entity
    - add ref to DataFixtures
    - display on indexes
7. display some chart for the different indexes using d3 http://d3js.org/
    - ~~create new branch~~
    - add pie charts
    - pretty them
    - add dynamic values
8. refactor edit/new forms
     - use chosen javascript library for multiselect http://harvesthq.github.com/chosen/
     - use slider
9. add custom icons for tanks/tier/class/modules/equipment
     - use LiipImagineBundle for icon display (might be an overkill though) https://github.com/liip/LiipImagineBundle
     - investigate the possibility to use Gaufrette instead https://github.com/KnpLabs/KnpGaufretteBundle
10. add crew specialization
11. add consummables
12. customize bootstrap theme
    - use font awesome for icons (installed)
13. add way to compare 3-4 tanks as tables side by side
14. investigate scrapping data directly from wot for player and save that to local db.
15. add breadcrumb using white-october bundle https://github.com/whiteoctober/BreadcrumbsBundle
16. add gedmo slug behaviour https://github.com/l3pp4rd/DoctrineExtensions && https://github.com/stof/StofDoctrineExtensionsBundle
    - ~~Tank~~, ~~TankClass~~, ~~Nationality~~, Tier, Modules
17. investigate use of Graph data structure for the 'tech tree' (parents-children on tank entity); might have to use OrientDB
