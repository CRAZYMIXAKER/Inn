# Inn

php: 8.0

To start, enter php app.php in the console!!!

Create full-based console application to read logs from Task #17. You console application must have following features:
have short (-h) and long (--help) options; have help page showing on wrong parameter typing or by calling short/long
help option (-h/--help); grab information by date; grab information by tag;output grabbed info to the console.

Examples:$ grabber -h Usage: grabber [OPTIONS] ... SOURCE Try grabber --help for more information. $ grabber --help
Usage: grabber [OPTIONS] ... SOURCE Grabbing log files and tables. Example: grabber --log-level debug --date yesterday
--source file current.log

-d, --date Date period to search in. Accept any Unix-way date set -l, --log-level Log level to grab -t, --tag
Application tag to filter

Output control:
-h, --help Show this page and exist -m, --max-count Stop after NUM lines -v Verbose mode. Causes grabber to print
debugging messages about its progress. Multiple -v options increase the verbosity. The maximum is 3. Output log
information to the console. ————— we want a php file which works with parameters like below; php index.php —name=Diana
—family=FamilyName -a=25 -s=female

so the php file should require parameters to return

also try to use short parameters instead fullname like: -a (Age)  -s  (Sexuality)

this is for PHP CLI (command line - Terminal) usage experience.