# Shoes-Us
Webbshop for Shoes - 
Gruppnamn: Shoes Us
Gruppmedlemmar: Julia Mattson, Lucas Persson, Ensar Omerbasic, Michelle Lanaro, Frida Baldvinsdottir

Namn på er grupp.
Gruppens medlemmar.
En länk dit projekt går att använda live.
Vid behov: uppgifter att testa med, så som inloggningsuppgifter.
OBS: Readme filen ska framförallt innehålla en lista över alla kraven i kravspecen nedanför samt
en kort kommentar från er - har ni uppfyllt kravet? I så fall, hur?

Kravspecifikation på projektet:

• Alla sidor skall vara responsiva. (G)
Vi har använt oss av mediaquery för responsiviteten.

• Arbetet ska implementeras med objektorienterade principer. (G)
Vi skapade en databasklass med en konstruktor, därefter har vi använt oss av instanser av databasklassen vid varje tillfälle där vi ville skapa en connection med databasen. 

• Skapa ett konceptuellt ER diagram, detta ska lämnas in vid idégodkännandet (G)
Vi skapade det med hjälp av draw.io

• Beskriv er företagsidé i en kort textuell presentation, detta ska lämnas in vid
idégodkännandet (G)
Vår affärsidé är en hemsida som säljer både dam- och herrskor.

• All data som programmet utnyttjar ska vara sparat i en MYSQL databas (produkter,
beställningar, konton mm) (G)
Vi har en databas samt en fil som har connection med denna. Vi har lagt in samtliga produkter samt leverantörer m.m. i databasen.

• Det ska finnas ett normaliserat diagram över databasen i gitrepot G)
Vi har använt oss av draw.io. Se bilaga. 

• Man ska kunna logga in som administratör i systemet (G)
Vi har skapat en IF-sats somkör olika funktioner beroende på adminstatus.

• Man ska kunna registrera sig som administratör på sidan, nya användare ska sparas i
databasen (VG)
Vi har inte uppfyllt detta krav.

• En administratör behöver godkännas av en tidigare administratör innan man kan logga
in fösta gången (VG)
Vi har inte uppfyllt detta krav.

• Inga Lösenord får sparas i klartext i databasen (G)
Vi sparar lösenorden med MD5, alltså hashade.

• En besökare ska kunna beställa produkter från sidan, detta ska uppdatera lagersaldot i
databasen (G)
!!!

• Administratörer ska kunna uppdatera antalet produkter i lager från admin delen av sidan
(G)
Genom att rendera ut alla produkter och lägga till inputfält samt knapp. När man trycker på knappen uppdateras databasen med inputfältets värde.

• Administratörer ska kunna se en lista på alla gjorda beställningar (G)
En funktion som gör ett anrop till databasen och renderar ut det.

• Administratörer ska kunna markera beställningar som skickade (VG)
Detta krav är inte uppfyllt.

• Sidans produkter ska delas upp i kategorier, en produkt ska tillhöra minst en kategori,
men kan tillhöra flera (G)
Vi har delat upp det i tre kategorier. En produkt kan tillhöra en eller flera kategorier som till exempel "Dam" och "Rea". Vi har skapat en funktion som renderar ut produkterna beroende på kategori-ID.

• Från hemsidan ska man kunna se en lista över alla produkter, och man ska kunna lista
bara dom produkter som tillhör en kategori (G)
Se ovanstående kommentar.

• Besökare ska kunna lägga produkterna i en kundkorg, som är sparad i session på
servern (G)
Varorna som besökaren lägger i kundkorgen sparas i localstorage, vi valde att göra på det här sättet istället för att spara i session för bättre kundupplevelse. David har godkänt det.

• Man ska från hemsidan kunna skriva upp sig för att få butikens nyhetsbrev genom att
ange sitt namn och epostadress (G)
Vi har ett inputfält i footern som är kopplad till vår databas.

• När man gör en beställning ska man också få chansen att skriva upp sig för
nyhetsbrevet (VG).
Vi har inte uppfyllt detta kravet.

• När besökare gör en beställning ska hen få ett lösenord till sidan där man kan logga in
som kund (VG)
Vi har inte uppfyllt detta kravet.

• När man är inloggad som kund ska man kunna se sina gjorda beställning och om det är
skickade eller inte (VG)
Kunden kan se sin beställning, men inte om den är skickad.

• Som inloggad kund ska man kunna markera sin beställning som mottagen (VG)
Vi har inte uppfyllt detta kravet.

• Administratörer ska kunna se en lista över personer som vill ha nyhetsbrevet och deras
epost adresser (G)
En funktion som gör ett anrop till databasen och renderar ut det.

• Besökare ska kunna välja ett av flera fraktalternativ (G)
Vi har tre alternativ: Green Shipper, DHL och PostNord. 

• Tillgängliga fraktalternativ ska vara hämtade från databasen (G)
Alternativen finns sparat i vår databas under shipper-table. Vi hämtar dessa och printar ut i checkout.php-sidan.

• Administratörer ska kunna redigera vilka kategorier en produkt tillhör (VG)
Vi har inte uppfyllt detta kravet.

• Administratörer ska kunna skicka nyhetsbrev från sitt gränssnitt, nyhetsbrevet ska
sparas i databasen samt innehålla en titel och en brödtext (VG)
Vi har inte uppfyllt detta kravet.

• Administratörer ska kunna lägga till och ta bort produkter (VG)
Vi har inte uppfyllt detta kravet.



Kommentarer:
* Varorna som besökaren lägger i kundkorgen sparas i localstorage, vi valde att göra på det här sättet istället för att spara i session för bättre kundupplevelse. David har godkänt det.

* Develop är vår primära branch.

Inloggningsuppgifter:

Admin:

Användarnamn: o.o

Lösenord: test

User:

Användarnamn: test@test.com

Lösenord: test

Webbshopen ligger på: www.fridaedda.se
