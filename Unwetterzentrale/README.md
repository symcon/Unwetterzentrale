# Unwetterzentrale
Das Modul berechnet einen gewichteten Regenwert in einem ausgewählten Bereich des Radarbilds.

### Inhaltsverzeichnis

1. [Funktionsumfang](#1-funktionsumfang)
2. [Voraussetzungen](#2-voraussetzungen)
3. [Software-Installation](#3-software-installation)
4. [Einrichten der Instanzen in IP-Symcon](#4-einrichten-der-instanzen-in-ip-symcon)
5. [Statusvariablen und Profile](#5-statusvariablen-und-profile)
6. [WebFront](#6-webfront)
7. [PHP-Befehlsreferenz](#7-php-befehlsreferenz)

### 1. Funktionsumfang

* Berechnet in einem selbstbestimmten Bereich des Regenradars die momentane Regenmenge.
* Auswahl zwischen bundesländischen oder bundesweiten Radarbildern.
* Das Radarbild und die Berechnung findet alle 15 Min automatisch statt.


### 2. Voraussetzungen

- IP-Symcon ab Version 4.2

### 3. Software-Installation

* Über den Module Store das Modul Unwetterzentrale installieren.
* Alternativ über das Module Control folgende URL hinzufügen:
`https://github.com/symcon/Unwetterzentrale`  

### 4. Einrichten der Instanzen in IP-Symcon

- Unter "Instanz hinzufügen" kann das 'Unwetterzentrale'-Modul mithilfe des Schnellfilters gefunden werden.
    - Weitere Informationen zum Hinzufügen von Instanzen in der [Dokumentation der Instanzen](https://www.symcon.de/service/dokumentation/konzepte/instanzen/#Instanz_hinzufügen)

__Konfigurationsseite__:

Name   | Beschreibung
------ | ---------------------------------
Gebiet | Auswahl des bundesländischen oder bundesweiten Kartenauschschnitts
X      | X-Position vom Mittelpunkt des Karrees
Y      | Y-Position vom Mittelpunkt des Karrees
Radius | Kantenlänge des Karrees in Pixel


### 5. Statusvariablen und Profile

Die Statusvariablen/Kategorien werden automatisch angelegt. Das Löschen einzelner kann zu Fehlfunktionen führen.

##### Statusvariablen

Name        | Typ     | Beschreibung
----------- | ------- | ----------------
Regenwert   | Integer | Gewichteter Wert der ausgewerteten Regenmenge. 8-stufige Gewichtung: Leichter Regen = Hellblau = 1 -> ... -> Starker Regen = Dunkelblau = 8
Radarbild   | Medien  | Radarbild des ausgewählten Kartenausschnitts

##### Profile:

Es werden keine zusätzlichen Profile hinzugefügt.

### 6. WebFront

Über das WebFront werden die Variablen und das Radarbild angezeigt. Es ist keine weitere Steuerung oder gesonderte Darstellung integriert.
Ebenfalls ist auf dem Radarbild der ausgewertete Karreeausschnitt eingezeichnet.

### 7. PHP-Befehlsreferenz

`boolean UWZ_RequestInfo(integer $InstanzID);`  
Berechnet die Variable Regenwert des Unwetterzentralemoduls mit der InstanzID $InstanzID.  
Die Funktion liefert keinerlei Rückgabewert.  
Beispiel:  
`UWZ_RequestInfo(12345);`
