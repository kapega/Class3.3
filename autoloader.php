<?php

class Psr4AutoloaderClass
{
	protected $prefixes = [];
	
	public function __construct()
    {
        spl_autoload_register([$this, 'loadClass']);
    }
	
	// какое пространство (prefix) где искать (base_dir)
	public function addNamespace($prefix, $base_dir, $prepend = false)
    {
        $prefix = trim($prefix, '\\') . '\\';
        $base_dir = rtrim($base_dir, DIRECTORY_SEPARATOR) . '/';

        if (isset($this->prefixes[$prefix]) === false) {
            $this->prefixes[$prefix] = [];
        }

        if ($prepend) {
            array_unshift($this->prefixes[$prefix], $base_dir); // добавить в начало
        } else {
            array_push($this->prefixes[$prefix], $base_dir); // или в конец
        }
    }
	
	public function loadClass($class)
    {
        $prefix = $class;
		$pos = strrpos($prefix, '\\'); // позиция символа-разделителя пространств (namespace)

        while ($pos !== false) {
            $prefix = substr($class, 0, $pos + 1); // папка

            $relative_class = substr($class, $pos + 1); // остальное, вложенное в папку (папка или файл php)

            $mapped_file = $this->loadMappedFile($prefix, $relative_class);
            if ($mapped_file) { // файл найден
                return $mapped_file; // адрес файла
            }

            $prefix = rtrim($prefix, '\\');
			$pos = strrpos($prefix, '\\');
        }

        return false;
    }
	
	protected function loadMappedFile($prefix, $relative_class)
    {
        if (isset($this->prefixes[$prefix]) === false) {
            return false;
        }

        foreach ($this->prefixes[$prefix] as $base_dir) {
            $file = $base_dir
                  . str_replace('\\', '/', $relative_class)
                  . '.php';

            if ($this->requireFile($file)) {
                return $file;
            }
        }

        return false;
    }
	
	protected function requireFile($file)
    {
        if (file_exists($file)) {
            require $file;
            return true;
        }
        return false;
    }
}
