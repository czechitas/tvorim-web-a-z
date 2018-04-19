# Lekce 6: Flexbox

## Cíl

Úcastnice:

- ovládají základy flexbox layoutu
- vědí co je to flexbox kontejner a jeho položky
- vědí co je a znají rozdíl mezi hlavní a příčná osou
- vědí co je a znají rozdíl mezi hlavní a příčný rozměrem
- umějí měnit pořadí prvků

## Osnova

1. Stáhnout podklady pro lekci https://is.gd/lekce6
1. Otevřít vedle flexbox-cheatsheet.pdf
1. Flexbox kontejner `display: flex | inline-flex`
1. Flexbox položky
    - `flex-grow: 0 | <number>` - možnost zvětšování, podíly
    - `flex-shrink: 1 | <number>` - možnost zmenšování, podíly
    - `flex-basis: auto | 0 | <width>` - výchozí rozměr položky
    - `order: <number>` - pořadí položky
    - `flex: <flex-grow> <flex-shrink> <flex-basis>` - shorthand
    - `margin` - dopočítávání odsazení z volného místa
1. coding... Flexbox01 - položku 02 roztáhnout, hrát si s pozicemi
1. coding... Flexbox02 - tří sloupcový layout + hlavička + patička
1. Směr vyskládání položek
    - `flex-direction: row | row-reverse | column | column-reverse`
    - coding... Flexbox03 - změna směru na column
1. Zalamování položek na hlavní ose
    - `flex-wrap: nowrap | wrap | wrap-reverse`
    - coding... Flexbox04 - zalomení
1. Zarovnání položek na hlavní ose
    - `justify-content: flex-start | flex-end | center | space-between | space-around`
1. Zarovnání položek na příčné ose
    - `align-items: stretch | flex-start | flex-end | center | baseline`
1. coding... Flexbox-05 - hlavička s menu pomocí flexboxu
1. coding... Flexbox-06 - responsivní dlaždice s medailonky
1. `align-self: auto | flex-start | flex-end | center | baseline | stretch`
