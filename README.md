# php_excercises4
Aufgaben php: soap, rest datenbankzugriffe // bibinfo16 // M.Block

Aufgabe 1: 
SOAP	WEB	SERVICE	CLIENT	
1.  Erstellen	Sie	einen	SOAP	basierten	Web	Service-Client	für	die	Abfrage	von	Wetterinformationen.	
Verwenden	Sie	dazu	die	GetWeather-Methode	des	Dienstes.	
a.  Doku:	http://www.webservicex.com/globalweather.asmx	
b.  WSDL:	http://www.webservicex.com/globalweather.asmx?WSDL	
c.  Die	Informationen	werden	in	XML	geliefert.	Parsen	Sie	die	Informationen	mit	einem	
beliebigen	Parser	und	geben	Sie	die	Informationen	in	strukturierter	Darstellung	übersichtlich	
aus	(z.B.	als	Liste	oder	Tabelle).	
d.  Hinweise:	
i.  Beachten	Sie,	dass	die	XML	Zeichenkette	als	Property	in	einer	stdClass	enthalten	ist.	
Es	bietet	sich	an	die	die	Datenstruktur	mit	einem	Variablen-Dump	zunächst	zu	
untersuchen.	
ii.  Bei	der	Implementierung	werden	Sie	feststellen,	dass	der	Dienst	einen	Fehler	
aufweist.	Im	XML	wird	als	Codierung	UTF-16	angegeben,	allerdings	Zeichen	des	UTF-
8	Zeichensatzes	genutzt.	Dies	führt	in	PHP	zur	Fehlermeldung:	„Document	labelled	
UTF-16	but	has	UTF-8	content	in	Entity“.	Ein	Workaround	zur	Vermeidung	des	
Fehlers	ist,	dass	Sie	mittels	preg_replace	„UTF-16“	durch	„UTF-8“	ersetzen.	
2.  Führen	Sie	die	Anfragen	an	den	Dienst	mit	drei	unterschiedlichen	Städten	durch.	
