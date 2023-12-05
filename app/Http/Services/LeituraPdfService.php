<?php

namespace App\Http\Services;

use Smalot\PdfParser\Parser;

class LeituraPdfService
{
    private $pdf;
    private $dados;
    public function getPdf($arquivo)
    {
        $cliet = new Parser();
        $pdf = $cliet->parseFile($arquivo);
        $pages = $pdf->getPages();
        $limit = 7;
        foreach ($pages as $index => $page) {
            if ($index >= $limit) {
                break;
            }
            $texts[] = $page->getText();
            foreach ($texts as $text) {
                $text = preg_split('/\R/', $text);
                $text = str_replace("\x00", " ", $text);
                $this->pdf[] = $text;
            }
        }
        // dd($this->pdf);
        return $this->pdf;
    }
    public function getDadosEmpresa()
    {
        $razaoSocial = $this->pdf[1][22];
        $endereco = "{$this->pdf[1][23]}. {$this->pdf[1][24]}. {$this->pdf[1][25]}";
        $endereco = str_replace(['.', ',', '-'], '', $endereco);
        preg_match('/\b\d{11}(?:\d{3})?\b/', $this->pdf[2][25], $cpfCnpj);
        $this->dados = [
            "RazaoSocial" => $razaoSocial,
            "endereco" => $endereco,
            "cpfCnpj" => $cpfCnpj[0]
        ];
        return $this->dados;
    }
}
