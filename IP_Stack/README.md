# IP_Stack
Beschreibung des Moduls.

### Inhaltsverzeichnis

1. [Funktionsumfang](#1-funktionsumfang)
2. [Voraussetzungen](#2-voraussetzungen)
3. [Software-Installation](#3-software-installation)
4. [Einrichten der Instanzen in IP-Symcon](#4-einrichten-der-instanzen-in-ip-symcon)
5. [Statusvariablen und Profile](#5-statusvariablen-und-profile)
6. [WebFront](#6-webfront)
7. [PHP-Befehlsreferenz](#7-php-befehlsreferenz)

### 1. Funktionsumfang

* http://127.0.0.1:3777/hook/NetInfo?GetIpStack=8.8.8.8&format=region_name&delimiter=;%20
* http://127.0.0.1:3777/hook/NetInfo?GetIpStack=8.8.8.8&format=latitude,longitude&delimiter=;%20 
* http://127.0.0.1:3777/hook/NetInfo?GetIpStack=8.8.8.8&format=json&delimiter=;%20

Sub Array's not 'implode' jet
* http://127.0.0.1:3777/hook/NetInfo?GetIpStack=8.8.8.8&format=location&delimiter=;%20

API Usage: 100 per Month


Other API's >> https://ipstack.com/other
https://ipapi.com/                 :: Real-time Geolocation & Reverse IP Lookup REST API
https://userstack.com/             :: Detect any Browser, Device & OS in Real-Time
https://positionstack.com/         :: Accurate Forward & Reverse Batch Geocoding REST API
https://countrylayer.com/          :: Reliable real-time country data API for your business.
https://languagelayer.com/         :: Powerful Language Detection JSON API for Developers

### 2. Vorraussetzungen

- IP-Symcon ab Version 5.5

### 3. Software-Installation

* Über den Module Store das 'IP_Stack'-Modul installieren.
* Alternativ über das Module Control folgende URL hinzufügen

### 4. Einrichten der Instanzen in IP-Symcon

 Unter 'Instanz hinzufügen' kann das 'IP_Stack'-Modul mithilfe des Schnellfilters gefunden werden.  
	- Weitere Informationen zum Hinzufügen von Instanzen in der [Dokumentation der Instanzen](https://www.symcon.de/service/dokumentation/konzepte/instanzen/#Instanz_hinzufügen)

__Konfigurationsseite__:

Name     | Beschreibung
-------- | ------------------
         |
         |

### 5. Statusvariablen und Profile

Die Statusvariablen/Kategorien werden automatisch angelegt. Das Löschen einzelner kann zu Fehlfunktionen führen.

#### Statusvariablen

Name   | Typ     | Beschreibung
------ | ------- | ------------
       |         |
       |         |

#### Profile

Name   | Typ
------ | -------
       |
       |

### 6. WebFront

Die Funktionalität, die das Modul im WebFront bietet.

### 7. PHP-Befehlsreferenz

`boolean IPSTACK_BeispielFunktion(integer $InstanzID);`
Erklärung der Funktion.

Beispiel:
`IPSTACK_BeispielFunktion(12345);`