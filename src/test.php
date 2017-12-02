<?php

include_once 'NGramExtractor.php';
include_once 'Tokenizer.php';

use linguistic\NGramExtractor\NGramExtractor;
use linguistic\NGramExtractor\Tokenizer;

$content = '<h2>Vor Eröffnung eines Girokontos hilft Ihnen unser Vergleich bei der Entscheidung</h2>
<p class="lead">Sie wollen ein Girokonto eröffnen und wissen nicht worauf Sie Wert legen sollen? Gerade Direktbanken, welche keinen Filialservice anbieten und dadurch gute Konditionen anbieten, erschweren die Suche zusätzlich. Die Frage welche Kontoart man wählt, welche Guthabenverzinsung  geboten wird und welche Kontogebühr anfällt kann schnell unübersichtlich werden. Hier unterstützen wir Sie gerne. In unserem Vergleich erhalten Sie eine anschauliche Aufstellung aller aktuellen Top Anbieter. Sie können auf einen Blick die Gebühr, den Girozins, die Bargeldversorgung sowie die Abdeckung durch Automaten für das Geldabheben einsehen. Probieren Sie es aus.</p>

<div class="inhaltsvz">
<h2>Inhaltsverzeichnis:</h2>
<ol>
	<li><a href="#wichtige-fragen">Wichtige Fragen für Sie beantwortet</a></li>
	<li><a href="#vergleichen">Tipp: Prüfen Sie Ihre individuellen Alternativen!</a></li>
	<li><a href="#eckpunkte">Die wichtigsten Eckpunkte für Ihren individuellen Vergleich</a></li>
	<li><a href="#dispokredit">Schuldenfalle Dispokredit</a></li>
	<li><a href="#testsiegel">Testsiegel als weiteres Entscheidungskriterium</a></li>
	<li><a href="#funktionsweise">So funktioniert das Vergleichen</a></li>
