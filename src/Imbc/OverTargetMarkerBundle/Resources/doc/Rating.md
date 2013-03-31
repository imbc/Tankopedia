[About Efficiency] (http://www.vbaddict.net/wot.php?do=efficiency)
----------------
Efficiency is a way to compare players battle performance in a numeric way. Current "standard" efficiency is the WN7 Efficiency.
This site is using own Efficiency formula aka PA Efficiency, but is able to display also Efficiency by wot-news and WN7 Efficiency.

-----------------------------------------------------------
1 . PA Efficiency by vbaddict.net
-----------------------------------------------------------

PA Efficiency by vbaddict.net

The Efficiency used by vBAddict.net is modified formula compared to Efficiency by wot-news. It adds damage assisted and reduce capture points by the factor 10.
```
Formula:
    FRAGS*(350.0 - TIER*20.0)
    +DAMAGE*(0.2 + 1.5 / TIER)
    +(DAMAGE_ASSISTED/2)*(0.2 + 1.5 / TIER) (where available, e.g. battle report)
    +200.0*SPOT
    +15.0*CAP
    +15.0*DEF
```
Pro:
- Fixes the capture points problematic
- Makes comparing with SPG/Arty more reliable

Contra:
- Cannot be used to compare to other sites

-----------------------------------------------------------
2 . Efficiency by wot-news
-----------------------------------------------------------

The XVM Efficiency was invented by wot-news.com to compare players Efficiency on the battlefield. It is based on data visible on players profile.
```
Formula:
    DAMAGE * (10 / (TIER + 2)) * (0.21 + 3*TIER / 100)
    FRAGS * 250 +
    SPOT * 150 +
    log(CAP + 1,1.732) +
    DEF * 150
```
Pro:
- Can be used to compare Efficiency on many sites and also ingame via XVM Mod.

Contra:
- Formula is heavily focused on capture and drop capture points
- Using just public available data, missing f.e. assisted damage

[Source] (http://wot-news.com/index.php/stat/calc/en)

-----------------------------------------------------------
3 . WN7 Efficiency
-----------------------------------------------------------

WN7 Efficiency is a way to establish a new Efficiency calculation to replace the Efficiency by wot-news.
WN1 - WN6 are outdated.
```
Formula:
    (1240-1040/(MIN(TIER,6))^0.164)*FRAGS
    +DAMAGE*530/(184*e^(0.24*TIER)+130)
    +SPOT*125*MIN(TIER, 3)/3
    +MIN(DEF,2.2)*100
    +((185/(0.17+e^((WINRATE-35)*-0.134)))-500)*0.45
    -[(5 - MIN(TIER,5))*125] / [1 + e^( ( TIER - (GAMESPLAYED/220)^(3/TIER) )*1.5 )]
```
Pro:
- Optimized output
- Can be used to compare Efficiency on many sites and also ingame via XVM Mod.

Contra:
- Correlates to the Winrate

[Source] (http://forum.worldoftanks.com/index.php?/topic/184017-actual-statistically-sound-efficiency-formula/)