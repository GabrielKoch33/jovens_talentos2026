/*
1. Realize seleções em todas as tabelas do banco de dados “Treina”. Em cada uma
dessas seleções, devem ser retornadas todas as colunas da tabela.
*/
SELECT imvcodigo, imvdescricao, imvlargura, imvcomprimento, logcodigo
  FROM treina.tbimovel;

SELECT logcodigo, logtipo, logdescricao
  FROM treina.tblogradouro;

SELECT pescodigo, pesnome, pessexo, pestipo, logcodigo
  FROM treina.tbpessoa;

SELECT pescodigo, ctpnumero, ctpdescricao, ctpramal
  FROM treina.tbpessoacontato;

SELECT pescodigo, imvcodigo
  FROM treina.tbpessoaimovel;

SELECT pescodigo, imvcodigo, taxcodigo, taxvalor
  FROM treina.tbtaxa;

/*
2. Realize as seguintes seleções no banco de dados:
a) Na tabela “tbpessoacontato” efetue uma consulta retornando somente as
colunas de “código da pessoa” e o seu “número de telefone”;
b) Na tabela “tbimovel” efetue uma consulta retornando somente as colunas de
“código do imóvel”, “largura do imóvel” e “comprimento do imóvel”;
c) Na tabela “tbpessoa” efetue uma consulta retornando somente as colunas de
“código da pessoa”, “nome da pessoa” e “tipo da pessoa”.
*/

SELECT pescodigo, ctpnumero
  FROM treina.tbpessoacontato;

SELECT imvcodigo, imvlargura, imvcomprimento
  FROM treina.tbimovel;

SELECT pescodigo, pesnome, pestipo
  FROM treina.tbpessoa;



/*
3.Realize as seguintes consultas no banco de dados com o auxílio dos operadores de
comparação:
a) Selecione todos os contatos que sejam do tipo “Celular”;
b) Selecione as colunas de “código da pessoa” e “número de telefone” de todos
os contatos da pessoa de código 5;
c) Consulte as colunas “código do imóvel”, “largura” e “comprimento” de todos
os imóveis que possuam o comprimento maior que 12.
*/

SELECT pescodigo,ctpnumero, ctpdescricao, ctpramal
  FROM treina.tbpessoacontato
 WHERE ctpdescricao = 'CELULAR';

SELECT pescodigo, ctpnumero
  FROM treina.tbpessoacontato
 WHERE pescodigo = 5;

SELECT imvcodigo, imvlargura, imvcomprimento
  FROM treina.tbimovel
 WHERE imvcomprimento > 12;

/*
4. Realize as seguintes seleções no banco de dados utilizando as cláusulas IN,
BETWEENeLIKE:
a) Selecione todas as pessoas que moram nos logradouros 1, 7 e 12;
b) Selecione todas as pessoas que tenham o código entre 4 e 8;
c) Selecione todas as pessoas que tenham a palavra “PADARIA” no nome
*/

SELECT pescodigo, pesnome, pessexo, pestipo, logcodigo
  FROM treina.tbpessoa
 WHERE logcodigo in (1,7,12);

SELECT pescodigo, pesnome, pessexo, pestipo, logcodigo
  FROM treina.tbpessoa
 WHERE pescodigo BETWEEN 4 AND 8;

SELECT pescodigo, pesnome, pessexo, pestipo, logcodigo
  FROM treina.tbpessoa
 WHERE pesnome LIKE '%PADARIA%';

--LISTA 02
/*1. Realize as seguintes consultas no banco de dados com o auxílio dos operadores
AND, OR, NOTeNULL:
a. Selecione todos os contatos que são do DDD 47 e que são do tipo
“Celular”;
b. Selecione somente as colunas de “tipo do logradouro” e “descrição do
logradouro” de todos os logradouros que são do tipo “Travessa” ou do tipo
“Rua”;
c. Selecione todos os contatos que possuem ramal.*/