</ol>
</div>
<h2 id="wichtige-fragen">Wichtige Fragen vor dem Eröffnen eines Girokontos kurz beantwortet</h2>
<div id="accordion" class="panel-group">
<div class="panel panel-default">
<div class="panel-heading"><span class="panel-title"><a href="#geldabheben" data-toggle="collapse" data-parent="#accordion">Wo kann ich kostenlos Bargeld abheben?</a></span></div>
<div id="geldabheben" class="panel-collapse collapse in">
<div class="panel-body">Direktbanken kooperieren in der Regel mit Filialbanken um Ihren Kunden ein großflächig verfügbares Automatennetz anzubieten. Bei den meisten Banken auf unserem Portal können Sie bei den gängigen Automatenbetreibern kostenfrei Bargeld abheben.</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#karten" data-toggle="collapse" data-parent="#accordion">Wo kann ich Bargeld einzahlen</a></h4>
</div>
<div id="karten" class="panel-collapse collapse">
<div class="panel-body">Ähnlich wie bei der Auszahlung verhält es sich auch mit der Einzahlung Ihres Bargelds. Ihre Direktbank bietet Ihnen hier in der Regel eine Partnerbank an, welche Bareinzahlungen über deren Geldautomaten mit Ihrer Girocard ermöglicht.</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading"><span class="panel-title"><a href="#weitere-girokonten" data-toggle="collapse" data-parent="#accordion">Ist es möglich, weitere Konten neben meinem neuen Konto zu unterhalten?</a></span></div>
<div id="weitere-girokonten" class="panel-collapse collapse">
<div class="panel-body">Selbstverständlich dürfen Sie mehrere Konten besitzen. Hier gibt es im Prinzip keine Einschränkung bei der Nutzung von Bankkoten.</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading"><span class="panel-title"><a href="#kreditkarte" data-toggle="collapse" data-parent="#accordion">Erhalte ich kostenfrei eine Kreditkarte zu meinem Konto?</a></span></div>
<div id="kreditkarte" class="panel-collapse collapse">
<div class="panel-body">Die meisten Online-Banken bieten Ihnen eine Kreditkarte zum Konto an. <strong>Nicht immer</strong> sind diese auch kostenlos. An welche Konditionen die Kreditkarten und Prepaidkreditkarten gebunden sind, erfahren Sie in unserer Vergleichstabelle.</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading"><span class="panel-title"><a href="#girokonto-sicher" data-toggle="collapse" data-parent="#accordion">Wie sicher ist mein Geld auf einem Girokonto?</a></span></div>
<div id="girokonto-sicher" class="panel-collapse collapse">
<div class="panel-body">In Deutschland gibt es eine gesetzlich vorgeschriebene Einlagensicherung. Durch eine Einlagensicherung ist Ihr Guthaben bis zu einer Höhe von mindestens 100.000 gesichert. Wie hoch Kapital bei einzelnen Banken abgesichert ist, erfahren Sie auf unseren Unterseiten zu den einzelnen Banken.</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading"><span class="panel-title"><a href="#girokonto-arten" data-toggle="collapse" data-parent="#accordion">Welche Arten von Konten gibt es?</a></span></div>
<div id="girokonto-arten" class="panel-collapse collapse">
<div class="panel-body">Auch wenn sich die meisten Konten im Wesentlichen in ihrer Funktion überschneiden, gibt es Konten mit speziellen Einsatzmöglichkeiten. Beispielsweise bieten viele Banken spezielle Kunden für <a href="http://www.girokonto-test.eu/info/geschaeftskonto/">Gewerbetreibende</a>, für <a href="http://www.girokonto-test.eu/info/schueler/">Schüler</a>, <a href="http://www.girokonto-test.eu/info/studenten/">Studenten</a> oder <a href="http://www.girokonto-test.eu/info/auszubildende/">Auszubildende</a> an.</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading"><span class="panel-title"><a href="#kontoeinrichtung" data-toggle="collapse" data-parent="#accordion">Wie schnell steht mein neues Konto zur Verfügung?</a></span></div>
<div id="kontoeinrichtung" class="panel-collapse collapse">
<div class="panel-body">Nach dem Absenden Ihrer Eröffnungsunterlagen dauert es in der Regel ungefähr ein bis zwei Wochen bis zur Kontoeröffnung. Anschließend können Sie Ihr Konto in vollem Umfang nutzen. Die eigentliche Bearbeitung von Ihrem Kontoantrag dauert maximal einen Werktag. Im Anschluss erhalten Sie postalisch Ihre Karten (Kundekarte, Bankkarte, Kreditkarte) und Zungangsdaten (Kontonummer, Geheimnummer, TAN-Listen wie iTAN, mTAN, chipTAN o. ä.).
<strong>Wir empfehlen Ihnen</strong> Ihr altes Konto erst zu kündigen (sofern Sie eine Kündigung Ihres alten Kontos planen) nachdem das neue Girokonto einsatzbereit ist.</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading"><span class="panel-title"><a href="#kontowechsel" data-toggle="collapse" data-parent="#accordion">Wie funktioniert ein Kontowechsel?</a></span></div>
<div id="kontowechsel" class="panel-collapse collapse">
<div class="panel-body">Sie beginnen mit der Auswahl und dem Antrag Ihres neuen Girokontos. Anschließend sollten Sie alle regelmäßigen Einzahlungen (Gehalt o. ä.) auf das neue Konto übertragen. Ebenfalls sollten Sie auch bestehende Lastschriften auf das neue Konto ändern. Wenn das neue Konto verfügbar ist können Sie das alte Konto auflösen. Grundsätzlich ist ein Kontowechsel nicht kompliziert, es gibt jedoch einige Banken die Ihnen zusätzlich einen kostenfreien Kontowechselservice anbieten. Lesen Sie hierzu auch <a href="http://www.girokonto-test.eu/magazin/checkliste-wechseln/">unseren Ratgeber zum Thema</a>.</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading"><span class="panel-title"><a href="#ablehnung" data-toggle="collapse" data-parent="#accordion">Kann mein Antrag auf Kontoeröffnung abgelehnt werden?</a></span></div>
<div id="ablehnung" class="panel-collapse collapse">
<div class="panel-body">In Deutschland steht jedem Bürger mindestens ein Bankkonto zu. Banken dürfen darüber hinaus jederzeit einen Antrag ablehnen, sofern Zahlungsrückstände bei einem früheren Zahlungspartner bekannt sind, oder der Kunde vor der Bank bereits negativ in Erscheinung getreten ist. Lesen Sie hier zu auch <a href="http://www.girokonto-test.eu/info/girokonto-ohne-schufa/">Informationen über Girokonten ohne Schufa</a> oder <a href="http://www.girokonto-test.eu/info/fuer-jedermann/">Konto für Jedermann</a>.</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading"><span class="panel-title"><a href="#praemien" data-toggle="collapse" data-parent="#accordion">Sind eventuelle Prämien oder ein Bonus mit Bedingungen verknüpft?</a></span></div>
<div id="praemien" class="panel-collapse collapse">
<div class="panel-body">Viele Angebote besitzen eine Prämie für die Kontoeröffnung. In seltenen Fällen ist diese mit keinen Bedingungen verbunden. Häufig wird jedoch ausgeschlossen, dass Sie bereits Kunde bei der Bank sind. Weitere Bedingungen können ein Mindestgeldeingang oder eine bestimmte Anzahl an monatlichen Transaktionen sein. Bei uns haben Sie die Möglichkeit diese Bedingungen transparent einzusehen und haben stets alles im Überblick.</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading"><span class="panel-title"><a href="#versteckte-kosten" data-toggle="collapse" data-parent="#accordion">Gibt es versteckte Kosten bei einem Girokonto?</a></span></div>
<div id="versteckte-kosten" class="panel-collapse collapse">
<div class="panel-body">In der Regel gehen alle bei uns gelisteten Anbieter sehr transparent auf Kosten in ihren Angeboten ein. Wir versuchen diese möglichst übersichtlich für Sie aufzubereiten. Daher können Sie davon ausgehen, dass es keine weiteren Kosten wie angegeben für Sie geben wird. Sollte Ihnen ein Fehler auffallen, würden wir uns über Feedback per Mail sehr freuen.</div>
</div>
</div>
</div>
<h2 id="vergleichen">Tipp: Prüfen Sie Ihre individuellen Alternativen!</h2>
Girokonten, auch <em>Kontokorrentkonten</em> genannt, werden in einigen Varianten angeboten.
<div class="panel panel-primary">
<div class="panel-heading">
<h3>Die häufigsten Arten des Girokontos</h3>
</div>
<div class="panel-body">
<ul>
	<li>für Geschäftstransaktionen</li>
	<li>für Private</li>
	<li>für besondere Zielgruppen (zum Beispiel für Studenten, für Kinder oder Jugendliche)</li>
	<li>Das Guthabenkonto ohne Dispo (wird auch als "ohne Schufa" bezeichnet)</li>
	<li>Das pfändungsfreie Girokonto (auch P-Konto genannt)</li>
