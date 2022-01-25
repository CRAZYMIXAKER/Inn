<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use controllers\Authorization;

class Test
{
    protected $folders;

    public function __construct()
    {
        $this->folders = [
            'controllers' => 'controllers',
            'models' => 'models',
            'core' => 'core'
        ];
        $this->main();
    }

    public function main()
    {
        echo '<br>namespace\Class:<br><br>';
        foreach ($this->folders as $folderName => $path) {

            $files = array_diff(scandir($path), ['.', '..']);

            foreach ($files as $file) {
                $fileName = substr($file, 0, -4);
                $class = $path . "\\" . $fileName;
                $objectClass = new $class();

                $classObj = new ReflectionClass($objectClass);
                $className = $classObj->getName();
                $classComment = preg_replace('$\/\*{2}|\*\/|\*$', '', $classObj->getDocComment());

                $classParent = $this->decode($classObj->getParentClass());

                $classNameContent = is_array($classParent) == true ?
                    "{$className} ({$classComment})<br>Parent: {$classParent['name']}<br><br>" :
                    "{$className} ({$classComment})<br><br>";
                echo $classNameContent;

                $properties = $this->decode($classObj->getProperties());
                if (!empty($properties)) {
                    echo 'Properties: <br><br>';
                    $this->getClassInfo($properties, $className, 'Property', $objectClass);
                }

                $methods = $this->decode($classObj->getMethods());
                if (!empty($methods)) {
                    echo 'Methods: <br><br>';
                    $this->getClassInfo($methods, $className, 'Method', $objectClass);
                }
                echo "<hr>";
            }
            echo "<hr>";
        }

    }

    public function getClassInfo($items, $className, $type, $objectClass)
    {
        foreach ($items as $item) {
            if ($className == $item['class']) {
                $itemInfo = $type == 'Method' ? new ReflectionMethod($objectClass, $item['name']) : ($type == 'Property' ?
                    new ReflectionProperty($objectClass, $item['name']) : die('Error'));
                echo "{$item['name']}";
                echo '<pre>';
                echo preg_replace('$\/\*{2}|\*\/$', '', $itemInfo->getDocComment());
                echo '</pre>';
            }
        }
    }

    public function decode($object)
    {
        $objectEncode = json_encode($object);
        return json_decode($objectEncode, true);
    }
}

$_SESSION['user'] = (new core\Auth)->authGetUser();

$pathToView = "v_404";
$pageTitle = $pageContent = '';
$uri = $_SERVER['REQUEST_URI'];
$badUrl = '/' . 'index.php';

if (str_starts_with($uri, $badUrl)) {
    $controller = 'Error';
    $method = 'badUrl';
} else {
    $_url = array_filter(explode('/', (new core\System)->get('url')));
    $parseUrl = (new core\System)->parseUrl($_url);
    $controller = $parseUrl['controller'];
    $method = $parseUrl['method'];
}

$class = "controllers\\" . $controller;
$objClass = new $class;
$objMethod = $method;
$pageContent = $objClass->$objMethod();

$html = (new core\Twig)->template($pageContent === '' ? $pathToView : $pageContent['pathToView'],
    $pageContent === '' ? ['title' => $pageTitle] : $pageContent);

echo $html;

new Test();