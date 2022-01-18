<?php
system("clear");

class Action
{
    protected $date = "12012022";
    protected int $maxCount = 20;

    public function getCountRows($pathToFile)
    {
        $count = 0;
        $file = @fopen($pathToFile, 'r');
        if ($file) {
            while (fgets($file, 4096) !== false) {
                $count++;
            }
            if (!feof($file)) {
                echo "Error: fgets() failed\n";
            }
            fclose($file);
        }
        return $count;
    }

    public function getInfoLog($fileName, $date = '', $maxCount = 0)
    {
        if ($date == '') {
            $date = $this->date;
        }
        if ($maxCount == 0) {
            $maxCount = $this->maxCount;
        }

        $pathToFile = __DIR__ . "\logs\\{$fileName}_{$date}.log";
        $count = $this->getCountRows($pathToFile);
        $countRows = min($count, $maxCount);

        echo "file name: \e[33m{$fileName}_{$date}.log\e[39m\n";
        echo "Path to file: \e[33m{$pathToFile}\e[39m\n";

        $file = @fopen($pathToFile, 'r');
        if ($file) {
            echo "==============================================\n";
            for ($i = 1; $i <= $countRows; $i++) {
                echo "\e[94m" . fgets($file, 4096);
                if ($i < $countRows) {
                    echo "\e[39m----------------------------------------------\n";
                }
            }
            fclose($file);
            echo "\e[39m==============================================\n";
        } else {
            echo "\e[31mError, file wasn't found\e[39m\n";
            $this->help();
        }
    }

    public function help()
    {
        echo "\e[32m==============================================\n";
        echo "Program Help\n";
        echo "==============================================\n";
        echo "usage: php app.php [-h|--help] [-f|--file-name=badAuthorization|uploud|notLoaded] [-d|--date=10122022] [-m|--max-count=3]\n";
        echo "Options:\n";
        echo " -h   --help        Directory call\n";
        echo " -f   --file-name   File name\n";
        echo " -d   --date        File date(DayMonthYear)(default: 12012022)\n";
        echo " -m   --max-count   Number of lines printed to the console (default: 20)\n";
        echo "Example: php app.php --file-name=uploud --date=22122022 --max-count = 4\e[39m\n";
    }
}

$time = new DateTime('now');
echo "\e[36m{$time->format('G:i:s')} \e[39m\n";

// Default values
$fileName = '';
$date = '';
$maxCount = 0;
$params = [
    'h::' => 'help::',
    'f::' => 'file-name::',
    'd:' => 'date:',
    'm::' => 'max-count::',];

$options = getopt(implode('', array_keys($params)), $params);

if (isset($options['help']) || isset($options['h']) || !isset($argv[1])) {
    (new Action)->help();
}
if (isset($options['file-name']) || isset($options['f'])) {
    $fileName = $options['file-name'] ?? $options['f'];
}
if (isset($options['date']) || isset($options['d'])) {
    $date = $options['date'] ?? $options['d'];
}
if (isset($options['max-count']) || isset($options['m'])) {
    $maxCount = $options['max-count'] ?? $options['m'];
}
if (empty($options)) {
    echo "\e[31mError, Command Not Found\e[39m\n";
    (new Action)->help();
}
if ($fileName != '') {
    (new Action)->getInfoLog($fileName, $date, $maxCount);
}

echo "\n";