</ul>
</div>
</div>
<blockquote>Sicherlich besitzen Sie bereits ein Girokonto. Doch ist dieses im Gegensatz zu den anderen Angeboten auch das Beste für Sie?

Sie sind schon seit vielen Jahren Kunde derselben Bank und kennen Ihren Betreuer persönlich. Doch profitieren Sie auch finanziell von Ihrer Bank?</blockquote>
Über die Jahre ist das Angebot an der Girokonten deutlich gestiegen. Zu den zahlreichen <strong>Filialbanken</strong> gesellen sich immer mehr <strong>Direktbanken</strong>. Sie können aufgrund der geringeren Fixkosten deutlich günstigere Konditionen anbieten. Außerdem bieten Sie den Vorteil, bequem und komfortabel von zu Hause aus selbst verwaltet werden zu können. Dafür benötigen Sie jedoch Internet. Außerdem fehlt vielen Kunden der direkte Kontakt mit dem Berater. Sowohl Filialbanken als auch Direktbanken haben ihre Vor- und Nachteile.

Führen Sie einen Vergleich der aktuellen Angebote durch. Erfahren Sie, welches Konto die beste Lösung für Sie ist. Hierbei werden die einzelnen Merkmale, wie die <strong>Gebühren für die Kontoführung</strong>, <strong>Habenzinsen</strong> oder <strong>Neukundenboni</strong> hinsichtlich der individuellen Wünsche bewertet. Bei uns können Sie diesen Preisvergleich einfach online durchführen. Sie können jedoch nicht nur Girokonten vergleichen, sondern im Anschluss direkt ein neues Girokonto eröffnen. Erkundigen Sie sich und steigern Sie bequem Ihre Erträge.

