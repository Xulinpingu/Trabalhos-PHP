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

**Resposta:** Na primeira vez que o arquivo é executado, aparece a mensagem “Cookie ainda não disponível”, porque o cookie foi enviado pelo servidor, mas ainda não pode ser acessado nesse mesmo momento. Após atualizar a página, o navegador já terá salvo o cookie e o enviará novamente ao servidor, permitindo que seu valor seja mostrado corretamente. Ao acessar as ferramentas do navegador, é possível ver o cookie criado, com seu nome, valor e tempo de expiração. Se os cookies do site forem apagados e a página for atualizada outra vez, o cookie deixa de existir e a mensagem inicial reaparece. Isso ocorre porque o cookie depende do armazenamento no navegador. Ele não aparece logo na primeira execução porque só fica disponível depois que o servidor responde e o navegador faz uma nova requisição.


# Exercício 4 — Pergunta de reflexão
## Por que sessions são geralmente preferidas para autenticação de usuários em sistemas web?

Discuta:

segurança
manipulação de dados
possíveis riscos ao utilizar apenas cookies.

**Resposta:** As sessões são geralmente preferidas para autenticação de usuários porque oferecem maior segurança em comparação com cookies. Isso ocorre porque os dados da sessão ficam armazenados no servidor, enquanto no navegador é guardado apenas um identificador da sessão. Dessa forma, informações sensíveis, como dados de login, não ficam expostas ao usuário. Além disso, as sessões dificultam a manipulação de dados, já que o usuário não tem acesso direto às informações armazenadas no servidor. Por outro lado, os cookies podem ser facilmente visualizados e até alterados no navegador, o que representa um risco. Se utilizados sozinhos, cookies podem ser interceptados ou modificados, comprometendo a segurança do sistema. Por isso, o uso de sessões é considerado mais confiável para autenticação.
