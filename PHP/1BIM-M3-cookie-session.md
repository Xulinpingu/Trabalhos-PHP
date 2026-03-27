# Exercício 1 — Pergunta conceitual
## Explique a diferença entre cookies e sessions no PHP.

Em sua resposta, considere:

onde os dados são armazenados
quais são mais seguros
em quais situações cada um pode ser mais adequado.

**Resposta:** Sessions armazenam os dados no servidor, enquanto apenas um identificador (ID da sessão) fica no navegador do usuário. Já os cookies armazenam os dados diretamente no navegador.
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

**Resposta:** Para manter o login do usuário, o ideal é utilizar sessions, pois os dados ficam armazenados no servidor, tornando o processo mais seguro. Normalmente, apenas um identificador da sessão é salvo no navegador.
Caso seja necessário manter o login mesmo após fechar o navegador, pode-se utilizar cookies, armazenando um token de autenticação persistente (como a opção “lembrar-me”).
Para armazenar itens temporários no carrinho de compras, geralmente utilizamos sessions, pois os dados são temporários e não precisam ficar salvos por muito tempo, além de serem mais seguros.
Já para registrar preferências do usuário, como tema do site ou idioma, utilizamos cookies, pois essas informações não são sensíveis e precisam persistir por mais tempo no navegador.

---
# Exercício 3 — Pergunta de investigação
## Crie um arquivo chamado teste.php com o seguinte código:

<?php

setcookie("contador", "1", time()+3600);

if(isset($_COOKIE["contador"])) {
    echo "Valor do cookie: " . $_COOKIE["contador"];
} else {
    echo "Cookie ainda não disponível.";
}

?>
Agora realize os seguintes passos:

Execute o arquivo no navegador.
Atualize a página.
Abra as ferramentas do navegador e visualize os cookies.
Limpe os cookies do site e atualize novamente.
Descreva:

o que aconteceu em cada etapa
por que o cookie não aparece imediatamente na primeira execução.

**Resposta:** Na primeira execução do arquivo, a mensagem exibida é “Cookie ainda não disponível”, pois o cookie foi apenas enviado pelo servidor, mas ainda não está acessível no mesmo ciclo de execução. Quando a página é atualizada, o navegador já armazenou o cookie e o envia de volta ao servidor, permitindo que o valor seja exibido corretamente. Ao abrir as ferramentas do navegador, é possível visualizar o cookie criado, incluindo seu nome, valor e tempo de expiração. Quando os cookies do site são apagados e a página é atualizada novamente, o cookie deixa de existir e a mensagem inicial volta a aparecer. Isso acontece porque o cookie depende do armazenamento no navegador. O cookie não aparece imediatamente na primeira execução porque ele só fica disponível após a resposta do servidor e uma nova requisição do navegador.