Zuvor sollten Sie jedoch erfahren, worauf es beim Vergleich der Angebote konkret ankommt!
<h2 id="eckpunkte">Die wichtigsten Eckpunkte für Ihren individuellen Vergleich</h2>
Sie möchten noch in diesem Jahr wechseln und Girokonten vergleichen? Dann kommt es vor allem auf folgende Punkte an:
<div id="accordion" class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#einkommen" data-toggle="collapse" data-parent="#accordion"> Regelmäßiges Einkommen</a></h4>
</div>
<div id="einkommen" class="panel-collapse collapse in">
<div class="panel-body">Viele Angebote sind von der <strong>Höhe des monatlichen Einkommens</strong> abhängig. Sie können derzeit kein regelmäßiges Einkommen vorweisen? Dann sollten Sie beim Girokontenvergleich vor allem bei kostenlosen Angeboten gut hinsehen. Die meisten Anbieter machen solche Angebote von einem regelmäßigen Einkommen abhängig. Für Sie können solche vermeintlich „kostenlosen“ Konten deutlich mehr kosten, als so manch anderes.</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#kontofuehrung" data-toggle="collapse" data-parent="#accordion"> Kostenlose Kontoführung</a></h4>
</div>
<div id="kontofuehrung" class="panel-collapse collapse">
<div class="panel-body">Gebühren für die Kontoführung werden nach wie vor von vielen Banken berechnet. Diese Gebühren können Sie sich jedoch sparen! Es gibt bereits viele Banken, die eine <strong>kostenlose Kontoführung</strong> anbieten. Nutzen Sie diese Angebote!</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#karten" data-toggle="collapse" data-parent="#accordion"> Kreditkarte und EC-Karte</a></h4>
</div>
<div id="karten" class="panel-collapse collapse">
<div class="panel-body">Ist die <strong>Kreditkarte</strong> oder <strong>EC-Karte</strong> für Sie unbedingt notwendig? Dann sollten Sie beim genau hinsehen! Besonders wichtig sind dabei der gewährte Kontorahmen und die monatlichen Gebühren. Diese werden in der Regel jedes Quartal oder jährlich für die Kartennutzung verrechnet.</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#zinsen" data-toggle="collapse" data-parent="#accordion"> Habenzinsen und Sollzinsen</a></h4>
</div>
<div id="zinsen" class="panel-collapse collapse">
<div class="panel-body">Die Höhe der Zinsen ist bei jeder Kontolösung wichtig. Hinsichtlich der Zinsen sind aber vor allem auch die eigenen Verhaltensmuster wichtig. Gehören Sie zu den Menschen, die gerne den <strong>Disporahmen ausnutzen</strong>? Oder haben Sie immer eine „eiserne Reserve“ auf Ihrem Konto? Bei letzterem sind die Guthabenzinsen genau zu betrachten. Konzentrieren Sie sich bei der Wahl Ihres Kontos auf möglichst gute Guthabenverzinsung oder auf möglichst niedrige Sollzinsen.</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#buchungen" data-toggle="collapse" data-parent="#accordion"> Beleghafte und beleglose Buchungen</a></h4>
</div>
<div id="buchungen" class="panel-collapse collapse">
<div class="panel-body">Häufig unterscheiden Banken zwischen beleghaften und beleglosen (elektronischen) Überweisungen. Für traditionell beleghafte Überweisungen mit Überweisungsschein fällt unter Umständen eine pauschale Gebühr für die Transaktion an.</div>
</div>
</div>
</div>
Zusätzlich gibt es aber auch noch <strong>zahlreiche andere wichtige Merkmale</strong>, die man bei einem Vergleich der Angebote beachten sollte. Mit Hilfe des Vergleichs können all diese Punkte schnell und simpel bedacht werden.
<h3>Sonstige wichtige Faktoren</h3>
Neben den vorhin genannten relevanten Punkten, sollten Sie auch Folgendes beim eröffnen eines Girokontos beachten:
<ul>
	<li>die Filialdichte und</li>
	<li>die Möglichkeit der Bargeldbehebung</li>
</ul>
<blockquote><strong>Schon gewusst?</strong>

Viele Banken gehen Kooperationen mit anderen Banken oder branchenfremden Unternehmen ein, um ihren Kunden ein größeres Netz an Bargeldautomaten zu bieten. Damit können Sie z.B. auch beim Discounter oder bei der Tankstelle um die Ecke Bargeld von Ihrem Konto abheben!</blockquote>
<img class="alignright size-thumbnail wp-image-223" src="http://www.girokonto-test.eu/wp-content/uploads/2014/07/geldstapel-150x150.png" alt="girokonto vergleich" width="150" height="150" />

Für viele Kunden ist es immer noch wichtig, direkten Kontakt zur Bank zu pflegen. Bei Direktbanken kann ein <strong>persönlicher Kontakt</strong> jedoch nicht immer angeboten werden. Wer großen Wert darauf legt, an einem Schalter bedient zu werden, sollte beim Girokontenvergleich daher gerade darauf vermehrt achten.

Wenn Sie kein Problem damit haben Ihre Geldgeschäfte selbst zu verwalten, können Sie allerdings bei Direktbanken meist einiges sparen!

