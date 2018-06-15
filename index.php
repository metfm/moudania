
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href=images/anem.gif>
<meta charset=UTF-8>
<meta name=keywords content="Mετεωρολογικός σταθμός Νέων Μουδανιών Χαλκιδικής,webcam,halkidiki, weather data, halkidiki weather station,nea moudania weather station, steelseries"/>
<title>Mετεωρολογικός Σταθμός Νέων Μουδανιών Χαλκιδικής</title>
<link rel=stylesheet type=text/css href="/index.css"/>
<script type="text/javascript">if (screen.width <= 800) {
    window.location = "http://metfm.esy.es/mobile.php";
  }</script>
</head>
<?php
echo "<body onload=init()>\n"; 
echo "<div class=organa>\n"; 
echo "<header>MΕΤΕΩΡΟΛΟΓΙΚΟΣ ΣΤΑΘΜΟΣ ΝΕΩΝ ΜΟΥΔΑΝΙΩΝ ΧΑΛΚΙΔΙΚΗΣ</header>\n"; 
echo "<noscript>\n"; 
echo "<h2 style=color:red;text-align:center>&gt;&gt;This pages requires JavaScript enabling in your browser.&lt;&lt;<br>&gt;&gt;Please enable scripting it to enjoy this site at its best.&lt;&lt;</h2>\n"; 
echo "</noscript>\n"; 
echo "<div class=row>\n"; 
echo "<canvas id=canvas_led width=25 height=25></canvas>&nbsp;&nbsp;&nbsp;\n"; 
echo "<canvas id=canvas_status width=210 height=25></canvas>&nbsp;&nbsp;\n"; 
echo "<canvas id=canvas_timer width=90 height=25></canvas>\n"; 
echo "</div>\n"; 
echo "<div class=row>\n"; 
echo "<div class=gauge><img src=images/flag.jpg id=flag alt=flag width=90 height=62><img src=images/metar.png id=metar alt=metar width=140 height=70><a class=fb href=https://www.facebook.com/neamoudaniameteorologikosstathmos/><img src=images/fb.png id=fb alt=fb width=100 height=100></a><a class=snowguide href=https://snowguide.gr/><img src=images/snowguide.png alt=sn width=150 height=48></a><a class=btn id=forum href=https://forum.snowguide.gr/index.php> FORUM</a><img src=images/host.png id=host alt=host width=100 height=29><img src=images/w3c.gif id=w3c alt=w3 width=88 height=31>\n"; 
echo "<div id=tip_0>\n"; 
echo "<canvas id=canvas_temp class=gaugeSizeStd></canvas>\n"; 
echo "</div>\n"; 
echo "<input id=rad_unitsTemp1 type=radio name=rad_unitsTemp value=C checked onclick=gauges.setUnits(this)><label id=lab_unitsTemp1 for=rad_unitsTemp1>&deg;C</label><input id=rad_unitsTemp2 type=radio name=rad_unitsTemp value=F onclick=gauges.setUnits(this)><label id=lab_unitsTemp2 for=rad_unitsTemp2>&deg;F</label>\n"; 
echo "</div>\n"; 
echo "<div class=gauge>\n"; 
echo "<div id=tip_1>\n"; 
echo "<canvas id=canvas_dew class=gaugeSizeStd></canvas>\n"; 
echo "</div>\n"; 
echo "<input id=rad_dew1 type=radio name=rad_dew value=dew onclick=gauges.doDew(this)><label id=lab_dew1 for=rad_dew1>Dew Point</label>\n"; 
echo "<input id=rad_dew2 type=radio name=rad_dew value=app checked onclick=gauges.doDew(this)><label id=lab_dew2 for=rad_dew2>Apparent</label>\n"; 
echo "<br>\n"; 
echo "<input id=rad_dew3 type=radio name=rad_dew value=wnd onclick=gauges.doDew(this)><label id=lab_dew3 for=rad_dew3>Wind Chill</label>\n"; 
echo "<input id=rad_dew4 type=radio name=rad_dew value=hea onclick=gauges.doDew(this)><label id=lab_dew4 for=rad_dew4>Heat Index</label>\n"; 
echo "<br>\n"; 
echo "<input id=rad_dew5 type=radio name=rad_dew value=hum onclick=gauges.doDew(this)><label id=lab_dew5 for=rad_dew5>Humidex</label>\n"; 
echo "</div>\n"; 
echo "<div class=gauge>\n"; 
echo "<div id=tip_4>\n"; 
echo "<canvas id=canvas_hum class=gaugeSizeStd></canvas>\n"; 
echo "</div>\n"; 
echo "</div>\n"; 
echo "</div>\n"; 
echo "<div class=row>\n"; 
echo "<div id=tip_6 class=gauge>\n"; 
echo "<canvas id=canvas_wind class=gaugeSizeStd></canvas><br>\n"; 
echo "<input id=rad_unitsWind4 type=radio name=rad_unitsWind value=km/h checked onclick=gauges.setUnits(this)><label id=lab_unitsWind4 for=rad_unitsWind4>km/h</label><input id=rad_unitsWind3 type=radio name=rad_unitsWind value=m/s onclick=gauges.setUnits(this)><label id=lab_unitsWind3 for=rad_unitsWind3>m/s</label><input id=rad_unitsWind1 type=radio name=rad_unitsWind value=mph onclick=gauges.setUnits(this)><label id=lab_unitsWind1 for=rad_unitsWind1>mph</label><input id=rad_unitsWind2 type=radio name=rad_unitsWind value=kts onclick=gauges.setUnits(this)><label id=lab_unitsWind2 for=rad_unitsWind2>knots</label>\n"; 
echo "</div>\n"; 
echo "<div id=tip_7 class=gauge>\n"; 
echo "<canvas id=canvas_dir class=gaugeSizeStd></canvas>\n"; 
echo "</div>\n"; 
echo "<div id=tip_10 class=gauge>\n"; 
echo "<canvas id=canvas_rose class=gaugeSizeStd></canvas>\n"; 
echo "</div>\n"; 
echo "</div>\n"; 
echo "<div class=row>\n"; 
echo "<div id=tip_5 class=gauge>\n"; 
echo "<canvas id=canvas_baro class=gaugeSizeStd></canvas><br>\n"; 
echo "<input id=rad_unitsPress1 type=radio name=rad_unitsPress value=hPa checked onclick=gauges.setUnits(this)><label id=lab_unitsPress1 for=rad_unitsPress1>hPa</label><input id=rad_unitsPress2 type=radio name=rad_unitsPress value=inHg onclick=gauges.setUnits(this)><label id=lab_unitsPress2 for=rad_unitsPress2>inHg</label> <input id=rad_unitsPress3 type=radio name=rad_unitsPress value=mb onclick=gauges.setUnits(this)><label id=lab_unitsPress3 for=rad_unitsPress3>mb</label><input id=rad_unitsPress4 type=radio name=rad_unitsPress value=kPa onclick=gauges.setUnits(this)><label id=lab_unitsPress4 for=rad_unitsPress4>kPa</label>\n"; 
echo "</div>\n"; 
echo "<div id=tip_2 class=gauge>\n"; 
echo "<canvas id=canvas_rain class=gaugeSizeStd></canvas><br>\n"; 
echo "<input id=rad_unitsRain1 type=radio name=rad_unitsRain value=mm checked onclick=gauges.setUnits(this)><label id=lab_unitsRain1 for=rad_unitsRain1>mm</label><input id=rad_unitsRain2 type=radio name=rad_unitsRain value=in onclick=gauges.setUnits(this)><label id=lab_unitsRain2 for=rad_unitsRain2>Inch</label>\n"; 
echo "</div>\n"; 
echo "<div id=tip_3 class=gauge>\n"; 
echo "<canvas id=canvas_rrate class=gaugeSizeStd></canvas>\n"; 
echo "</div>\n"; 
echo "</div>\n"; 
echo "<div class=row>\n"; 
echo "<div id=tip_11 class=gauge>\n"; 
echo "<canvas id=canvas_cloud class=gaugeSizeStd></canvas><br>\n"; 
echo "<input id=rad_unitsCloudBase1 type=radio name=rad_unitsCloud value=m checked onclick=gauges.setUnits(this)><label id=lab_unitsCloudBase1 for=rad_unitsCloudBase1>m</label><input id=rad_unitsCloudBase2 type=radio name=rad_unitsCloud value=ft onclick=gauges.setUnits(this)><label id=lab_unitsCloudBase2 for=rad_unitsCloudBase2>ft</label>\n"; 
echo "</div>&nbsp;&nbsp;\n"; 
echo "<canvas id=canvasClock1 width=250 height=250></canvas>\n"; 
echo "</div><div id=end>Scripts: Mark Crossley version 2.6.1 Gauges: Gerrit Grunwald Kατασκευή Σελίδας ΜetFM 2017</div>\n"; 
echo "</div>\n"; 
echo "<div id=content>\n"; 
echo "<div class=moon><img src=images/moon.bmp id=moon alt=moon width=64 height=64></div>\n"; 
echo "<div class=info><img src=images/info.png id=info alt=info width=100 height=100>\n"; 
echo "<h2>Kαλώς ήλθατε στην ιστοσελίδα του μετεωρολογικού σταθμού Νέων Μουδανιών Χαλκιδικής.Ο τύπος του σταθμού που χρησιμοποιήται είναι WH 1080 και τα δεδομένα ανανεώνονται αυτόματα ανα 30 δευτερόλεπτα.Η εικόνα της κάμερας ανανεώνεται αυτόματα ανα 2 λεπτά.Ο αισθητήρας θερμοκρασίας και υγρασίας είναι τοποθετημένος σε ξύλινο κλωβό stevenson με διπλές γρίλιες προδιαγραφών Ε.Μ.Υ.</h2><h2>Συντεταγμένες σταθμού</h2><h2>Βόρειο μήκος 40° 24' 25\" Ανατολικό πλάτος 23° 27' 55\" Υψόμετρο 4 μ.</h2><h2>Oδηγίες χρήσεως ιστοσελίδας.Ακουμπώντας τον δείκτη του ποντικού στα εικονίδια δεξιά και αριστερά εμφανίζεται το ανάλογο περιεχόμενο.κάνοντας το ίδιο πάνω στά όργανα μέτρησης εμφανίζονται τα ανάλογα γραφικά.</h2></div>\n"; 
echo "<div class=forecast><img src=images/forecast.png id=forecast alt=for width=120 height=120><h2>ΠΡΟΓΝΩΣΗ ΚΑΙΡΟΥ ΧΑΛΚΙΔΙΚΗΣ</h2><h2>\n"; 
echo"Ο ΚΑΙΡΟΣ ΤΟ ΤΡΙΗΜΕΡΟ ΤΟΥ ΑΓΙΟΥ ΠΝΕΥΜΑΤΟΣ

