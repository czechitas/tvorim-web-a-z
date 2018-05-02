# Lekce 8: Uzavření layoutu a pár chuťovek k tomu

## Cíl

Úcastnice:

- zopakují nabité znalosti tvorby layoutů z předchozích lekcí
- znají pokročilé CSS selektory, rozdíly mezi nimi
- poznají pokročilé CSS vlastnosti

## Osnova

1. Stáhnout podklady pro lekci https://is.gd/lekce7
2. Rychlé projetí řešení [Projekt Super Appka](https://tvorimweb-2018-praha.github.io/projekt3-reseni/)
3. Jak na rychlé hledání v dokumentaci http://devdocs.io/
3. Opakování metod tvorby layoutu z předchozích lekcí
    - coding s `01-layout` a hraní si
    - `display: none | inline | block | inline-block`
    - `float: left | right` + `clear: left | right | both`
    - `position: relative | absolute | fixed | sticky` + `z-index`
    - `display: flex | inline-flex`
    - `flex: grow shrink basis`
    - `flex-direction`, `flex-wrap`, `justify-content`, `align-items`, `align-content`
    - `@media () { }`
4. Opáčko pseudo elementů
    - `::before`, `::after`, `content: '';`
5. Doplnění pseudo tříd
    - `:first-child`, `:last-child`, `:nth-child(2n+1)`
6. Velikost obrázku na pozadí `background-size: auto | contain | cover | w <h>;`
7. Skrytí elementu vizuálně `visibility: visible | hidden`
7. Funkce `calc()`
    - použití jako `<length>, <frequency>, <angle>, <time>, <number>, <color>, <integer>`
    - operace ` + `, ` - `, `*`, `/` (whitepace okolo operátorů)
    - pořadí vykonávání pomocí dalších `( )`
7. CSS proměnné
    - deklarace a přirazení hodnoty `--name: value;`
    - použití `var(--name)`
    - deklarace v `:root { ... }` jako globální scope
    - dědění hodnoty jako css vlastností od rodiče
    - výchozí hodnota `var(--name, red)`
    - ukázka na `02-variables`
---
8. (?) `transition: name | duration | timing-function | delay`
9. (?) `transform`, translate, scale, rotate, `transform-origin`

## Domácí úkol

- dodělání všech restů z minula aneb kdo ještě něco neposlal, teď je ta vhodná příležitost
