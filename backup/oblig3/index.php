<!DOCTYPE html>
<html>
<head>
  <title>Webprogrammering 2016</title>
  <link href="css/main.css" rel="stylesheet">
  <meta charset="UTF-8">
</head>
<body>
  <nav id="nav01"></nav>
  <div id="hoved">
      <h1>Pokémon™ Turnering</h1>      
      
      <h2>Teksten på oppgaven lyder</h2>
      <p>
<div class='oppgaveteksten'>          
    <p>Oblig 3 – Pokémonturnering del 2</p>
De innledende turneringene er over, og de beste av de beste skal nå konkurrere i
finaleturneringen. Dere kan velge å jobbe videre på nettsiden og databasen deres fra
oblig 2 eller lage en ny.<br/><br/>

8 deltakere har kvalifisert seg og skal nå delta for å finne den ultimate vinneren.
Deltakerne kan gjerne hardkodes inn i databasen ettersom registreringen er over.
Den første runden er for alle 8 trenerne og vil åpenbart bestå av 4 kamper. Vinnerne
av disse går til den andre runden som består av 2 kamper, og vinnerne av den andre
runden vil gå videre og konkurrere i finalekampen, den siste kampen.<br/><br/>

Alle som besøker nettsiden skal kunne se en turneringsoversikt. Det skal være
informasjon om hvem som konkurrerer mot hverandre i de ulike rundene, hvor
kampen foregår, når kampen skal eller har blitt spilt, og eventuell annen relevant
informasjon du synes bør være med.<br/><br/>

Administratorer får nå en rekke nye oppgaver. Alt dette skal skje på sider som
kun admin har tilgang til. Sidene skal være passordbeskyttet og skal kreve
innlogging. En av sidene skal gi dem mulighet til å laste opp bilde av
banene/arenaene. Enda viktigere har en admin som oppgave å sette to og to
deltakere opp mot hverandre i kampene for hver av rundene. De må også følge med
under turneringen og kunne lagre i databasen hvem som vant hver kamp.<br/><br/>

Krav:<br/>
- Minst 8 deltakere (kan økes til 16, 32, osv. om ønskelig)<br/>
o Kan hardkode informasjonen deres inn i databasen (m.a.o. kan man
legge inn deltakerinformasjon direkte)<br/>
- En side for turneringsoversikt, åpen for alle<br/>
o Tydelig oversikt over alle rundene, kampene i hver av dem med hvem
som kjempet hvor og når, slik at man kan se hvem som har gått videre,
og etter hvert hvem som vant turneringen.<br/>
- Innloggingsside for admin<br/>
o Passordet må ligge kryptert i databasen (dere kan selv velge
krypteringsalgoritme) og det må inneholde et salt<br/>
o Adminsidene skal låses av for alle som ikke er logget inn<br/>
o Hvis en person som ikke er logget inn prøver å gå inn på adminsidene
skal personen tas tilbake til innloggingssiden<br/>
o Inputfeltene på innloggingssiden skal valideres<br/>
 Brukernavn skal være e-post<br/>
 Passordet må være mellom 6 og 20 tegn langt og bestå av minst
én stor bokstav, én liten bokstav og ett tall<br/>
 Valideres med JavaScript på klient og PHP på server<br/>
 Adminkontoer kan hardkodes inn i databasen<br/>
o Lag en kommentar øverst i kodefilen for innloggingssiden som
inneholder en admin sitt brukernavn og passord (ukryptert)<br/>
- Opplasting av bilde av arena<br/>
o Admin skal kunne laste opp bilde av arenaene<br/>
o Bildefilen lagres i en mappe i prosjektet, og stien (filepath) til dit bildet
ligger skal lagres i databasen<br/>
o Husk at bildet og katalogen må ha de nødvendige rettighetene<br/>
- Admin skal kunne sette opp kamper og vinnere<br/>
o Sette opp kamp, eksempel på løsning:<br/>
1. Lag en egen kampregistreringsside<br/>
2. Admin velger rundenummer fra en dropdownliste<br/>
3. To andre dropdownlister oppdateres etter valgt runde og lister
kun navn på deltakere som har kommet seg videre til denne
runden (pass på at de to deltakerne som velges ikke er den
samme)<br/>
4. To deltakere, tid og en arena velges, og en knapp trykkes.
Kampen blir lagret i databasen<br/>
o Registrere vinner, eksempel på løsning
 Vinner kan lagres på forskjellige måter. Eksempler:<br/>
 Lag et nytt felt i kamptabellen. Oppdater tabellen og sett
dette feltet lik én av deltakerne i kampen for å lagre
vinner.<br/>
 Lag et nytt felt i trenertabellen som lagrer hvor mange
ganger treneren har vunnet en kamp. Da vet du for
eksempel at en trener som har vunnet to ganger skal
være med i finalen (gitt en turnering med tre runder).<br/>
1. Lag en side for registrering av vinner<br/>
2. Admin velger rundenummer og får opp kampene i den runden,
enten alle samtidig eller én og én<br/>
3. Admin velger deltakeren som har vunnet (klikker på navnet,
radioknapper, etc), trykker på en knapp, og vinner blir lagret i
databasen<br/>
o Dere kan løse kamp-/vinnerregistrering slik dere selv ønsker så lenge
funksjonaliteten er med<br/>
- Utvid nettsiden fra oblig 2, eller lag en ny<br/>
- Utvid databasen fra oblig 2, eller lag en ny<br/>
- Design, brukeropplevelse og tilgjengelighet burde også tas hensyn til, selv om
fokus ligger på funksjonaliteten<br/>
- Dette er en individuell oppgave, ikke lever andre sitt arbeid<br/>
- Du står fri til å implementere flere funksjoner, og til å implementere
funksjonene på den måten du syns passer best<br/><br/>
Dere må levere:<br/>
- En zippet mappe (helst .zip, unngå .rar og .7zip) som inneholder:
o Alle kodefiler (skriv kommentarer der koden ikke er åpenbar og
forståelig)<br/>
o Importerbar SQL-fil med databasen din<br/>
 Databasenavn: pokemon_tournament<br/>
 Navn på SQL-fil: pokemon_tournament.sql<br/>
- Leveres innen 30. mars 23:59<br/>
Lykke til!<br/>
</div>    
</div>
  
  <?php
    
  ?>
  <footer id="foot01"></footer>
  <script src="js/script.js"></script>
</body>
</html>
