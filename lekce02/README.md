# Lekce 2: Úvod do CSS

## Cíl

Účastnice:

- ví, jak připojit styl k HTML stránce,
- znají základní syntax CSS: selektor, vlastnost, hodnota,
- umí nastavit barvu písma a pozadí stránky a prvků,
- umí změnit zobrazenou rodinu a řez písma,
- umí nastavit webové písmo dle vlastního výběru s korektní podporou češtiny,
- znají selektor pro třídy.

## Osnova

1. Jaký byl úkol?
    - Shrnutí nejčastějších problémů
1. Kde hledaly informace?
    - Tip: [htmlreference.io](https://htmlreference.io/)
    - Varovat před Jak psát web, W3Schools
1. Atribut `alt` u obrázku
    - Také uvést `title` a `longdesc`
    - Zmínit [automaticky generovaný `alt` na Facebooku](https://www.facebook.com/help/216219865403298) – zobrazuje [rozšíření pro prohlížeč](https://addons.mozilla.org/en-US/firefox/addon/show-computer-vision-tags/)
    - Důležité pro uživatele s omezeným připojením, SEO…
1. Co je CSS?
    - HTML: Obsah
    - CSS: Vzhled, jiný jazyk
1. Z čeho se skládá web: soubory HTML a CSS (a JS)
    - Webový server jako „složka“
1. Připojení stylu k HTML dokumentu
    - `<link rel="stylesheet" href="styly.css">`
1. **Úkol**: Nová složka v editoru, nový HTML dokument a soubor `styly.css`
    - VSCode: `html:5` <kbd>Tab</kbd>
    - Připojení stylu: `link:css` <kbd>Tab</kbd> (VSCode), upravit název souboru na `styly.css`
    - Výplňový text: `lorem5` <kbd>Tab</kbd> (VSCode), alternativa [Blábot](http://cs.blabot.net/)
1. Anatomie CSS
    ```css
    selektor {
        vlastnost: hodnota;
        property: value;
    }

    p {
        color: red;
        background-color: black;
    }
    /* komentář */
    ```
1. Selektor pro typ elementů
    - Jak ostylovat jednotlivé elementy?
    - Jak ostylovat celou stránku? (typicky `body`)
1. Barvy v CSS (zatím pro `color`, `background-color`)
    - Pojmenované barvy
    - Číselný zápis: RGB, každá složka hodnota 0–255
        - `rgb(255, 50, 240)`
        - `#FF30AA`
    - Výběr barev v editoru CSS (VSCode, Atom)
1. Vlastnosti textu
    ```css
    p {
        font-style: italic; /* nebo normal */
        font-weight: bold; /* nebo normal */
        text-align: center; /* nebo left, right, justify (ale pozor na dělení slov) */
    }
    ```
1. Velikost textu: `font-size` – v jakých jednotkách?
    ```css
    p { font-size: 150%; }
    ```
    - pixely, procenta, (em, rem)…
    - relativní, absolutní jednotky
    - relativní jednotky: výhodné pro responzivní design

1. Rodina písma: `font-family`
    ```css
    p { font-family: Arial; }
    p { font-family: "Times New Roman"; }
    ```
    - Pokud návštěvník nemá písmo nainstalované, použije se výchozí
    - Možnost uvést více písem, např. pro různé OS:
    ```css
    p { font-family: "Helvetica Neue", Myriad, Arial;}
    ```
    - Obecné názvy písem: _serif_, _sans-serif_, _monospace_, cursive (ručně psané), fantasy (dekorativní), system-ui ([omezená podpora](https://caniuse.com/#feat=font-family-system-ui))
    ```css
    p { font-family: "Helvetica Neue", Myriad, Arial, sans-serif;}
    ```
    - Obecný název uvádět vždy
    - Pozor na podporu jazyka
1. Vlastní fonty
    - Soubor s písmem: problém autorských práv, optimalizace…
    - On-line služba: [Google Fonts](https://fonts.google.com/)
1. Přidání webového fontu z Google Fonts
    1. Filtr na `latin-ext`
    2. Určit řezy písma
    3. Připojit styl přes `<link>`
    4. Nastavit písmo pro nadpis
1. Zneužívání webových fontů
    - Velikost souborů: Omezit rodiny a řezy
    - Estetika výsledku
1. Selektor třídy
    - Zatím jsme vybrali oba odstavce, co když chci nastavit vlastnosti jen jednomu z nich?
    - Musím odstavec nějak odlišit – „pojmenuji jej“ pomocí třídy
    - „Třída“ např. element „pes“ třída „vlčák“, „ratlík“
    - Atribut `class`: název třídy nesmí začínat číslem, pouze písmena, pomlčka, podtržítko
    ```html
    <p class="cervena">…</p>
    ```
    - V CSS selektor pomocí tečky (tečka se v HTML nevyskytuje):
    ```css
    .cervena {
        color: red;
    }
    ```
    - Selektory se kombinují: styl se aplikuje na odstavec i třídu
    ```css
    p {
        font-weight: bold;
    }
    .cervena {
        color: red;
    }
    ```
    - Třídu lze aplikovat na víc prvků a na jeden prvek aplikovat víc tříd


### Další témata

- Řazení vlastností CSS: záleží na osobní preferenci
    - abecední
    - skupiny vlastností
- Řazení skupin se selektorem:
    - aplikuje se dle pořadí (ukázat `p {color: red} p {color: blue}`): platí poslední vlastnost
    - důležitost selektorů: třída > element (`.cervena {color: red} p {color: blue}`)
        - Čím konkrétnější, tím důležitější
- font-family: pozor na podporu jazyka

## Úkol

Vizitku z předchozí hodiny vylepšit se styly:

- Nastavit barvu pozadí, popředí
- Upravit velikost písma, zarovnání textu
- Přidat vlastní písmo
- Další vlastnosti dle vlastního uvážení

Tip: [Webdesign In 4 Minutes](https://jgthms.com/web-design-in-4-minutes/)
