<?php
/*
 * Re:act — Privacy Policy (EN / PL). Polish with ?lang=pl.
 * The game collects no personal data: only anonymous gameplay metrics and crash reports.
 */
require_once __DIR__ . '/../../_includes/functions.php';

$page_path  = '/react/privacy/';
$page_langs = ['en', 'pl'];
$pl = select_lang($page_langs) === 'pl';

$effective = '2026-11-11';
$game_href = game_url('react');

$page_title = $pl ? 'Re:act – polityka prywatności | Massive Mustache' : 'Re:act Privacy Policy | Massive Mustache';
$page_description = $pl
  ? 'Polityka prywatności gry Re:act studia Massive Mustache. Gra nie zbiera danych, które cię identyfikują, tylko metryki rozgrywki i raporty o awariach.'
  : 'Privacy Policy for the game Re:act by Massive Mustache. The game collects no data that identifies you, only gameplay metrics and crash reports.';
$current_game = 'react';

include __DIR__ . '/../../_includes/header.php';
?>
        <section class="legal" aria-labelledby="legal-title">
          <div class="shell">
            <div class="press-topline">
              <p class="section-kicker"><?= e(ui('legal')) ?></p>
              <?php render_lang_toggle($page_path, $page_langs); ?>
            </div>
<?php if ($pl): ?>
            <h1 id="legal-title">Re:act – polityka prywatności</h1>
            <p class="legal-meta">Obowiązuje od <?= e($effective) ?></p>

            <p>Ta polityka prywatności dotyczy gry <strong><a href="<?= e($game_href) ?>">Re:act</a></strong> (dalej „Gra”) na komputery (Steam) oraz urządzenia mobilne z Androidem (Google Play) i iOS (App Store). Grę stworzył w silniku Godot Engine Massive Mustache Marcin Lusa (dalej „Dostawca”), który jest administratorem danych.</p>
            <p>Krótko: <strong>Gra nie ma kont i nie zbiera danych, które pozwalają cię bezpośrednio zidentyfikować.</strong> Zbiera wyłącznie metryki rozgrywki i raporty o awariach, które pomagają nam poprawiać Grę.</p>

            <h2>Czy Gra wymaga konta lub rejestracji?</h2>
            <p>Nie. Gra nie ma kont użytkowników, logowania ani rejestracji. Nie prosimy o imię, adres e-mail, numer telefonu ani żadne inne dane, które pozwalają cię zidentyfikować.</p>

            <h2>Jakie dane Gra zbiera automatycznie?</h2>
            <p>Gra może automatycznie wysyłać:</p>
            <ul>
              <li><strong>metryki rozgrywki</strong>, np. który poziom rozpoczęto lub ukończono, ile razy nastąpiło rozbicie, ile trwała rozgrywka, wybrany język i ustawienia oraz płynność działania (liczba klatek na sekundę);</li>
              <li><strong>raporty o awariach</strong>, gdy Gra się zawiesi lub zamknie z błędem: opis błędu i miejsce w kodzie, w którym wystąpił, wersja Gry, system operacyjny oraz model urządzenia i karty graficznej.</li>
            </ul>
            <p>Dane te nie są powiązane z twoim imieniem, adresem e-mail ani kontem Steam, Google czy Apple. Do policzenia unikalnych instalacji Gra może używać losowego (pseudonimowego) identyfikatora tworzonego przy instalacji; sam nie pozwala ustalić, kim jesteś, i zmienia się po ponownej instalacji Gry. Adres IP twojego urządzenia jest z technicznych powodów widoczny dla serwera, który odbiera dane, ale nie zapisujemy go razem z metrykami ani raportami i nie używamy go do identyfikacji.</p>

            <h2>Czego Gra nie robi?</h2>
            <ul>
              <li>Nie pobiera dokładnej ani przybliżonej lokalizacji urządzenia.</li>
              <li>Nie wyświetla reklam i nie używa identyfikatorów reklamowych (IDFA, Android Advertising ID).</li>
              <li>Nie śledzi cię w innych aplikacjach ani na stronach internetowych.</li>
              <li>Nie korzysta z mikrofonu, aparatu, kontaktów ani zdjęć.</li>
              <li>Nie sprzedaje ani nie udostępnia danych w celach marketingowych.</li>
            </ul>

            <h2>Co Gra zapisuje na twoim urządzeniu?</h2>
            <p>Ustawienia (np. język, głośność) i postęp w Grze są zapisywane lokalnie na twoim urządzeniu i nie są do nas wysyłane. Jeśli twoja platforma (np. Steam) synchronizuje zapisy gier w chmurze, robi to na zasadach tej platformy.</p>

            <h2>Czy inne firmy mają dostęp do danych?</h2>
            <p>Metryki i raporty o awariach zbiera i przechowuje w naszym imieniu usługa analityczna <a href="https://posthog.com/privacy" target="_blank" rel="noopener noreferrer">PostHog</a> (PostHog Inc.), na podstawie umowy powierzenia przetwarzania danych. PostHog nie wykorzystuje tych danych do własnych celów. Jeśli dane trafiają poza Europejski Obszar Gospodarczy, odbywa się to na podstawie standardowych klauzul umownych Komisji Europejskiej lub innego zabezpieczenia przewidzianego w RODO. Grę dystrybuują sklepy, które mają własne polityki prywatności dotyczące twojego konta i zakupów:</p>
            <ul>
              <li><a href="https://store.steampowered.com/privacy_agreement/" target="_blank" rel="noopener noreferrer">Steam (Valve)</a></li>
              <li><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Google Play</a></li>
              <li><a href="https://www.apple.com/legal/privacy/" target="_blank" rel="noopener noreferrer">Apple App Store</a></li>
            </ul>
            <p>Nie otrzymujemy od tych sklepów twoich danych osobowych. Dostawca może ujawnić zebrane dane, gdy wymaga tego prawo, np. na podstawie orzeczenia sądu.</p>

            <h2>Na jakiej podstawie przetwarzamy dane?</h2>
            <p>Metryki i raporty o awariach przetwarzamy na podstawie naszego prawnie uzasadnionego interesu (art. 6 ust. 1 lit. f RODO): żeby wykrywać i naprawiać błędy, poprawiać płynność działania i projektować lepsze poziomy.</p>

            <h2>Jak długo przechowujemy dane?</h2>
            <p>Metryki i raporty o awariach przechowujemy do 24 miesięcy. Potem je usuwamy albo zostawiamy wyłącznie w formie zbiorczych statystyk.</p>

            <h2>Twoje prawa i jak zrezygnować</h2>
            <p>Możesz w każdej chwili zatrzymać wysyłanie danych, odinstalowując Grę w zwykły sposób, który oferuje twoje urządzenie lub sklep, z którego ją pobrano. Gra nie ma kont, więc nie ma konta do usunięcia.</p>
            <p>Przysługuje ci prawo dostępu do danych, ich sprostowania, usunięcia, ograniczenia przetwarzania oraz prawo sprzeciwu wobec przetwarzania. Ponieważ nie wiemy, kim jesteś, możemy poprosić o informacje, które pozwolą odnaleźć dane twojej instalacji. Masz też prawo wnieść skargę do Prezesa Urzędu Ochrony Danych Osobowych (<a href="https://uodo.gov.pl" target="_blank" rel="noopener noreferrer">uodo.gov.pl</a>).</p>

            <h2>Prywatność dzieci</h2>
            <p>Gra nie prosi nikogo, także dzieci, o dane, które pozwalają je zidentyfikować, i nie wyświetla reklam. Nie zbieramy świadomie danych osobowych dzieci poniżej 13 lat. Jeśli jesteś rodzicem lub opiekunem i masz pytania, napisz na <a class="js-contact-link" href="#"></a>.</p>

            <h2>Bezpieczeństwo</h2>
            <p>Dane są przesyłane szyfrowanym połączeniem, a dostęp do nich ma tylko Dostawca i osoby, które pomagają rozwijać Grę. Żaden system nie jest jednak w pełni odporny na wszystkie zagrożenia.</p>

            <h2>Zmiany tej polityki</h2>
            <p>Możemy aktualizować tę politykę, np. gdy w Grze pojawią się nowe funkcje. Nową wersję opublikujemy na tej stronie z nową datą obowiązywania. Polityka obowiązuje od <?= e($effective) ?>.</p>

            <h2>Kontakt</h2>
            <p>Administratorem danych jest Massive Mustache Marcin Lusa (Polska). Pytania o prywatność w Re:act wyślij na <a class="js-contact-link" href="#"></a>.</p>

            <a class="back-link" href="<?= e($game_href) ?>">Wróć do Re:act</a>
