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
 * Strings for component 'url', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   url
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Επιλογή μιας μεταβλητής...';
$string['clicktoopen'] = 'Κάντε κλικ στον σύνδεσμο {$a} για να ανοίξετε τον πόρο.';
$string['configdisplayoptions'] = 'Επιλέξτε όλες τις επιλογές που θα πρέπει να είναι διαθέσιμες, οι υπάρχουσες ρυθμίσεις δεν τροποποιούνται. Κρατήστε πατημένο το πλήκτρο CTRL για να επιλέξετε πολλαπλά πεδία.';
$string['configframesize'] = 'Όταν μια ιστοσελίδα ή ένα ανεβασμένο αρχείο εμφανίζεται μέσα σε πλαίσιο, τότε αυτή η τιμή είναι το ύψος (σε εικονοστοιχεία) του εξωτερικού πλαισίου (που περιέχει και τα στοιχεία πλοήγησης).';
$string['configrolesinparams'] = 'Ενεργοποιήστε αν επιθυμείτε να συμπεριλάβετε τοπικά ονόματα ρόλων στην λίστα με τις διαθέσιμες μεταβλητές παραμέτρων.';
$string['configsecretphrase'] = 'Αυτή η μυστική φράση χρησιμοποιείται για την παραγωγή κρυπτογραφημένης κωδικής τιμής που μπορεί να σταλεί σε ορισμένους εξυπηρετητές σαν παράμετρος. Ο κρυπτογραφημένος κωδικός παράγεται από μία τιμή md5 από την τρέχουσα διεύθυνση IP του χρήστη συνενωμένη με την μυστική σας φράση, δηλαδή κωδικός = md5(IP.μυστική φράση). Παρακαλούμε σημειώστε ότι αυτό δεν είναι αξιόπιστο διότι η διεύθυνση IP μπορεί να αλλάζει και είναι συχνά κοινή για διαφορετικούς υπολογιστές.';
$string['contentheader'] = 'Περιεχόμενο';
$string['createurl'] = 'Δημιουργία μιας διεύθυνσης URL';
$string['displayoptions'] = 'Διαθέσιμες επιλογές εμφάνισης';
$string['displayselect'] = 'Εμφάνιση';
$string['displayselectexplain'] = 'Επιλογή τύπου εμφάνισης. Δυστυχώς δεν είναι όλοι οι τύποι κατάλληλοι για όλες τις διευθύνσεις URL.';
$string['displayselect_help'] = 'Αυτή η ρύθμιση, μαζί με τον τύπο αρχείου URL και αν ο περιηγητής επιτρέπει την ενσωμάτωση, καθορίζει τον τρόπο εμφάνισης της διεύθυνσης URL. Οι επιλογές μπορεί να περιλαμβάνουν:

* Αυτόματη - Η επιλογή καλύτερης εμφάνισης για τη διεύθυνση URL επιλέγεται αυτόματα
* Ενσωμάτωση - Η διεύθυνση URL εμφανίζεται στη σελίδα κάτω από τη γραμμή πλοήγησης μαζί με την περιγραφή της διεύθυνσης URL και οποιαδήποτε μπλοκ
* Άνοιγμα - Μόνο η διεύθυνση URL εμφανίζεται στο παράθυρο περιηγητή
* Σε αναδυόμενο παράθυρο - Η διεύθυνση URL εμφανίζεται σε νέο παράθυρο περιηγητή χωρίς μενού ή γραμμή διεύθυνσης
* Στο πλαίσιο - Η διεύθυνση URL εμφανίζεται σε ένα πλαίσιο κάτω από τη γραμμή πλοήγησης και περιγραφή της διεύθυνσης URL
* Νέο παράθυρο - Η διεύθυνση URL εμφανίζεται σε ένα νέο παράθυρο περιηγητή με μενού και μια γραμμή διευθύνσεων';
$string['externalurl'] = 'Εξωτερική διεύθυνση URL';
$string['framesize'] = 'Ύψος πλαισίου';
$string['indicator:cognitivedepth'] = 'Βάθος κατανόησης URL';
$string['indicator:cognitivedepth_help'] = 'Αυτός ο δείκτης βασίζεται στο βάθος κατανόησης που επιτεύχθηκε από τον μαθητή σε έναν πόρο URL.';
$string['indicator:socialbreadth'] = 'Κοινωνικό εύρος URL';
$string['indicator:socialbreadth_help'] = 'Αυτός ο δείκτης βασίζεται στο κοινωνικό εύρος που επιτεύχθηκε από τον μαθητή σε έναν πόρο URL.';
$string['invalidstoredurl'] = 'Αδυναμία προβολής αυτού του πόρου. Η διεύθυνση URL είναι μη έγκυρη.';
$string['invalidurl'] = 'Η διεύθυνση URL που δόθηκε είναι μη έγκυρη.';
$string['modulename'] = 'Διεύθυνση URL';
$string['modulename_help'] = 'Το άρθρωμα διεύθυνσης URL επιτρέπει στον διδάσκοντα να παρέχει έναν σύνδεσμο ιστού ως ένα πόρο μαθήματος. Σε οτιδήποτε είναι ελεύθερα διαθέσιμο σε σύνδεση (στο Διαδίκτυο), όπως έγγραφα ή εικόνες, μπορεί να δημιουργηθεί σύνδεσμος· η διεύθυνση URL δεν χρειάζεται να είναι η αρχική σελίδα ενός ιστοτόπου. Η διεύθυνση URL μιας συγκεκριμένης ιστοσελίδας μπορεί να αντιγραφεί και να επικολληθεί ή ένας διδάσκοντας μπορεί να χρησιμοποιήσει τον επιλογέα αρχείων και να επιλέξει έναν σύνδεσμο από ένα χώρο αποθήκευσης (αποθετήριο) όπως π.χ. το Flickr, το YouTube ή το Wikimedia (ανάλογα με το ποια αποθετήρια έχουν ενεργοποιηθεί για τον ιστότοπο).

