# IP Info Module
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

IPv4
* http://127.0.0.1:3777/hook/NetInfo?GetIpInfo=8.8.8.8
* http://127.0.0.1:3777/hook/NetInfo?GetIpInfo=8.8.8.8&format=ALL
* http://127.0.0.1:3777/hook/NetInfo?GetIpInfo=8.8.8.8&format=ALL&delimiter=;%20
* http://127.0.0.1:3777/hook/NetInfo?GetIpInfo=8.8.8.8&format=country,org
* http://127.0.0.1:3777/hook/NetInfo?GetIpInfo=8.8.8.8&format=country,region,city,org,hostname&delimiter=%20
* http://127.0.0.1:3777/hook/NetInfo?GetIpInfo=8.8.8.8&format=ValueOnly
* http://127.0.0.1:3777/hook/NetInfo?GetIpInfo=8.8.8.8&format=org,ValueOnly
* http://127.0.0.1:3777/hook/NetInfo?GetIpInfo=8.8.8.8&format=country,region,city,org,hostname,ValueOnly&delimiter=|
* http://127.0.0.1:3777/hook/NetInfo?GetIpInfo=8.8.8.8&format=json

IPv6
* http://127.0.0.1:3777/hook/NetInfo?GetIpInfo=2001:4860:4860::8888&format=ALL&delimiter=;%20

Rate Limits
Free usage of our API is limited to 50,000 API requests per month. If you exceed that limit, we'll return a 429 HTTP status code to you.


### 2. Vorraussetzungen

- IP-Symcon ab Version 5.5

### 3. Software-Installation

* Über den Module Store das 'IP_Info'-Modul installieren.
* Alternativ über das Module Control folgende URL hinzufügen

### 4. Einrichten der Instanzen in IP-Symcon

 Unter 'Instanz hinzufügen' kann das 'IP_Info'-Modul mithilfe des Schnellfilters gefunden werden.  
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

`boolean IPINFO_BeispielFunktion(integer $InstanzID);`
Erklärung der Funktion.

Beispiel:
`IPINFO_BeispielFunktion(12345);`