Design element
==============================================

<div class="bkgBox1">
</div>
<div class="bkgBox2">
</div>
<div class="bkgBox3">
</div>
<div class="bkgBox4">
</div>
<div class="themeSelector">
    <a href="theme-selector">Temaväljare</a>
</div>

Tema Design element 1
---

Tema 1 har en bakgrundsbild som är fast och scrollar inte med sidan. Den är ett foto med blå himmel och moln. Fotot visas i några olika regioner: outer-wrap-header, outer-wrap-flash och outer-wrap-footer. Den fanns även tidigare i outer-wrap-main, men förändrade den så att detta tema är den vars innehåll sträcker sig över hela bredden. Bakgrunden repeteras inte och är fixerad. Jag har använt position så att bilden är centrerad horisontellt och justerad vertikalt så att en del vatten visas. Bakgrunden är definierad så att bilden täcker hela sidan, vilket medför viss klippning av bilden.

Footerns bakgrundsfärg har fått en genomskinlighet (opacity) för att bakgrunden ska synas genom den.

Tema Design element 2
---

Tema 2 har en bakgrundsbild som består bland annat av träd till höger som visar struktur. Bilden ger även djup och perspektiv över en sjö. Jag har lagt en [gradient över bilden](https://css-tricks.com/tinted-images-multiple-backgrounds/) från höger till vänster så att att bilden syns helt till höger och inte alls till vänster där det är vitt. I mitten och till vänster är texten därför läsbar. Bakgrundsbilden repeteras inte och är fixerad samt centrerad. Den är definierad så att bilden täcker hela sidan, vilket medför viss klippning av bilden.

Innehållet är centrerat i mitten. Footerns bakgrundsfärg har fått en genomskinlighet (opacity) för att bakgrunden ska synas genom den.

Tema Design element 3
---

För tema 3 la jag gradient i olika regioner såsom next, previous, på header och footer. Dessa är definierade lite olika: ljust till mörkt, höger till vänster resp. vänster till höger. Temat fick streck via borders. Innehållet är centrerat i mitten.

På sidan design-element visas tre foton i mindre block samt ett ytterligare fjärde block. Alla block har samma fyrkantiga storlek och är roterade. Fjärde blocket har en röd färg som går igen i vänster border för main, detta block får slumpgenererat gradantal. Blocken har negativ z-index för att finnas i bakgrunden. Tre av blocken får en opacity när sidan blir smalare och blocken visas bakom texten, vilket medför att texten fortfarande blir läsbar.


Övrigt
---

Alla teman har fonten Lato för att vara lättläst, väl anpassad för webbplatser. Toppmenyn har bakgrundsfärgen grön (densamma som krysset som används för att dölja hamburgermenyn). Hamburgermenyns bakgrundsfärg har fått en genomskinlighet (opacity) för att bakgrunden ska synas under den.

Jag skapade en knapp av länken till temaväljaren för att den ska synas bra. Denna gavs en animation som ger rörelse då man hovrar över den.
