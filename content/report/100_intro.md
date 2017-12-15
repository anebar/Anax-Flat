Introduktion
===============================

Till vänster i menyn finns länkar till mina rapporter för kursmomenten.  
Nedan följer lite allmän information om redovisning mm.

[Redovisning](https://dbwebb.se/kurser/design/redovisa)
---
1. Skriv redovisningstext  
2. [Tagga ditt repo med en version](https://dbwebb.se/kunskap/bygg-me-sida-med-anax-flat#tag)  
**Börja med att committa alla ändringar du gjort**  
git status  
git add .  
git status  
git commit -a -m "Added report text for kmom01"  
git push  
**Nu kan vi tagga koden med en version**  
git tag -a 1.0.2 -m "Added report text for kmom01"  
git push --tags  
git tag  
3. Ladda upp och publicera din kurskatalog  
`dbwebb publish me`  
4. Kopiera redovisningstexten till forumet  
<a href="https://dbwebb.se/forum/utbildning/design">kursforumet</a>  
5. Kopiera redovisningstexten till ITs  
6. Hur testas mitt resultat?  
`dbwebb inspect kmom01`

Information inom kursen *design*.
---
[Markdown syntax](https://en.wikipedia.org/wiki/Markdown#Example)  
[Unsplash (fria bilder)](https://unsplash.com/)  
[github Markdown Cheatsheet](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet)  
[LESS2CSS](http://less2css.org/)  
[Using CSS Flexible Boxes](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Using_CSS_flexible_boxes)  
[CSS Grid Layout](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Grid_Layout)  
[less](http://lesscss.org/functions/)  
[An Introduction to Color Theory for Web Designers](https://webdesign.tutsplus.com/articles/an-introduction-to-color-theory-for-web-designers--webdesign-1437)  
**Färgscheman**
[Adobe Color CC (Kuler)](https://color.adobe.com/create/color-wheel/?base=2&rule=Shades&selected=4&name=My%20Color%20Theme&mode=rgb&rgbvalues=0.2668750696329384,0.75,0.33452236183750494,0.1779167130886256,0.5,0.22301490789166994,0.3558334261772512,1,0.4460298157833399,0.0889583565443128,0.25,0.11150745394583497,0.3202500835595261,0.9,0.4014268342050059&swatchOrder=0,1,2,3,4)  
[Color Scheme Designer 3 (Paletton)](http://paletton.com/#uid=1000u0kllllaFw0g0qFqFg0w0aF)  
[WebAIM](https://webaim.org/resources/contrastchecker/)  

Frontmatter  
LESS-kod  
[Markdown](https://dbwebb.se/anax/markdown-i-anax-med-ctextfilter)  
[Shortcode](https://dbwebb.se/anax/shortcodes)  

[CImage](https://cimage.se/)  



Andra källor
---
[UI, UX: Who Does What? A Designer’s Guide To The Tech Industry](https://www.fastcodesign.com/3032719/ui-ux-who-does-what-a-designers-guide-to-the-tech-industry)

Kommandon
---
make upgrade-normalize  
make test
make check
make upgrade
