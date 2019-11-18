# Lekce 8: CSS Transformace, přechody a animace

## Cíl

Účastnice
- naučí se CSS transformace a předchody (transitions)
- seznámí se s tvorbou animací pomocí CSS a se základními prvky HTML formulářů.

## Osnova

7. CSS vlastnost `transform`
     - `translate(x, y)`
     - `scale(x, y)`
     - `rotate(deg)`
8. CSS vlastnost `transition`
     - `<property> <duration> <easing> <delay>`
     - `property`: vlastnost, na kterou se `transition` vstahuje, prázdná znamená všechny
     - `duration`: délka přechodu (v ms)
     - `easing`: křivka hodnot v čase
     - `delay`: zpoždění animace (v ms)
9. Animace
    * `animation: nazev-animace delka [pocet opakovani] [smer] [fillmode]`
    * `animation-iteration-count` - počet opakování nebo `infinite`
    * `animation-direction` - `normal`, `reverse`, `alternate`
    * `animation-fill-mode` - `none`, `forwards`, `backwards`, ...
    * `@keyframes nazev-animace`
        *  `from { vychozi stav }`
        *  `to { cilovy stav }`
        *  `X% { stav v daném procentu animace }`
        
## Úkol

Projekt 6, Island