Noch weit wichtiger als die Filialdichte der Banken ist jedoch die <strong>Bargeldbehebung</strong>. Beim Vergleichen kommt es daher auch auf eine möglichst hohe Anzahl an verfügbaren Bankautomaten an.
<h3>Worauf Sie beim Vergleich außerdem noch achten sollten:</h3>
<ul>
	<li>Startboni und Aktionen für Neukunden</li>
	<li>Ist das Konto gebührenfrei?</li>
	<li>Zielgruppenorientierte Sonderkonditionen</li>
	<li>Etwaige Zusatzkosten, wie zum Beispiel für Überweisungen, Kontoführung, Abhebungen oder Kontoauszüge</li>
</ul>
<h2 id="dispokredit">Schuldenfalle Dispokredit</h2>
<img class="alignright size-thumbnail wp-image-234" src="http://www.girokonto-test.eu/wp-content/uploads/2014/07/hohe_prioritaet-150x150.png" alt="hohe_prioritaet" width="150" height="150" />

Häufig tappen Kontobesitzer in die <strong>Schuldenfalle Dispokredit</strong>. Sie reizen viel zu schnell und viel zu leichtsinnig die Möglichkeiten des Dispositionskredites ihres Kontorahmens aus.

Natürlich ist ein Dispokredit im Grunde sehr praktisch. Muss man kurzfristig Geldmittel bereitstellen, kann ein Dispokredit unkompliziert und schnell weiterhelfen. Was jedoch, wenn Ihre Konditionen <strong>überhöhte Dispozinsen</strong> beinhalten? Schnell wird Ihr Dispo auf diese Weise zu einem Schuldenberg!

Wenn Sie den Dispokredit Ihres Girokontos ausnützen möchten, sollten Sie daher beim Vergleich auf die Dispozinsen achten!
<blockquote>Achtung bei den Dispozinsen: Unterschiede zwischen 8 und 20 Prozent sind hier keine Seltenheit!</blockquote>
<h2 id="testsiegel">Testsiegel als weiteres Entscheidungskriterium</h2>
Beachten Sie unabhängige Testsiegel und Bewertungen, wenn Sie online vergleichen!

Unabhängige Organisationen nehmen die Konditionen und Angebote der Banken genau unter die Lupe. Das Ergebnis ist eine Gesamtnote für jedes Bankprodukt. Zu den Bekanntesten zählen zum Beispiel:
<ul>
	<li>Stiftung Warentest</li>
	<li>die Verbraucherzentrale oder</li>
	<li>der Deutsche Konsumentenbund</li>
</ul>
Die <strong>Ergebnisse und Bewertungen</strong> werden publiziert. Sie sind somit auch für Sie jederzeit vor dem eröffnen eines Kontos einsehbar.
<h2 id="funktionsweise">So funktioniert der Girokonto Vergleich</h2>
Bei uns finden Sie schnell und einfach die günstigsten Alternativen für Sie.

Halten Sie die wichtigsten Daten zu Ihrem Wunschkonto bereit. Zu diesen gehören:
<ul>
	<li>der monatliche Zahlungseingang</li>
	<li>Ihr Berufsstatus</li>
	<li>die durchschnittliche Überziehung pro Monat</li>
	<li>Wunsch nach einer kostenlosen EC- Girocard oder Kreditkarte</li>
	<li>Verhalten beim Überweisen: sollen beleghafte oder beleglose Überweisungen den Tarif beeinflussen?</li>
	<li>Macht es Sinn auf eine Guthabenverzinsung zu spekulieren und Wert auf einen vorhandenen Girozins zu legen?</li>
