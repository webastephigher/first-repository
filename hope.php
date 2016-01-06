<!DOCTYPE html>
<html>
<body>

<?php

header("Content-Type: text/Calendar");
header("Content-Disposition: inline; filename=calendar.ics");
echo "BEGIN:VCALENDAR\n";
echo "VERSION:2.0\n";
echo "PRODID:-//Foobar Corporation//NONSGML Foobar//EN\n";
echo "METHOD:REQUEST\n"; // requied by Outlook
echo "BEGIN:VEVENT\n";
echo "UID:".date('Ymd').'T'.date('His')."-".rand()."-example.com\n"; // required by Outlok
echo "DTSTAMP:".date('Ymd').'T'.date('His')."\n"; // required by Outlook
echo "DTSTART:20080413T000000\n"; 
echo "SUMMARY:TEST\n";
echo "DESCRIPTION: this is just a test\n";
echo "END:VEVENT\n";
echo "END:VCALENDAR\n";

?>

</body>
</html>
