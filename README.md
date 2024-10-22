# MVC framework projekt

## Opis

MVC je obrazac strukture aplikacije koji aplikaciju dijeli na 3 ključne komponente:

- modeli
- kontroleri
- pogledi

Modeli predstavljaju logiku i izvor podataka.

Kontroleri je veza izmedu modela i pogleda. Oni primaju user zahtjev koji dolazi na aplikaciju te prosljeduju ostalim komponentama potrebne informacije. Nakon toga, uz pomoc pogleda ce vratiti nekakav odgovor.

Pogledi su prezentacijski sloj cija je jedina funckija prikaz podataka.

## Cilj

Ovaj projekt ce implementirati MVC radni okvir. Navedeno znaci podrska za definiciju vlastitih kontrolera, modela i pogleda.

## Specifikacija

- imati javni folder (`public`) koji web server definira kao root
- unutar public foldera, definirati `index.php` kao ulaznu tocku aplikacije
- definirati `core` direktorij koji sadrzi sistemske datoteke
- implementirati rutiranje unutar aplikacije gdje bi korisnik mogao definirati rute aplikacije
- implementirati logiku pomocu koje korisnik moze definirati kontroler unutar aplikacije
- implementirati logiku pomocu koje korisnik moze definirati model unutar aplikacije
- implementirati logiku pomocu koje korisnik moze definirati pogled unutar aplikacije