<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'mlbackend_lmswithaipython'
 *
 * @package   mlbackend_lmswithaipython
 * @copyright 2023 LMSwithAI {@link https://lmswithai.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['errornoconfigdata'] = 'Konfiguracja nie jest kompletna. Nie ustawiono klucza dostępu.';
$string['errorserver'] = 'Błąd serwera {$a}';
$string['packageinstalledshouldbe'] = 'Pakiet moodlemlbackend Python powinien zostać zaktualizowany. Wymagana wersja to "{$a->required}", a zainstalowana wersja to "{$a->installed}".';
$string['packageinstalledtoohigh'] = 'Pakiet moodlemlbackend Python nie jest kompatybilny z tą wersją Moodle. Wymagana wersja to "{$a->required}" lub wyższa, o ile jest kompatybilna z API. Zainstalowana wersja "{$a->installed}" jest zbyt wysoka.';
$string['pluginname'] = 'Backend uczenia maszynowego LMSwithAI Python';
$string['privacy:metadata'] = 'Wtyczka backendu uczenia maszynowego LMSwithAI Python nie przechowuje żadnych danych osobowych.';
$string['pythonpackagenotinstalled'] = 'Pakiet moodlemlbackend Python nie jest zainstalowany lub występuje z nim problem. Proszę wykonać "{$a}" z linii poleceń, aby uzyskać więcej informacji.';
$string['pythonpathnotdefined'] = 'Ścieżka do Twojego wykonywalnego pliku binarnego Python nie została zdefiniowana. Proszę odwiedzić "{$a}", aby ją ustawić.';
$string['serversettingsinfo'] = 'Aby uzyskać swój klucz dostępu, należy wysyłać email na adres <a href="mailto:contact@lmswithai.com">contact@lmswithai.com</a>';
$string['apikey'] = 'Klucz dostępu do LMSwithAI';
$string['apikeyfail'] = 'Klucz dostępu, błędna autoryzacja';
$string['apikeydesc'] = '';
$string['tensorboardinfo'] = 'Uruchom TensorBoard';

