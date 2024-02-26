# Generátor prvočísel

Webová aplikace spustitelná přes webový server Apache (využívám XAMPP).

Zadání:

User Stories:
Uživatel chce znát všechna prvočísla až do čísla N. 
Do formuláře zadá celé nezáporné číslo. Klikne na talčítko "odeslat". Na výstupu dostane multipliakční tabulku prvních N prvočísel.

Další požadavky:
OOP, PHP.
Webové aplikaci.
Testovací spustitelná verze na dockeru
Odevzdání přes gitHub.

Aplikační model:
FE - HTML, css
    formulář - povolena celá čísla, od čísla 2, je možné krokovat po jednom číslu.
    vstup se odesílá metodou POST po stisknutí tlačítka "odeslat"

BE -  řešeno pomocí OOP
    prvočíslo: Prvočíslo je přirozené číslo větší než 1, které je beze zbytku dělitelné jen dvěma děliteli: jedničkou a samo sebou. Jednička není prvočíslo, neboť nemá dva různé dělitele. 
    logika algoritmu: Pokud číslo n(j) dělí číslo n(i) bez zbytku, tak číslo n(i) ohodnotím jedním bodem. Prvočíslo musí dle definice nasbírat právě 2 body (je dělitelné bez zbytku číslem 1 a samosebou). Pokud číslo nasbírá jiný počet bodů, není prvočíslo. Ukládá dá se do $points

    Class (vzor) PrimeNumberCalculator:
        atribut(public): přijímá číslo od uživatele (validace na FE, číslo je přirozené a větší než 1)

        metoda: getPrimeNr ($inputNumber)
            - for ($i = 1; $i <= $inputNumber; $i++)
                - $points = 0 
                - for ($j = 1; $j <= $i; $j++)
                        if($i % $j === 0) ----> $points++
                - if($points === 2) // jedná se o prvočíslo. Prvočísla postupně ukládám do pole $primeNrs, která přes foreach vracím uživateli.

Odevzdání:
Docker: v DockerHub pod názvem ondrej68/test_primenumbers_1
spuštění v docker playground (https://labs.play-with-docker.com/)
po přihlášení zadat: docker run -d -p 8080:80 ondrej68/test_primenumbers_1 .
a otevřít port 8080

github - repo: github_primenumbers, uživatel ondrej0206