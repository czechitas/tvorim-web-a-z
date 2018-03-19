# Lekce 1: Úvod do HTML

## Cíl

Účastnice:

- jsou obeznámené s organizací kurzu:
  - podmínkami pro udělení certifikátu,
  - funkcí FB skupiny,
  - rolí koučů a lektorů,
- mají nainstalovaný textový editor (doporučený [VS Code](https://code.visualstudio.com/)),
- chápou princip webu, webového prohlížeče HTTP,
- ví jak vytvořit základní webovou stránku pomocí textového editoru (včetně zadávání speciálních znaků),
- znají základní HTML značky (pro strukturu stránky, odstavec, nadpisy, `title`, odkaz, obrázek)

## Osnova

1. _Organizační záležitosti_
1. Instalace textového editoru
1. Kdo absolvoval úvod do HTML?
1. Co je HTML?
    - Není programování, je kódování
    - Program má logiku, HTML je značkovací jazyk
    - HTML stránka je textový dokument
1. Formátování dokumentu
    - Bez značek, prostý text
    - Odstavce a nadpisy pomocí odřádkování
    - Jak vypadá v prohlížeči? Nefunguje
    - Mezery v dokumentu nehrají roli
1. Anatomie HTML značky
    - Otvírací značka (tag): `<znacka>`
    - Uzavírací značka: `</znacka>`
1. Odstavec: `<p>`
1. Nadpis: `<h1>`
    - Jak značka vypadá není důležité
    - Důležitý je sémantický význam – proč je to důležité?
    - Vyhledávače, přístupnost (hendikep uživatele, technická = staré prohlížeče, zákonně)
      - Jak funguje čtečka pro nevidomé: naviguje se strukturou stránky
    - HTML = význam, CSS = vzhled, JS = chování
1. **Úkol**: Vytvoření prázdné HTML stránky
    - Vytvoření adresáře, otevření adresáře v editoru
    - Vytvořit v adresáři `index.html`
1. Základní struktura stránky
    - V editoru VSCode stačí zadat `html:5` a <kbd>Tab</kbd> (v Atom pouze `html`)
    - Stále stejný princip značek
    - Obsah stránky se píše do `<body>`
    - Odsazování vnořených značek, tabulátor
1. Úrovně nadpisů
    - Osnova stránky
    - 6 úrovní
    - `<h1>` zpravidla hlavní, jen jeden na stránce
1. Odkazy a HTML atributy: `<a>` (anchor)
    - Jak řeknu kam odkaz vede?
    - HTML atributy: dovnitř do otevírací značky
    - `<znacka atribut="hodnota"></znacka>`
    - `<a href="https://www.facebook.com">Můj Facebook</a>`
1. Značka pro obrázek: `<img>`
    - Nepárová značka (někdy se píše taky `<img />`)
    - Atribut `src`
    - Ukázat vložení obrázku přes URL z webu, např. z [Wikimedia Commons](https://commons.wikimedia.org/)
    - Lépe: Obrázek stáhnout, přesunout do složky webu
    - Atribut `alt`
1. Zadat DÚ
1. PDF ke stažení: [bit.ly/webaz1](https://bit.ly/webaz1)

### Pokud bude čas

- Komentáře v HTML
- Usnadnění psaní značek v editoru (Emmet)
- Automatické formátování dokumentu
- Relativní / absolutní odkazy
- [Náhled HTML přímo v editoru](https://marketplace.visualstudio.com/items?itemName=hdg.live-html-previewer)
- GitHub

## Domácí úkol

Vytvořit osobní vizitku se:

- jménem,
- krátkým odstavcem o sobě,
- odkazem na svůj profil,
- vlastní fotkou (aby vás lektoři poznali),
- bonus: vložit odkaz na svůj e-mail.

Na výsledku budou pracovat v následujících lekcích. Zabalí oba soubory do ZIP a pošlou na e-mail (kontakt dostanou na FB). Odevzdat co nejdříve, kvůli zpětné vazbě.

