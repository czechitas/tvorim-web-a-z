# Lekce 4: Pozicování

## Cíl

Úcastnice:

- znají úskalí obtékání v CSS,
- znají vlastnost `position` a její možné hodnoty,
- chápou chování relativního pozicování vůči rodiči pro `position: absolute`.

## Osnova

<!--
1. 2-sloupcový layout
    - Příklad `02-2-sloupce`
    - Mám dva divy s třídou `sloupec`: `prvni` a `druhy`
        - Upozornit na vícero tříd na jednom prvku
    - Chci dát sloupce vedle sebe
    ```css
    .prvni {
        float: left;
    }
    ```
    - Nic se nestane – je nutné nastavit sloupci šířku (`width: 30%`)
    - Druhý sloupec bude obtékat
    - `float` způsobí "vyjmutí" prvku z toku dokumentu, vytvoří samostatnou vrstvu
        - prvek pod ním začíná na jeho původní pozici
    - Jak donutit druhy sloupec, aby začínal vedle prvního?
        - Samotný `width: 70%` nestačí
    - Pro druhý sloupec nastavíme `float: left` (`right` funguje stejně)
    - (Alternativa: sloupec odsadit zleva přes `margin-left: 30%`)
1. 3-sloupcový layout
    - Příklad `03-3-sloupce`
    - Zkuste si samostatně
1. Problém float layoutu: nelze nastavit pozadí kratšího sloupce, tj. aby sloupce byly stejně vysoké
1. Přetékání floatovaného obsahu z prvku
    - Příklad `04-float-preteceni`
    - Obrázek se vyjme z boxu a rámeček se přizpůsobí pouze výšce obsahu
        - Pochopíte tenhle fór: [CSS is Awesome](https://laughingsquid.com/css-is-awesome/)
    - Můžeme řešit vlastností `clear`
        - Přidáme dovnitř boxu prázdný prvek `cistic` kterému nastavíme `clear: both`
        - (Ukázkové řešení používá pseudoprvek `::after`)
-->
1. Pozicování – vlastnost `position`
    - Říkáme jak má být prvek na stránce umístěný
    - Složka `position-priklady`
1. Výchozí: `position: static`
    - Mají implicitně všechny prvky
    - Prvek se zobrazí tam, kde na něj vyjde řada
1. Relativní: `position: relative`
    - Prvek posunu relativně vůči jeho výchozí pozici, zabírá své původní místo
    - Vlastnosti `top`, `left`, `right`, `bottom` určují posun vůči výchozí pozici (vybírám si hranu, v jejímž směru posouvám)
    - Záporná hodnota posouvá v opačném směru
1. Absolutní: `position: absolute`
    - Prvek zcela vyjme z toku dokumentu a lze jej libovolně umístit
    - Pozicuje se vzhledem ke svému nejbližšímu rodiči který nemá `position: static`
    - Pokud takový rodič neexistuje, pozicuje se vůči stránce
1. Vzájemné překrývání prvků
    - Standardně pořadí, jak jsou v dokumentu
    - Prvky které nemají `position: static` jsou ve vrstvě nad
    - Řídí vlastnost `z-index`
1. Fixní pozice: `position: fixed`
    - Zůstává na obrazovce i když posouvám obrazovku
    - Zabírá použitelný prostor na obrazovce, pozor na mobily (řeší RWD)
1. Přilepená pozice: `position: sticky`
    - Kombinace `static` a `fixed`
    - Prvek se posouvá tak, aby byl vidět uvnitř svého rodiče

## Domácí úkol

Zpracovat CSS podle zadané předlohy s předdefinovaným HTML.

Zadání: [bit.ly/webaz-projekt1](https://bit.ly/webaz-projekt1) ([repo](https://github.com/TvorimWeb-2018-Praha/projekt1-profil))

- Celý obsah je obalený v `<div class="profil">` – nastavím šířku
- Uvnitř `<div class="hlavicka">` ve které je obrázek fotky a ikony
    - Ikonka je bílá, stačí nastavit barvu pozadí a kulaté rohy (`border-radius`)
    - Ikonku lze napozicovat pomocí `position: absolute` uvnitř rodiče, který má `position: relative`
    - Fotce omezit šířku aby se přizpůsobila rodiči (`width: 100%`)
