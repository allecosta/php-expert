<?php 

/**
 * É possivel invocar método estático de uma classe filha utilizando a palavra-chave "parent".
 * 
 */
class Domain 
{
    protected static function getWebsiteName() 
    {
        return "php.net";
    }
}


class DomainPHP extends Domain 
{
    public $websiteName;

    public function __construct()
    {
        $this->websiteName = parent::getWebsiteName();
    }
}

$domain = new DomainPHP();

echo $domain->websiteName;