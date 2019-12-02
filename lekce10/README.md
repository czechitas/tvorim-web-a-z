# Lekce 10: CSS specificita, pseudotřídy, pseudoelementy, tabulky

## Cíl

Účastnice se seznámí s pravidly CSS specificity, naučí se základní pseudoelementy
a základy tvorby tabulek v HTML.

## Osnova

1) CSS specificita
    * typy selektorů podle vzestupné specificity
    1. Type selektory
    1. Class selektory
    1. ID selektory
    * Inline-styly vždy přepisují externí styly
    * Pozor na `!important`
2) Pseudotřídy
    * `:first-child`, `:last-child`, `:nth-child()`, `:nth-of-type()`
    * `+`, `~`, `>`
3) Pseudoelementy
    * `::first-line`, `::first-letter`
        - lze stylovat pouze font, styl textu, pozadí, margin, padding a border
    * `::after`, `::before`
        - lze stylovat vše
    * `::selection`
        - lze stylovat pouze color, background-color, text-decoration a pár dalších
4) HTML tabulky
    * `<table>`, `<tr>`, `<th>`, `<td>`
    * `<thead>`, `<tfoot>`
    * `<caption>` - záhlaví tabulky, CSS: `caption-side`, `text-align`
     
