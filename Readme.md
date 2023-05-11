Para criar um ambiente no Docker que hospede seu site e um banco de dados, você pode seguir os seguintes passos:

1. Instale o Docker no seu computador.

2. Copie o arquivo Dockerfile na raiz do seu projeto para definir como seu contêiner será construído.

3. Copie o arquivo docker-compose.yml na raiz do seu projeto para definir como seu ambiente Docker será configurado. 

4. Execute o comando docker-compose up -d na raiz do seu projeto para criar e iniciar seus contêineres.

5. Acesse seu site no navegador em http://localhost:8000.

6. Para se comunicar com o banco de dados, use as credenciais definidas no arquivo docker-compose.yml:

Host: db
Porta: 3306
Usuário: root
Senha: mypassword
Banco de dados: mydatabase

Com esses passos, você criou um ambiente no Docker que hospeda o site e um banco de dados, e pode persistir as informações no banco de dados.