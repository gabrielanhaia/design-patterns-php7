<?php

namespace Singleton;

/**
 * Implementação da classe de logs com o padrão "Singleton"
 *
 * Class LogsSingleton
 * @package Singleton
 */
class LogsSingleton
{
    /** @var self $instancia Instância da classe de logs. */
    protected static $instancia;

    /**
     * DatabaseSingleton constructor.
     */
    private function __construct()
    {

    }

    /**
     * Magic method clone.
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * Magic method wakeup.
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    /**
     * self constructor.
     * @return self
     */
    public static function obterInstancia(): self
    {
        if (empty(self::$instancia)) {
            self::$instancia = new self();
        }

        return self::$instancia;
    }

    /**
     * Método responsável por gravar logs.
     *
     * @param array $dados
     */
    public function gravarLog(array $dados)
    {
        $nomeArquivo = 'logs.txt';

        $logsAnteriores = [];
        if (filesize($nomeArquivo) > 0) {
            $conteudoDoArquivo = file_get_contents($nomeArquivo);

            $logsAnteriores = json_decode($conteudoDoArquivo, true);
        }

        $logsAnteriores[] = $dados;

        $arquivo = fopen($nomeArquivo, 'w');

        fwrite($arquivo, json_encode($logsAnteriores));

        fclose($arquivo);
    }
}