</ul>
Nach der Eingabe aller wichtigen Daten, erhalten Sie eine Liste der besten Lösungen. Der Online Rechner zeigt Ihnen jedoch nicht nur, welches Girokonto das Günstigste für Sie ist. Sie erfahren, welche Girokonten im Vergleich und in Bezug auf die angebotenen Service Leistungen und Konditionen, Ihre Anforderungen am besten erfüllen. Damit werden Ihnen alle Fragen beantwortet bevor Sie Ihr neues Konto eröffnen.
<h2 id="eroeffnen">Das neue Online-Girokonto eröffnen – Leitfaden für Sie</h2>
Nachfolgend haben wir Ihnen eine Übersicht aller wichtigen Punkte zur Kontoeröffnung zusammengestellt. Damit möchten wir Ihnen vor dem eröffnen einen Leitfaden an die Hand geben, mit dem keine Fragen offen bleiben. Sie können unseren Leitfaden <a href="http://www.girokonto-test.eu/wp-content/uploads/2017/11/Leitfaden-Girokonto-eröffnen.pdf" target="_blank">unter dieser Adresse auch kostenfrei als PDF herunterladen</a>.
<h3>Passende Kontoart auswählen und individuelle Konditionen berechnen</h3>
Einen passenden Anbieter für sein neues Konto zu finden, kann sehr schnell unübersichtlich werden. Nutzen Sie unseren Vergleich, wo Sie alle Konditionen der Banken auf einen Blick einsehen können. Sie finden in unserer Tabelle alle für Sie relevanten Informationen. Unter anderem sind die wichtigsten Eigenschaften von Girokonten der jeweiligen Anbieter mit Anbieternamen, einer von uns erstellte Gesamtnote des Bankproduktes, Informationen zum Filialservice und der Bargeldversorgung ergänzt. Darüber hinaus erhalten Sie aktuelle Konditionen zur Kontogebühr, den Dispozinsen, oder falls vorhanden den Girozins auf Ihr angespartes Guthaben. Auch Detailinformationen wie die Kosten für beleghafte Buchungen, dem Geldabheben oder der Handhabung von Daueraufträgen können Sie unserer Tabelle entnehmen – probieren Sie es aus und kontaktieren Sie uns jederzeit gerne, wenn Ihnen noch etwas unklar ist.
<h4>Einfach online eröffnen – keine Filialen erforderlich</h4>
Sicher haben Sie schon in Erwägung gezogen, direkt in den Filialen Ihrer örtlichen Hausbank einen Berater aufzusuchen um Ihr neues Konto zu eröffnen. Gerade wenn es um Ihre Finanzen geht, möchten Sie nichts dem Zufall überlassen und haben vielleicht auch den ein oder anderen Zweifel gegenüber einem Online-Anbieter ohne direkten Filialservice. Das können wir von girokonto-test.eu sehr gut nachvollziehen. Doch Ihre Bedenken können wir ausräumen: Alle Anbieter, die Sie bei uns gelistet finden verfügen über eine Einlagensicherung, sowie einen Anlegerschutz und sind vor dem Gesetz mit allen Rechten und Pflichten einer Filialbank ausgestattet. Was den Online-Zahlungsverkehr anbelangt, bieten Ihnen diese spezialisierten Anbieter <strong>Sicherheitsmaßnahmen auf höchstem Niveau</strong>. Und nicht zuletzt kooperieren Online-Banken sehr häufig mit einer oder mehreren Filialbanken um durch deren Automaten Ihre Bargeldversorgung gebührenfrei flächendeckend zu gewährleisten.

Aber der wohl größte Vorteil von Online-Anbietern ist, dass diese in der Regel den eingesparten Filialservice an Ihre Kunden weiterreichen können. Das bedeutet, dass das Eröffnen eines Girokontos in den meisten Fällen gebührenfrei ist und auch für die Kontoführung in der Regel keine Kosten für Sie anfallen. Eine Girocard, manchmal auch als Motivkarte mit Ihrem Wunschmuster verfügbar, sowie in vielen Fällen auch eine kostenlose Kreditkarte erhalten Sie dazu oben drauf. Das Verwalten von Daueraufträgen an Ihre Zahlungspartner und Buchungen über das Online-Banking erledigen Sie anschließend bequem von zu Hause aus.
<h4>Die Eröffnungen von Online-Konten steigen Rasant</h4>
Eine Vielzahl von Online-Bank Kunden kann nicht irren. Nachfolgend haben wir Ihnen eine Statistik aufbereitet, die den Wachstum von Kontoeröffnungen in den letzten acht Jahren zeigt. Die Nachfrage steigt ständig und immer mehr deutsche Bürger vertrauen auf die ausgezeichneten Online-Anbieter.

