# Exercício 1 — Pergunta conceitual
## Explique a diferença entre cookies e sessions no PHP.

Em sua resposta, considere:

onde os dados são armazenados
quais são mais seguros
em quais situações cada um pode ser mais adequado.

*Resposta:* Sessions armazenam os dados no servidor, enquanto apenas um identificador (ID da sessão) fica no navegador do usuário. Já os cookies armazenam os dados diretamente no navegador.
Por isso, as sessions são consideradas mais seguras, pois as informações sensíveis não ficam expostas no lado do cliente. Elas são geralmente usadas para armazenar dados temporários e sensíveis, como informações de login e autenticação.
Os cookies, por outro lado, são mais utilizados para armazenar dados não sensíveis e que precisam persistir por mais tempo, como preferências do usuário (tema do site, idioma, lembrar login, etc.).

---

# Exercício 2 — Pergunta de aplicação
## Imagine que você está desenvolvendo um sistema de loja virtual.

Explique como cookies e sessions poderiam ser utilizados para:

manter o usuário logado
armazenar itens temporários no carrinho
registrar preferências do usuário.
Justifique suas escolhas.

*Resposta:* Para manter o login do usuário, o ideal é utilizar sessions, pois os dados ficam armazenados no servidor, tornando o processo mais seguro. Normalmente, apenas um identificador da sessão é salvo no navegador.
Caso seja necessário manter o login mesmo após fechar o navegador, pode-se utilizar cookies, armazenando um token de autenticação persistente (como a opção “lembrar-me”).
Para armazenar itens temporários no carrinho de compras, geralmente utilizamos sessions, pois os dados são temporários e não precisam ficar salvos por muito tempo, além de serem mais seguros.
Já para registrar preferências do usuário, como tema do site ou idioma, utilizamos cookies, pois essas informações não são sensíveis e precisam persistir por mais tempo no navegador.