Tank'O'pedia
========================

This is just a side project to better understand the use of Symfony2. The interface is using the default twitter bootstrap for now.

The data is from http://wiki.worldoftanks.eu (online video game around tank warfare)

TODO:

1. refactor the controller for TankClass, Tier, Track and Turret
     - remove delete control (not needed)
     - remove new/update
     - refactor edit
2. use DataGridBundle for each index template
3. use DataFixtures to allow to load all data regarding the tanks and modules
4. continue with equipment
5. investigate need for hull entity (on tanks) with properties armor (front, side, rear)
6. add battle range for tanks
7. display some chart for the different indexes using d3
8. investigate scrapping data directly from wot for player and save that to local db.
9. refactor edit/new forms
     - use chosen javascript library for multiselect
     - use slider
10. add custom icons for tanks/tier/class/modules/equipment
11. add crew specialization
12. add consummables
13. customize bootstrap theme
