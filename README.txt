=== Completa Endereço ===
Contributors: fredpiuma
Tags: woocommerce, checkout, cep, endereco, autocomplete
Requires at least: 5.0
Tested up to: 6.5
Stable tag: 1.6
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Preenche automaticamente o endereço no checkout do WooCommerce pelo CEP com ViaCEP e OpenCEP de fallback.

== Description ==

O plugin **Completa Endereço** preenche automaticamente os campos de endereço no checkout com base no CEP digitado pelo usuário. Ele utiliza a API ViaCEP como serviço primário e conta com fallback automático para a API OpenCEP caso a primeira falhe ou sofra instabilidades. É compatível com vários tipos de checkout, incluindo Fluid Checkout e CartFlows.

= Funcionalidades =
* Preenchimento automático de endereço no checkout com base no CEP digitado.
* Compatível com vários plugins de checkout, como Fluid Checkout e CartFlows.
* Utiliza a API ViaCEP com fallback automático para a API OpenCEP para obter dados de endereço.
* Fácil de integrar e usar.

= Compatibilidade =
* **WooCommerce (checkout padrão)**
* **Fluid Checkout**
* **CartFlows**

= Documentação de Terceiros =
Este plugin utiliza APIs de terceiros para buscar os dados de endereço:
* ViaCEP - https://viacep.com.br/
* OpenCEP - https://opencep.com/

= Créditos =
* **Desenvolvimento original**: Wanderson Cesar (TESW)
* **Fork e manutenção**: Frederico de Castro
* **Contribuição pontual na versão 1.5**: Samuel Canale

== Installation ==

1. Faça o upload da pasta do plugin para o diretório `/wp-content/plugins/` ou instale o arquivo `.zip` diretamente pelo painel de controle do WordPress.
2. Ative o plugin através do menu "Plugins" no WordPress.
3. Pronto! Os campos de endereço serão preenchidos automaticamente na tela de checkout do seu WooCommerce.

== Changelog ==

= 1.6 =
* Lançamento oficial do fork **Completa Endereço**.
* Mudança da API padrão de busca de CEP para ViaCEP.
* Adicionado sistema de fallback automático para a API OpenCEP em caso de falha de conexão.
* Correção de loop infinito AJAX em checkouts ao pesquisar por CEP geral de cidade (sem nome de logradouro).
* Alteração da autoria e links do plugin para Frederico de Castro (fredpiuma).

= 1.5 =
* Versão original antes do fork (utilizava apenas OpenCEP e continha erro de loop infinito em CEPs gerais de cidade).