<?php else: ?>
            <h1 id="legal-title">Re:act Privacy Policy</h1>
            <p class="legal-meta">Effective as of <?= e($effective) ?></p>

            <p>This privacy policy applies to the game <strong><a href="<?= e($game_href) ?>">Re:act</a></strong> (hereinafter the "Game") on PC (Steam), Android (Google Play) and iOS (App Store). The Game was developed with the Godot Engine by Massive Mustache Marcin Lusa (hereinafter the "Service Provider"), who is the data controller.</p>
            <p>In short: <strong>the Game has no accounts and collects no data that identifies you directly.</strong> It only collects gameplay metrics and crash reports, which help us improve the Game.</p>

            <h2>Does the Game require an account or registration?</h2>
            <p>No. The Game has no user accounts, sign-in or registration. We never ask for your name, email address, phone number or any other information that identifies you.</p>

            <h2>What information does the Game collect automatically?</h2>
            <p>The Game may automatically send:</p>
            <ul>
              <li><strong>gameplay metrics</strong>, such as which level was started or finished, how many crashes happened, how long a session lasted, the chosen language and settings, and how smoothly the Game runs (frames per second);</li>
              <li><strong>crash reports</strong>, when the Game freezes or closes with an error: a description of the error and where in the code it happened, the Game version, the operating system, and the device and graphics card model.</li>
            </ul>
            <p>This information is not linked to your name, email address or your Steam, Google or Apple account. To count unique installs, the Game may use a random (pseudonymous) identifier created on installation; on its own it cannot tell us who you are, and it changes when you reinstall the Game. For technical reasons your device's IP address is visible to the server receiving the data, but we do not store it with the metrics or crash reports and do not use it to identify you.</p>

            <h2>What does the Game not do?</h2>
            <ul>
              <li>It does not collect the precise or approximate location of your device.</li>
              <li>It shows no ads and does not use advertising identifiers (IDFA, Android Advertising ID).</li>
              <li>It does not track you across other apps or websites.</li>
              <li>It does not access your microphone, camera, contacts or photos.</li>
              <li>It does not sell or share data for marketing purposes.</li>
            </ul>

            <h2>What does the Game store on your device?</h2>
            <p>Your settings (such as language and volume) and your progress are saved locally on your device and are not sent to us. If your platform (such as Steam) syncs game saves to its cloud, it does so under that platform's own terms.</p>

            <h2>Do third parties have access to the information?</h2>
            <p>Metrics and crash reports are collected and stored on our behalf by the analytics service <a href="https://posthog.com/privacy" target="_blank" rel="noopener noreferrer">PostHog</a> (PostHog Inc.) under a data processing agreement. PostHog does not use the data for its own purposes. If data is transferred outside the European Economic Area, this is done under the European Commission's Standard Contractual Clauses or another safeguard provided by the GDPR. The Game is distributed by stores that have their own privacy policies for your account and purchases:</p>
            <ul>
              <li><a href="https://store.steampowered.com/privacy_agreement/" target="_blank" rel="noopener noreferrer">Steam (Valve)</a></li>
              <li><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Google Play</a></li>
              <li><a href="https://www.apple.com/legal/privacy/" target="_blank" rel="noopener noreferrer">Apple App Store</a></li>
            </ul>
            <p>We do not receive your personal data from these stores. The Service Provider may disclose the collected information when required by law, such as to comply with a subpoena or similar legal process.</p>

            <h2>What is the legal basis?</h2>
            <p>We process metrics and crash reports on the basis of our legitimate interest (Art. 6(1)(f) GDPR): to find and fix bugs, improve performance and design better levels.</p>

            <h2>How long is the information kept?</h2>
            <p>Metrics and crash reports are kept for up to 24 months. After that they are deleted or kept only as aggregated statistics.</p>

            <h2>Your rights and how to opt out</h2>
            <p>You can stop all data collection at any time by uninstalling the Game with the standard uninstall process of your device or of the store you installed it from. The Game has no accounts, so there is no account to delete.</p>
            <p>You have the right to access, rectify and erase your data, to restrict its processing and to object to it. As we do not know who you are, we may ask for information that lets us find the data of your installation. You also have the right to lodge a complaint with the Polish supervisory authority, the President of the Personal Data Protection Office (<a href="https://uodo.gov.pl/en" target="_blank" rel="noopener noreferrer">uodo.gov.pl</a>).</p>

            <h2>Children's privacy</h2>
            <p>The Game does not ask anyone, including children, for information that identifies them, and it shows no ads. We do not knowingly collect personal data from children under 13. If you are a parent or guardian and have any questions, please contact us at <a class="js-contact-link" href="#"></a>.</p>

            <h2>How is the information kept secure?</h2>
            <p>Data is sent over an encrypted connection and only the Service Provider and the people who help develop the Game can access it. Please be aware that no security system can prevent all potential security breaches.</p>

            <h2>Changes to this Privacy Policy</h2>
            <p>We may update this policy, for example when new features come to the Game. The new version will be posted on this page with a new effective date. This policy is effective as of <?= e($effective) ?>.</p>

            <h2>How can you contact us?</h2>
            <p>The data controller is Massive Mustache Marcin Lusa (Poland). If you have any questions about privacy in Re:act, please email us at <a class="js-contact-link" href="#"></a>.</p>

            <a class="back-link" href="<?= e($game_href) ?>">Back to Re:act</a>
<?php endif; ?>
          </div>
        </section>
<?php include __DIR__ . '/../../_includes/footer.php'; ?>
