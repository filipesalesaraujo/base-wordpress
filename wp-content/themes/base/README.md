# base-landing
Base da Degrau para LP e Sites.

1. Apague a pasta git desse projeto e crie uma nova. O versionamento atual é para o front-base.

2. Insira o comando : npm install npm-install-all -g

3. Faça download os módulos do gulp, fazendo um "npm-install-all gulpfile.js" dentro da assets

4. Crie um usuário no tinypng com um email criado pela degrau, pegue a chave da API e coloque esse valor na variável TINYPNG_API (linha 20 do gulpfile.js).

5. Use "gulp watch" na pasta do gulpfile.js para o sistema entrar em vigilancia. Automaticamente ele vai compilar o CSS, minificar o JS e comprimir as imagens no tiny PNG, jogando para a pasta DIST.

6. Faça todo o código na pasta SRC. No html, sempre puxe da paste DIST.

7. O Sass padrão já tem alguns mixins, funções, grid e loading por default. Fique à vontade pra usar. Caso não use, apague do projeto.

8. Tente criar alguns estilos em módulos, como botões ou formulários. Crie um padrão de botão .dg-btn e suas variações como classes auxiliares.

9. Use o prefixo dg- para as classes de estilo

10. Se houver alguma função JS em algum elemento, crie uma classe para essa função. Não misture classes de estilo com classes usadas para JS. 

11. Para separar melhor visualmente as classes de JS das classes de estilo, use JS como prefixo e cammel case. Exemplo: Um banner teria 2 classes: dg-banner e jsBanner . A dg-banner para o estilo visual e o jsBanner para funcionalidade.

12. Não use IDs. Esses caras são pra programação, back-end e etc.

13. Nomeie classes pela funcionalidade, não por aparencia ou posição. Exemplo: Use .dg-produto-destaque em vez de .dg-produto-esquerda ou .dg-produto-vermelho

14. Não use tantas hierarquias de CSS. Exemplo: em vez de estilizar algo como ".dg-banner .dg-item", use a classe ".dg-banner-item"

15. Não esqueça de trocar os favicons e as cores da barra de navegação do mobile (linha 12, 13 e 14 no html)

16. Faça código limpo, comentado e pensa no re-uso e manutenção. Divirta-se no processo.
