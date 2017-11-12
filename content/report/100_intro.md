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
[Unsplash](https://unsplash.com/)  
[github Markdown Cheatsheet](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet)  

Kommandon
---
make upgrade-normalize  
make test
make check
make upgrade