[caption id="attachment_1025" align="aligncenter" width="650"]<img class="size-full wp-image-1025" src="http://www.girokonto-test.eu/wp-content/uploads/2014/07/statistik-kontoeröffnungen-e1511983554481.png" alt="Statistik aller Girokontoeröffnungen von 2009 bis 2016" width="650" height="489" /> Statistik aller Girokontoeröffnungen von 2009 bis 2016, Quelle: Statista.de[/caption]
<h4>Girocard, Kontogebühr, Bargeldversorgung – wo liegen Ihre Wünsche?</h4>
Bevor Sie mit der Eröffnung eines neuen Kontos beginnen, sollten Sie vorab Ihre persönlichen Wünsche aufschreiben. Was ist Ihnen bei einem Girokonto wichtig? Möchten Sie das Konto für Ihren Gehaltseingang nutzen, oder soll es nur dazu dienen Guthaben anzusparen? Hier zählt jedes Detail – denn je nach Ihren Ansprüchen an das neue Konto können die Vorteile eines einzelnen Anbieters überwiegen. Es hat sich bewährt, eine Aufstellung Ihrer Anforderungen auf einem Blatt Papier festzuhalten und anschließend alle Anbieternamen aus unserer Tabelle durchzugehen und Ihre eigene Vergleichstabelle mit einer Gesamtnote zu erstellen. Das Ergebnis sollte der perfekte Anbieter für Ihr Vorhaben sein. Anschließend können Sie direkt zur Kontoeröffnung übergehen.
<h3>Eröffnen des neuen Kontos in vier einfachen Schritten</h3>
Nachdem Sie Ihre Wahl getroffen haben geht es an die Kontoeröffnung. Dies ist in einigen wenigen Schritten leicht möglich. Dass Banken mit einem Onlinekonto keinen Filialservice anbieten braucht Sie dabei keinesfalls verunsichern – eher im Gegenteil, denn Sie erledigen alles <strong>ganz bequem von zu Hause aus</strong>.
<ul>
	<li><strong>Schritt 1</strong>: Wählen Sie aus unserer <a href="#">Vergleichstabelle</a> Ihren Favoriten aus und klicken Sie auf „zum Angebot“. In dieser Tabelle finden Sie eine Übersichtliche Aufstellung mit Anbieternamen, Gesamtnote, Kontoart, sowie Gebühren für die Kontoführung.</li>
	<li><strong>Schritt 2</strong>: Sie gelangen anschließend zur dem von Ihnen ausgewählten Anbieter. Lesen Sie die Instruktionen um zum Onlineantrag zu gelangen. Anschließend füllen Sie den Onlineantrag aus und senden ihn direkt online an die Bank.</li>
	<li><strong>Schritt 3</strong>: Der Anbieter (die ausgewählte Bank) teilt Ihnen nach dem Ausfüllen des Eröffnungsantrages alle erforderlichen Dokumente zur Identifizierung mit. Übermitteln Sie diese anschließend an den Anbieter</li>
	<li><strong>Schritt 4</strong>: Nach einer kurzen Prüfungsphase, in der die Bank eine Einschätzung Ihrer Person vornimmt, wird der Antrag für die Eröffnung freigegeben und ein Mitarbeiter wird Ihr Kundenkonto eröffnen.</li>
