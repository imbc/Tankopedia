Tank'O'pedia
========================

This is just a side project to better understand the use of Symfony2 http://symfony.com/.
The interface is using the default twitter bootstrap for now. http://twitter.github.com/bootstrap/

The data is from http://wiki.worldoftanks.eu (online video game around tank warfare)

TODO:

1. refactor the controller for ~~Engine~~, ~~Gun~~, ~~Nationality~~, ~~Tank~~, ~~TankClass~~, Tier, Track and Turret
     - remove delete control (not needed)
     - remove new/update
     - refactor edit
2. use DataGridBundle for each index template https://github.com/Abhoryo/APYDataGridBundle
3. use DataFixtures to allow to load all data regarding the tanks and modules
    - ~~tank~~: ~~usa~~, ~~ussr~~, ~~uk~~, ~~fr~~, ~~de~~, ~~cn~~
    - modules: engine, gun, radio, track, turret
4. continue with equipment
5. investigate need for hull entity (on tanks) with properties armor (front, side, rear)
6. add battle range for tanks
7. display some chart for the different indexes using d3 http://d3js.org/
8. refactor edit/new forms
     - use chosen javascript library for multiselect http://harvesthq.github.com/chosen/
     - use slider
9. add custom icons for tanks/tier/class/modules/equipment
     - use LiipImagineBundle for icon display (might be an overkill though) https://github.com/liip/LiipImagineBundle
     - investigate the possibility to use Gaufrette instead https://github.com/KnpLabs/KnpGaufretteBundle
10. add crew specialization
11. add consummables
12. customize bootstrap theme
13. add way to compare 3-4 tanks as tables side by side
14. investigate scrapping data directly from wot for player and save that to local db.
