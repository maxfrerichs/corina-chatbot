# Corina-Chatbot (#WirVsVirus-Hackathon)

## Was ist das? 
Corina ist ein Chatbot, entwickelt um Bürgern Fragen rund um Covid-19 bzw. das Corona-Virus zu beantworten. Das Ziel ist es, 
so vielen Bürgern wie möglich Zugang zu Informationen zu verschaffen, ohne dabei Notruf-Leitungen oder Info-Hotlines zu
überlasten. Dieser Client verwendet die IBM Watson Assistant API und hat einen besonderen Fokus auf Barrierefreiheit.
WICHTIG: Dieser Client ist NICHT voll funktionsfähig, viel mehr soll er eine Machbarkeitstudie darstellen

## Was wurde verwendet? 

* Der Bot wurde mit IBM Watson, einer Plattform für Natural Language Processing, Machine Learning etc., entwickelt und         trainiert
* Der Client wurde klassisch mit HTML, CSS, JavaScript und PHP entwickelt. Ziel ist es, einer so breiten Masse an Entwicklern
  möglich die Teilnahme am Projekt zu ermöglichen. 

## Allgemeine Features
* Inhalte können auch in Leichter Sprache ausgegeben werden. 
* Fragen können in einem Dialog beantwortet werden 

## Client-Features: 
* Screenreader-Support optimiert
* Einfache Integration
* Fokus auf Barrierefreiheit / Performance

## Probleme
* Aktuell gibt es Probleme beim Deployment auf einem öffentlich zugänglichen Server (siehe Issue). Auf einem lokalen Server     läuft der Client aber problemlos. 
* Tastennavigation nicht optimal.
* generelle Browser-
* Leichte Sprache funktioniert derzeit nur im standardmäßigen IBM-Chatwidget: Hier findest du eine Demo:        http://94.16.118.98/chatbot/

### Setup zum Ausprobieren: 
  * Du willst den Bot weiterentwickeln? Super!
  Voraussetzungen: 
  * Apache-Server mit PHP 7.2 oder höher
  * kompatibler Browser
    1. Klone dir das Repository in das Root-Verzeichnis deines Webservers (i.d.R. /var/www/html)
    2. Rufe im Browser localhost/corina auf
    3. Fertig!
    
    Solltest du auf Probleme stoße, würde ich mich sehr freuen, wenn du einen Issue erstellst!

## Geplante / mögliche Features
### Backend
  * Integration eines Crawlers, der Informationen von vertrauenswürdigen Quellen beschafft
  * Eigenes Backend für Redakteure, um Content einzupflegen

### Frontend
  * Optimierung der Barrierefreiheit durch Implementierung eines "High Contrast"-Modus, umfangreiches Testen mit                 Screenreadern und Implementierung von Unterstützung für besondere Eingabegeräte
  * Erstellen einer Progressive Web App, sodass Bürger*innen noch schneller Zugriff bekommen können
  
### Sonstiges
  * Integration in ein Content-Management-System, etwa als WordPress-Plugin oder auch als TYPO3-Extension. Sinnvoll u.a. für
    verschiedene Webseite wie z.B. der des Gesundheitsministeriums
  * Entwicklung einer Smartphone-App
  * 
 