πάμε να δούμε τον καιρό που θα επικρατήσει το τριήμερο καθώς ενδιαφέρει πολύ κόσμο που θα ήθελε να επισκευθεί τα εξοχικά του, ή για μιά εκδρομή.
σχετικώς καλός θα είναι ο καιρός το τρίημερο του αγίου πνεύματος.
ηλιοφάνεια θα εναλλάσεται με συννεφιές κυρίως στο ανατολικό και νότιο τμήμα του νομού, ενώ είναι πιθανόν μπόρες με μικρή διάρκεια και ένταση να ξεκινούν από τα βορειοανατολικά του νομού με κατεύθυνση προς τα νοτιοδυτικά, και αυτό θα γίνεται κυρίως το μεσημέρι και το απόγευμα.
η θερμοκρασία δεν θα σημειώσει αξιόλοξη μεταβολή και θα φτάνει κατά μέσο όρο τους 23 βαθμούς στα πεδινά και παραθαλάσσια τμήματα και τους 20 στα ορεινά του νομού.
από πλευράς ανέμων αυτοί θα είναι βορειοανατολικοί και θα φυσούν στα ανατολικά του Αγίου όρους και στα νορτιότερα τμήματα της σιθωνίας και της κασσάνδρας στα 5 μποφώρ.
η θερμοκρασία της θάλασσας , που επίσης ενδιαφέρει πολλούς που θα ήθελαν να κάνουν την πρώτη τους βουτιά, είναι κατά μέσο όρο στους 23 βαθμούς κελσίου αυτήν την εποχή, όμως όσο πιο νότια πάμε στην σιθωνία και την κασσάνδρα λόγω της πιό άμεσης γειτνίασης με το αιγαίο πέλαγος να υπολογίζουμε ότι η θάλασσα είναι γύρω στους 2 βαθμούς πιο κρύα από τα βορειότερα παράλια τμήματα.
ηλιοφάνεια στον πολύγυρο το τριήμερο με εναλαγές συννεφιάς και πιθανότητας βροχής το μεσημέρι με τα θερμόμετρα εδώ γύρω στους 20 βαθμούς το μεσημέρι..\n"; 
echo "</h2>\n"; 
echo "</div>\n"; 
echo "<div class=sea><img src=images/sea.png id=sea alt=sea width=100 height=100><h2>ΘΕΡΜΟΚΡΑΣΙΑ ΘΑΛΑΣΣΑΣ ΠΑΡΑΛΙΑΣ ΝΕΩΝ ΜΟΥΔΑΝΙΩΝ 26,6 ΒΑΘΜΟΙ ΚΕΛΣΙΟΥ METΡΗΣΗ ΣΤΙΣ 04/06/2018</h2></div>\n"; 
echo "<div class=menu><img src=images/menu.png id=menu alt=menu width=100 height=100>\n"; 
echo "<a class=btn id=stat href=today.htm>Στατιστικά σταθμού</a><div class=br></div>\n"; 
echo "<a class=btn href=https://www.youtube.com/watch?v=1QKf6-mjAo8 target=_blank>Ορμύλια LIVE!</a><div class=br></div>\n"; 
echo "<a class=btn href=http://www.livecameras.gr/up/sithonia.php target=_blank>Aγ. Νικόλαος LIVE!</a><div class=br></div>\n"; 
echo "<a class=btn href=https://www.skylinewebcams.com/el/webcam/ellada/makedonia/chalkidiki/nea-roda.html target=_blank>N.Pόδα LIVE!</a><div class=br></div>\n"; 
echo "<a class=btn href=https://www.meteocam.gr/ChalkidikiPortoCarras target=_blank>N. Μαρμαράς LIVE!</a><div class=br></div>\n"; 
echo "<a class=btn href=https://www.meteocam.gr/ChalkidikiKassandreia target=_blank>Κασσάνδρεια LIVE!</a><div class=br></div>\n"; 
echo "<a class=btn href=http://halkidikivoice.gr/ target=_blank>halkidikivoice.gr</a><div class=br></div>\n"; 
echo "<a class=btn href=https://timeforgoodnews.gr/ target=_blank>ΤIME FOR GOOD NEWS</a><div class=br></div>\n"; 
echo "<a class=btn href=https://www.stekiradio.gr/ target=_blank>STEKI RADIO</a><div class=br></div>\n"; 
echo "<a class=btn href=http://johnpoupalos.weebly.com/ target=_blank>A 44 RADIO</a><div class=br></div>\n"; 
echo "<a class=btn href=http://fanisradio.blogspot.gr/ target=_blank>HB RADIO</a></div>\n"; 
echo "<div class=webcam><img src=images/webcam.png id=webcam alt=image width=80 height=80><a class=btn id=\"cam1\">N. Ηράκλεια</a><div class=\"box\"><img src=\"http://www.northmeteo.gr/cam/neairakleia/\" id=r1 alt=image width=640 height=480>
</div><a class=btn id=\"cam2\">Αγ. Νικόλαος</a><div class=\"box\"><img src=http://www.sithoniaweather.gr/cam/sithonia.jpg width=640 height=480 id=r2 alt=agnik></div><a class=btn id=\"cam3\">Συκιά</a><div class=\"box\"><img src=\"http://www.camping-melissi.gr/images/melissicam/snap/webcam.jpg\" id=r3 alt=image width=640 height=480></div><a class=btn id=\"cam4\">Ν.Ρόδα</a><div class=\"box\"><img src=\"https://images.webcamgalore.com/22546-current-webcam-Nea-Roda.jpg\" id=r4 alt=image width=640 height=480></div><a class=btn id=\"cam5\">Μονή Μεγ. Λαύρας</a><div class=\"box\"><img src=\"http://penteli.meteo.gr/stations/megistilavra/cam/megisti.jpg\" width=640 height=480 id=r5 alt=lavra></div><a class=btn id=\"cam6\">Γαλάτιστα</a><div class=\"box\"><img src=\"http://www.northmeteo.gr/cam/galatista\" id=r6 alt=image width=640 height=480></div><a class=btn id=\"cam7\">Aρναία</a><div class=\"box\"><img src=\"http://www.northmeteo.gr/cam/arnaia\" id=r7 alt=image width=640 height=480></div><img src=/nea-moudania/webcam.jpg id=tcimage0 alt=Image width=640 height=480></div>\n";
echo "<div class=halkidiki><img src=images/halkidiki.png id=halkidiki alt=image width=80 height=62>\n"; 
echo "<h2>ΜΕΤΕΩΡΟΛΟΓΙΚΟΙ ΣΤΑΘΜΟΙ ΧΑΛΚΙΔΙΚΗΣ</h2>\n"; 
echo "<a class=btn href=http://www.northmeteo.gr/neairakleia/ target=_blank>ΝΕΑ ΗΡΑΚΛΕΙΑ</a>\n"; 
echo "<a class=btn href=http://penteli.meteo.gr/stations/kassandreia/ target=_blank>ΚΑΣΣΑΝΔΡΕΙΑ</a>\n"; 
echo "<a class=btn href=http://penteli.meteo.gr/stations/polygyros/ target=_blank>ΠΟΛΥΓΥΡΟΣ</a>\n"; 
echo "<a class=btn href=http://www.go2halkidiki.net/live-weather/ target=_blank>ΠΑΛΑΙΟΧΩΡΙ</a>\n"; 
echo "<a class=btn href=http://www.northmeteo.gr/arnaia/ target=_blank>ΑΡΝΑΙΑ</a>\n";
echo "<a class=btn href=http://ormos-panagias.sithoniaweather.gr/pws/ target=_blank>ΟΡΜΟΣ ΠΑΝΑΓΙΑΣ</a>\n";
echo "<div class=br></div>\n";
echo "<a class=btn href=http://penteli.meteo.gr/stations/marmaras/ target=_blank>ΝΕΟΣ ΜΑΡΜΑΡΑΣ</a>\n"; 
echo "<a class=btn href=http://www.northmeteo.gr/galatista/ target=_blank>ΓΑΛΑΤΙΣΤΑ</a>\n";
echo "<a class=btn href=http://penteli.meteo.gr/stations/stratoni/ target=_blank>ΣΤΡΑΤΩΝΙ</a>\n"; 
echo "<a class=btn href=http://www.sithoniaweather.gr target=_blank>ΑΓ.ΝΙΚΟΛΑΟΣ</a>\n"; 
echo "<a class=btn href=http://www.northmeteo.gr/agios-nikolaos/ target=_blank>ΑΓ.ΝΙΚΟΛΑΟΣ-2</a>\n";
echo "<a class=btn href=http://www.northmeteo.gr/parthenonas/ target=_blank>ΠΑΡΘΕΝΩΝΑΣ</a>\n";
echo "<div class=br></div>\n";
echo "<a class=btn href=http://penteli.meteo.gr/stations/simonopetra/ target=_blank>ΜΟΝΗ ΣΙΜΩΝΟΣ ΠΕΤΡΑΣ</a>\n"; 
echo "<a class=btn href=http://penteli.meteo.gr/stations/vatopedi/ target=_blank>ΜΟΝΗ ΒΑΤΟΠΑΙΔΙΟΥ</a>\n"; 
echo "<a class=btn href=http://penteli.meteo.gr/stations/megistilavra/ target=_blank>ΜΟΝΗ ΜΕΓΙΣΤΗΣ ΛΑΥΡΑΣ</a></div>\n"; 
echo "<div class=noaa>\n"; 
echo "<h2>AΡΧΕΙΟ ΜΕΤΕΩΡΟΛΟΓΙΚΟΥ ΣΤΑΘΜΟΥ</h2><img src=images/noaa.png id=noaa alt=image width=100 height=100>\n"; 
echo "<div class=br></div>\n"; 
echo "<a class=btn1 href=/noaa/NOAAYR2018.txt target=_blank>ΕΤΟΥΣ 2018</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0118.txt target=_blank>ΙΑΝ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0218.txt target=_blank>ΦΕΒ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0318.txt target=_blank>ΜΑΡ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0418.txt target=_blank>ΑΠΡ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0518.txt target=_blank>ΜΑΙ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0618.txt target=_blank>ΙΟΥΝ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0718.txt target=_blank>ΙΟΥΛ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0818.txt target=_blank>AYΓ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0918.txt target=_blank>ΣΕΠ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1018.txt target=_blank>ΟΚΤ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1118.txt target=_blank>ΝΟΕ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1218.txt target=_blank>ΔΕΚ</a>\n";
echo "<div class=br></div>\n"; 
echo "<a class=btn1 href=/noaa/NOAAYR2017.txt target=_blank>ΕΤΟΥΣ 2017</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0117.txt target=_blank>ΙΑΝ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0217.txt target=_blank>ΦΕΒ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0317.txt target=_blank>ΜΑΡ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0417.txt target=_blank>ΑΠΡ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0517.txt target=_blank>ΜΑΙ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0617.txt target=_blank>ΙΟΥΝ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0717.txt target=_blank>ΙΟΥΛ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0817.txt target=_blank>AYΓ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0917.txt target=_blank>ΣΕΠ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1017.txt target=_blank>ΟΚΤ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1117.txt target=_blank>ΝΟΕ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1217.txt target=_blank>ΔΕΚ</a>\n"; 
echo "<div class=br></div>\n"; 
echo "<a class=btn1 href=/noaa/NOAAYR2016.txt target=_blank>ΕΤΟΥΣ 2016</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0116.txt target=_blank>ΙΑΝ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0216.txt target=_blank>ΦΕΒ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0316.txt target=_blank>ΜΑΡ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0416.txt target=_blank>ΑΠΡ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0516.txt target=_blank>ΜΑΙ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0616.txt target=_blank>ΙΟΥΝ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0716.txt target=_blank>ΙΟΥΛ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0816.txt target=_blank>AYΓ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0916.txt target=_blank>ΣΕΠ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1016.txt target=_blank>ΟΚΤ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1116.txt target=_blank>ΝΟΕ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1216.txt target=_blank>ΔΕΚ</a>\n"; 
echo "<div class=br></div>\n"; 
echo "<a class=btn1 href=/noaa/NOAAYR2015.txt target=_blank>ΕΤΟΥΣ 2015</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0115.txt target=_blank>ΙΑΝ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0215.txt target=_blank>ΦΕΒ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0315.txt target=_blank>ΜΑΡ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0415.txt target=_blank>ΑΠΡ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0515.txt target=_blank>ΜΑΙ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0615.txt target=_blank>ΙΟΥΝ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0715.txt target=_blank>ΙΟΥΛ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0815.txt target=_blank>AYΓ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0915.txt target=_blank>ΣΕΠ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1015.txt target=_blank>ΟΚΤ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1115.txt target=_blank>ΝΟΕ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1215.txt target=_blank>ΔΕΚ</a>\n"; 
echo "<div class=br></div>\n"; 
echo "<a class=btn1 href=/noaa/NOAAYR2014.txt target=_blank>ΕΤΟΥΣ 2014</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0114.txt target=_blank>ΙΑΝ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0214.txt target=_blank>ΦΕΒ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0314.txt target=_blank>ΜΑΡ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0414.txt target=_blank>ΑΠΡ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0514.txt target=_blank>ΜΑΙ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0614.txt target=_blank>ΙΟΥΝ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0714.txt target=_blank>ΙΟΥΛ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0814.txt target=_blank>AYΓ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0914.txt target=_blank>ΣΕΠ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1014.txt target=_blank>ΟΚΤ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1114.txt target=_blank>ΝΟΕ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1214.txt target=_blank>ΔΕΚ</a>\n"; 
echo "<div class=br></div>\n"; 
echo "<a class=btn1 href=/noaa/NOAAYR2013.txt target=_blank>ΕΤΟΥΣ 2013</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0113.txt target=_blank>ΙΑΝ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0213.txt target=_blank>ΦΕΒ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0313.txt target=_blank>ΜΑΡ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0413.txt target=_blank>ΑΠΡ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0513.txt target=_blank>ΜΑΙ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0613.txt target=_blank>ΙΟΥΝ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0713.txt target=_blank>ΙΟΥΛ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0813.txt target=_blank>AYΓ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0913.txt target=_blank>ΣΕΠ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1013.txt target=_blank>ΟΚΤ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1113.txt target=_blank>ΝΟΕ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1213.txt target=_blank>ΔΕΚ</a>\n"; 
echo "<div class=br></div>\n"; 
echo "<a class=btn1 href=/noaa/NOAAYR2012.txt target=_blank>ΕΤΟΥΣ 2012</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0112.txt target=_blank>ΙΑΝ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0212.txt target=_blank>ΦΕΒ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0312.txt target=_blank>ΜΑΡ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0412.txt target=_blank>ΑΠΡ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0512.txt target=_blank>ΜΑΙ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0612.txt target=_blank>ΙΟΥΝ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0712.txt target=_blank>ΙΟΥΛ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0812.txt target=_blank>AYΓ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO0912.txt target=_blank>ΣΕΠ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1012.txt target=_blank>ΟΚΤ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1112.txt target=_blank>ΝΟΕ</a>\n"; 
echo "<a class=btn href=/noaa/NOAAMO1212.txt target=_blank>ΔΕΚ</a>\n"; 
echo "<div class=br></div>\n"; 
echo "</div>\n"; 
echo "<div class=timelapse><img src=images/timelapse.png id=timelapse alt=lapse width=120 height=120>\n"; 
echo "<h2>TIME-LAPSE VIDEOS</h2>\n"; 
echo "<h2>Τα time-lapse video είναι βίντεο που δημιουργούνται με την συρραφή πολλών εικόνων που η αλλεπάληλη διαδοχή τους δημιουργεί την ψευδαίσθηση της κίνησης.Στο κανάλι του μετεωρολογικού σταθμού στο youtube θα δημοσιεύονται όλα τα βίντεο της κάμερας</h2>\n"; 
echo "<a class=btn href=https://www.youtube.com/channel/UC22ttpQBmUHnkEFfQ9c8kVA target=_blank>ΚΑΝΑΛΙ YOUTUBE</a>\n"; 
echo "<div class=br></div>\n"; 
echo "</div></div>\n"; 
echo "<img src=images/html5css3.png id=html5 class=rotate alt=ht5 width=100 height=74>\n"; 
echo "<a class=email href=mailto:hobbyline187@gmail.com><img src=images/email.png class=rotate alt=rot width=100 height=100></a>\n"; 
echo "<script src=/scripts/jquery.js></script>\n"; 
echo "<script src=/scripts/steelseries_tween.min.js></script>\n"; 
echo "<script src=/scripts/language.min.js></script>\n"; 
echo "<script src=/scripts/gauges.js></script>\n"; 
echo "<script src=/scripts/RGraph.common.core.min.js></script>\n"; 
echo "<script src=/scripts/RGraph.rose.min.js></script>\n"; 
echo "<script src=/scripts/clock.min.js></script>\n"; 
echo "<script src=/scripts/clock1.js></script>\n";
?>
</body>
</html>
