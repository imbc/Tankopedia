<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Radio;

class LoadRadioData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 15;
    }

    public function load( ObjectManager $manager )
    {
        //ref for tier
//        $tier1 = $this->getReference( 'tier-1' );
//        $tier2 = $this->getReference( 'tier-2' );
//        $tier3 = $this->getReference( 'tier-3' );
//        $tier4 = $this->getReference( 'tier-4' );
//        $tier5 = $this->getReference( 'tier-5' );
//        $tier6 = $this->getReference( 'tier-6' );
//        $tier7 = $this->getReference( 'tier-7' );
//        $tier8 = $this->getReference( 'tier-8' );
//        $tier9 = $this->getReference( 'tier-9' );
//        $tier10 = $this->getReference( 'tier-10' );
//        // ref for nationality
//        $china = $this->getReference( 'cn' );
//        $germany = $this->getReference( 'de' );
//        $uk = $this->getReference( 'uk' );
//        $usa = $this->getReference( 'usa' );
//        $ussr = $this->getReference( 'ussr' );
//        $france = $this->getReference( 'fr' );

    }
//
//    "I","USA","Signal Flags","90 m",0,"1 kg","T1 Cunningham"
//"II","USA","SCR 193","325 m",0,"80 kg","T1E6"
//"II","USA","SCR 200","265 m",180,"40 kg","T1 Cunningham, T18, T57, M2 Light Tank, T2 Medium Tank, T82, M2 Medium Tank, M3 Stuart, T40, M3 Lee"
//"IV","USA","SCR 210","325 m",1980,"80 kg","T18, T57, M2 Light Tank, T2 Medium Tank, T82, M2 Medium Tank, M3 Stuart, M37, T40, M3 Lee"
//"IV","USA","SCR 210","325 m",0,"80 kg","T2 Light Tank, MTLS-1G14"
//"IV","USA","SCR 510","325 m",1980,"80 kg","M8A1, T49, M41, M18 Hellcat, M12, M40/M43, T92"
//"IV","USA","SCR 510 M2","395 m",0,"80 kg","M22 Locust"
//"VI","USA","AN/GRC-3","410 m",21600,"120 kg","T71, T54E1, M103"
//"VI","USA","SCR 508","395 m",21600,"100 kg","M5 Stuart, M7 Priest, M4 Sherman, M7, M10 Wolverine, T1 Heavy Tank, M24 Chaffee, M36 Jackson, M6, M4A3E8 Sherman, M4A3E2 Sherman Jumbo, T21, T25 AT, T20, T25/2, T29, M26 Pershing, T28, T32, T28 Prototype, M46 Patton, T95, T30"
//"VI","USA","SCR 610","420 m",24600,"100 kg","T69, M8A1, T49, M41, M18 Hellcat, M12, M40/M43, T92"
//"VII","USA","SCR 538","480 m",22800,"100 kg","M7, T1 Heavy Tank, M6, T21"
//"VIII","USA","SCR 508/1","570 m",0,"100 kg","M4A2E4, T14, M6A2E1"
//"IX","USA","British Wireless set N19","570 m",0,"110 kg","Ram-II"
//"IX","USA","SCR 506","615 m",33600,"110 kg","T57, M2 Light Tank, T2 Medium Tank, T82, M2 Medium Tank, M3 Stuart, M37, T40, M3 Lee, M5 Stuart, M7 Priest, M4 Sherman, M10 Wolverine, M24 Chaffee, M36 Jackson, M4A3E8 Sherman, M4A3E2 Sherman Jumbo, T25 AT, T20, T25/2"
//"X","USA","AN/GRC-7","745 m",54000,"120 kg","T71, T54E1, M103"
//"X","USA","AN/VRC-7","745 m",54000,"100 kg","M48A1"
//"X","USA","AN/VRC-3","745 m",51600,"160 kg","T57 Heavy Tank, T110E5, T110E4, T110E3"
//"X","USA","SCR 528","745 m",54000,"80 kg","M7 Priest, M7, M24 Chaffee, T29, M26 Pershing, T28, T32, T28 Prototype, M46 Patton, T95, T30"
//"X","USA","SCR 528A1","745 m",0,"91 kg","T26E4 Super Pershing, T34"
//"X","USA","SCR 528F","750 m",54000,"80 kg","T21"
//"X","USA","SCR 619","750 m",54000,"80 kg","T69, M8A1, T49, M41, M18 Hellcat, M12, M40/M43, T92"
//,,,,,,
//"Tier","Nation","Name","Signal Range","Price","Weight","Compatibility"
//"I","UK","Signal flags","90 m",0,"1 kg","Vickers Medium Mk. I"
//"II","UK","WS No. 14","250 m",180,"40 kg","Vickers Medium Mk. I, Cruiser Mk. I, Vickers Medium Mk. II, Vickers Medium Mk. III"
//"III","UK","WS No. 11","350 m",600,"40 kg","Cruiser Mk. I, Vickers Medium Mk. II, Cruiser Mk. III, Cruiser Mk. II, Vickers Medium Mk. III, Cruiser Mk. IV, Valentine, Matilda"
//"V","UK","WS No. 9","375 m",3600,"40 kg","Cruiser Mk. I, Vickers Medium Mk. II, Cruiser Mk. III, Cruiser Mk. II, Vickers Medium Mk. III, Cruiser Mk. IV, Covenanter, Valentine, Matilda, Crusader"
//"VI","UK","WS No. 19 Mk. I","400 m",15000,"40 kg","Cruiser Mk. III, Cruiser Mk. II, Cruiser Mk. IV, Covenanter, Valentine, Matilda, Churchill I, Crusader, Cromwell, Churchill VII"
//"VII","UK","WS No. 19 Mk. II","450 m",21000,"40 kg","Cruiser Mk. III, Cruiser Mk. II, Cruiser Mk. IV, Covenanter, Valentine, Matilda, Churchill I, Crusader, Cromwell, Churchill VII, Comet, Black Prince"
//"VIII","UK","WS No. 19 Mk. III","550 m",22000,"40 kg","Covenanter, Churchill I, Crusader, Cromwell, Churchill VII, Comet, Black Prince, Centurion Mk. I, Caernarvon, Centurion Mk. 7/1, Conqueror"
//"VIII","UK","WS No. 22","700 m",25000,"40 kg","Comet, Black Prince, Centurion Mk. I, Caernarvon, Centurion Mk. 7/1, Conqueror"
//"IX","UK","WS No. 19 Special","570 m",,"40 kg","Matilda Black Prince, TOG II*, AT-15A"
//"X","UK","SR C42","750 m",54000,"40 kg","Centurion Mk. I, Caernarvon, Centurion Mk. 7/1, Conqueror"
//"X","UK","SR C45","750 m",45600,"40 kg","FV4202, FV215b"
//,,,,,,
//"Tier","Nation","Name","Signal Range","Price","Weight","Compatibility"
//"I","DE","Signal Flags","90 m",0,"1 kg","Leichttraktor"
//"II","DE","FuG 2","265 m",180,"40 kg","Leichttraktor, PzKpfw II, Panzerjäger I, Sturmpanzer I Bison, Marder II"
//"II","DE","FuG 37","290 m",180,"40 kg","PzKpfw 35 (t), PzKpfw 38 (t), Hetzer, PzKpfw 38 nA, Grille"
//"III","DE","FuG 5","310 m",630,"50 kg","Panzerjäger I, Sturmpanzer I Bison, PzKpfw 35 (t), PzKpfw 38 (t), PzKpfw III Ausf. A, PzKpfw II Luchs, Marder II, Wespe, Sturmpanzer II, PzKpfw III, PzKpfw 38 nA, VK 1602 Leopard, PzKpfw III/IV, PzKpfw IV, StuG III, Hummel, VK 3001 (H), JagdPz IV, VK 3001 (P), VK 3601 (H), GW Panther, VK 3002 (DB), GW Tiger, GW Typ E"
//"IV","DE","FuG 6","345 m",,"70 kg","PzKpfw II Ausf. J"
//"VI","DE","FuG5 mit 20 WS.E.","620 m",,"50 kg","Dicker Max, PzKpfw IV Schmalturm"
//"VI","DE","FuG 7","415 m",8160,"70 kg","PzKpfw II, PzKpfw III Ausf. A, PzKpfw II Luchs, PzKpfw III, Grille, VK 1602 Leopard, PzKpfw III/IV, PzKpfw IV, StuG III, Hummel, VK 2801, VK 3001 (H), JagdPz IV, VK 3001 (P), VK 3601 (H), GW Panther, Jagdpanther, VK 3002 (DB), PzKpfw V Panther, PzKpfw VI Tiger, PzKpfw VI Tiger (P), GW Tiger, Panther II, VK 4502 (P) Ausf. A, PzKpfw VIB Tiger II, Jagdpanther II, Ferdinand, GW Typ E, E-50, Jagdtiger, E-75, VK 4502 (P) Ausf. B"
//"VI","DE","FuG 7 Ausf. F","710 m",,"70 kg","T-15, T-25, PzKpfw IV Hydraulic, PzKpfw V-IV Alpha, PzKpfw V-IV, Panther-M10, 8.8 cm PaK 43 Jagdtiger"
//"VII","DE","FuG 10","455 m",21600,"100 kg","Hetzer"
//"VII","DE","FuG Spr. 1","455 m",21600,"150 kg","PzKpfw II, PzKpfw III Ausf. A, PzKpfw II Luchs, Wespe, Sturmpanzer II"
//"VIII","DE","FuG 8","525 m",24240,"50 kg","PzKpfw 35 (t), PzKpfw 38 (t), PzKpfw 38 nA"
//"VIII","DE","FuG 8","525 m",,"50 kg","PzKpfw 38H735 (f), PzKpfw S35 739 (f), PzKpfw B2 740 (f)"
//"VIII","DE","FuG Spr. A","700 m",27000,"150 kg","VK 1602 Leopard, VK 2801"
//"IX","DE","FuG 11","615 m",33600,"70 kg","Hetzer"
//"IX","DE","FuG 12","710 m",43200,"150 kg","PzKpfw III, Grille, PzKpfw III/IV, PzKpfw IV, Hummel, VK 2801, VK 3001 (H), VK 3001 (P), VK 3601 (H), GW Panther, Jagdpanther, VK 3002 (DB), PzKpfw V Panther, PzKpfw VI Tiger, PzKpfw VI Tiger (P), GW Tiger, Panther II, VK 4502 (P) Ausf. A, PzKpfw VIB Tiger II, Jagdpanther II, Ferdinand, GW Typ E, E-50, Jagdtiger, E-75, VK 4502 (P) Ausf. B"
//"IX","DE","FuG 12A","710 m",,"150 kg","Löwe"
//"X","DE","10WSc","720 m",51600,"160 kg","E-50 Ausf. M, E-100, Maus, JagdPz E-100"
//,,,,,,
//"Tier","Nation","Name","Signal Range","Price","Weight","Compatibility"
//"I","FR","Signal Flags","90 m",0,"1 kg","RenaultFT, RenaultFT AC"
//"III","FR","ER 51","290 m",500,"100 kg","B1, BDR G1B, AMX 12t, ARL V39"
//"III","FR","ER 52","300 m",600,"100 kg","RenaultFT, RenaultFT AC, RenaultBS, D1, Hotchkiss H35, AMX 38, D2, Renault UE 57, Lorraine39 L AM, Somua SAu-40, AMX 40, AMX 105AM, ELC AMX, S-35 CA, AMX 13 F3 AM, Lorraine155 50, Lorraine155 51"
//"III","FR","FuG Spr. D","310 m",,"50 kg","FCM36 PaK40"
//"V","FR","ER 53","360 m",3650,"100 kg","RenaultBS, D1, Hotchkiss H35, AMX 38, D2, Renault UE 57, Lorraine39 L AM, Somua SAu-40, AMX 40, AMX 105AM, B1, ELC AMX, BDR G1B, S-35 CA, AMX 13 F3 AM, ARL V39, Lorraine155 50, Lorraine155 51"
//"VI","FR","FuG Spr.F","525 m",,"50 kg","105 leFH18B2"
//"VI","FR","SCR 508","400 m",21600,"100 kg","ARL 44, AMX 13 75, AMX AC Mle. 1946, AMX M4(1945), AMX 13 90, AMX 50 100, AMX AC Mle. 1948, Bat Chatillon 155, Lorraine 40 t, AMX 50 120, AMX 50 Foch"
//"VII","FR","ER 56","455 m",21600,"150 kg","Renault UE 57, Lorraine39 L AM, Somua SAu-40, S-35 CA"
//"IX","FR","ER 55","710 m",44100,"150 kg","AMX 105AM, B1, BDR G1B, AMX 13 F3 AM, ARL V39, Lorraine155 50, Lorraine155 51"
//"X","FR","SCR 528F","750 m",54000,"80 kg","AMX 12t, ARL 44, AMX 13 75, AMX AC Mle. 1946, AMX M4(1945), AMX 13 90, AMX 50 100, AMX AC Mle. 1948, Bat Chatillon 155, Lorraine 40 t, AMX 50 120, AMX 50 Foch, Bat Chatillon 25 t"
//"X","FR","SCR 528F","750 m",,"80 kg","FCM 50 t"
//"X","FR","SCR 619","750 m",54000,"80 kg","AMX 50B, AMX-50 Foch (155)"
//,,,,,,
//"Tier","Nation","Name","Signal Range","Price","Weight","Compatibility"
//"I","USSR","Signal Flags","90 m",0,"1 kg","MS-1"
//"II","USSR","71-TK-1","265 m",180,"50 kg","MS-1, AT-1, SU-18, BT-2, T-26"
//"III","USSR","71-TK-3","300 m",570,"100 kg","AT-1, SU-18, BT-2, T-26, BT-7, T-46, SU-26, T-28, SU-5, T-50, T-50-2"
//"III","USSR","71-TK-3","300 m",,"100 kg","T-127, BT-SV"
//"IV","USSR","SCR 209","325 m",,"80 kg","M3 Stuart Lend Lease"
//"IV","USSR","71-TK-3U","440 m",,"100 kg","A-32"
//"IV","USSR","9R","325 m",1980,"80 kg","SU-76, SU-85B, A-20, T-34, SU-85, SU-100, T-34-85, T-43, SU-100M1"
//"V","USSR","10R","360 m",3660,"100 kg","T-46, T-28, KV-1, SU-8, T-150, KV-1S, KV-2, S-51, SU-14, SU-152, KV-3, Object 212, ISU-152, Object 261"
//"V","USSR","10R","360 m",,"100 kg","KV-220 Beta-Test, KV-220"
//"V","USSR","9RK","350 m",3240,"80 kg","SU-18, SU-26, SU-5"
//"VII","USSR","Type 9","545 m",,"100 kg","Tetrarch"
//"VII","USSR","10RK","440 m",18600,"100 kg","KV-1, T-150, KV-1S, KV-2, SU-152, KV-13, KV-3, IS, KV-4, ISU-152, IS-3, IS-8, ST-I, Object 704"
//"VII","USSR","10RKM","440 m",,"100 kg","KV-5, IS-6"
//"VIII","USSR","9RM","525 m",24240,"100 kg","SU-76, SU-85B, T-34, SU-85, SU-100, T-34-85, T-43, SU-100M1, T-44, SU-101, T-54, SU-122-54"
//"VIII","USSR","9RM","525 m",,"100 kg","SU-85I"
//"IX","USSR","KRSTB","630 m",37500,"100 kg","T-50, T-50-2"
//"IX","USSR","Mk19R","570 m",,"110 kg","Valentine II, Churchill III, Matilda IV"
//"IX","USSR","12LL","615 m",33600,"110 kg","BT-7, SU-26, A-20, SU-5"
//"IX","USSR","12RT","625 m",33600,"110 kg","SU-8, S-51, SU-14, SU-152, KV-13, KV-3, IS, Object 212, KV-4, ISU-152, IS-3, Object 261, IS-8, ST-I, Object 704"
//"IX","USSR","9RS","700 m",,"100 kg","SU-122-44"
//"X","USSR","R113","730 m",52200,"80 kg","T-50-2, KV-3, T-44, KV-4, SU-101, IS-3, T-54, SU-122-54, IS-8, ST-I, Object 704"
//"X","USSR","R113M","730 m",52200,"80 kg","Object 268"
//"X","USSR","R-123","850 m",51600,"80 kg","T-62A"
//"X","USSR","10RK-26","720 m",51600,"160 kg","Object 263, IS-4, IS-7"
//"X","USSR","10RT-26E","760 m",56500,"120 kg","Object 261, SU-122-54"
//,,,,,,
//"Tier","Nation","Name","Signal Range","Price","Weight","Compatibility"
//"I","CN","Signal Flags","90 m",0,"1 kg","Renault NC-31, Vickers Mk. E Type B"
//"II","CN","Marconi SB-4a","250 m",180,"50 kg","Vickers Mk. E Type B"
//"II","CN","Type 94 Hei","250 m",180,"90 kg","Type 2597 Chi-Ha"
//"III","CN","ER-52","300 m",600,"100 kg","Renault NC-31"
//"III","CN","71-TK-3","300 m",570,"50 kg","Vickers Mk. E Type B"
//"IV","CN","9R","325 m",1980,"80 kg","Type T-34, Type 58, IS-2"
//"VI","CN","Type 96 Bo","400 m",14000,"50 kg","Type 2597 Chi-Ha"
//"VI","CN","SCR 508","395 m",21600,"91 kg","M5A1 Stuart"
//"VIII","CN","9RM","525 m",24240,"100 kg","Type T-34, 59-16, Type 58, IS-2"
//"VIII","CN","SCR 506","615 m",33600,"97 kg","M5A1 Stuart"
//"VIII","CN","Type 3 Otsu","700 m",22000,"240 kg","Type 2597 Chi-Ha"
//"VIII","CN","A-220","600 m",,"100 kg","Type 62"
//"VIII","CN","9RM","600 m",,"100 kg","Type 59, Type 59 G, WZ-111"
//"IX","CN","A-220","600 m",38000,"40 kg","59-16, T-34-1, T-34-2, WZ-120, 110, WZ-111 model 1-4, WZ-131, WZ-132"
//"X","CN","A-220A","750 m",54000,"40 kg","59-16, T-34-1, T-34-2, WZ-120, IS-2, 110, WZ-111 model 1-4, WZ-131, WZ-132"
//"X","CN","A-220B","750 m",54000,"40 kg","121, 113"
}