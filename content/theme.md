Beskrivning av anpassade teman
==============================================

Jag förändrade i stort dessa variabler resp klasser i olika stylesheets:
@backgroundColor,
@bodyColor,
@navbarBgColor,
@navbarItemBgColor,
@site_logo_text_shadow,
@siteFooterBgColor,
@footerOpacity,
@selectBgColor,
@site_logo_text_shadow
och
logo-1.

På min testsida la jag in några längre texter för olika typsnitt och font storlekar för att kunna jämföra dem. Som standard tema valde jag typography.min.css (finns i filen theme.php), det som visas när man inte använder temaväljaren eller när man väljer bort tema. Jag trivdes med färgerna och typsnitten. De var sköna att vila ögonen på.

###base - Minimal style, only the plain base
Style base är densamma som jag byggt fram till detta kursmoment. Brödtexten är utbytt till Lato. I less-filen finns selectors med variabler som kan används i andra stylesheets.

###default - Your own selected default theme
Som default style la jag in default.min.css för att kunna se vilken style vi hade från början att utgå från.

###light - Very light theme, white, black and nuances of grey  
Style light är lika som som color med en skillnad att det går i grått istället för i blått. I Paletton var det dessa inställningar:  
Base RGB: 2F4073  
Hue: 243°  
Dist: ingen  
Det är ljusa toner där bakgrunden är vit, med en meny och footer i ljusgrått.

###color - Enhance the light theme by adding a tiny bit of color
För färgerna utgick från tema typography och under Presets valde jag "Lightest Pale Pastel". I Paletton var det dessa inställningar:  
Base RGB: 2F4073  
Hue: 243°  
Dist: ingen  
Det är ljusa toner där bakgrunden är vit, med en meny och footer i ljusblått.

###dark - Dark background and light text  
För färgerna utgick jag från tema typography och under Presets valde jag "Greyish Darkest" för att hitta grå nyanser. Texten la jag som nästan vit (helt vit blir för stor kontrast) och accentfären i samma gröna färg som krysset man använder för att stänga hamburgermenyn. I Paletton var det dessa inställningar:  
Base RGB: 2F4073  
Hue: 243°  
Dist: ingen  

###colorful - Enhance the light theme by adding a tiny bit of color
För färgerna utgick jag från tema typography och under Presets valde jag "Shiny". Tog sedan triadiskt färgschema och valde att ha kvar den blå färgen, förändrade sedan så triadiskt schema kom så långt som möjligt utan att bli adjecent färgschema. Det medförde att den tredje färgen blev limegrön. I Paletton var det dessa inställningar:  
Base RGB: 1C55FF  
Hue: 243°  
Dist: 89°  

###typography - A theme where the typography really stands out
Här valde jag milda, något mörka toner. I Paletton var det dessa inställningar:  
Base RGB: 2F4073  
Hue: 243°  
Dist: 65°  
Jag la in några andra fonter för h1, h2, breadcrumbs samt brödtexten: Cabin Sketch, Calligraffitti, Lato, Playball, Prosto One. Toppmenyn är förändrad så att varje menyval är en egen byggsten med skugga, hamnar som klossar på varandra då man minskar bredden. Bilden i flash-wrap fick en skugga och ram. Toppmenyn är förändrad så att då man hovrar över en länk blinkar den två gånger, samtidigt som site-logo-texten blickar en gång under samma tid.

###fun - All fun, test and play, make it stand out!  
Här valde jag färger att gå med julen, dvs rött och grönt. Bilden i flash-wrap fick en skugga och ram. Till jul brukar det blinka på olika sätt så jag la in en animation på diven flash-wrap som gör att den "pulsar" (bilden blir större resp mindre ett par ggr inom dess ram) vid laddning av en sida. Loggan som visas vid brett fönster är utbytt till en sparv på rött snöre med tomteluva.
