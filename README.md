# ⚡ Completa Endereço - WooCommerce Autocomplete Address

[![WordPress](https://img.shields.io/badge/WordPress-21759B?style=for-the-badge&logo=wordpress&logoColor=white)](#)
[![WooCommerce](https://img.shields.io/badge/WooCommerce-96588A?style=for-the-badge&logo=woocommerce&logoColor=white)](#)
[![License](https://img.shields.io/badge/License-GPL_2.0-blue?style=for-the-badge)](#)

O **Completa Endereço** é um plugin leve e eficiente para WordPress/WooCommerce que preenche automaticamente os campos de endereço no checkout com base no CEP digitado pelo usuário. Ele consome a API pública do **ViaCEP** de forma assíncrona, garantindo velocidade e reduzindo a taxa de abandono de carrinho.

> [!NOTE]
> Este projeto é um *fork* aprimorado do plugin original AutoCEP (por Wanderson Cesar - TESW), atualizado e otimizado para utilizar o ViaCEP como fonte de dados primária.

---

## ✨ Funcionalidades

- 🚀 **Preenchimento Instantâneo:** Busca o endereço via requisição assíncrona assim que um CEP válido de 8 dígitos é digitado.
- 📦 **Sem Bloqueios:** Executado de forma segura com validação de `nonce` e sanitização dos campos contra ataques.
- 🎨 **Experiência Visual Suave:** Adiciona feedback de carregamento (*loading overlay*) integrado ao checkout do WooCommerce enquanto a busca é realizada.
- 🔗 **Ampla Compatibilidade:** Funciona nativamente com checkouts de terceiros renomados.

---

## 🛠️ Compatibilidade

Testado e compatível com as principais soluções de checkout do mercado:
* **WooCommerce (Checkout Padrão)**
* **Fluid Checkout**
* **CartFlows**

---

## 📥 Instalação

1. Baixe o código deste repositório em formato `.zip`.
2. No painel administrativo do WordPress, vá em **Plugins > Adicionar Novo > Enviar Plugin**.
3. Escolha o arquivo baixado e clique em **Instalar Agora**.
4. Clique em **Ativar Plugin**.
5. Pronto! O recurso de autocompletar endereço já estará ativo nas telas de checkout.

---

## 📖 Como Funciona?

O plugin monitora os campos de CEP (`billing_postcode` e `shipping_postcode`). Quando o usuário insere exatamente 8 dígitos numéricos:
1. O script local realiza o disparo AJAX para o endpoint administrativo do WordPress de forma segura.
2. O servidor efetua uma requisição otimizada (via `wp_remote_get` com timeout de 20s) à API ViaCEP:
   `https://viacep.com.br/ws/{cep}/json/`
3. Os dados de `logradouro`, `bairro`, `localidade` (cidade) e `uf` (estado) são devolvidos e os campos do checkout são preenchidos automaticamente.

---

## ⚖️ Licença

Este plugin é distribuído sob a licença **GPLv2 ou posterior**. Sinta-se livre para usar, estudar, modificar e compartilhar.

---

## ✉️ Contato & Suporte

Precisa de ajuda com o plugin, quer sugerir melhorias ou bater um papo sobre projetos WordPress? Entre em contato por qualquer um dos canais abaixo:

[![E-mail](https://img.shields.io/badge/E--mail-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:contato@fredericodecastro.com.br)
[![WhatsApp](https://img.shields.io/badge/WhatsApp-25D366?style=for-the-badge&logo=whatsapp&logoColor=white)](https://wa.me/551114636944)
[![Telegram](https://img.shields.io/badge/Telegram-2CA5E0?style=for-the-badge&logo=telegram&logoColor=white)](https://t.me/fredericomdecastro)

---
<p align="center">Desenvolvido e mantido com ☕ por <b>Frederico de Castro</b></p>
