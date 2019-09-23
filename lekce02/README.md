# Lekce 3: Box Model, DevTools a pseudotřídy

## Cíl

Účastnice:

- znají principy box modelu a přidružené vlastnosti,
- ví o Developer Tools v prohlížeči,
- znají element `<div>` a k čemu slouží,
- ví, jaký je rozdíl mezi inline, block a inline-block elementy,
- umí vytvořit horizontální menu ze seznamu včetně pseudotříd
- umí omezit šířku a vycentrovat obsah stránky.

## Osnova

1. Podklady ke stažení: [is.gd/lekce3](https://is.gd/lekce3) ([repo](https://github.com/TvorimWeb-2018-Praha/lekce03))
1. Box Model
    - Všechny elementy na webu jsou obdélníky
    - Box model pracuje s vlastnostmi obdélníku: nastavení rámečků, okrajů
1. Developer Tools
    - <kbd>F12</kbd> na Windows, <kbd>⌘</kbd>+<kbd>⇧</kbd>+<kbd>I</kbd> na macOS, případně _Inspect element_
    - Ukázat Box model v Chrome i Firefox (ve Firefoxu záložka Computed Styles)
    - Všechny elementy v prohlížeči jsou obdelníky, i když jsou kulaté
1. Vyzkoušíme si box model
    - Založíme nový projekt, HTML soubor a přidružený CSS soubor
    - (Možné ukázat na [prezentaci Tvořím web: HTML/CSS #19](https://czechitas.github.io/tvorim-web-1/#/19))
1. Element `<div>`
    - Nemá sémantický význam, nemá žádný styl
    - Vytvoříme `<div>` s textem a třídou `box` a textem
    - Nastylujeme v CSS `.box` s `background-color`
1. Vlastnosti `width` a `height`
    - Znají z 4 Minute Webdesign
    - `.box` nastavíme `width` a `height`
    - Ukážeme si další jednotky:
        - `px`: Fixní šířka bez ohledu na šířku okna
        - `%`: Co to udělá? Procenta z prostoru, který má prvek k dispozici (ukázat s vnořeným divem).
            - Výhoda: přizpůsobí se šířce okna.
            - Záludnost pro výšku stránky: přizpůsobí se výšce stránky, ne viditelné oblasti okna.
        - `em`: Odpovídá výšce písma, uvádíme poměry písma (dříve z typografie: výška řádky, šířka znaku "M", šířka čtverčíku). Dříve prohlížeče škálovaly jen písmo (dnes zoomují), stále užitečné pro nastavení délky řádku (např. max. 60em).
    - `height` většinou nenastavujeme, protože hrozí přetečení obsahu
    - Užitečný také `max-width`
1. Ohraničení: `border`
    - Samostatné vlastnosti: `border-width`, `border-style`, `border-color`
    - Sdružená vlastnost: `border: 5px solid red;`
1. Zakulacení rohů: `border-radius`
    - Lze udělat kolečko pomocí procent: `border-radius: 50%` a výška musí být stejně vysoká jako šířka.
    - Lze nastavit zakulacení každého rohu zvlášť
1. Vnitřní odsazení od okraje: `padding`
    - `padding: 1em`
1. Vnější okraje: `margin`
    - Přidat další `div`
    - `margin: 2em`
    - Upozornit: je to minimální rozestup mezi elementy, margin mezi dvěma elementy se sloučí na nejvyšší hodnotu
1. Co když chci nastavit každý okraj jinak?
    - `margin-{left,top,right,bottom}`
    - Chování sdružené vlastnosti pro 1–4 hodnoty
        - 2: vertikální a horizontální
        - 3: nahoře, horizontální, dole
        - 4: z horní strany podle hodinových ručiček
1. Vycentrování pomocí margin
    - `margin: 2em auto`
    - Funguje pouze horizontálně
1. Pustíme se do stažených příkladů (layout-priklady)
1. Typy prvků: `01-display`
    - Blokový prvek (block): zabírá na stránce celý blok, jsou pod sebou
        - I pokud mu nstavím omezenou šířku
    - Řádkový prvek (inline): zabírá jen potřebné místo, zalamuje se podle řádku
        - Nefungují jim vertikální vlastnosti
    - Řádkově blokový (inline-block): umožňuje nastavit i vertikální okraje ale může být vedle textu
        - Například obrázky
        - Užitečné pro menu
    - Typ prvků lze změnit pomocí vlastnosti `display`
        - `display: {block|inline|inline-block};`
1. Příklad `02-inline-block`
    - Bodový seznam, ukázat výsledek
    - `li { display: inline-block; }`
    - Proč ne `inline`? Ve výsledném menu chci, aby byl odkaz vyšší než řádek
    - Proč je seznam odsazený? Výchozí styl prohlížeče pro `ul`, musíme vynulovat:
      ```css
      ul {
          margin: 0;
          padding: 0;
      }
      ```
    - Odsadit položky seznamu: `li { padding: 1em; }`
    - Ale: odkaz je stále malý (lze ukázat pomocí rámečku)
    - Lepší řešení:
      ```css
      a {
          padding: 1em;
      }
      ```
    - Ale: `a` je řádkový prvek, přenastavíme na `inline-block`
    - Podbarvení menu: `ul { background-color: ... }`
    - Stylování odkazů (`color`, `text-decoration`)
    - Pseudotřídy: nikde nedefinujeme, můžeme je stylovat; používáme pro stylování _stavu_ prvku.
        - Typicky pro odkazy: `:link`, `:visited`
        - Pro všechny elementy: `:hover`, `:focus`, `:active`
        - Viz manuál
    - Barva při najetí myší – v `:hover` můžu přenastavit jakoukoliv vlastnost:
      ```css
      a:hover {
          background-color: ...;
      }
      ```
    - `a:hover` + `a:focus`: nemusím duplikovat vlastnosti, selektory můžu sdružit pomocí čárky:
      ```css
      a:hover, a:focus {

      }
      ```
- Domácí úkol
    - Jak udělat odkaz mezi dvěma stránkami? V `href` název souboru.

## Domácí úkol

Naposledy budeme pracovat s vaší vizitkou.

- Rozdělte prezentaci na dvě stránky.
- Udělejte horizontální menu mezi stránkami.
- Vylepšete vizuálně prezentaci:
    - přidejte rámečky,
    - omezte maximální šířku stránky aby text nebyl od krajů do krajů.