SELECT pescodigo, ctpnumero, ctpdescricao, ctpramal
  FROM treina.tbpessoacontato
 WHERE ctpnumero LIKE '47-%' AND ctpdescricao = 'CELULAR';

SELECT logtipo, logdescricao
  FROM treina.tblogradouro
 WHERE logtipo = 'TRAVESSA' or logtipo = 'RUA';

SELECT pescodigo, ctpnumero, ctpdescricao, ctpramal
  FROM treina.tbpessoacontato
 WHERE ctpramal IS NOT NULL;

/*2. Efetue as seguintes consultas ordenando-as conforme solicitado:
a. Selecione todos os contatos do tipo “Fixo” e ordene-os de forma crescente
utilizando a coluna referente ao número de telefone;
b. Selecione todos os imóveis de madeira e ordene-os de forma decrescente
emrelação ao seu comprimento.*/

SELECT pescodigo, ctpnumero, ctpdescricao, ctpramal 
  FROM treina.tbpessoacontato
 WHERE ctpdescricao = 'FIXO'
 ORDER BY ctpnumero;

SELECT * 
  FROM treina.tbimovel
 WHERE imvdescricao LIKE '%MADEIRA%'
 ORDER BY imvcomprimento DESC;

/*3
. Construa um código SQL que retorne os dados de pessoa, quando o código da
pessoa for entre 8 e 12, desconsiderando pessoas que residam nos logradouros de
4 a 7.
*/

SELECT *
  FROM treina.tbpessoa
 WHERE (pescodigo BETWEEN 8 AND 21)
   AND (logcodigo NOT IN (4,5,6,7));

/*
4. Construa as seguintes consultas:
a. Crie uma consulta na tabela de pessoas retornando apenas 5 registros.
Desconsidere os três primeiros;
b. Crie uma consulta que retorne apenas as pessoas que não começam com a
letra ‘P’, ordene o resultado em ordem alfabética apresentando apenas
três registros e ignorando os primeiros dois registros.
*/

SELECT *
  FROM treina.tbpessoa
 LIMIT 5
OFFSET 3;

SELECT *
  FROM treina.tbpessoa
 WHERE pesnome NOT ILIKE 'p%'
 ORDER BY pesnome
 LIMIT 3
OFFSET 2;

/*5
. Utilizando as funções fornecidas pelo SQL, resolva os seguintes exercícios:
a. Selecione a maior área em m² de imóvel;
b. Realize uma contagem da quantidade de imóveis madeira;
c. Realize uma consulta que retorne a somatória das larguras de todos os
imóveis.*/

SELECT MAX(imvlargura*imvcomprimento)
  FROM treina.tbimovel;

SELECT COUNT(imvdescricao)
  FROM treina.tbimovel
 WHERE imvdescricao LIKE '%MADEIRA%';

SELECT SUM(imvlargura)
  FROM treina.tbimovel;

/*
6. Realize as seguintes consultas:
a. Na tabela de imóveis, selecione somente as colunas “imvcodigo”,
“imvdescricao”, “imvlargura” e “imvcomprimento”. Renomeie essas
colunas para “Código”, “Descrição”, “Largura” e “Comprimento”. Ordene os
registros de forma decrescente a partir da coluna de código;
b. Para as colunas “pescodigo” e “pesnome”, selecione somente as pessoas
do sexo feminino, ordene as em ordem alfabética, renomeie as colunas
para “Código da Pessoa” e “Nome Completo”, a consulta deve retornar
apenas os quatro primeiros registros.*/

SELECT imvcodigo AS "Código",
	   imvdescricao AS "Descrição",
	   imvlargura AS "Largura",
	   imvcomprimento AS "Comprimento"
  FROM treina.tbimovel
 ORDER BY "Código" DESC;

SELECT pescodigo AS "Código da Pessoa",
	   pesnome AS "Nome Completo"
  FROM treina.tbpessoa
 WHERE pessexo = 2
 ORDER BY pesnome 
 LIMIT 4;

