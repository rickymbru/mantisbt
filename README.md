## MantisBT

#### Missão

Uma instalação MantisBT dockerizada e customizada com autenticação LDAP e uso de SMTP. 
#### Containers

- mantisbt
- mariadb


#### Redes:

- **mantisbt** Está exposta ao mundo via 8989/TCP ou alguma outra porta TCP de sua escolha, configurável no arquivo docker-compose.yml.
- **mariadb** por motivos de segurança funciona apenas na rede privada do container.

#### docker-compose Notes

A criptografia da aplicação MantisBT com o Banco de Dados MariaDB utiliza uma chave unica para cada instalação, com isso serão necessários os seguintes passos:
- Iniciar os containers utilizando o comando: `docker-compose -f docker-compose-initialize.yaml up -d --build `.
- Efetuar a configuração inicial do Mantis, utilizando as credenciais fornecidas.
- Obter a chave critopgrada com o comando : ` docker exec -it mantisbt grep crypto /var/www/html/config/config_inc.php `.
- Gravar localmente em `./config/config_inc.php`.
- Para a docker-compose incial e subir a versão final:
  - `docker-compose down`
  - `docker-compose up -d `


`docker-compose up -d --build` Irá subir todos os serviçõs necessários. Voce poderá logar em **mantisbt** na porta *8989*, utilzando o IP do seu HOST.

#### Fontes de pesquisa:
- https://github.com/mantisbt/mantisbt
- https://hub.docker.com/r/xlrl/mantisbt/
- https://github.com/xlrl/docker-mantisbt
- https://javamana.com/2020/12/20201215231614639h.html
- https://www.mantisbt.org/docs/master/en-US/Admin_Guide/html/admin.config.auth.ldap.html
