Laddningstid och användbarhet
===============================

Till denna uppgift "Utvärdera webbplatsers laddningstid och användbarhet" valde vi att fortsätta med de tre webbplatser som i föregående kursmoment [Färgval och känslan de signalerar](content\analysis\400_colorscheme.md) för att kunna följa desamma:
en av våra arbetsplatsers hemsida, samt en annan webbplats som fungerar bra responsivt och en äldre webbplats som inte är responsiv.

* <a href="#enea">Enea</a>
* <a href="#katterian">Katterian</a>
* <a href="#yale">Yale</a>

Vi använde två webbläsare, Firefox Developer Edition och Chrome, till prestandamätningen för att se eventuella skillnader mellan dessa. Mätningen gjordes genom att från respektive webbplats välja tre olika sidor och köra länkarna i dels Googles verktyg [Google Pagespeed](https://developers.google.com/speed/pagespeed/) samt i respektive webbläsares “Inspect” verktyg, flik Network. Mätvärdena för sidornas laddningstid, antalet resurser som laddades samt sidornas totala storlek samlades i en excelfil med beräknade medelvärden. Angående hur webbplatserna kan förbättras fokuserade vi på delen desktop. Mätningen gjorde vi under kvällstid på en laptop ansluten trådlöst till en router på 100Gb/s fiber. Det skulle vara intressant att utvärdera om dessa resultat blir annorlund på olika klientenheter och uppkopplingar samt om belastning och routing på internet påverkar dessa mätvärden.

Data från mätningen är tillgänglig i [analysrapporten](docs/analysisSpeed-kmom05.pdf)  
*(beroende på inställningar i webbläsaren visas filen i webbläsaren eller möjlighet ges att spara ner filen).*

Flera rekommendationer från Google PageSpeed är lika för alla respektive testade webbplatser. Den övergripande rekommendationen rör komprimering av olika resurser, främst bilder samt minifiering av HTML samt CSS, men även att bättre utnyttja browser caching. Varken www.katterian.se eller art.yale.edu använder https.

<span id="enea"></span>[Enea](http://www.enea.com)
---

[FIGURE src="image/Screenshot-Enea.jpg?width=300" class="right"]

Flera bilder bör formateras och komprimeras, vilket kan spara många bytes data. Intressant att notera är att man även får poängavdrag för resurser tillhandahållna av Google. Dessa visas som möjliga optimeringar för alla nedanstående sidor på webbplatsen:

* Enable compression - blocking CSS resources  
* Leverage browser caching  
* Optimize images  
* Eliminate render-blocking JavaScript and CSS in above-the-fold content  
* Minify HTML  
* Minify CSS  

[https://www.enea.com/](https://www.enea.com/)  
Föreslagna bilder kan spara 43 kB (19% reduktion).  
Minifiering av HTML kan ge 20% reduktion.  
Minifiering av CSS kan ge 35% reduktion.  

[https://www.enea.com/products/training/](https://www.enea.com/products/training/)  
Föreslagna bilder kan spara 70,2 kB (72% reduktion).  
Minifiering av HTML kan ge 14% reduktion.  
Minifiering av CSS kan ge 35% reduktion.  

[https://www.enea.com/nfv-solutions/nfv-solutions-for-the-edge/](https://www.enea.com/nfv-solutions/nfv-solutions-for-the-edge/)  
Föreslagna bilder kan spara 397 kB (46% reduktion).  
Minifiering av HTML kan ge 17% reduktion.  
Minifiering av CSS kan ge 35% reduktion.  

<span id="katterian"></span>[Katterian](http://www.katterian.se)
---

[FIGURE src="image/Screenshot-Katterian.jpg?width=300" class="right"]

Flera bilder bör formateras och komprimeras, vilket kan spara många bytes data. Det är intressant att Google även utvärderar serverns responstider, vilken bör kunna förbättras. Dessa visas som möjliga optimeringar för alla nedanstående sidor på webbplatsen:

* Enable compression - Compressing resources with gzip or deflate can reduce the number of bytes sent over the network.
* Leverage browser caching  
* Optimize images  
* Eliminate render-blocking JavaScript and CSS in above-the-fold content  
* Minify CSS  
* Minify JavaScript  
* Reduce server response time - ...server responded in 0.31-0.36 seconds. There are many factors that can slow down your server response time.  

[http://www.katterian.se/](http://www.katterian.se/)  
Föreslagna bilder kan spara 21,9 kB (17% reduktion).  
Minifiering av Javascript kan ge 32% reduktion.  
Minifiering av CSS kan ge 30% reduktion.  

[http://www.katterian.se/kattbilder-galleri-1/](http://www.katterian.se/kattbilder-galleri-1/)  
Föreslagna bilder kan spara 28 kB (21% reduktion).  
Minifiering av Javascript kan ge 29% reduktion.  
Minifiering av CSS kan ge 30% reduktion.  
Enable compression for the following resources to reduce their transfer size by 3.8KiB (55% reduction).  

[http://www.katterian.se/lankar/](http://www.katterian.se/lankar/)  
Föreslagna bilder kan spara 12 kB (50% reduktion).  
Minifiering av Javascript kan ge 29% reduktion.  
Minifiering av CSS kan ge 30% reduktion.  

<span id="yale"></span>[Yale School of Arts](http://art.yale.edu)
---

[FIGURE src="image/Screenshot-YaleArt.jpg?width=300" class="right"]

Flera bilder bör formateras och komprimeras, vilket kan spara många bytes data. Det är intressant att Google även utvärderar serverns responstider, vilken bör kunna förbättras. Dessa visas som möjliga optimeringar för alla nedanstående sidor på webbplatsen:

* Enable compression - Compressing resources with gzip or deflate can reduce the number of bytes sent over the network.
* Leverage browser caching - Setting an expiry date or a maximum age in the HTTP headers for static resources instructs the browser to load previously downloaded resources from local disk rather than over the network.  
* Optimize images  
* Eliminate render-blocking JavaScript and CSS in above-the-fold content  
* Minify CSS  
* Minify JavaScript  
* Minify HTML  

[http://art.yale.edu/](http://art.yale.edu/)  
Föreslagna bilder kan spara 77 kB (29% reduktion).  
Minifiering av Javascript kan ge 26% reduktion.  
Minifiering av HTML kan ge 29% reduktion.  
Minifiering av CSS kan ge 21% reduktion.  
Enable compression kan ge 73% reduktion.  

[http://art.yale.edu/gallery](http://art.yale.edu/)  
Flera bilder bör formateras och komprimeras, vilket kan spara många bytes data. Föreslagna bilder kan spara 34 kB (54% reduktion).  
Minifiering av Javascript kan ge 26% reduktion.  
Minifiering av HTML kan ge 23% reduktion.  
Minifiering av CSS kan ge 21% reduktion.  
Reduce server response time - ...your server responded in 0.21 seconds.  

[http://art.yale.edu/Visiting](http://art.yale.edu/Visiting)  
Flera bilder bör formateras och komprimeras, vilket kan spara många bytes data. Föreslagna bilder kan spara 42 kB (39% reduktion).  
Minifiering av Javascript kan ge 26% reduktion.  
Minifiering av HTML kan ge 21% reduktion.  
Minifiering av CSS kan ge 21% reduktion.  

Sammanfattning
---

Överlag ger ovanstående undersökning information om vikten av bra bildbehandling samt komprimering och minifiering av olika resurser. Google PageSpeed gör ingen värdering av hur många Byte som kan sparas, alla möjligheter till optimering listas. Vid test av denna sida skulle en minfiering av JavaScript-filen responsive-menu.js minska storleken med 105 B (18% reduktion), vilket är marginellt. En optimering av bilder kan ge en besparing om 16 B (29% reduktion). Optimeringar utefter ovanstående analys behöver vägas mot tidsåtgång, kostnad samt förväntat resultat.

Rangordning
---

Baserat på uppmätta PageSpeed resultat för desktop blir rangordningen av dessa webbplaser:

1. Enea
2. Yale School of Art
3. Katterian

Baserat på uppmätta laddningstider blir rangordningen av dessa webbplaser bli:

1. Yale School of Art
2. Enea
3. Katterian

Resultatet visar att sidor med många bilder i bra kvalitet kan komprimeras för att spara mycket plats. De sidor som skulle reduceras mest, procentuellt, på det viset är:  

1. https://www.enea.com/products/training: 72%
2. http://art.yale.edu/gallery: 54%
3. http://www.katterian.se/lankar: 50%
4. https://www.enea.com/nfv-solutions/nfv-solutions-for-the-edge: 46%
5. http://art.yale.edu/Visiting: 39%

Max- och minvärde för antal requests, sidstorlek samt laddningstid:

* Maxvärde för antal requests: 198,33  
http://www.katterian.se/kattbilder-galleri-1
* Maxvärde för sidstorlek (MB): 2,66  
http://www.katterian.se/lankar
* Maxvärde för laddningstid (s): 73,09  
http://www.katterian.se/lankar
* Minvärde för antal resquests, sidtorlek och laddningstid: 17,33 / 0,40 / 2,59  
http://art.yale.edu/Visiting

Resultaten ger att man bör ta flera faktorer i beaktande innan man gör bedömningen om vad som är bäst. En bra webbsida handlar inte bara om snabbhet eller hur mycket data som överförs. Det handlar också om besökarens upplevelse av webbsidan. Datamängden är naturligtvis viktig för den som kör mobilt eller använder en långsam uppkoppling.

Upplevelse av laddningstid
---

Upplevelsen av hur lång tid det tar att ladda en sida är personlig och upplevs utifrån många faktorer. En upplevd laddningstid under 2-3 sekunder känns som en rimlig gräns. Erfarenheterna från utförda mätningar visar dock att en sida fortsätter att ladda resurser efter det att användaren upplever att sidan har laddats klart. Därför är den totala laddningstiden inte helt rättvisande när det kommer till upplevelsen av en webbsida, denna intressanta [artikel](https://www.hobo-web.co.uk/your-website-design-should-load-in-4-seconds/) beskriver det. Baserat på mätvärdena är det Yale School of Art som klarar laddningstiden bäst tätt följd av Enea. Däremot är den övergripande designen av Yale School of Art mindre tilltalande så upplevelsen vägs inte upp av kortare laddningstid.

Grupparbete
---
Ovanstående analyser är gjorda i grupp av Anette (anbp17) och Thomas (thba17).

<a href="#">Back to top ^</a>
