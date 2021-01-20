<?php


namespace App\Services;

require_once '../../vendor/autoload.php';

class ObtemDadosBrasileirao
{
    static public function serieA()
    {
        $client = \Symfony\Component\HttpClient\HttpClient::create();
        $browser = new \Symfony\Component\BrowserKit\HttpBrowser($client);
        $crawler = $browser->request("GET", "https://www.terra.com.br/esportes/futebol/brasileiro-serie-a/tabela/");

        $nomeCampeonato = $crawler->filter('channelHeader > a')->text();

        $classificacao = $crawler->filter("tbody > tr")->each(function ($node) {
            /** @var \Symfony\Component\DomCrawler\Crawler $node */
            $return['posicao'] = $node->filter("td.position")->text();
            $return['movimentacao']['acao'] = preg_replace("/\d/", "", $node->filter("td.movement ")->text() === " " ? " " : $node->filter("td.movement")->text());
            $return['movimentacao']['posicoes'] = preg_replace("/\D/", "", $node->filter("td.movement ")->text() === " " ? " " : $node->filter("td.movement")->text());
            $return['nome'] = str_replace(" >>", "", $node->filter("td.team-name")->text());
            $return['pontos'] = $node->filter("td.points")->text();
            $return['jogos'] = $node->filter("td:nth-child(6)")->text();
            $return['vitorias'] = $node->filter("td:nth-child(7)")->text();
            $return['empates'] = $node->filter("td:nth-child(8)")->text();
            $return['derrotas'] = $node->filter("td:nth-child(9)")->text();
            $return['gols_pro'] = $node->filter("td:nth-child(10)")->text();
            $return['gols_contra'] = $node->filter("td:nth-child(11)")->text();
            $return['saldo_gols'] = $node->filter("td:nth-child(12)")->text();
            $return['aproveitamento'] = $node->filter("td:nth-child(13)")->text();
            return $return;
        });

        return json_encode($classificacao, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    static public function serieB()
    {
        $client = \Symfony\Component\HttpClient\HttpClient::create();
        $browser = new \Symfony\Component\BrowserKit\HttpBrowser($client);
        $crawler = $browser->request("GET", "https://www.terra.com.br/esportes/futebol/brasileiro-serie-b/tabela/");

        $nomeCampeonato = $crawler->filter('channelHeader > a')->text();

        $classificacao = $crawler->filter("tbody > tr")->each(function ($node) {
            /** @var \Symfony\Component\DomCrawler\Crawler $node */
            $return['posicao'] = $node->filter("td.position")->text();
            $return['movimentacao']['acao'] = preg_replace("/\d/", "", $node->filter("td.movement ")->text() === " " ? " " : $node->filter("td.movement")->text());
            $return['movimentacao']['posicoes'] = preg_replace("/\D/", "", $node->filter("td.movement ")->text() === " " ? " " : $node->filter("td.movement")->text());
            $return['nome'] = str_replace(" >>", "", $node->filter("td.team-name")->text());
            $return['pontos'] = $node->filter("td.points")->text();
            $return['jogos'] = $node->filter("td:nth-child(6)")->text();
            $return['vitorias'] = $node->filter("td:nth-child(7)")->text();
            $return['empates'] = $node->filter("td:nth-child(8)")->text();
            $return['derrotas'] = $node->filter("td:nth-child(9)")->text();
            $return['gols_pro'] = $node->filter("td:nth-child(10)")->text();
            $return['gols_contra'] = $node->filter("td:nth-child(11)")->text();
            $return['saldo_gols'] = $node->filter("td:nth-child(12)")->text();
            $return['aproveitamento'] = $node->filter("td:nth-child(13)")->text();
            return $return;
        });
        return json_encode($classificacao, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
}
