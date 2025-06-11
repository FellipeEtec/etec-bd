<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Vite;


class RouteController extends Controller {
    public static function index() {
        return view("etec.index", ['destaques' => [
            [
                'nome' => 'EM Desenvolvimento de Sistemas',
                'imagem' => Vite::asset('resources/images/analise-e-desenvolvimento-de-sistemas-o-que-faz.jpg')
            ],
            [
                'nome' => 'EM Desenvolvimento de Sistemas (AMS)',
                'imagem' => Vite::asset('resources/images/ams.jpg')
            ],
            [
                'nome' => 'EM Administração',
                'imagem' => Vite::asset('resources/images/administracao.jpg')
            ],
            [
                'nome' => 'EM Recursos Humanos',
                'imagem' => Vite::asset('resources/images/equipe-de-negocios-bem-sucedido-e-feliz-2-scaled.jpg')
            ],
        ]]);
    }

    public static function courses() {
        return view("etec.courses", ['courses' => [
            [
                'nome' => 'EM Desenvolvimento de Sistemas',
                'descricao' => 'Aprenda a programar e criar sistemas para web e desktop, garantindo alta empregabilidade no setor de tecnologia.',
                'imagem' => Vite::asset('resources/images/analise-e-desenvolvimento-de-sistemas-o-que-faz.jpg')
            ],
            [
                'nome' => 'EM Desenvolvimento de Sistemas (AMS)',
                'descricao' => 'Desenvolva habilidades em programação e suporte a sistemas, focando em aplicações corporativas e inovação tecnológica.',
                'imagem' => Vite::asset('resources/images/ams.jpg')
            ],
            [
                'nome' => 'EM Administração',
                'descricao' => 'Domine gestão empresarial, finanças e planejamento estratégico para atuar em diversos setores do mercado.',
                'imagem' => Vite::asset('resources/images/administracao.jpg')
            ],
            [
                'nome' => 'EM Recursos Humanos',
                'descricao' => 'Desenvolva competências em recrutamento, gestão de pessoas e clima organizacional, impulsionando carreiras e empresas.',
                'imagem' => Vite::asset('resources/images/equipe-de-negocios-bem-sucedido-e-feliz-2-scaled.jpg')
            ],
            [
                'nome' => 'EM Logística',
                'descricao' => 'Aprenda a otimizar transportes, estoques e operações, garantindo eficiência na cadeia de suprimentos.',
                'imagem' => Vite::asset('resources/images/intralogistica-logistica-inbound-e-outbound-voce-sabe-o-que-sao.webp')
            ],
            [
                'nome' => 'Téc. Contabilidade',
                'descricao' => 'Torne-se especialista em registros financeiros, tributos e auditoria, essencial para empresas e negócios próprios.',
                'imagem' => Vite::asset('resources/images/Contabilidade-para-indstrias_principais-pontos-de-ateno.png')
            ]
        ]]);
    }

    public static function departments() {
        return view("etec.departments");
    }

    public static function contact() {
        return view("etec.contact");
    }
}
