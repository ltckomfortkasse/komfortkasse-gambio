# Komfortkasse-Modul für Gambio

Das Komfortkasse-Modul für Gambio (Gambio GX2 und GX3) automatisiert den Zahlungsabgleich für **Vorkasse, Rechnung und Nachnahme**. Komfortkasse ordnet eingehende Überweisungen automatisch den offenen Bestellungen Ihres Shops zu und setzt den Bestellstatus, sobald das Geld da ist. Das Modul verbindet den Gambio-Shop mit Komfortkasse; den Abgleich mit dem Bankkonto übernimmt Komfortkasse. Das Modul ist für Gambio GX2 und GX3 gebaut; mit Gambio GX4.1 und neuer funktioniert es nicht.

[Komfortkasse für Gambio](https://komfortkasse.eu/shopsysteme/gambio/) · [Kostenlos registrieren](https://ssl.komfortkasse.eu/public/register.jsf) · [Installationsanleitung](https://komfortkasse.freshdesk.com/support/solutions/articles/14000161599) · [Hilfe & Dokumentation](https://komfortkasse.freshdesk.com/support/solutions/14000075022)

## Eckdaten

| Merkmal | Angabe |
|---|---|
| Shopsystem | [Gambio](https://www.gambio.de/) (Gambio GX) |
| Unterstützte Versionen | Gambio GX2 und GX3 (Gambio 2.0 bis 3.x). Mit Gambio GX4.1 und neuer funktioniert das Modul nicht. |
| Zahlungsarten | Vorkasse (Vorauskasse, Banküberweisung), Rechnung (Kauf auf Rechnung), Nachnahme |
| Aufgabe des Moduls | Überträgt offene Bestellungen an Komfortkasse und setzt den Bestellstatus bei Zahlungseingang oder Storno |
| Für wen | Betreiber von Gambio-Shops und Agenturen, die solche Shops betreuen |
| Kosten | Das Modul ist kostenlos. Für Komfortkasse gelten die [Preise](https://komfortkasse.eu/preise/) auf komfortkasse.eu. |
| Anbieter | LTC Information Services GmbH, [komfortkasse.eu](https://komfortkasse.eu/) |

## Was ist Komfortkasse?

Komfortkasse ist ein Online-Dienst der LTC Information Services GmbH, der Zahlungen per Banküberweisung für Onlineshops automatisiert. Komfortkasse ruft die Zahlungseingänge vom Bankkonto ab, ordnet sie den offenen Bestellungen zu und meldet den Zahlungsstatus an den Shop zurück. Der Dienst richtet sich an Online-Händler in Deutschland, Österreich und der Schweiz.

Komfortkasse unterstützt die Zahlungsarten, bei denen das Geld per Überweisung kommt:

- [Vorkasse](https://komfortkasse.eu/loesungen/vorkasse/): Der Käufer überweist vor dem Versand. Komfortkasse prüft den Zahlungseingang und setzt den Bestellstatus im Shop automatisch.
- [Rechnung](https://komfortkasse.eu/loesungen/rechnung/): Die Ware wird sofort geliefert, der Käufer überweist danach. Komfortkasse überwacht die Zahlung und sendet bei Bedarf Zahlungserinnerungen und Mahnungen.
- [Nachnahme](https://komfortkasse.eu/loesungen/nachnahme/): Der Versanddienstleister kassiert bei der Zustellung und überweist den Betrag. Komfortkasse überwacht diese Überweisung.

### So funktioniert Komfortkasse mit Gambio

1. Das Komfortkasse-Modul überträgt die offenen Bestellungen aus Gambio an Ihren Komfortkasse-Account.
2. Komfortkasse ist mit Ihrem Bankkonto verbunden ([unterstützte Banken](https://komfortkasse.eu/banken/)) und ordnet eingehende Zahlungen den Bestellungen zu.
3. Das Modul setzt die Bestellung in Gambio auf den gewählten Status, z. B. „Zahlung eingegangen“, oder auf „storniert“, wenn keine Zahlung kommt.

Komfortkasse versendet außerdem Zahlungserinnerungen an Käufer, behandelt Teil- und Überzahlungen und wickelt Rückerstattungen ab. Alle Funktionen sind auf [komfortkasse.eu](https://komfortkasse.eu/) beschrieben.

## Funktionen des Komfortkasse-Moduls für Gambio

- **Bestellungen übertragen:** Das Modul exportiert offene Bestellungen nach Zahlungsart (Vorkasse, Rechnung, Nachnahme) und Bestellstatus. Welche Bestellungen dazugehören, legen Sie über Zahlungsart-Codes und Status-Codes in den Einstellungen fest.
- **Bestellstatus setzen:** Bei Zahlungseingang und bei Storno bzw. ausbleibender Zahlung ändert das Modul den Bestellstatus automatisch und vermerkt die Komfortkasse-ID in der Bestellhistorie. Die Status sind je Zahlungsart frei wählbar. Bestellungen, die nicht mehr in einem der offenen Status stehen, etwa weil sie von Hand bearbeitet wurden, lässt das Modul unverändert.
- **Vorhandene Zahlungsmodule nutzen:** Das Modul arbeitet mit den Zahlungsmodulen des Shops, z. B. `moneyorder`, `eustandardtransfer`, `invoice` und `cod`. Es fügt im Checkout keine eigene Zahlungsart hinzu.
- **Rechnungsnummer und PDF-Rechnung:** Das Modul übergibt die Gambio-Rechnungsnummer (`gm_orders_code`) und das Rechnungsdatum (erster Wechsel auf die Status-ID 149) an Komfortkasse. Komfortkasse kann außerdem die PDF-Rechnung abrufen, die Gambio über `admin/gm_pdf_order.php` erzeugt.
- **Shopgate-Bestellungen:** Steht `mobile_payment` bei den Zahlungsart-Codes für Vorkasse, überträgt das Modul Shopgate-Bestellungen, die direkt an den Händler bezahlt werden („merchant payment“), samt Shopgate-Bestellnummer. Andere Shopgate-Bestellungen überträgt es nicht.
- **Verschlüsselte Übertragung:** Das Modul überträgt die Daten verschlüsselt, bevorzugt mit OpenSSL. Die Schlüssel setzt Komfortkasse beim Verbinden des Shops automatisch.
- **Echtzeit-Übertragung (optional):** Komfortkasse liest neue Bestellungen regelmäßig aus dem Shop aus. Mit der Echtzeit-Übertragung meldet das Modul jede neue Bestellung sofort, sodass der Käufer die Zahlungsinformationen ohne Wartezeit erhält.

## Voraussetzungen

- Gambio GX2 oder GX3 (Gambio 2.0 bis 3.x); Gambio GX4.1 und neuer wird nicht unterstützt
- Ein Komfortkasse-Account ([kostenlos registrieren](https://ssl.komfortkasse.eu/public/register.jsf))
- Ein Bankkonto, das Sie mit Komfortkasse verbinden ([unterstützte Banken](https://komfortkasse.eu/banken/)), oder ein integriertes Bankkonto von Komfortkasse
- Empfohlen: PHP mit OpenSSL-Erweiterung, für die Verschlüsselung und für die Echtzeit-Übertragung per HTTPS
- Schreibrechte für PHP in `callback/komfortkasse` (der Installer tauscht dort die `.htaccess` aus) und in `system/conf/admin_menu` (Menüeintrag)

## Installation in Gambio

Die Installation besteht aus fünf Schritten: Dateien kopieren, Installer aufrufen, Cache leeren, Einstellungen prüfen und den Shop mit dem Komfortkasse-Account verbinden.

1. **Dateien kopieren:** [Aktuelle Version als ZIP herunterladen](https://github.com/ltckomfortkasse/komfortkasse-gambio/archive/master.zip) und den Ordner `callback/komfortkasse` in den Ordner `callback` Ihres Shops kopieren. Ergebnis: `/callback/komfortkasse`.
2. **Installer aufrufen:** Im Browser `https://<ihr-shop>/callback/komfortkasse/install.php` öffnen. Ab Gambio 2.1 richtet der Installer alles selbst ein: Er legt die Einstellungen an, trägt deren Texte für alle Shop-Sprachen in die Datenbank ein und erzeugt den Menüeintrag als Datei `system/conf/admin_menu/menu_komfortkasse.xml`.
   - Nur unter Gambio 2.0 bricht der Installer mit einem Hinweis ab, solange die Komfortkasse-Zeilen in der Sprachdatei `lang/<sprache>/admin/configuration.php` fehlen (Vorlage: `callback/komfortkasse/lang/<sprache>/configuration.php`, dazu die Zeile `define('BOX_CONFIGURATION_<ID>','Komfortkasse');`, die der Installer anzeigt). Nach der Ergänzung den Installer erneut aufrufen.
3. **Cache leeren:** Im Admin-Bereich den Modul- und den Textcache leeren (Link im Installer, `admin/clear_cache.php`), damit der Menüpunkt „Komfortkasse“ und die Texte der Einstellungen erscheinen.
4. **Einstellungen prüfen:** Die Komfortkasse-Einstellungen öffnen (Link im Installer oder Menüpunkt „Komfortkasse“ im Admin-Bereich). „Export Bestellungen“ und „Update Bestellungen“ müssen aktiv sein. Die Zahlungsart-Codes und je Zahlungsart die Bestellstatus prüfen. Für Rechnung und Nachnahme sind die Status für Zahlungseingang und ausbleibende Zahlung ab Werk leer; wählen Sie sie, wenn Sie diese Zahlungsarten nutzen.
5. **Shop verbinden:** Den Shop in Ihrem Komfortkasse-Account verbinden. Verschlüsselung, Zugriffscode und Schlüssel werden dabei automatisch gesetzt und dürfen nicht geändert werden.

Nach der Installation stehen in den Einstellungen diese Standardwerte (Gambio-Status-IDs):

| Zahlungsart | Zahlungsart-Codes | Status offen bzw. versendet | Status Zahlung erhalten | Status keine Zahlung |
|---|---|---|---|---|
| Vorkasse | `moneyorder,eustandardtransfer` | `1` | `2` | `99` (storniert) |
| Rechnung | `invoice` | `149` | leer | leer |
| Nachnahme | `cod` | `3` | leer | leer |

Nach der Installation sperrt der Installer `install.php` per `.htaccess`. Gelingt das nicht, weist er darauf hin; benennen Sie `install.php` dann um.

Ausführliche Anleitung mit Screenshots: [Installationsanleitung](https://komfortkasse.freshdesk.com/support/solutions/articles/14000161599) (Screenshots aus xt:Commerce 3; laut Anleitung läuft die Installation in Gambio ähnlich, Gambio-Besonderheiten sind dort vermerkt).

### Echtzeit-Übertragung aktivieren (optional)

Ohne weitere Einrichtung liest Komfortkasse neue Bestellungen regelmäßig aus dem Shop aus. Für die Übertragung in Echtzeit kommt ein kurzer Code-Block an zwei Stellen hinzu: in `admin/orders.php` jeweils nach dem Eintrag eines neuen Status in die Bestellhistorie und im verwendeten Zahlungsmodul am Ende der Funktion `after_process`, z. B. in `includes/modules/payment/eustandardtransfer.php`. Den Code zeigt der Installer nach dem letzten Schritt an; er steht auch in der Installationsanleitung.

Der Installer empfiehlt außerdem, im Beschreibungstext des Zahlungsmoduls auf die gesonderte E-Mail mit den Zahlungsinformationen hinzuweisen, z. B. über `MODULE_PAYMENT_EUTRANSFER_TEXT_DESCRIPTION` in `lang/<sprache>/modules/payment/eustandardtransfer.php`.

## Update

Für ein Update kopieren Sie die neue Version über die bestehende und rufen den Installer erneut auf.

1. Ordner `/callback/komfortkasse` und Datenbank sichern.
2. Neue Version darüber kopieren.
3. `install.php` erneut aufrufen. Der Installer erkennt die bestehende Installation („switching to update mode“) und aktualisiert sie.
4. Modul- und Textcache leeren.

Nur unter Gambio 2.0: Meldet der Installer fehlende Sprachzeilen, ersetzen Sie die Komfortkasse-Zeilen in `lang/<sprache>/admin/configuration.php` durch den Inhalt von `callback/komfortkasse/lang/<sprache>/configuration.php`.

## Häufige Fragen

### Was kostet das Komfortkasse-Modul für Gambio?

Das Modul ist kostenlos. Für Komfortkasse selbst fällt eine prozentuale Gebühr pro Zahlungseingang an, ohne Grundgebühr und ohne Einrichtungsgebühr. Die aktuellen Sätze stehen auf der [Preisseite](https://komfortkasse.eu/preise/). Neue Accounts können Komfortkasse kostenlos testen.

### Ist das Komfortkasse-Modul ein Zahlungsmodul?

Nein. Das Komfortkasse-Modul fügt im Checkout keine Zahlungsart hinzu. Es arbeitet mit den Zahlungsmodulen, die der Gambio-Shop bereits nutzt, zum Beispiel `moneyorder` oder `eustandardtransfer` für Vorkasse, `invoice` für Rechnung und `cod` für Nachnahme. Welche Zahlungsart-Codes das Modul berücksichtigt, legen Sie in den Einstellungen fest.

### Was passiert, wenn die Bestellnummer fehlt oder der Betrag abweicht?

Komfortkasse ordnet Zahlungen fehlertolerant zu. Die Zuordnung funktioniert auch, wenn die Bestellnummer im Verwendungszweck fehlt, der Name des Zahlers nicht zum Besteller passt oder der Betrag abweicht. Auch Teil- und Überzahlungen behandelt Komfortkasse.

### Was passiert, wenn ein Käufer nicht zahlt?

Komfortkasse sendet automatisch Zahlungserinnerungen an den Käufer. Bleibt die Zahlung aus, setzt das Modul die Bestellung in Gambio auf den Status, den Sie dafür gewählt haben. Die Einstellungen unterscheiden nach Zahlungsart: „storniert“ bei Vorkasse (ab Werk Status-ID 99), „keine Zahlung/Inkasso“ bei Rechnung und „Zahlung ungeklärt“ bei Nachnahme.

### Welche Banken unterstützt Komfortkasse?

Komfortkasse arbeitet mit Ihrem eigenen Bankkonto oder mit einem integrierten Bankkonto von Komfortkasse. Welche Banken sich anbinden lassen, zeigt die Liste der [unterstützten Banken](https://komfortkasse.eu/banken/).

### Funktioniert das Komfortkasse-Modul mit Gambio GX4?

Nein, ab Gambio GX4.1 funktioniert das Komfortkasse-Modul nicht. Es ist für Gambio GX2 und GX3 gebaut. Ab Gambio GX4.1 gibt es die Datenbanktabelle `configuration` nicht mehr (die Einstellungen liegen dort in `gx_configurations`), und in der Tabelle `orders` fehlt die Spalte `gm_orders_code`; Installer und Modul brechen deshalb ab. Fragen zu neueren Gambio-Versionen beantwortet der [Komfortkasse-Support](https://komfortkasse.eu/kontakt/).

### Müssen für das Komfortkasse-Modul Dateien des Gambio-Shops geändert werden?

Ab Gambio 2.1 nein: Der Installer legt Einstellungen und Texte in der Datenbank an und erzeugt für den Menüeintrag die neue Datei `system/conf/admin_menu/menu_komfortkasse.xml`. Alle übrigen Dateien liegen im eigenen Ordner `/callback/komfortkasse`. Nur unter Gambio 2.0 kommen die Komfortkasse-Zeilen von Hand in die Sprachdatei `lang/<sprache>/admin/configuration.php`. Die optionale Echtzeit-Übertragung braucht kurze Ergänzungen in `admin/orders.php` und im Zahlungsmodul (siehe Installation).

### Gibt es Komfortkasse auch für andere Shopsysteme?

Ja. Komfortkasse gibt es unter anderem für Shopify, Shopware, WooCommerce, PrestaShop, xt:Commerce und modified eCommerce. Alle Systeme stehen in der [Übersicht der Shopsysteme](https://komfortkasse.eu/shopsysteme/), weitere Plugin-Repositories unter [github.com/ltckomfortkasse](https://github.com/ltckomfortkasse).

## Support

Fragen zur Einrichtung beantworten die [Hilfe-Seiten](https://komfortkasse.freshdesk.com/support/solutions/14000075022) und der [Komfortkasse-Support](https://komfortkasse.eu/kontakt/).

## English

**Komfortkasse module for Gambio (Gambio GX2 and GX3).** Komfortkasse automatically matches incoming bank transfers to open orders in your shop and updates the order status as soon as the payment has arrived. It supports prepayment by bank transfer (Vorkasse), invoice and cash on delivery. Komfortkasse is a service of LTC Information Services GmbH for online merchants in Germany, Austria and Switzerland.

The module supports Gambio GX2 and GX3 (Gambio 2.0 to 3.x); it does not work with Gambio GX4.1 or later. It does not add a payment method to the checkout; it works with the shop's existing payment modules (e.g. `moneyorder`, `eustandardtransfer`, `invoice`, `cod`). The module is free of charge; Komfortkasse itself is a paid service ([pricing](https://komfortkasse.eu/preise/)).

Installation: copy `callback/komfortkasse` into your shop's `callback` folder, open `https://<your-shop>/callback/komfortkasse/install.php`, clear the module and text cache, check the settings and connect the shop in your Komfortkasse account. More information: [Komfortkasse for Gambio](https://komfortkasse.eu/shopsysteme/gambio/) · [Installation guide (English)](https://komfortkasse.freshdesk.com/support/solutions/articles/14000161606)