Υπάρχουν ορισμένες επιλογές εμφάνισης για τη διεύθυνση URL, όπως ενσωματωμένα ή άνοιγμα σε νέο παράθυρο, και προχωρημένες επιλογές για την παράδοση πληροφοριών, όπως το όνομα ενός μαθητή, μέσω της διεύθυνσης URL, εάν απαιτείται.

Σημειώστε ότι οι διευθύνσεις URL μπορούν επίσης να προστεθούν σε κάθε άλλο τύπο πόρων ή δραστηριότητας μέσω του επεξεργαστή κειμένου.';
$string['modulename_link'] = 'άρθρωμα/URL/εμφάνιση';
$string['modulenameplural'] = 'Διευθύνσεις URL';
$string['page-mod-url-x'] = 'Οποιαδήποτε σελίδα αρθρώματος διεύθυνσης URL';
$string['parameterinfo'] = '&amp;parameter=variable (&amp;παράμετρος=μεταβλητή)';
$string['parametersheader'] = 'Μεταβλητές URL';
$string['parametersheader_help'] = 'Ορισμένες εσωτερικές μεταβλητές Moodle μπορούν να προσαρτηθούν αυτόματα στη διεύθυνση URL. Πληκτρολογήστε το όνομά σας για την παράμετρο σε κάθε πλαίσιο κειμένου και στη συνέχεια, επιλέξτε την απαιτούμενη αντίστοιχη μεταβλητή.';
$string['pluginadministration'] = 'Διαχείριση αρθρώματος διεύθυνσης URL';
$string['pluginname'] = 'Διεύθυνση URL';
$string['popupheight'] = 'Ύψος αναδυόμενου παραθύρου (σε εικονοστοιχεία)';
$string['popupheightexplain'] = 'Καθορίζει το προεπιλεγμένο ύψος των αναδυόμενων παραθύρων.';
$string['popupwidth'] = 'Πλάτος αναδυόμενου παραθύρου (σε εικονοστοιχεία)';
$string['popupwidthexplain'] = 'Καθορίζει το προεπιλεγμένο πλάτος των αναδυόμενων παραθύρων.';
$string['printintro'] = 'Εμφάνιση περιγραφής διεύθυνσης URL';
$string['printintroexplain'] = 'Να εμφανίζεται η περιγραφή της διεύθυνσης URL κάτω από το περιεχόμενο; Ορισμένοι τύποι εμφάνισης ενδέχεται να μην εμφανίζουν περιγραφή ακόμα και αν είναι ενεργοποιημένη.';
$string['privacy:metadata'] = 'Το πρόσθετο «Πόρος διεύθυνσης URL» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['rolesinparams'] = 'Συμπεριλάβετε τα ονόματα ρόλων στις παραμέτρους';
$string['search:activity'] = 'Διεύθυνση URL';
$string['serverurl'] = 'Διεύθυνση URL εξυπηρετητή';
$string['url:addinstance'] = 'Προσθήκη ενός νέου πόρου διεύθυνσης URL';
$string['url:view'] = 'Εμφάνιση διεύθυνσης URL';