</ul>
<img class="size-full wp-image-1026" src="http://www.girokonto-test.eu/wp-content/uploads/2014/07/girokonto_eroeffnen_anleitung.png" alt="Anleitung zum Eröffnen eines Girokontos" width="1000" height="250" />
<h3>Kündigung Ihres alten Kontos</h3>
Je nachdem, wie Sie Ihr neues Konto nutzen möchten, sollten Sie auch in Erwägung ziehen Ihr altes Konto zu kündigen um weitere Kosten dafür einzusparen. Dies kann aber je nach Kontoart von Ihrer individuellen Situation abhängen. Möchten Sie das Konto komplett <a href="http://www.girokonto-test.eu/magazin/checkliste-wechseln/">zu einem anderen Anbieter wechseln</a> und Ihr bestehendes auflösen, dann sollten Sie vorab einige Vorkehrungen treffen. So sollten Sie zunächst bestehendes Guthaben von Ihrem alten Konto nach der Eröffnung auf das neue übertragen. Auch bestehende Daueraufträge für Mietzahlungen und ähnliches sollten Sie übertragen, darauf wird im nächsten Abschnitt des Textes näher eingegangen. Unbedingt beachten sollten Sie auch <a href="http://www.girokonto-test.eu/magazin/kuendigungsfristen/">mögliche Kündigungsfristen bei Girokonten</a>. Unter folgendem Artikel haben wir Ihnen alle wichtigen Punkte zum Kontowechsel übersichtlich bereitgestellt: <a href="http://www.girokonto-test.eu/magazin/konto-kuendigen/">Girokonto kündigen – so einfach geht’s!</a>
<h4>Erstellen Sie eine Übersicht Ihrer Zahlungspartner – Umleiten von Daueraufträgen</h4>
Stellen Sie sicher, dass Sie durch Ihren Wechsel nicht mit Zahlungspartnern in Zahlungsverzug geraten. <strong>Wir empfehlen, Ihr altes Konto nicht zu kündigen bevor Sie Ihr neues Konto in Betrieb nehmen.</strong> Sie sollten hier vor Inbetriebnahme des neuen Girokontos einen Umzug aller Zahlungspartner vom alten auf das neue Konto vornehmen. Am besten erstellen Sie eine komplette Aufstellung von bestehenden Daueraufträgen, bevor Sie Ihr altes Konto schließen. Die bestehenden Posten können Sie dann bequem im Folgemonat von Ihrem neuen Konto aus abwickeln lassen. Eine Aufstellung aller bestehenden Daueraufträge sollten Sie in Ihrem girokonto ich vergleich Online-Portal oder wahlweise über die örtliche Filiale Ihrer Hausbank erhalten.
<h3>Benötigte Unterlagen zur Kontoeröffnung bereithalten</h3>
Um sich bei Ihrer neuen Bank zu legitimieren benötigen Sie in der Regel als Privatperson lediglich die gesetzlich vorgeschriebenen Dokumente. Zu den Online-Antragsunterlagen müssen Sie hier eine Kopie Ihres Personalausweises oder dem Reisepass zusammen mit einer gültigen Meldebestätigung nach dem Eröffnen bei der Bank einreichen. Die Prüfung findet in Ihrer nächsten Postfiliale <strong>per Post-Ident-Verfahren</strong> statt. Je nach Anbieter können im Ausnahmefall noch weitere Dokumente erforderlich sein
<h3>Informationen zur Abgeltungssteuer</h3>
Die Abgeltungssteuer ist Vergleichbar mit der Einkommensteuer. Sie existiert seit dem 1. Januar 2009 und wird auf Erträge aus Kapitalvermögen erhoben. Darunter fällt zum Beispiel der Girozins bei einem Girokonto. Der Steuersatz setzt sich dabei aus der tatsächlichen Abgeltungssteuer (25 %), sowie dem Solidaritätszuschlag (5,5 % auf die Abgeltungssteuer) zusammen und <strong>beträgt 26,38 %</strong>. Die Abgeltungssteuer wird direkt von der Bank an das Finanzamt abgeführt, sofern dieser kein girokonto-vergleich Freistellungsauftrag vorliegt. Bis zu einem <strong>Freibetrag</strong> von 801,00 Euro für Ledige und 1.602,00 Euro für Ehepaare bleiben Erträge aus Kapitalvermögen jedoch unversteuert. Um diesen, sogenannten, Sparer-Pauschbetrag geltend zu machen, müssen Sie einen <strong>Freistellungsauftrag für Kapitalerträge</strong> bei Ihrer Bank einreichen. Die Frist hierfür ist der letzte Arbeitstag der Bank für das aktuelle Kalenderjahr. Sollten Sie diese Frist versäumen, kann die Abgeltungssteuer alternativ auch über Ihre Einkommensteuer geltend gemacht werden. Weiter Informationen zum Thema finden Sie bei der <a href="https://www.vlh.de/wissen-service/steuer-abc/wie-funktioniert-die-abgeltungssteuer.html" target="_blank">Vereinigte Lohnsteuerhilfe e. V. im Netz</a> oder direkt bei Ihrer Bank.';

//echo mb_strtolower($content);

$stopwords = file('/Library/Webserver/Documents/wordpress-bachelor/wp-content/plugins/lingutest/stopwords/de_DE.txt', FILE_IGNORE_NEW_LINES);
$stopwords = array_map("utf8_encode", $stopwords);

$tokenizer = new Tokenizer();
$tokenizer->addRemovalRule('/[<|\[]\/?\w+[\s\w\=\"\/\#\-\:\.\_äöüß]*[>|\]]/')
    ->addRemovalRule('/[^a-z0-9äöüß]+/')
    ->setSeperator('/\s+/');
$extractor = new NGramExtractor($content);
$extractor->setTokenizer($tokenizer)
    ->setStopWords($stopwords);
$zgrams = $extractor->getNGramUniqueWithCountClean(3);

$key = "vergleich";

foreach ($zgrams as $zg => $val) {
    if (strpos($zg, $key) !== false) {
        echo $zg . "\t\t\t\t\t(" . $val . ")\n";
    }
}

exit();
$file = '/Users/mark/Scripte/Python/TextRank/tex.html';
$text = file_get_contents($file);

// ->addRemovalRule('/[^a-z0-9]+/')
// ->addRemovalRule('/<\/?\w+[\s\w\=\"\/]*>/');
$text = preg_replace('/<\/?\w+[\s\w\=\"\/\#\-]*>/', ' ', $text);
$text = preg_replace('/[^a-z0-9]+/', ' ', $text);

print($text);