/*
7. Faça uma seleção que retorne apenas tipos únicos de logradouro.
*/

SELECT DISTINCT(logtipo)
  FROM treina.tblogradouro;

/*8. Faça umacontagem naquantidade de registros distintos de descrição de contato.*/

SELECT COUNT(DISTINCT(ctpdescricao))
  FROM treina.tbpessoacontato;

--lista 3
/*
1. Realize as seguintes consultas no banco de dados com o auxílio dos operadores de
comparação:
a. Selecione todos os contatos que sejam do tipo ‘Fixo’ ou ‘Celular’;
b. Selecione todas as pessoas que moram no logradouro 12 ou no logradouro
4;
c. Selecione os registros de taxa de código 1, 5, 6 e 7;
d. Selecione o registro de taxa do imóvel 6 referente a pessoa 2.*/

SELECT * 
  FROM treina.tbpessoacontato
 WHERE ctpdescricao = 'FIXO' or ctpdescricao ='CELULAR';

SELECT *
  FROM treina.tbpessoa
 WHERE logcodigo = 4 
	OR logcodigo = 12;

SELECT *
  FROM treina.tbtaxa
 WHERE taxcodigo IN (1,5,6,7);

SELECT *
  FROM treina.tbtaxa
 WHERE pescodigo = 2 
   AND imvcodigo = 6;

/*
2. Realize as seguintes seleções no utilizando BETWEEN e LIKE:
a. Selecione todos os imóveis que tenham a largura entre 10 e 13;
b. Selecione todas as pessoas que começam e terminam com a letra ‘A’;
c. Selecione todos imóveis que tenham largura entre 10 e 12 e comprimento
entre 11 e 13.
*/

SELECT *
  FROM treina.tbimovel
 WHERE imvlargura BETWEEN 10 AND 13;

SELECT * 
  FROM treina.tbpessoa
 WHERE pesnome ILIKE 'A%' AND pesnome ILIKE '%A';

SELECT *
  FROM treina.tbimovel
 WHERE (imvlargura BETWEEN 10 AND 12)
   AND (imvcomprimento BETWEEN 11 AND 13);

/*
3. Realize as seguintes consultas no banco de dados com o auxílio dos operadores
AND, OReNOT:
a. Selecione todos os contatos que não são do DDD 47 e que são do tipo
“Celular”;
b. Selecione todos os imóveis que não são de alvenaria e que possuem largura
maior que 10;
c. Selecione todas as casas mistas que não estão localizadas no logradouro 10
*/

SELECT *
  FROM treina.tbpessoacontato 
 WHERE ctpnumero NOT LIKE '47%'
   AND ctpdescricao = 'CELULAR';

SELECT *
  FROM treina.tbimovel
 WHERE imvdescricao NOT LIKE '%ALVENARIA%' 
   AND imvlargura > 10;

SELECT *
  FROM treina.tbimovel 
 WHERE imvdescricao LIKE '%MISTA%' 
   AND logcodigo <> 10;

SELECT * 
  FROM treina.tbpessoa
 WHERE pessexo = 2 
 ORDER BY pesnome
 LIMIT 2
OFFSET 2;


/*
4. Efetue as seguintes consultas:
a. Selecione todas as pessoas do sexo feminino, ordene-as em ordem
alfabética. Limite o resultado em 2 registros, ignorando os 2 primeiros;
b. Selecione todos os registros de taxa com valor maior que R$ 80,00,
renomeie as colunas, ordene o resultado de forma decrescente em relação
a coluna de valor, não apresente o registro com a maior taxa.
*/

/*
5. Utilizando as funções fornecidas pelo SQL, realize os seguintes exercícios:
a. Selecione o imóvel que possui a menor largura;
b. Realize uma contagem na quantidade de imóveis do tipo ‘Imóvel de
Alvenaria’;
c. Realize uma consulta que retorne a média do comprimento de todos os
imóveis
*/


