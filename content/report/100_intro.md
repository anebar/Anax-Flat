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
git commit -a -m "Files and report for task kmom05"  
git push  
*Om fel commit-text:*  
git commit --amend -m "New commit message"  
git push --force  
**Nu kan vi tagga koden med en version**  
git tag -a 1.0.2 -m "Files and report for task kmom05"  
git push --tags  
git tag  
3. Ladda upp och publicera din kurskatalog  
`dbwebb publish me`  
4. Kopiera redovisningstexten till forumet  
<a href="https://dbwebb.se/forum/utbildning/design">kursforumet</a>  
5. Kopiera redovisningstexten till ITs  
6. Hur testas mitt resultat?  
`dbwebb inspect kmom01`

Kommandon
---
make upgrade-normalize  
make test
make check
make upgrade

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
[An Introduction to Color Theory for Web Designers](https://webdesign.tutsplus.com/articles/an-introduction-to-color-theory-for-web-designers--webdesign-1437)  
[How Fast Should A Website Load in 2017?](https://www.hobo-web.co.uk/your-website-design-should-load-in-4-seconds/)  
[The Characteristics of Minimalism in Web Design](https://www.nngroup.com/articles/characteristics-minimalism/)  
[Top 10 Mistakes in Web Design](https://www.nngroup.com/articles/top-10-mistakes-web-design/)  
[Usability 101: Introduction to Usability](https://www.nngroup.com/articles/usability-101-introduction-to-usability/)  

kmom06
---

[Multi-Device Content](https://developers.google.com/web/fundamentals/design-and-ux/responsive/content?hl=en)  
[active and passive voice](https://learnenglish.britishcouncil.org/en/english-grammar/verbs/active-and-passive-voice)  
[High performance HTML](https://samdutton.wordpress.com/2015/04/02/high-performance-html/)  
[Animations](https://developers.google.com/web/fundamentals/design-and-ux/animations/)  
[Animations and Performance ](https://developers.google.com/web/fundamentals/design-and-ux/animations/animations-and-performance)  
[List of Unicode characters](https://en.wikipedia.org/wiki/List_of_Unicode_characters)  
[We Love Icon Fonts](http://weloveiconfonts.com)  
[CSS Sprites](https://css-tricks.com/css-sprites/)  
[Inline SVG vs Icon Fonts](https://css-tricks.com/icon-fonts-vs-svg/)  
[Making the Switch Away from Icon Fonts to SVG: Converting Font Icons to SVG](https://www.sarasoueidan.com/blog/icon-fonts-to-svg/)  
<a href="https://en.wikipedia.org/wiki/Visual_design_elements_and_principles">Visual design elements och principles</a>  
<a href="https://www.youtube.com/playlist?list=PLKtP9l5q3ce-oz7aoBkk-oEn4xzGbtqxU">Design – principer och element</a>  
<a href="http://www.educ.kent.edu/community/VLO/Design/principles/">Visual Literacy</a>  
<a href="https://www.canva.com/learn/design-elements-principles/">Design Elements &amp; Principles</a>   
<a href="http://codepen.io/search/pens?q=effects">CodePen sökning på “effects”</a>  
[Tinted Images with Multiple Backgrounds](https://css-tricks.com/tinted-images-multiple-backgrounds/)  

[Design Elements & Principles](https://www.canva.com/learn/design-elements-principles/)  

###Design element - verktyg för att utföra designprinciper

* Punkter
* Line - Streck  
* Shape - Former
* Texture - Texturer, mönster
* Color - Färger
* Gradients
* Kontrast
* Typografi
* Bilder
* Bakgrund
* Genomskinlighet
* 3D effekt


###Designprinciper - designtekniker kan uppnås vis grundtekniker, sätta ord på "något saknas i din design"

* Line
* Scale
* Colour
* Repetition
* Negative space
* Symmetry
* Transparency
* Texture
* Balance - Balans (symmetrisk, assymmetrisk)
* Hierarchy
* Contrast
* Framing
* Grid
* Randomness
* Direction
* Rules
* Movement - Rörelse
* Depth/Perspective - Perspektiv
* Typography
* Composition

[Föreläsning](https://www.youtube.com/watch?v=TC4srpF6UnQ)

* Harmony - Harmoni
* Unity
* Variety - Variation
* Proximity
