<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fi', array (
  'validators' => 
  array (
    'This value should be false.' => 'Arvon tulee olla epätosi.',
    'This value should be true.' => 'Arvon tulee olla tosi.',
    'This value should be of type {{ type }}.' => 'Arvon tulee olla tyyppiä {{ type }}.',
    'This value should be blank.' => 'Arvon tulee olla tyhjä.',
    'The value you selected is not a valid choice.' => 'Arvon tulee olla yksi annetuista vaihtoehdoista.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Sinun tulee valita vähintään {{ limit }} vaihtoehtoa.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Sinun tulee valitan enintään {{ limit }} vaihtoehtoa.',
    'One or more of the given values is invalid.' => 'Yksi tai useampi annetuista arvoista on virheellinen.',
    'This field was not expected.' => 'Tässä kentässä ei odotettu.',
    'This field is missing.' => 'Tämä kenttä puuttuu.',
    'This value is not a valid date.' => 'Annettu arvo ei ole kelvollinen päivämäärä.',
    'This value is not a valid datetime.' => 'Annettu arvo ei ole kelvollinen päivämäärä ja kellonaika.',
    'This value is not a valid email address.' => 'Annettu arvo ei ole kelvollinen sähköpostiosoite.',
    'The file could not be found.' => 'Tiedostoa ei löydy.',
    'The file is not readable.' => 'Tiedostoa ei voida lukea.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Tiedostonkoko ({{ size }} {{ suffix }}) on liian iso. Suurin sallittu tiedostonkoko on {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Tiedostotyyppi ({{ type }}) on virheellinen. Sallittuja tiedostotyyppejä ovat {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Arvon tulee olla {{ limit }} tai vähemmän.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Liian pitkä syöte. Syöte saa olla enintään {{ limit }} merkkiä.',
    'This value should be {{ limit }} or more.' => 'Arvon tulee olla {{ limit }} tai enemmän.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Liian lyhyt syöte. Syötteen tulee olla vähintään {{ limit }} merkkiä.',
    'This value should not be blank.' => 'Kenttä ei voi olla tyhjä.',
    'This value should not be null.' => 'Syöte ei voi olla null.',
    'This value should be null.' => 'Syötteen tulee olla null.',
    'This value is not valid.' => 'Virheellinen arvo.',
    'This value is not a valid time.' => 'Annettu arvo ei ole kelvollinen kellonaika.',
    'This value is not a valid URL.' => 'Annettu arvo ei ole kelvollinen URL-osoite.',
    'The two values should be equal.' => 'Kahden annetun arvon tulee olla samat.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Annettu tiedosto on liian iso. Suurin sallittu tiedostokoko on {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Tiedosto on liian iso.',
    'The file could not be uploaded.' => 'Tiedoston siirto epäonnistui.',
    'This value should be a valid number.' => 'Tämän arvon tulee olla numero.',
    'This file is not a valid image.' => 'Tämä tiedosto ei ole kelvollinen kuva.',
    'This is not a valid IP address.' => 'Tämä ei ole kelvollinen IP-osoite.',
    'This value is not a valid language.' => 'Tämä arvo ei ole kelvollinen kieli.',
    'This value is not a valid locale.' => 'Tämä arvo ei ole kelvollinen kieli- ja alueasetus (locale).',
    'This value is not a valid country.' => 'Tämä arvo ei ole kelvollinen maa.',
    'This value is already used.' => 'Tämä arvo on jo käytetty.',
    'The size of the image could not be detected.' => 'Kuvan kokoa ei voitu tunnistaa.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Kuva on liian leveä ({{ width }}px). Sallittu maksimileveys on {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Kuva on liian kapea ({{ width }}px). Leveyden tulisi olla vähintään {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Kuva on liian korkea ({{ width }}px). Sallittu maksimikorkeus on {{ max_width }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Kuva on liian matala ({{ height }}px). Korkeuden tulisi olla vähintään {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Tämän arvon tulisi olla käyttäjän tämänhetkinen salasana.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Tämän arvon tulisi olla tasan yhden merkin pituinen.|Tämän arvon tulisi olla tasan {{ limit }} merkkiä pitkä.',
    'The file was only partially uploaded.' => 'Tiedosto ladattiin vain osittain.',
    'No file was uploaded.' => 'Tiedostoa ei ladattu.',
    'No temporary folder was configured in php.ini.' => 'Väliaikaishakemistoa ei ole asetettu php.ini -tiedostoon.',
    'Cannot write temporary file to disk.' => 'Väliaikaistiedostoa ei voitu kirjoittaa levylle.',
    'A PHP extension caused the upload to fail.' => 'PHP-laajennoksen vuoksi tiedoston lataus epäonnistui.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Tässä ryhmässä tulisi olla yksi tai useampi elementti.|Tässä ryhmässä tulisi olla vähintään {{ limit }} elementtiä.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Tässä ryhmässä tulisi olla enintään yksi elementti.|Tässä ryhmässä tulisi olla enintään {{ limit }} elementtiä.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Tässä ryhmässä tulisi olla tasan yksi elementti.|Tässä ryhmässä tulisi olla enintään {{ limit }} elementtiä.',
    'Invalid card number.' => 'Virheellinen korttinumero.',
    'Unsupported card type or invalid card number.' => 'Tätä korttityyppiä ei tueta tai korttinumero on virheellinen.',
    'Error' => 'Virhe',
    'This field group should not contain extra fields.' => 'Tämä kenttäryhmä ei voi sisältää ylimääräisiä kenttiä.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Ladattu tiedosto on liian iso. Ole hyvä ja lataa pienempi tiedosto.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF tarkiste on virheellinen. Ole hyvä ja yritä lähettää lomake uudestaan.',
    'fos_user.username.already_used' => 'Käyttäjätunnus on jo käytössä.',
    'fos_user.username.blank' => 'Syötä käyttäjätunnus.',
    'fos_user.username.short' => 'Käyttäjätunnus on liian lyhyt.',
    'fos_user.username.long' => 'Käyttäjätunnus on liian pitkä.',
    'fos_user.email.already_used' => 'Sähköpostiosoite on jo käytössä.',
    'fos_user.email.blank' => 'Syötä sähköpostiosoite.',
    'fos_user.email.short' => 'Sähköpostiosoite on liian lyhyt.',
    'fos_user.email.long' => 'Sähköpostiosoite on liian pitkä.',
    'fos_user.email.invalid' => 'Sähköpostiosoite ei ole kelvollinen.',
    'fos_user.password.blank' => 'Syötä salasana.',
    'fos_user.password.short' => 'Salasana on liian lyhyt.',
    'fos_user.password.mismatch' => 'Salasanat eivät täsmää.',
    'fos_user.new_password.blank' => 'Syötä uusi salasana.',
    'fos_user.new_password.short' => 'Uusi salasana on liian lyhyt.',
    'fos_user.current_password.invalid' => 'Annettu salasana ei ole kelvollinen.',
    'fos_user.group.blank' => 'Syötä nimi.',
    'fos_user.group.short' => 'Nimi on liian lyhyt.',
    'fos_user.group.long' => 'Nimi on liian pitkä.',
    'fos_group.name.already_used' => 'Nimi on jo käytössä.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Päivitä ryhmä',
    'group.show.name' => 'Ryhmän nimi',
    'group.new.submit' => 'Luo ryhmä',
    'group.flash.updated' => 'Ryhmä on päivitetty.',
    'group.flash.created' => 'Ryhmä on luotu.',
    'group.flash.deleted' => 'Ryhmä on poistettu.',
    'security.login.username' => 'Käyttäjätunnus',
    'security.login.password' => 'Salasana',
    'security.login.remember_me' => 'Muista minut',
    'security.login.submit' => 'Kirjaudu',
    'profile.show.username' => 'Käyttäjätunnus',
    'profile.show.email' => 'Sähköpostiosoite',
    'profile.edit.submit' => 'Päivitä',
    'profile.flash.updated' => 'Profiili on päivitetty.',
    'change_password.submit' => 'Vaihda salasana',
    'change_password.flash.success' => 'Salasana on vaihdettu.',
    'registration.check_email' => 'Sähköposti on lähetetty osoitteeseen %email%. Se sisältää aktivointilinkin, jota klikkaamalla tunnus aktivoidaan.',
    'registration.confirmed' => 'Onnittelut %username%, tunnuksesi on nyt aktivoitu.',
    'registration.back' => 'Takaisin alkuperäiselle sivulle.',
    'registration.submit' => 'Luo tunnus',
    'registration.flash.user_created' => 'Käyttäjätunnus on luotu onnistuneesti.',
    'registration.email.subject' => 'Tervetuloa %username%!',
    'registration.email.message' => 'Hei %username%!

Aktivoidaksesi tunnuksesi, ole hyvä ja klikkaa %confirmationUrl%

Terveisin ylläpito
',
    'resetting.request.username' => 'Käyttäjätunnus tai sähköpostiosoite',
    'resetting.request.submit' => 'Alusta salasana',
    'resetting.reset.submit' => 'Vaihda salasana',
    'resetting.flash.success' => 'Salasana on alustettu onnistuneesti.',
    'resetting.email.subject' => 'Alusta salasana',
    'resetting.email.message' => 'Hei %username%!

Alustaaksesi salasanasi, ole hyvä ja klikkaa %confirmationUrl%

Terveisin ylläpito
',
    'layout.logout' => 'Ulos',
    'layout.login' => 'Kirjaudu',
    'layout.register' => 'Luo tunnus',
    'layout.logged_in_as' => 'Kirjautuneena %username%',
    'form.group_name' => 'Ryhmän nimi',
    'form.username' => 'Käyttäjätunnus',
    'form.email' => 'Sähköpostiosoite',
    'form.current_password' => 'Nykyinen salasana',
    'form.password' => 'Salasana',
    'form.password_confirmation' => 'Salasana uudestaan',
    'form.new_password' => 'Uusi salasana',
    'form.new_password_confirmation' => 'Salasana uudestaan',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'fos_user.username.already_used' => 'The username is already used.',
    'fos_user.username.blank' => 'Please enter a username.',
    'fos_user.username.short' => 'The username is too short.',
    'fos_user.username.long' => 'The username is too long.',
    'fos_user.email.already_used' => 'The email is already used.',
    'fos_user.email.blank' => 'Please enter an email.',
    'fos_user.email.short' => 'The email is too short.',
    'fos_user.email.long' => 'The email is too long.',
    'fos_user.email.invalid' => 'The email is not valid.',
    'fos_user.password.blank' => 'Please enter a password.',
    'fos_user.password.short' => 'The password is too short.',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match.',
    'fos_user.new_password.blank' => 'Please enter a new password.',
    'fos_user.new_password.short' => 'The new password is too short.',
    'fos_user.current_password.invalid' => 'The entered password is invalid.',
    'fos_user.group.blank' => 'Please enter a name.',
    'fos_user.group.short' => 'The name is too short.',
    'fos_user.group.long' => 'The name is too long.',
    'fos_group.name.already_used' => 'The name is already used.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated.',
    'group.flash.created' => 'The group has been created.',
    'group.flash.deleted' => 'The group has been deleted.',
    'security.login.username' => 'Username',
    'security.login.password' => 'Password',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Log in',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated.',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed.',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.
',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Registration',
    'registration.flash.user_created' => 'The user has been created successfully.',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

This link can only be used once to validate your account.

Regards,
the Team.
',
    'resetting.check_email' => 'An email has been sent. It contains a link you must click to reset your password.
Note: You can only request a new password once within %tokenLifetime% hours.

If you don\'t get an email check your spam folder or try again.
',
    'resetting.request.username' => 'Username or email address',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully.',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Log out',
    'layout.login' => 'Log in',
    'layout.register' => 'Registration',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name',
    'form.username' => 'Username',
    'form.email' => 'Email',
    'form.current_password' => 'Current password',
    'form.password' => 'Password',
    'form.password_confirmation' => 'Repeat password',
    'form.new_password' => 'New password',
    'form.new_password_confirmation' => 'Repeat new password',
  ),
  'messages' => 
  array (
    'survey.title' => 'Survey',
    'survey.thanks.title' => 'Thanks',
    'survey.thanks.text' => 'Thank you for taking the time to answer the survey.',
    'survey.thanks.next_step' => 'We will keep you informed of your results.',
    'language.text' => 'Language',
    'firstname.label' => 'First name',
    'lastname.label' => 'Last name',
    'email.label' => 'Email',
    'title.text_1' => 'Results of',
    'title.text_2' => 'on the survey',
    'p1.text_1' => 'scored',
    'p1.text_2' => 'out of',
    'p1.text_3' => 'on the survey',
    'p2.text_1' => 'Its percentage is therefore',
    'p3.text_1' => 'The survey was answered in',
    'p4.text_1' => 'To see the list of different answers, follow this link:',
    'p4.text_2' => 'List of answers',
    'p5.text_1' => 'User\'s email',
    'page.survey.title' => 'All the surveys',
    'page.quiz.title' => 'All the quizzes',
    'registration.submit' => 'Register',
    'homepage.text' => 'Homepage',
    'list.surveys' => 'List of surveys',
    'list.quizzes' => 'List of quizzes',
    'contact.text' => 'Contact',
    'account.text' => 'My account',
    'logout.text' => 'Log out',
    'creation.survey' => 'Create a survey',
    'creation.quiz' => 'Create a quiz',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
